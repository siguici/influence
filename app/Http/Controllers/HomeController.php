<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    function index() {
        return view('welcome');
    }

    public function register(Request $request) {
        return view('home.register', [
            'role' => $request->input('role'),
        ]);
    }

    public function store(UserPostRequest $request) {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        
        User::create($data);

        return redirect()->route('auth.login')->with([
            'success' => 'Vous êtes maintenant inscrit sur Influencetn',
            'newlogin' => $request->validated('email')
        ]);
    }
   
}
