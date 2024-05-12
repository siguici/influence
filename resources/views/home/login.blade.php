@extends('layouts.home')

@section('title', 'Nouvelle inscription')
@section('content')
    <p class="text-center">Connectez-vous à votre compte</p>
    @if(session('success'))
      <p class="text-center text-success">{{session('success')}}</p>
    @endif
    <form action="{{ route('auth.login') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email', session('newlogin') ? session('newlogin'):'') }}" placeholder="Saisir votre adresse email">
        @error('email')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="mb-4">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Saisir votre mot de passe">
        @error('password')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="d-flex align-items-center justify-content-between mb-4">
        <div class="form-check">
          <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
          <label class="form-check-label text-dark" for="flexCheckChecked">
            Remeber this Device
          </label>
        </div>
        <a class="text-primary fw-bold" href="">Mot de passe oublié ?</a>
      </div>
      <button href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Se connecter</button>
      <div class="d-flex align-items-center justify-content-center">
        <p class="fs-4 mb-0 fw-bold">Pas encore inscrit ?</p>
        <a class="text-primary fw-bold ms-2" href="{{ route('home.register', 'role=marque') }}">S'inscrire</a> 
        <a class="text-primary fw-bold ms-2" href="{{ route('home.register', 'role=influenceur') }}">Je suis influenceur</a>
      </div>
    </form>
@endsection
            