<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLogin()
    {
        // return on the view Login
        return view('Auth.Login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]); // check if data can be validated 
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // fenerate a session
            return redirect()->intended('/'); 
        }

        return back()->withErrors([
            'email' => 'Votre mot de passe ou votre adresse e-mail est erroné(e). Essayez de les saisir à nouveau.',
        ]); // error message
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
        // logout and return to login view
    }
}