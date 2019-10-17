<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\News;
use App\Link;
use App\Institutional;
use App\Gallery;
use App\Collaborator;
use App\Image;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $news = News::all();
        $links = Link::all();
        $institutional = Institutional::first();
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(2);
        $collaborators = Collaborator::where('category', 'Direction')->where('active', 1)->get();
        $categories = Gallery::distinct()->pluck('category');

        return view('site.home.index', compact('courses', 'news', 'links', 'galleries', 'categories', 'institutional', 'collaborators'));
    }

    public function paginateGallery(Request $request)
    {
        if ($request->ajax()) {
            $categories = Gallery::distinct()->pluck('category');
            if ($_GET['category'] == 'Todas') {
                $galleries = Gallery::paginate(3);
            } else {
                $galleries = Gallery::where('category', $_GET['category'])->paginate(3);
            }
            return view('site.home.partials._gallery', compact('galleries', 'categories'))->render();
        }
    }

    public function searchGallery($category)
    {
        $categories = Gallery::distinct()->pluck('category');

        if ($category == 'Todas') {
            $galleries = Gallery::paginate(6);
        } else {
            $galleries = Gallery::where('category', $category)->paginate(6);
        }
        return view('site.home.partials._gallery', compact('galleries', 'categories'))->render();
    }

    public function course($id)
    {
        $course = Course::find($id);
        return view('site.course.index', compact('course', 'galleries'));
    }

    public function news($id)
    {
        $news = News::find($id);
        return view('site.news.show', compact('news'));
    }

    public function newsIndex()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(6);
        return view('site.news.index', compact('news'));
    }


    public function galleriesIndex()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(6);
        $categories = Gallery::distinct()->pluck('category');
        $albuns = Gallery::distinct()->pluck('referent');
        return view('site.gallery.index', compact('galleries', 'categories', 'albuns'));
    }

    public function filterGallery($category, $album)
    {
        $categories = Gallery::distinct()->pluck('category');
        $albuns = Gallery::distinct()->pluck('referent');

        $galleries = Gallery::when($category, function ($query) use ($category) {
            $query->where('category', $category);
        })->when($album, function ($query) use ($album) {
            $query->where('referent', $album);
        })
            ->orderBy('created_at', 'desc')->paginate(6);

        return view('site.gallery.partials._items', compact('galleries', 'categories', 'albuns'));
    }

    public function filterNewsGallery($category, $album)
    {
        $categories = Gallery::distinct()->pluck('category');
        $albuns = Gallery::distinct()->pluck('referent');

        $galleries = Gallery::when($category, function ($query) use ($category) {
            $query->where('category', $category);
        })->when($album, function ($query) use ($album) {
            $query->where('referent', $album);
        })->orderBy('created_at', 'desc')->paginate(6);

        return view('site.gallery.show', compact('galleries', 'categories', 'albuns'));
    }
}
