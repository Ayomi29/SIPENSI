<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|max:255',
            'nim' => ['required', 'min:8', 'max:50', 'unique:users'],
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        $valid['password'] = bcrypt($valid['password']);

        User::create($valid);

        $request->session()->flash('success', 'Registration Successful! Please Login');

        return redirect('/login')->with('success', 'Registration Successful! Please Login');
    }
}
