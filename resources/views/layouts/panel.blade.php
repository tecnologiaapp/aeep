<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
   <base href="../../../">
   <meta charset="utf-8">
   <meta name="author" content="Agencia APP - Alcaldía de Medellín. Desarrollado por Brayan Angarita">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
   <!-- Fav Icon  -->
   <link rel="shortcut icon" href="./images/favicon.png">
   <!-- Page Title  -->
   <title>Puntos de aprovechamiento económico disponibles</title>
   <!-- StyleSheets  -->
   <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.1.0')}}">
   <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.1.0')}}">

   @stack('styles')
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
	<div class="nk-app-root">
		<div class="nk-sidebar" data-content="sidebarMenu">
			<div class="nk-sidebar-bar">
				<div class="nk-apps-brand">
					<a href="{{ url('/') }}" class="logo-link">
						<img class="logo-light logo-img" src="{{ asset('assets/img/logo.svg')}}" srcset="{{ asset('assets/img/logo.svg')}}" alt="Puntos de AEEP">
						<img class="logo-dark logo-img" src="{{ asset('assets/img/logo.svg')}}" srcset="{{ asset('assets/img/logo.svg')}}" alt="Puntos de AEEP">
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
											<span class="lead-text">Brayan Angarita</span>
											<span class="sub-text text-soft">brayan.angarita@app.gov.co</span>
										</div>
									</div>
								</div>

								<div class="dropdown-inner">
									<ul class="link-list">
										<li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>Ver perfil</span></a></li>
										<li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Configurar mi cuenta</span></a></li>
										<li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Mis documentos</span></a></li>
									</ul>
								</div>

								<div class="dropdown-inner">
									<ul class="link-list">
										<li><a href="#"><em class="icon ni ni-signout"></em><span>Cerrar sesión</span></a></li>
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
								<img class="logo-light logo-img" src="{{ asset('assets/img/logo.svg')}}" srcset="{{ asset('assets/img/logo.svg')}}" alt="Puntos de AEEP">
								<img class="logo-dark logo-img" src="{{ asset('assets/img/logo.svg')}}" srcset="{{ asset('assets/img/logo.svg')}}" alt="Puntos de AEEP">
							</a>
						</div><!-- .nk-header-brand -->
						<div class="nk-header-search ml-3 ml-xl-0">
							<em class="icon ni ni-search"></em>
							<input type="text" class="form-control border-transparent form-focus-none" placeholder="Buscar...">
						</div><!-- .nk-header-news -->

						<div class="nk-header-tools">
							<ul class="nk-quick-nav">
								{{-- <li class="dropdown chats-dropdown hide-mb-xs">
									<a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
										<div class="icon-status icon-status-na"><em class="icon ni ni-comments"></em></div>
									</a>
									<div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
										<div class="dropdown-head">
											<span class="sub-title nk-dropdown-title">Recent Chats</span>
											<a href="#">Setting</a>
										</div>

										<div class="dropdown-body">
											<ul class="chat-list">
												<li class="chat-item">
													<a class="chat-link" href="html/apps-chats.html">
														<div class="chat-media user-avatar">
															<span>IH</span>
															<span class="status dot dot-lg dot-gray"></span>
														</div>
														<div class="chat-info">
															<div class="chat-from">
																<div class="name">Iliash Hossain</div>
																<span class="time">Now</span>
															</div>
															<div class="chat-context">
																<div class="text">You: Please confrim if you got my last messages.</div>
																<div class="status delivered">
																	<em class="icon ni ni-check-circle-fill"></em>
																</div>
															</div>
														</div>
													</a>
												</li><!-- .chat-item -->

												<li class="chat-item is-unread">
													<a class="chat-link" href="html/apps-chats.html">
														<div class="chat-media user-avatar bg-pink">
															<span>AB</span>
															<span class="status dot dot-lg dot-success"></span>
														</div>
														<div class="chat-info">
															<div class="chat-from">
																<div class="name">Abu Bin Ishtiyak</div>
																<span class="time">4:49 AM</span>
															</div>
															<div class="chat-context">
																<div class="text">Hi, I am Ishtiyak, can you help me with this problem ?</div>
																<div class="status unread">
																	<em class="icon ni ni-bullet-fill"></em>
																</div>
															</div>
														</div>
													</a>
												</li><!-- .chat-item -->
												<li class="chat-item">
													<a class="chat-link" href="html/apps-chats.html">
														<div class="chat-media user-avatar">
															<img src="./images/avatar/b-sm.jpg" alt="">
														</div>
														<div class="chat-info">
															<div class="chat-from">
																<div class="name">George Philips</div>
																<span class="time">6 Apr</span>
															</div>
															<div class="chat-context">
																<div class="text">Have you seens the claim from Rose?</div>
															</div>
														</div>
													</a>
												</li><!-- .chat-item -->
												<li class="chat-item">
													<a class="chat-link" href="html/apps-chats.html">
														<div class="chat-media user-avatar user-avatar-multiple">
															<div class="user-avatar">
																<img src="./images/avatar/c-sm.jpg" alt="">
															</div>
															<div class="user-avatar">
																<span>AB</span>
															</div>
														</div>
														<div class="chat-info">
															<div class="chat-from">
																<div class="name">Softnio Group</div>
																<span class="time">27 Mar</span>
															</div>
															<div class="chat-context">
																<div class="text">You: I just bought a new computer but i am having some problem</div>
																	<div class="status sent">
																	<em class="icon ni ni-check-circle"></em>
																</div>
															</div>
														</div>
													</a>
												</li><!-- .chat-item -->
												<li class="chat-item">
												<a class="chat-link" href="html/apps-chats.html">
												<div class="chat-media user-avatar">
												<img src="./images/avatar/a-sm.jpg" alt="">
												<span class="status dot dot-lg dot-success"></span>
												</div>
												<div class="chat-info">
												<div class="chat-from">
												<div class="name">Larry Hughes</div>
												<span class="time">3 Apr</span>
												</div>
												<div class="chat-context">
												<div class="text">Hi Frank! How is you doing?</div>
												</div>
												</div>
												</a>
												</li><!-- .chat-item -->
												<li class="chat-item">
												<a class="chat-link" href="html/apps-chats.html">
												<div class="chat-media user-avatar bg-purple">
												<span>TW</span>
												</div>
												<div class="chat-info">
												<div class="chat-from">
												<div class="name">Tammy Wilson</div>
												<span class="time">27 Mar</span>
												</div>
												<div class="chat-context">
												<div class="text">You: I just bought a new computer but i am having some problem</div>
												<div class="status sent">
												<em class="icon ni ni-check-circle"></em>
												</div>
												</div>
												</div>
												</a>
												</li><!-- .chat-item -->
											</ul><!-- .chat-list -->
										</div><!-- .nk-dropdown-body -->

										<div class="dropdown-foot center">
											<a href="html/apps-chats.html">Ver todo</a>
										</div>
									</div>
								</li>
 --}}
								<li class="dropdown notification-dropdown">
									<a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
										<div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
									</a>

									<div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
										<div class="dropdown-head">
										<span class="sub-title nk-dropdown-title">Notifications</span>
										<a href="#">Mark All as Read</a>
										</div>
										<div class="dropdown-body">
										<div class="nk-notification">
										<div class="nk-notification-item dropdown-inner">
										<div class="nk-notification-icon">
										<em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
										</div>
										<div class="nk-notification-content">
										<div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
										<div class="nk-notification-time">2 hrs ago</div>
										</div>
										</div>
										<div class="nk-notification-item dropdown-inner">
										<div class="nk-notification-icon">
										<em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
										</div>
										<div class="nk-notification-content">
										<div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
										<div class="nk-notification-time">2 hrs ago</div>
										</div>
										</div>
										<div class="nk-notification-item dropdown-inner">
										<div class="nk-notification-icon">
										<em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
										</div>
										<div class="nk-notification-content">
										<div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
										<div class="nk-notification-time">2 hrs ago</div>
										</div>
										</div>
										<div class="nk-notification-item dropdown-inner">
										<div class="nk-notification-icon">
										<em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
										</div>
										<div class="nk-notification-content">
										<div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
										<div class="nk-notification-time">2 hrs ago</div>
										</div>
										</div>
										<div class="nk-notification-item dropdown-inner">
										<div class="nk-notification-icon">
										<em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
										</div>
										<div class="nk-notification-content">
										<div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
										<div class="nk-notification-time">2 hrs ago</div>
										</div>
										</div>
										<div class="nk-notification-item dropdown-inner">
										<div class="nk-notification-icon">
										<em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
										</div>
										<div class="nk-notification-content">
										<div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
										<div class="nk-notification-time">2 hrs ago</div>
										</div>
										</div>
										</div><!-- .nk-notification -->
										</div><!-- .nk-dropdown-body -->
										<div class="dropdown-foot center">
										<a href="#">View All</a>
										</div>
                           </div>
                        </li>

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
										<span class="lead-text">Brayan Angarita</span>
										<span class="sub-text">brayan.angarita@app.gov.co</span>
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
											<li><a href="#"><em class="icon ni ni-signout"></em><span>Cerrar sesión</span></a></li>
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