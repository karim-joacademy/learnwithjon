<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);
    }

    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        redirect('login');
    }
}
