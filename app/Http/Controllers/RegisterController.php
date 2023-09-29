<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|min:3|unique:users,username',
            'name' => 'required|max:255',
            'phone' => 'required|max:11',
            'nid' => 'nullable|max:40',
            'mbps' => 'required|max:11',
            'bill' => 'required|max:11',
            'location' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:4',
        ]);

        auth()->login(User::create($attributes));

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
