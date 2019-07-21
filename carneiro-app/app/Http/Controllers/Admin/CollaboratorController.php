<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Collaborator;

class CollaboratorController extends Controller
{
    public function index(Collaborator $collaborator)
    {
        $collaborators = Collaborator::all();
        return view('admin.collaborator.index', compact('collaborators'));
    }

    public function create()
    {
        return view('admin.collaborator.create');
    }

    public function store(Request $request, Collaborator $collaborator)
    {
        $this->validation($request);

        $collaborator->user_id = Auth::id();
        $collaborator->name = $request->collaborator['name'];
        $collaborator->role = $request->collaborator['role'];
        $collaborator->photo = $request->photo['photo']->store('photos');
        $collaborator->active = $request->active['active'];
        $collaborator->save();

        return redirect(route('admin.collaborators.show', compact('collaborator')));
    }

    public function edit(Collaborator $collaborator)
    {
        return view('admin.collaborator.edit', compact('collaborator'));
    }

    public function destroy(Collaborator $collaborator)
    {
        $collaborator->delete();
        return redirect(route('admin.courses.index'));
    }

    public function update(Request $request, Collaborator $collaborator)
    {
        $this->validation($request);

        $collaborator->user_id = Auth::id();
        $collaborator->name = $request->collaborator['name'];
        $collaborator->role = $request->collaborator['role'];
        $collaborator->photo = $request->photo['photo']->store('photos');
        $collaborator->active = $request->active['active'];
        $collaborator->update();
        
        return redirect(route('admin.collaborators.show', compact('collaborator')));
    }

    public function show(Collaborator $collaborator)
    {
        return view('admin.collaborator.show', compact('collaborator'));
    }

    private function validation(Request $request)
    {
        $request->validate([
           'collaborator.name'   => 'required|min:4|max:50',
           'collaborator.role'   => 'required|min:4|max:50',
           'collaborator.photo'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
    }
}
