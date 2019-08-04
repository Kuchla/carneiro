<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Enums\Category;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Support\Facades\Auth;



class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(News $news)
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::toSelectArray();
        return view('admin.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, News $news)
    {

        $this->validation($request);

        $news->user_id = Auth::id();
        $news->title = $request->news['title'];
        $news->category = $request->news['category'];
        $news->description = $request->news['description'];
        $news->image = $request->news['image']->store('logos');
        $news->save();

        return redirect(route('admin.news.show', compact('news')));
    }

    public function edit(News $news)
    {
        $categories = Category::toSelectArray();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect(route('admin.news.index'));
    }

    public function update(Request $request, News $news)
    {
        $this->validation($request);

        $news->user_id = Auth::id();
        $news->title = $request->news['title'];
        $news->category = $request->news['category'];
        $news->description = $request->news['description'];
        $news->news_image = isset($request->news['image']) ? $request->news['image']->store('news') : null;
        $news->update();
        
        return redirect(route('admin.news.show', compact('news')));
    }

    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    private function validation(Request $request)
    {
        $request->validate([
           'news.title'        => 'required|min:4|max:50',
           'news.category'    => 'required|not_in:Selecione',
           'news.image'        => $request->isMethod('post') ? 'required|image|mimes:jpeg,png,jpg' : 'nullable',
           'news.description' => 'required|min:50',
       ]);
    }
}
