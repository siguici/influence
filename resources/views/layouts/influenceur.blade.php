<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tableau de bord Influenceur - @yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="/assets/images/logos/logo.png" />
  <link rel="stylesheet" href="/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{ route('influenceur.index') }}" class="text-nowrap logo-img">
            <!-- <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" /> -->
            <h1 class="text-primary">Influenceur</h1>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Accueil</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('influenceur.index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Tableau de bord</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Fonctionnalités</span>
            </li>
            
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('influenceur.partenariat') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-note"></i>
                </span>
                <span class="hide-menu">Partenariat</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('influenceur.message') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-message"></i>
                </span>
                <span class="hide-menu">Boite de réception</span>
              </a>
            </li>
             <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('influenceur.gain') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-wallet"></i>
                </span>
                <span class="hide-menu">Gains</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('influenceur.profil') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Mon Profil</span>
              </a>
            </li>
            
           
           
         
          </ul>
         
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a href="{{ route('influenceur.profil') }}" class="">{{Auth::user()->firstname.' '.Auth::user()->lastname}}</a>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="/assets/images/profile/user-1.png" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{ route('influenceur.profil') }}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">Mon Profil</p>
                    </a>
                   <!--  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">Mon Compte</p>
                    </a> -->
                  
                    <form action="{{ route('auth.logout') }}" class="form" method="post">
                        @csrf 
                        @method('DELETE')

                        <button href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block" onclick="return confirm('Déconnexion en cours, OK ?') ">Se Déconnecter</button>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

      

      <div class="container-fluid">

            @yield('content')

            <div class="py-6 px-6 text-center">
                <p class="mb-0 fs-4">Créé and Développé par <a href="" target="_blank" class="pe-1 text-primary text-decoration-underline">Voire Digital</a></p>
            </div>
       </div>

     
    </div>
  </div>
  <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/sidebarmenu.js"></script>
  <script src="/assets/js/app.min.js"></script>
  <script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="/assets/js/dashboard.js"></script>
</body>

</html>