<!DOCTYPE html>
<html lang="zxx" class="js">
   <head>
      <meta charset="utf-8">
      <meta name="author" content="Agencia APP - Alcaldía de Medellín. Desarrollado por Brayan Angarita">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Aplicativo para reservar espacios de espacio público en Medellín - AGENCIA APP">
      <link rel="shortcut icon" href="{{ asset('logo.png') }}">
      <title>@yield('title', 'AEEP') - AGENCIA APP</title>
      <!-- Fav Icon  -->
      <link rel="shortcut icon" href="./images/favicon.png">
      <link rel="stylesheet" href="{{ asset('assets/css/dashlit.css?ver=2.4.0')}}">
      <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.4.0')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/custo.css')}}">

      @stack('styles')
   </head>

   <body class="nk-body npc-invest bg-lighter ">
      <div class="nk-app-root">
         <!-- wrap @s -->
         <div class="nk-wrap ">
            <!-- main header @s -->
            <div class="nk-header nk-header-fluid is-theme">
               <div class="container-xl wide-xl">
                  <div class="nk-header-wrap">
                     <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                     </div>

                     <div class="nk-header-brand">
                        <a href="{{ url('/') }}" class="logo-link">
                           <img class="logo-light logo-img" src="{{ asset('logo.png')}}" srcset="{{ asset('logo.png')}} 2x" alt="Puntos de AEE">
                           <img class="logo-dark logo-img" src="{{ asset('logo.png')}}" srcset="{{ asset('logo.png')}} 2x" alt="Puntos de AEE">
                        </a>
                     </div><!-- .nk-header-brand -->

                     <div class="nk-header-menu" data-content="headerNav">
                        <div class="nk-header-mobile">
                           <div class="nk-header-brand">
                              <a href="{{ url('/') }}" class="logo-link">
                                 <img class="logo-light logo-img" src="{{ asset('logo.png')}}" srcset="{{ asset('logo.png')}} 2x" alt="logo">
                                 <img class="logo-dark logo-img" src="{{ asset('logo.png')}}" srcset="{{ asset('logo.png')}} 2x" alt="logo-dark">
                              </a>
                           </div>

                           <div class="nk-menu-trigger mr-n2">
                              <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                           </div>
                        </div>
                     </div><!-- .nk-header-menu -->
                     <!-- .nk-header-tools -->
                  </div><!-- .nk-header-wrap -->
               </div><!-- .container-fliud -->
            </div>
            <!-- main header @e -->

            <!-- content @s -->
            <div class="nk-content nk-content-fluid">
               <div class="container-xl wide-xl">
                  <div class="nk-content-inner">
                     <div class="nk-content-body">
                        <div class="nk-block">
                           @yield('content')
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- content @e -->

            <!-- footer @s -->
            <div class="nk-footer nk-footer-fluid bg-lighter">
               <div class="container-xl">
                  <div class="nk-footer-wrap">
                     <div class="nk-footer-copyright"> 
                        &copy; {{ date('Y') }} AGENCIA APP
                     </div>
                     <div class="nk-footer-links">
                        <ul class="nav nav-sm">
                           <li class="nav-item"><a class="nav-link" href="#">Términos y condiciones</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Privacidad</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Ayuda</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- footer @e -->
         </div>
         <!-- wrap @e -->
      </div>

      <!-- app-root @e -->
      <!-- JavaScript -->
      <script src="{{ asset('assets/js/bundle.js?ver=2.4.0')}}"></script>
      <script src="{{ asset('assets/js/scripts.js?ver=2.4.0')}}"></script>

      @stack('scripts')
   </body>
</html>