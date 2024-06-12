<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserController extends Controller
{
    public function showLogin()
    {
        // return on the view Login
        return view('Auth.Login');
    }

    public function login(LoginRequest $request)
    {
        try {
            $request->authenticate();
            $request->session()->regenerate();
            // call login request and generate a session
            return redirect()->intended('/');
        } catch (\Throwable $th) {
            return back()->withErrors([
                'email' => 'Votre mot de passe ou votre adresse e-mail est erroné(e). Essayez de les saisir à nouveau.',
            ]); // error message
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
        // logout and return to login view
    }

    public function showRegister(): View
    {
        // render register view
        return view('admin/register/new');
    }

    public function register(RegisterRequest $request): RedirectResponse|View
    {
        // handle error
        try {
            // create user into the db
            User::create($request->all());
        } catch (\Throwable $th) {
            // render view to display errors
            return view('admin/register/new');
        }
        // redirect to admin home
        return redirect(route('admin.home'));
    }
}