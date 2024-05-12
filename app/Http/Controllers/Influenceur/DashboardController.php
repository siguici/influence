<?php

namespace App\Http\Controllers\Influenceur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('influenceur.index');
    }

    public function partenariat() {
        return view('influenceur.partenariat');
    }

    public function message() {
        return view('influenceur.message');
    }

    public function gain() {
        return view('influenceur.gain');
    }

    public function profil() {
        return view('influenceur.profil');
    }

}
