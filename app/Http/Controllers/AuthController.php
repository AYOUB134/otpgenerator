<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Show signup form
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    // Handle signup
    public function signup(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:user,username|max:225',
            'email' => 'required|email|unique:user,email|max:200',
            'password' => 'required|min:6',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'status' => 'active',
            'credit' => '0',
            'frpcredit' => '0',
            'sckey' => '0',
            'regBy' => 'system',
        ]);

        return redirect('/login')->with('success', 'Signup successful. Please log in.');
    }

    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect('/dashboard')->with('success', 'Login successful.');
        }

        return back()->withErrors(['username' => 'Invalid credentials.']);
    }
}
