<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
   <base href="../../../">
   <meta charset="utf-8">
   <meta name="author" content="Softnio">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
   <!-- Fav Icon  -->
   <link rel="shortcut icon" href="./images/favicon.png">
   <!-- Page Title  -->
   <title>Crear una nueva cuenta - Puntos de aprovechamiento económico</title>
   <!-- StyleSheets  -->
   <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.1.0">
   <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.1.0">
</head>

<body class="nk-body ui-rounder npc-default pg-auth">
   <div class="nk-app-root">
      <!-- main @s -->
      <div class="nk-main ">
         <!-- wrap @s -->
         <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
               
               @yield('content')

               <div class="nk-footer nk-auth-footer-full">
                  <div class="container wide-lg">
                     <div class="row g-3">
                        <div class="col-lg-6 order-lg-last">
                           <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Términos y condiciones</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Tratamiento de datos personales</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Políticas de privacidad</a>
                              </li>
                              <li class="nav-item dropup">
                                 <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><span>Español</span></a>
                                 <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="language-list">
                                       <li>
                                          <a href="#" class="language-item">
                                             <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                             <span class="language-name">Español</span>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="language-item">
                                             <img src="./images/flags/english.png" alt="" class="language-flag">
                                          <span class="language-name">English</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="col-lg-6">
                           <div class="nk-block-content text-center text-lg-left">
                              <p class="text-soft">&copy; 2020 Agencia APP - Alcaldía de Medellín.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- wrap @e -->
         </div>
         <!-- content @e -->
      </div>
      <!-- main @e -->
   </div>
   <!-- app-root @e -->
   <!-- JavaScript -->
   <script src="{{ asset('assets/js/bundle.js?ver=2.1.0')}}"></script>
   <script src="{{ asset('assets/js/scripts.js?ver=2.1.0')}}"></script>
   @stack('scripts')
   
</html>


{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
 --}}