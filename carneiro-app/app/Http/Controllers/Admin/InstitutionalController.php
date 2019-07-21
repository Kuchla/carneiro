<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstitutionalController extends Controller
{
    public function index(Institutional $institutional)
    {
        $institutionals = Institutional::all();
        return view('admin.institutional.index', compact('institutionals'));
    }

    public function create()
    {
        return view('admin.institutional.create');
    }

    public function store(Request $request, Institutional $institutional)
    {
        $this->validation($request);

        $institutional->user_id = Auth::id();
        $institutional->title = $request->institutional['title'];
        $institutional->about = $request->institutional['about'];
        $institutional->save();

        return redirect(route('admin.institutional.show', compact('institutional')));
    }

    public function edit(Institutional $institutional)
    {
        return view('admin.institutional.edit', compact('institutional'));
    }

    public function destroy(Institutional $institutional)
    {
        $institutional->delete();
        return redirect(route('admin.institutionals.index'));
    }

    public function update(Request $request, Institutional $institutional)
    {
        $this->validation($request);
        
        $institutional->user_id = Auth::id();
        $institutional->title = $request->institutional['title'];
        $institutional->about = $request->institutional['about'];
        $institutional->update();
        
        return redirect(route('admin.institutionals.show', compact('institutional')));
    }

    public function show(Institutional $institutional)
    {
        return view('admin.institutional.show', compact('institutional'));
    }

    private function validation(Request $request)
    {
        $request->validate([
           'institutional.title'       => 'required|min:4|max:50',
           'institutional.about'         => 'required',
       ]);
    }
}
