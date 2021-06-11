<!DOCTYPE html>
<html lang="zxx" class="js">
   <head>
      <meta charset="utf-8" />
      <meta name="author" content="Agencia APP - Alcaldía de Medellín. Desarrollado por Brayan Angarita" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="Aplicativo para reservar espacios de espacio público en Medellín - AGENCIA APP" />
      <link rel="shortcut icon" href="{{ asset('logo.png') }}" />
      <title>@yield('title', 'AEEP') - AGENCIA APP</title>
      <!-- Fav Icon  -->
      <link rel="shortcut icon" href="./images/favicon.png" />
      <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.4.0')}}" />
      <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.4.0')}}" />
      <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}" />

      @stack('styles')
   </head>

   <body class="nk-body npc-invest bg-lighter">
      <div class="nk-app-root">
         <!-- wrap @s -->
         <div class="nk-wrap">
            <!-- main header @s -->
            <div class="nk-header nk-header-fluid is-theme">
               <div class="container-xl wide-xl">
                  <div class="nk-header-wrap">
                     <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                     </div>

                     <div class="nk-header-brand">
                        <a href="{{ url('/') }}" class="logo-link">
                           <img class="logo-light logo-img" src="{{ asset('logo.png')}}" srcset="{{ asset('logo.png')}} 2x" alt="Puntos de AEE" />
                           <img class="logo-dark logo-img" src="{{ asset('logo.png')}}" srcset="{{ asset('logo.png')}} 2x" alt="Puntos de AEE" />
                        </a>
                     </div>
                     <!-- .nk-header-brand -->

                     <div class="nk-header-menu" data-content="headerNav">
                        <div class="nk-header-mobile">
                           <div class="nk-header-brand">
                              <a href="{{ url('/') }}" class="logo-link">
                                 <img class="logo-light logo-img" src="{{ asset('logo.png')}}" srcset="{{ asset('logo.png')}} 2x" alt="logo" />
                                 <img class="logo-dark logo-img" src="{{ asset('logo.png')}}" srcset="{{ asset('logo.png')}} 2x" alt="logo-dark" />
                              </a>
                           </div>

                           <div class="nk-menu-trigger mr-n2">
                              <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                           </div>
                        </div>

                        <ul class="nk-menu nk-menu-main ui-s2">
                           <!-- Menu items -->
                           <li class="nk-menu-item has-sub">
                              <a href="#" class="nk-menu-link nk-menu-toggle">
                                 <span class="nk-menu-text">Puntos AEEP</span>
                              </a>

                              <ul class="nk-menu-sub">
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.spaces.index') }}" class="nk-menu-link">
                                       <span class="nk-menu-text">Todos los puntos</span>
                                    </a>
                                 </li>
                                 <!-- .nk-menu-item -->

                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.spaces.create') }}" class="nk-menu-link">
                                       <span class="nk-menu-text">Agregar punto</span>
                                    </a>
                                 </li>
                                 <!-- .nk-menu-item -->
                              </ul>
                              <!-- .nk-menu-sub -->
                           </li>
                           <!-- .nk-menu-item -->

                           <li class="nk-menu-item has-sub">
                              <a href="#" class="nk-menu-link nk-menu-toggle">
                                 <span class="nk-menu-text">Solicitudes</span>
                              </a>

                              <ul class="nk-menu-sub">
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.bookings.index') }}" class="nk-menu-link">
                                       <span class="nk-menu-text">Mis solicitudes</span>
                                    </a>
                                 </li>
                                 <!-- .nk-menu-item -->
                              </ul>
                              <!-- .nk-menu-sub -->
                           </li>
                           <!-- .nk-menu-item -->
                           <!-- /Menu items -->
                        </ul>
                        <!-- .nk-menu -->
                     </div>
                     <!-- .nk-header-menu -->

                     <div class="nk-header-tools">
                        <ul class="nk-quick-nav">
                           <li class="dropdown notification-dropdown">
                              <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                 <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                              </a>
                              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                 <div class="dropdown-head">
                                    <span class="sub-title nk-dropdown-title">Notificaciones</span>
                                    <a href="#">Marcar todas como leídas</a>
                                 </div>
                                 <div class="dropdown-body">
                                    <div class="nk-notification">
                                       <div class="nk-notification-item dropdown-inner">
                                          <div class="nk-notification-icon">
                                             <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                          </div>
                                          <div class="nk-notification-content">
                                             <div class="nk-notification-text">
                                                Te damos la bienvenida a la plataforma de AEEP
                                             </div>
                                             <div class="nk-notification-time">Hace 1 segundo</div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- .nk-notification -->
                                 </div>
                                 <!-- .nk-dropdown-body -->
                                 <div class="dropdown-foot center">
                                    <a href="#">Ver todas</a>
                                 </div>
                              </div>
                           </li>
                           <!-- .dropdown -->
                           <li class="dropdown user-dropdown order-sm-first">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <div class="user-toggle">
                                    <div class="user-avatar sm">
                                       <em class="icon ni ni-user-alt"></em>
                                    </div>
                                    <div class="user-info d-none d-xl-block">
                                       <div class="user-status">Administrador</div>
                                       <div class="user-name dropdown-indicator">Brayan Angarita</div>
                                    </div>
                                 </div>
                              </a>
                              <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1 is-light">
                                 <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                    <div class="user-card">
                                       <div class="user-avatar">
                                          <span>BA</span>
                                       </div>
                                       <div class="user-info">
                                          <span class="lead-text">Brayan Angarita</span>
                                          <span class="sub-text">brayan.angarita@app.gov.co</span>
                                       </div>
                                       <div class="user-action">
                                          <a class="btn btn-icon mr-n2" href="html/invest/profile-setting.html"><em class="icon ni ni-setting"></em></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="dropdown-inner user-account-info">
                                    <h6 class="overline-title-alt">Balance</h6>
                                    <div class="user-balance">1,494 <small class="currency currency-usd">COP</small></div>
                                 </div>
                                 <div class="dropdown-inner">
                                    <ul class="link-list">
                                       <li>
                                          <a href="html/invest/profile.html"><em class="icon ni ni-user-alt"></em><span>Ver perfil</span></a>
                                       </li>
                                       <li>
                                          <a href="html/invest/profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Configuración</span></a>
                                       </li>
                                       {{--
                                       <li>
                                          <a class="dark-mode-switch" href="#"><em class="icon ni ni-moon"></em><span>Modo oscuro</span></a>
                                       </li>
                                       --}}
                                    </ul>
                                 </div>
                                 <div class="dropdown-inner">
                                    <ul class="link-list">
                                       <li>
                                          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                             <em class="icon ni ni-signout"></em>
                                             <span>
                                                {{ __('Logout') }}
                                             </span>
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                          </form>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <!-- .dropdown -->
                        </ul>
                        <!-- .nk-quick-nav -->
                     </div>
                     <!-- .nk-header-tools -->
                  </div>
                  <!-- .nk-header-wrap -->
               </div>
               <!-- .container-fliud -->
            </div>
            <!-- main header @e -->

            <!-- content @s -->
            <div class="nk-content nk-content-fluid">
               <div class="container-xl wide-xl">
                  <div class="nk-content-inner">
                     <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                           <div class="nk-block-between">
                              <div class="nk-block-head-content">
                                 <h3 class="nk-block-title page-title">@yield('title')</h3>
                                 <div class="nk-block-des text-soft">
                                    <p>@yield('sub_title', 'AGENCIA APP')</p>
                                 </div>
                              </div>
                              <!-- .nk-block-head-content -->
                              {{--
                              <div class="nk-block-head-content">
                                 <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>

                                    <div class="toggle-expand-content" data-content="pageMenu">
                                       <ul class="nk-block-tools g-3">
                                          <li>
                                             <a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-download-cloud"></em><span>Export</span></a>
                                          </li>

                                          <li>
                                             <a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a>
                                          </li>

                                          <li class="nk-block-tools-opt">
                                             <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                   <ul class="link-list-opt no-bdr">
                                                      <li>
                                                         <a href="#"><em class="icon ni ni-user-add-fill"></em><span>Add User</span></a>
                                                      </li>
                                                      <li>
                                                         <a href="#"><em class="icon ni ni-coin-alt-fill"></em><span>Add Order</span></a>
                                                      </li>
                                                      <li>
                                                         <a href="#"><em class="icon ni ni-note-add-fill-c"></em><span>Add Page</span></a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                    <!-- .toggle-expand-content -->
                                 </div>
                                 <!-- .toggle-wrap -->
                              </div>
                              <!-- .nk-block-head-content -->
                              --}}
                           </div>
                           <!-- .nk-block-between -->
                        </div>
                        <!-- .nk-block-head -->

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
      
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      @if(Session::has('info'))
      <script type="text/javascript">
         swal({
            title: "¡Atención!",
            text: "{{ Session::get('info')[1] }}",
            icon: "{{ Session::get('info')[0] }}",
            button: "Aceptar",
         });
      </script>
      @endif

      @stack('scripts')
   </body>
</html>
