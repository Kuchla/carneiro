<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use App\Link;
use App\News;

class AdminController extends Controller
{
    public function index()
    {
        $courses = Course::count();
        $news = News::count();
        $links = Link::count();
        $photos = 50;
        return view('admin.home.index', compact('courses', 'news', 'links', 'photos'));
    }
}
