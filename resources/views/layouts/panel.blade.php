<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
   <meta charset="utf-8">
   <meta name="author" content="Agencia APP - Alcaldía de Medellín. Desarrollado por Brayan Angarita">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Aplicativo para reservar espacios de espacio público en Medellín - AGENCIA APP">
   <link rel="shortcut icon" href="{{ asset('logo.png') }}">
   <title>@yield('title', 'AEEP') - AGENCIA APP</title>
   <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.1.0')}}">
   <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.1.0')}}">
   <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">

   @stack('styles')
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
	<div class="nk-app-root">
		<div class="nk-sidebar" data-content="sidebarMenu">
			<div class="nk-sidebar-bar">
				<div class="nk-apps-brand">
					<a href="{{ url('/') }}" class="logo-link">
						<img class="logo-light logo-img" src="{{ asset('logo.png')}}" srcset="{{ asset('logo.png')}}" alt="Puntos de AEEP">
						<img class="logo-dark logo-img" src="{{ asset('logo.png')}}" srcset="{{ asset('logo.png')}}" alt="Puntos de AEEP">
					</a>
				</div>

				<div class="nk-sidebar-element">
					<div class="nk-sidebar-body">
						<div class="nk-sidebar-content" data-simplebar>
							<div class="nk-sidebar-menu">
								<!-- Menu -->
								@include('panel.includes.menu._sidebar')
							</div>

							<div class="nk-sidebar-footer">
								<ul class="nk-menu nk-menu-md apps-menu">
									<li class="nk-menu-item">
										<a href="#" class="nk-menu-link" title="Settings">
											<span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
							<a href="#" data-toggle="dropdown" data-offset="50,-50">
								<div class="user-avatar">
									<span>BA</span>
								</div>
							</a>

							<div class="dropdown-menu dropdown-menu-md ml-4">
								<div class="dropdown-inner user-card-wrap d-none d-md-block">
									<div class="user-card">
										<div class="user-avatar">
											<span>BA</span>
										</div>

										<div class="user-info">
											<span class="lead-text">{{ Auth::user()->name }}</span>
											<span class="sub-text text-soft">{{ Auth::user()->email }}</span>
										</div>
									</div>
								</div>

								<div class="dropdown-inner">
									<ul class="link-list">
										<li><a href="#"><em class="icon ni ni-user-alt"></em><span>Ver perfil</span></a></li>
										<li><a href="#"><em class="icon ni ni-setting-alt"></em><span>Configurar mi cuenta</span></a></li>
										<li><a href="#"><em class="icon ni ni-activity-alt"></em><span>Mis documentos</span></a></li>
									</ul>
								</div>

								<div class="dropdown-inner">
									<ul class="link-list">
										<li>
											<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
												<em class="icon ni ni-signout"></em>
												<span>Cerrar sesión</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

         @include('panel.includes.menu._submenu')
     </div>

     <!-- main @s -->
     <div class="nk-main ">
     	<!-- wrap @s -->
     	<div class="nk-wrap ">
     		<!-- main header @s -->
     		<div class="nk-header nk-header-fixed nk-header-fluid is-light">
     			<div class="container-fluid">
					<div class="nk-header-wrap">
						<div class="nk-menu-trigger d-xl-none ml-n1">
							<a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
						</div>

						<div class="nk-header-brand d-xl-none">
							<a href="{{ url('/') }}" class="logo-link">
								<img class="logo-light logo-img" src="{{ asset('logo.png')}}" srcset="{{ asset('logo.png')}}" alt="Puntos de AEEP">
								<img class="logo-dark logo-img" src="{{ asset('logo.png')}}" srcset="{{ asset('logo.png')}}" alt="Puntos de AEEP">
							</a>
						</div><!-- .nk-header-brand -->
						<div class="nk-header-search ml-3 ml-xl-0">
							<em class="icon ni ni-search"></em>
							<input type="text" class="form-control border-transparent form-focus-none" placeholder="Buscar...">
						</div><!-- .nk-header-news -->

						<div class="nk-header-tools">
							<ul class="nk-quick-nav">

								<!-- Chat -->
								{{-- @include('panel.includes.menu._chat') --}}
 								<!-- Notifications -->
								{{-- @include('panel.includes.menu._notifications') --}}
								<!-- /Notifications -->

								<li class="dropdown user-dropdown">
                        	<a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                        		<div class="user-toggle">
											<div class="user-avatar sm">
												<em class="icon ni ni-user-alt"></em>
											</div>
										</div>
									</a>

									<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
										<div class="dropdown-inner user-card-wrap bg-lighter">
											<div class="user-card">
												<div class="user-avatar">
													<span>BA</span>
												</div>
												<div class="user-info">
													<span class="lead-text">{{ Auth::user()->name }}</span>
													<span class="sub-text">{{ Auth::user()->email }}</span>
												</div>
											</div>
										</div>

										<div class="dropdown-inner">
										<ul class="link-list">
										<li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>Ver perfil</span></a></li>
										<li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Configurar mi cuenta</span></a></li>
										<li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Mis documentos</span></a></li>
										<li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Modo nocturno</span></a></li>
										</ul>
										</div>

										<div class="dropdown-inner">
											<ul class="link-list">
												<li>
													<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
														<em class="icon ni ni-signout"></em>
														<span>Cerrar sesión</span>
													</a>

													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														{{ csrf_field() }}
													</form>
												</li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div><!-- .nk-header-wrap -->
				</div><!-- .container-fliud -->
			</div>

			<!-- main header @e -->
			<!-- content @s -->
			<div class="nk-content ">
				<div class="container-fluid">
					<h4 class="mb-4">@yield('title', 'QR')</h4>
					@if(session()->has('message'))
               <div class="mt-4 alert alert-{{ session('message')[0] }}">
                  {{ session('message')[1] }}
               </div>
               @endif
					@yield('content')
				</div>
				<!-- content @e -->
			</div>
			<!-- wrap @e -->
		</div>

	<!-- app-root @e -->
	<!-- JavaScript -->
	<script src="{{ asset('assets/js/bundle.js?ver=2.1.0')}}"></script>
	<script src="{{ asset('assets/js/scripts.js?ver=2.1.0')}}"></script>

	@stack('scripts')
</body>

</html>