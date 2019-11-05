<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Course;
use App\News;
use App\Link;
use App\Institutional;
use App\Gallery;
use App\Image;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('created_at', 'desc')->get();
        $news = News::orderBy('created_at', 'desc')->limit(6)->get();
        $links = Link::orderBy('created_at', 'desc')->get();
        $institutional = Institutional::first();
        $images = Image::orderBy('created_at', 'desc')->limit(6)->get();
        $categories = Gallery::distinct()->pluck('category');

        return view('site.home.index', compact('courses', 'news', 'links', 'images', 'categories', 'institutional', 'collaborators'));
    }

    public function courseShow($id)
    {
        $course = Course::find($id);
        return view('site.course.index', compact('course', 'galleries'));
    }

    public function newsShow($id)
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
        $images = DB::table('galleries')
            ->leftJoin('images', 'galleries.id', '=', 'images.gallery_id')
            ->orderBy('images.created_at', 'desc')
            ->limit(6)
            ->get();
        $categories = Gallery::distinct()->pluck('category');
        $albuns = Gallery::distinct()->pluck('referent');
        $lastImages = 'Fotos Recentes';

        return view('site.gallery.index', compact('images', 'categories', 'albuns', 'lastImages'));
    }

    public function filterGallery($category, $album)
    {
        $categories = Gallery::distinct()->pluck('category');
        $albuns = Gallery::distinct()->pluck('referent');

        $images = DB::table('galleries')
            ->leftJoin('images', 'galleries.id', '=', 'images.gallery_id')
            ->when($category, function ($query) use ($category) {
                $query->where('category', $category);
            })
            ->when($album, function ($query) use ($album) {
                $query->where('referent', $album);
            })
            ->orderBy('images.created_at', 'desc')
            ->get();

        return view('site.gallery.partials._items', compact('images', 'categories', 'albuns'));
    }

    public function filterNewsGallery($album)
    {
        $categories = Gallery::distinct()->pluck('category');
        $albuns = Gallery::distinct()->pluck('referent');

        $images = DB::table('galleries')
            ->leftJoin('images', 'galleries.id', '=', 'images.gallery_id')
            ->when($album, function ($query) use ($album) {
                $query->where('referent', $album);
            })
            ->orderBy('images.created_at', 'desc')
            ->get();

        return view('site.gallery.show', compact('images', 'categories', 'albuns'));
    }
}
