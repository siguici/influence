@extends('layouts.base')

@section('title', 'Profil')

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Mon Profil</h5>


        <div class="row">
            <div class="col-3">
                <img src="/assets/images/logos/marque.jpg" alt="" width="200" height="200" class="rounded-circle">
                <form action="" method="post" class="mt-3">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-outline-primary btn-sm">Modifier la photo</button>
                </form>
            </div>
            <div class="col-md-9 col-lg-9 col-sm-12">
                <form action="" method="post">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3 col">
                        <label for="name">Nom de la marque</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Saisir le nomde votre marque" value="{{ old('name', Auth::user()->name ) }}" name="name">
                        @error('name')
                        <div id="nameHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="mb-3 col">
                            <label for="country">Pays de résidence</label>
                            <input type="text" class="form-control" id="country" aria-describedby="countryHelp" placeholder="Saisir le nomde votre marque" value="{{ old('country', Auth::user()->country ) }}" name="country">
                            @error('country')
                            <div id="countryHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col">
                            <label for="city">Ville</label>
                            <input type="text" class="form-control" id="city" aria-describedby="cityHelp" placeholder="Saisir la ville" value="{{ old('city', Auth::user()->city ) }}" name="city">
                            @error('city')
                            <div id="cityHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="email">Adresse email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ Auth::user()->email }}" disabled>
                    </div>
                    <button type="submit" class="btn btn-primary">Enrégistrer les modifications</button>
                </form>

                <a href="#" class="btn btn-outline-primary mt-5">Modifier le mot de passe</a>
            </div>
        </div>
    </div>
</div>

@endsection