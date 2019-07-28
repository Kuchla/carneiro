<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\News;
use App\Link;
use App\Gallery;



class SiteController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $news = News::all();
        $links = Link::all();
        $galleries = Gallery::all();



        return view('site.home.index', compact('courses', 'news', 'links', 'galleries'));
    }
}
