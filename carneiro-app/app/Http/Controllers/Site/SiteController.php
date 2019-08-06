<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\News;
use App\Link;
use App\Institutional;
use App\Gallery;
use Illuminate\Support\Facades\DB;



class SiteController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $news = News::all();
        $links = Link::all();
        $institutional = Institutional::first();
        $galleries = Gallery::paginate(3);
        $categories = Gallery::distinct()->pluck('category');

        return view('site.home.index', compact('courses', 'news', 'links', 'galleries', 'categories', 'institutional'));
    }

    public function paginateGallery(Request $request)
    {
        if ($request->ajax()) {
            $categories = Gallery::distinct()->pluck('category');
            if($_GET['category'] == 'Todas'){
                $galleries = Gallery::paginate(3);
            }
            else{
                $galleries = Gallery::where('category', $_GET['category'])->paginate(3);

            }

            return view('site.home.partials._gallery', compact('galleries', 'categories'))->render();
          }
    }

    public function searchGallery($category)
    {
        $categories = Gallery::distinct()->pluck('category');

        if($category == 'Todas'){
            $galleries = Gallery::paginate(3);
        }
        else {
            $galleries = Gallery::where('category', $category)->paginate(3);
        }
        // dd($galleries);
        return view('site.home.partials._gallery', compact('galleries', 'categories'))->render();

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
