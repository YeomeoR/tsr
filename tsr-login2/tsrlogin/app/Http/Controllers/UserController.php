<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('/login');
    }
    // register user form
    public function create() {
        return view('/users/register');
    }
    // store new user
    public function store(Request $request) {
        $formFields = $request->validate([
            'username' => ['required', 'min:3'],
            'password' => 'required|confirmed|min:6'
            ]);
        // hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // create user
        $user = User::create($formFields);

        // login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    // authenticate user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/online')->with('message', 'You are now logged in');
        }
        return back()->withErrors(['username' => 'invalid credentials'])->onlyInput('username');
    }

}


