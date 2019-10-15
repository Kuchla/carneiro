<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function update(Request $request, User $user)
    {
        $this->validation($request);

        $user->name = $request->user['name'];
        $user->email = $request->user['email'];
        $user->password = Hash::make($request->user['password']);

        $user->update();
        return redirect(route('admin.users.show', compact('user')));
    }

    public function store(Request $request, User $user)
    {
        $this->validation($request);

        $user->name = $request->user['name'];
        $user->email = $request->user['email'];
        $user->password = Hash::make($request->user['password']);

        $user->save();
        return redirect(route('admin.users.show', compact('user')));
    }

    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    private function validation($request)
    {
        $request->validate([
            'user.name'     => 'required|min:4|max:50',
            'user.email'    => 'required',
            'user.password' => 'required|min:8',
        ]);
    }
}
