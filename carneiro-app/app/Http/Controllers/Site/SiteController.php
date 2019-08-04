<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\News;
use App\Link;
use App\Gallery;
use Illuminate\Support\Facades\DB;



class SiteController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $news = News::all();
        $links = Link::all();
        $galleries = Gallery::paginate(3);
        $categories = Gallery::distinct()->pluck('category');

        return view('site.home.index', compact('courses', 'news', 'links', 'galleries', 'categories'));
    }

    public function paginateGallery(Request $request)
    {
        // dd('44');
        if ($request->ajax()) {
            $categories = Gallery::distinct()->pluck('category');

            $galleries = Gallery::paginate(3);
            // dd($galleries);

            return view('site.home.partials._gallery', compact('galleries', 'categories'))->render();
          }
        // dd('dsa');
        // $galleries = Gallery::get()->where('category', $category);
        // return back();
    }

    public function course($id){
        $course = Course::find($id);
        // $galleries = Gallery::where('category', $course->name);
        // dd($galleries);
        return view('site.course.index', compact('course', 'galleries'));
    }

    public function news($id){
        $news = News::find($id);
        // $galleries = Gallery::where('category', $course->name);
        // dd($galleries);
        return view('site.news.show', compact('news'));
    }

    public function newsIndex(){
        $news = News::all();
        // $galleries = Gallery::where('category', $course->name);
        // dd($galleries);
        return view('site.news.index', compact('news'));
    }

}
