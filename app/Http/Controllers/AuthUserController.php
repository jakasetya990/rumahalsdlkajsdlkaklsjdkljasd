<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }
    public function doLogin(Request $request)
    {
        $credentials =  $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route('dash.index'));
        }
        return redirect()->back()->with('error', 'Wrong email or password');
    }

    public function logout()
    {
        Auth::logout();
        return  redirect(route('auth.login.show'));
    }
}
