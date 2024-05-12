@extends('layouts.home')

@section('title', 'Nouvelle inscription')
@section('content')
    <p class="text-center">{{ $role === "influenceur" ? 'Rejoignez notre communauté d\'influenceurs':'Faites promouvoir votre business avec influencetn'}}</p>
    <form action="{{ route('home.register') }}" method="post">
      @csrf

      @if($role === "influenceur")
        <div class="row">
          <div class="mb-3 col">
            <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="lastname" placeholder="Saisir votre nom" value="{{ old('lastname') }}">
            @error('lastname')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-3 col">
            <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="firstname" placeholder="Saisir votre prenom" value="{{ old('firstname') }}">
              @error('firstname')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="row">
          <div class="mb-3 col">
            <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="country" placeholder="Saisir votre pays de résidence" value="{{ old('country') }}">
            @error('country')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-3 col">
            <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="city" placeholder="Saisir la ville" value="{{ old('city') }}">
            @error('city')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="row">
          <div class="mb-3 col">
            <select name="sector" class="form-select">
              <option value="" selected>Secteur de prédilection</option>
              <option value="Mode et Beauté">Mode et Beauté</option>
              <option value="Voyage et Tourisme">Voyage et Tourisme </option>
              <option value="Fitness et Bien-être">Fitness et Bien-être</option>
              <option value="Alimentation et Cuisine">Alimentation et Cuisine</option>
              <option value="Technologie et Electronique Grand Public">Technologie et Électronique Grand Public</option>
              <option value="Jeux Vidéo et Divertissement">Jeux Vidéo et Divertissement</option>
              <option value="Maison et Décoration ">Maison et Décoration </option>
              <option value="Finance et Investissement">Finance et Investissement</option>
            </select>
            @error('sector')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-3 col">
            <select name="social_media" class="form-select">
              <option value="" selected>Principal Réseau</option>
              <option value="Facebook">Facebook</option>
              <option value="Instagram">Instagram</option>
              <option value="TikTok">TikTok</option>
              <option value="Snapchat">Snapchat</option>
              <option value="Twitter (X)">Twitter (X)</option>
              <option value="LinkIn">LinkdIn</option>
              <option value="Telegram">Telegram</option>
            </select>
            @error('social_media')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-3 col">
            <select name="category" class="form-select">
              <option value="" selected>Abonnés</option>
              <option value="Nano-influenceur">Moins de 1000</option>
              <option value="Micro-influenceur">Entre 1000 à 100K</option>
              <option value="Macro-influenceur">Plus de 100K</option>
              <option value="Influenceur star">Plusieurs millions</option>
            </select>
            @error('category')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="mb-3 col">
          <textarea name="biography" placeholder="Saisir votre biographie..." class="form-control" placeholder="Saisir votre biographie">{{ old('biography') }}</textarea>
          @error('biography')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
      @endif

      @if($role === "marque")
        <div class="col mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom de la marque</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{ old('name') }}">
            @error('name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
         <div class="row">
          <div class="mb-3 col">
            <label for="exampleInputtext1" class="form-label">Pays</label>
            <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="country" value="{{ old('country') }}">
            @error('country')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-3 col">
            <label for="exampleInputtext1" class="form-label">Ville</label>
            <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="city" value="{{ old('city') }}">
            @error('city')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

      @endif
      <div class="row">
        <div class="col mb-3">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Saisir votre adresse email" value="{{ old('email') }}">
            @error('email')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col mb-4">
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Saisir votre mot de passe">
          @error('password')
              <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>
      <input type="text" name="role" value="{{$role}}" hidden>

      <button href="" class="btn btn-danger w-100 py-8 fs-4 mb-4 rounded-2">S'inscrire maintenant</button>
      <div class="d-flex align-items-center justify-content-center">
        <p class="fs-4 mb-0 fw-bold">Déjà inscrit ?</p>
        <a class="text-danger fw-bold ms-2" href="{{ route('auth.login') }}">Se connecter</a>
      </div>
    </form>
@endsection
             