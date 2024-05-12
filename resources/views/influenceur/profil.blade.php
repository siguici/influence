@extends('layouts.influenceur')

@section('title', 'Profil')

@section('content')

     <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Mon Profil</h5>
          <p class="mb-5">Vous êtes 
            <span class="badge bg-primary">{{ Auth::user()->category }}</span>
          </p>
            
           <div class="row">
              <div class="col-3">
                  <img src="/assets/images/profile/user-1.png" alt="" width="200" height="200" class="rounded-circle">
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

                  <div class="row">
                    <div class="mb-3 col">
                      <label for="lastname">Nom</label>
                      <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Saisir votre nom" value="{{ old('lastname', Auth::user()->lastname ) }}" name="lastname">
                      @error('lastname')
                        <div id="lastnameHelp" class="form-text">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mb-3 col">
                      <label for="firstname">Prénom</label>
                      <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp" placeholder="Saisir votre prenom" value="{{ old('firstname', Auth::user()->firstname ) }}" name="firstname">
                      @error('firstname')
                        <div id="firstnameHelp" class="form-text">{{ $message }}</div>
                      @enderror
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="mb-3 col">
                      <label for="country">Pays de résidence</label>
                      <input type="text" class="form-control" id="country" aria-describedby="countryHelp" placeholder="Saisir votre pays de résidence" value="{{ old('country', Auth::user()->country ) }}" name="country">
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

                  <div class="row">
                    <div class="mb-3 col">
                    
                      <label for="country">Secteur de prédilection</label>
                      <select name="sector" class="form-select">
                        <option value="" selected>Selectioner un secteur</option>
                        <option value="Mode et Beauté" {{ Auth::user()->sector === "Mode et Beauté" ? 'selected':''}}>Mode et Beauté</option>
                        <option value="Voyage et Tourisme" {{ Auth::user()->sector === "Voyage et Tourisme" ? 'selected':''}}>Voyage et Tourisme </option>
                        <option value="Fitness et Bien-être" {{ Auth::user()->sector === "Fitness et Bien-être" ? 'selected':''}}>Fitness et Bien-être</option>
                        <option value="Alimentation et Cuisine" {{ Auth::user()->sector === "Alimentation et Cuisine" ? 'selected':''}}>Alimentation et Cuisine</option>
                        <option value="Technologie et Electronique Grand Public"
                        {{ Auth::user()->sector === "Technologie et Electronique Grand Public" ? 'selected':''}}>Technologie et Électronique Grand Public</option>
                        <option value="Jeux Vidéo et Divertissement" {{ Auth::user()->sector === "Jeux Vidéo et Divertissement" ? 'selected':''}}>Jeux Vidéo et Divertissement</option>
                        <option value="Maison et Décoration" {{ Auth::user()->sector === "Maison et Décoration" ? 'selected':''}}>Maison et Décoration </option>
                        <option value="Finance et Investissement" {{ Auth::user()->sector === "Finance et Investissement" ? 'selected':''}}>Finance et Investissement</option>
                      </select>
                      @error('sector')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="mb-3 col">
                      <label for="social_media">Principal Réseau</label>
                      <select name="social_media" class="form-select">
                        <option value="" selected>Principal Réseau</option>
                        <option value="Facebook" {{ Auth::user()->social_media === "Facebook" ? 'selected':''}}>Facebook</option>
                        <option value="Instagram" {{ Auth::user()->social_media === "Instagram" ? 'selected':''}}>Instagram</option>
                        <option value="TikTok" {{ Auth::user()->social_media === "TikTok" ? 'selected':''}}>TikTok</option>
                        <option value="Snapchat" {{ Auth::user()->social_media === "Snapchat" ? 'selected':''}}>Snapchat</option>
                        <option value="Twitter (X)" {{ Auth::user()->social_media === "Twitter (X)" ? 'selected':''}}>Twitter (X)</option>
                        <option value="LinkIn" {{ Auth::user()->social_media === "LinkIn" ? 'selected':''}}>LinkdIn</option>
                        <option value="Telegram" {{ Auth::user()->social_media === "Telegram" ? 'selected':''}}>Telegram</option>
                      </select>
                      @error('social_media')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="mb-3 col">
                      <label for="category">Abonnés</label>
                      <select name="category" class="form-select">
                        <option value="" selected>Abonnés</option>
                        <option value="Nano-influenceur" {{ Auth::user()->category === "Nano-influenceur" ? 'selected':''}}>Moins de 1000</option>
                        <option value="Micro-influenceur" {{ Auth::user()->category === "Micro-influenceur" ? 'selected':''}}>Entre 1000 à 100K</option>
                        <option value="Macro-influenceur" {{ Auth::user()->category === "Macro-influenceur" ? 'selected':''}}>Plus de 100K</option>
                        <option value="Influenceur star" {{ Auth::user()->category === "Influenceur star" ? 'selected':''}}>Plusieurs millions</option>
                      </select>
                      @error('category')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3 col">
                    <label for="">Biographie</label>
                    <textarea name="biography" placeholder="Saisir votre biographie..." class="form-control" placeholder="Saisir votre biographie">{{ old('biography', Auth::user()->biography ) }}</textarea>
                    @error('biography')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="email">Adresse email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"  value="{{ Auth::user()->email }}" disabled>
                  </div>
                  <button type="submit" class="btn btn-primary">Enrégistrer les modifications</button>
                </form>

                <a href="#" class="btn btn-outline-primary mt-5">Modifier le mot de passe</a>
              </div>
           </div>
        </div>
    </div>
     
@endsection