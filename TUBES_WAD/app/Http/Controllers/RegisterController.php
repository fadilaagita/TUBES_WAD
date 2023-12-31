<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate the user
        $this->validate($request, [
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users', // unique:users means that the email must be unique in the users table
            'password' => 'required|confirmed', // confirmed means that the password must be the same as the password_confirmation field
        ]);

        // Create and save the user
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Sign the user in
        Auth::attempt($request->only('email', 'password'));

        // Redirect
        return redirect()->route('admin.dashboard');
    }
}
