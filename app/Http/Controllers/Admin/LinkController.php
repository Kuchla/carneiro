<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageConfig;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Link;

class LinkController extends Controller
{
    public function index(Link $link)
    {
        $links = Link::orderBy('created_at', 'desc')->get();
        return view('admin.link.index', compact('links'));
    }

    public function create()
    {
        return view('admin.link.create');
    }

    public function store(Request $request, Link $link)
    {
        // dd($request->input('link.image'));

        $this->validation($request);

        $link->user_id = Auth::id();
        $link->title = $request->link['title'];
        $link->url = $request->link['url'];
        $link->image = $request->link['image']->store('links');

        ImageConfig::resizeLinks($link->image);
        $link->save();

        return redirect(route('admin.links.show', compact('link')));
    }

    public function edit(Link $link)
    {
        return view('admin.link.edit', compact('link'));
    }

    public function destroy(Link $link)
    {
        $this->deleteStorage($link->image);
        $link->delete();

        return redirect(route('admin.links.index'));
    }

    public function update(Request $request, Link $link)
    {
        $this->validation($request);

        if(isset($request->link['image'])){
            $this->deleteStorage($link->image);
        }

        $link->user_id = Auth::id();
        $link->title = $request->link['title'];
        $link->url = $request->link['url'];
        $link->link_image = isset($request->link['image']) ? $request->link['image']->store('links') : null;

        ImageConfig::resizeLinks($link->image);
        $link->update();

        return redirect(route('admin.links.show', compact('link')));
    }

    public function show(Link $link)
    {
        return view('admin.link.show', compact('link'));
    }

    private function validation(Request $request)
    {
        $request->validate([
           'link.title'       => 'required|min:4|max:50',
           'link.url'         => 'required',
           'link.image'        => $request->isMethod('post') ? 'required|image|mimes:jpeg,png,jpg' : 'nullable',
       ]);
    }

    public function deleteStorage($link)
    {
        unlink(storage_path('app/public/'.$link));
    }
}
