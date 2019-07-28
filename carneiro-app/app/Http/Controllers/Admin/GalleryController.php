<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Enums\Category;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Support\Facades\Auth;


class GalleryController extends Controller
{
    public function index(Gallery $gallery)
    {
        $galleries = Gallery::get()->groupBy('category');
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        $categories = Category::toSelectArray();
        return view('admin.gallery.create', compact('categories'));
    }

    public function store(Request $request, Gallery $gallery)
    {
        $this->validation($request);

        $gallery->user_id = Auth::id();
        $gallery->description = $request->gallery['description'];
        $gallery->image = $request->gallery['image']->store('gallery');
        $gallery->category = $request->gallery['category'];
        $gallery->save();
        
        $category = $gallery->category;

        return redirect(route('admin.galleries.show', compact('category')));
    }

    public function edit(Gallery $gallery)
    {
        $categories = Category::toSelectArray();
        return view('admin.gallery.edit', compact('gallery', 'categories'));
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->back();
    }

    public function update(Request $request, Gallery $gallery)
    {
        $this->validation($request);

        $gallery->user_id = Auth::id();
        $gallery->description = $request->gallery['description'];
        $gallery->image = $request->gallery['image']->store('gallery');
        $gallery->category = $request->gallery['category'];
        $gallery->update();
        
        return redirect(route('admin.galleries.show', compact('gallery')));
    }

    public function show($category)
    {
        $galleries = Gallery::get()->where('category', $category);
        return view('admin.gallery.show', compact('galleries'));
    }

    private function validation(Request $request)
    {
        $request->validate([
           'gallery.description'        => 'required|min:4|max:40',
           'gallery.category'    => 'required',
           'gallery.image'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
    }
}
