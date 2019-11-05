<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Enums\Category;
use App\Image;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Support\Facades\Auth;


class GalleryController extends Controller
{
    public function index(Gallery $gallery)
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->get()->groupBy('category');
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
        $gallery->referent = $request->gallery['description'];
        $gallery->category = $request->gallery['category'];
        $gallery->save();

        foreach ($request->gallery['image'] as $image) {
            $filename = $image->store('galleries');
            $img = Image::create([
                'gallery_id' => $gallery->id,
                'name' => $filename
            ]);
        }

        $gallery = $gallery->referent;

        return redirect(route('admin.galleries.show', compact('gallery')));
    }

    public function edit(Gallery $gallery)
    {
        $categories = Category::toSelectArray();
        return view('admin.gallery.edit', compact('gallery', 'categories'));
    }

    public function destroy($image)
    {
        $image = Image::where('id', $image)->get();
        $galleryId = Gallery::where('id', $image->first()->gallery_id)->first()->id;
        $countImages = Image::where('gallery_id', $galleryId)->count();

        unlink(storage_path('app/public/'.$image->first()->name));
        $image->first()->delete();

        if($countImages == 1){
            Gallery::where('id', $galleryId)->delete();
            return redirect(route('admin.galleries.index'));
        }

        return redirect()->back();
    }

    public function update(Request $request, Gallery $gallery)
    {
        $this->validation($request);

        $gallery->user_id = Auth::id();
        $gallery->description = $request->gallery['description'];
        $gallery->gallery_image = isset($request->gallery['image']) ? $request->gallery['image']->store('gallery') : null;
        $gallery->category = $request->gallery['category'];
        $gallery->update();

        $gallery = $gallery->category;

        return redirect(route('admin.galleries.show', compact('gallery')));
    }

    public function show($album)
    {
        $galleries = Gallery::where('referent', $album)->get();
        return view('admin.gallery.show', compact('galleries'));
    }

    private function validation(Request $request)
    {
        $request->validate([
            'gallery.description'        => 'required|min:4|max:40',
            'gallery.category'    => 'required',
            'gallery.image.*'        => $request->isMethod('post') ? 'required|image|mimes:jpeg,png,jpg' : 'nullable',
        ]);
    }
}
