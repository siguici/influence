<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserPostRequest;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function loginForm() {
        return view('home.login');
    }

    function login(LoginRequest $request) {
        
        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if(Auth::user()->role === 'influenceur'){
                return redirect()->intended(route('influenceur.index'));
            }

            if(Auth::user()->role === 'marque'){
                return redirect()->intended(route('marque.index'));
            }

            return to_route('auth.login')->withErrors([
                'email' => 'Adresse email ou mot de passe invalide',
                'password' => 'Adresse email ou mot de passe invalide',
            ])->onlyInput('email');
        }
    }

    
    function logout() {
        Auth::logout();
        return to_route('auth.login');
    }
    
  
}
