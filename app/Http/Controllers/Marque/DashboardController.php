<?php

namespace App\Http\Controllers\Marque;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('marque.index');
    }

    public function partenariat() {
        return view('marque.partenariat');
    }

    public function message() {
        return view('marque.message');
    }

    public function gain() {
        return view('marque.gain');
    }

    public function profil() {
        return view('marque.profil');
    }

    public function search(SearchRequest $request) {
        return view('marque.resultat', [
            'resultats' => User::where('sector', $request->validated('key'))->paginate(8),
        ]);
    }

  

   
}
