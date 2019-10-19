<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Collaborator;
use App\Enums\CollaboratorCategory;
use App\Helpers\ImageConfig;
use BenSampo\Enum\Rules\;
use Illuminate\Support\Facades\Auth;

class CollaboratorController extends Controller
{
    public function index(Collaborator $collaborator)
    {
        $collaborators = Collaborator::all();
        return view('admin.collaborator.index', compact('collaborators'));
    }

    public function create()
    {
        $categories = CollaboratorCategory::toSelectArray();
        return view('admin.collaborator.create', compact('categories'));
    }

    public function store(Request $request, Collaborator $collaborator)
    {
        $this->validation($request);

        $collaborator->user_id = Auth::id();
        $collaborator->name = $request->collaborator['name'];
        $collaborator->role = $request->collaborator['role'];
        $collaborator->category = $request->collaborator['category'];
        $collaborator->image = $request->collaborator['image']->store('collaborators');
        $collaborator->active = isset($request->collaborator['active']) ? 1 : 0;

        ImageConfig::resizeCollaborator($collaborator->image);
        $collaborator->save();

        return redirect(route('admin.collaborators.show', compact('collaborator')));
    }

    public function edit(Collaborator $collaborator)
    {
        $categories = CollaboratorCategory::toSelectArray();
        return view('admin.collaborator.edit', compact('collaborator', 'categories'));
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
        $collaborator->category = $request->collaborator['category'];
        $collaborator->collaborator_image = isset($request->collaborator['image']) ? $request->collaborator['image']->store('collaborators') : null;
        $collaborator->active = isset($request->collaborator['active']) ? 1 : 0;

        ImageConfig::resizeCollaborator($collaborator->image);
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
           'collaborator.category'   => 'required',
           'collaborator.image'  => $request->isMethod('post') ? 'required|image|mimes:jpeg,png,jpg' : 'nullable',
       ]);
    }
}
