<!DOCTYPE html>

<html lang="es">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>App</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets{{ asset('assets/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="assets{{ asset('assets/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="assets{{ asset('assets/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="assets{{ asset('assets/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="assets{{ asset('assets/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="assets{{ asset('assets/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="assets{{ asset('assets/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="assets{{ asset('assets/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="assets{{ asset('assets/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="assets{{ asset('assets/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="assets{{ asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="assets{{ asset('assets/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="assets{{ asset('assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="assets{{ asset('assets/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets{{ asset('assets/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/dashboard/css/style.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/dashboard/css/datatables.min.css')}}" rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    @yield('styles')

  </head>
  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
         </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
        </svg>
      </div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/categorias">
        <i class="fa fa-list-alt"></i>&nbsp; Categoria</a>
        </li>
        <!--<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/producto">
          <i class="fa fa-cart-plus"></i>&nbsp; Producto</a>
        </li> -->
       <!-- <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/agenda">
          <i class="fa fa-calendar-alt"></i>&nbsp; Agenda </a>
          </li>-->
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/personas">
            <i class="fas fa-users"></i>&nbsp; Persona</a>
          </li>

      </ul>
        
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    
    </div>
    <div class="c-wrapper c-fixed-components">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">

        </button><a class="c-header-brand d-lg-none" href="#">

        <ul class="c-header-nav d-md-down-none">
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="/home">Dashboard</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">

          <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" onclick="document.getElementById('btnLogout').click()" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
              <div class="c-avatar"> <i class="fa fa-user" aria-hidden="true"></i></div>
              {{ Auth::user()->name }}
            </a>

                 <form action="/logout" method="POST">
                  @csrf
                  <button id="btnLogout" type="submit">Cerrar sesión</button>
                </form>
                </a>
            
          </li>
        </ul>
        <div class="c-subheader px-3">
          <!-- Breadcrumb-->
          <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            <!-- Breadcrumb Menu-->
          </ol>
        </div>
      </header>
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in"></div>
            @yield('body')
          </div>
        </main>
        <footer class="c-footer">
          <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
          <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->

    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('assets/dashboard/js/jquery-3.5.1.min.js')}}"></script>

    <script src="{{ asset('assets/dashboard/vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
    <!--[if IE]><!-->
    <script src="{{ asset('assets/dashboard/vendors/@coreui/icons/js/svgxuse.min.js')}}"></script>

    <script src="{{ asset('assets/dashboard/js/datatables.min.js')}}"></script>

    <script src="{{ asset('assets/dashboard/js/main.js')}}"></script>

    @yield('scripts')

  </body>
</html>