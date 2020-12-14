<!doctype html>
<html lang="zxx">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css')}}">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="{{ asset('user/assets/css/animate.min.css')}}">
		<!-- Magnific CSS -->
		<link rel="stylesheet" href="{{ asset('user/assets/css/magnific-popup.css')}}">
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{ asset('user/assets/css/owl.theme.default.min.css')}}">
		<!-- Line Awesome CSS -->
		<link rel="stylesheet" href="{{ asset('user/assets/css/line-awesome.min.css')}}">
		<!-- Odometer CSS -->
		<link rel="stylesheet" href="{{ asset('user/assets/css/odometer.css')}}">
		<!-- Stylesheet CSS -->
		<link rel="stylesheet" href="{{ asset('user/assets/css/style.css')}}">
		<link rel="stylesheet" href="{{ asset('user/assets/css/custom.css')}}">
		<!-- Stylesheet Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css')}}">
		<!-- Favicon -->
		<link rel="icon" type="images/png" href="{{ asset('assets/img/logo.svg')}}">
		<!-- Title -->
		<title>AEEP - Puntos de aprovechamiento - Agencia APP</title>
	</head>

	<body data-spy="scroll" data-offset="70">
		<!-- Preloader -->
		<div class="preloader">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="lds-hourglass"></div>
				</div>
			</div>
		</div>
		<!-- End Preloader -->

		<!-- Nabvar Area -->
		<nav class="navbar fixed-top navbar-expand-lg main-navbar app-nav">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					<img src="{{ asset('assets/img/logo.svg')}}" alt="logo" width="40">
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav m-auto">
						<li class="nav-item">
							<a class="nav-link" href="">Puntos AEEP</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Contáctanos</a>
						</li>                                                                
					</ul>
					<div class="nav-btn">
						<a href="{{ route('login') }}" class="default-btn bg-main">Ingresar / Registrarse</a>
					</div>
				</div>
			</div>
		</nav>
		<!-- End Nabvar Area -->

		<!-- App Landing Banner Area -->
		<div id="home" class="app-banner-area pt-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="app-bennr-text">
							<span>AEEP - Agencia APP - Alcaldía de Medellín</span>
							<h1>Escanea el código del punto</h1>
							<p>Ve al punto que quieres ocupar, escanea el código y paga. También podrás ver la lista de los puntos que podrás reservar. <b>Solamente los usuarios registrados y aprobados podrán hacer uso del espacio.</b></p>
							<div class="app-btn">
								<a href="{{ route('register') }}" class="default-btn app-btn-1 mr-3">Crear mi cuenta</a>
								<a href="{{ route('login') }}" class="default-btn app-btn-2">Ingresar</a>
							</div>

							<div class="row mt-30">
								<div class="col-lg-6 col-sm-6">
									<div class="app-text">
										<h3>50</h3>
										<p>Puntos <br> disponibles</p>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="app-text">
										<h3>16</h3>
										<p>Usuarios <br> aprobados</p>
									</div>
								</div>
							</div>

							<div class="app-shapes">
								{{-- <img src="user/assets/images/shape/shape1.png" class="shape-1" alt="Image"> --}}
								{{-- <img src="user/assets/images/shape/shape30.png" class="shape-30"  alt="Image"> --}}
								<img src="user/assets/images/shape/shape28.png" class="shape-28"  alt="Image">
								<img src="user/assets/images/shape/shape16.png" class="shape-16"  alt="Image">
								<img src="user/assets/images/shape/shape16.png" class="shape-11"  alt="Image">
								<img src="user/assets/images/shape/shape14.png" class="shape-14"  alt="Image">
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="app-banner-img">
							<img src="user/assets/images/app-img/app-banner-img.png" class="app-img" alt="Image">
							<div class="app-shapes">
								<img src="user/assets/images/shape/shape31.png" class="shape-31"  alt="Image">
								<img src="user/assets/images/shape/shape4.png" class="shape-4"  alt="Image">
								<img src="user/assets/images/shape/shape2.png" class="shape-2"  alt="Image">
								<img src="user/assets/images/shape/shape22.png" class="shape-22"  alt="Image">
								<img src="user/assets/images/shape/shape5.png" class="shape-5"  alt="Image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End App Landing Banner Area -->

		<!-- Easy Steps Area -->
		<div id="steps" class="easy-step-area ptb-100">
			<div class="container">
				<div class="section-title">
					<span>Reserva fácilmente</span>
					<h2>¿Cómo funciona?</h2>
					<p>Haz uso del espacio en sencillos pasos:</p>
				</div>

				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="easy-step-img">
							<img src="user/assets/images/app-img/easy-step-1.png" class="step-1" alt="Image">
							<div class="easy-step-shape">
								<img src="user/assets/images/shape/shape1.png" class="shape-1" alt="Shape">
								<img src="user/assets/images/shape/shape21.png" class="shape-21" alt="Shape">
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="easy-step-card left-text">
							<div class="row align-items-center">
								<div class="col-lg-4 col-sm-6">
									<div class="step-signle-card">
										<i class="las la-user-alt bg-2"></i>
										<span>1</span>
										<h3>Crea un cuenta</h3>
									</div>
								</div>
								<div class="col-lg-8 col-sm-6">
									<p>Crea tu cuenta, sube los documentos solicitados y espera nuestra respuesta.</p>
								</div>
							</div>
						</div>
	 
						<div class="easy-step-card right-text">
							<div class="row align-items-center">
								<div class="col-lg-8 col-sm-6">
									<p>Escanea el código QR o encuentra el punto a través de la lista de puntos.</p>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="step-signle-card">
										<i class="las la-qrcode bg-1"></i>
										<span>2</span>
										<h3>Escanea el código QR</h3>
									</div>
								</div>
							</div>
						</div>

						<div class="easy-step-card left-text">
							<div class="row align-items-center">
								<div class="col-lg-4 col-sm-6">
									<div class="step-signle-card step-p">
										<i class="las la-smile-beam bg-3"></i>
										<span>3</span>
										<h3>Reserva los puntos</h3>
									</div>
								</div>
								<div class="col-lg-8 col-sm-6">
									<p>Selecciona una <b>fecha</b> y la <b>actividad económica </b> que quieres hacer y completa el proceso de pago. Recibirás la factura en tu correo electrónico.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer Area -->
		<footer class="footer-area pt-200"> 
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="footer-widget">
							<div class="logo">
								<img src="{{ asset('assets/img/logo.svg')}}" alt="logo" width="100">
							</div>

							<p>Síguenos en nuestras redes sociales.</p>

							<ul class="footer-social">
								<li>
									<a class="bg-1" href="#" target="_blank">
										<i class="lab la-facebook-f bg-1"></i>
									</a>
								</li>
								<li>
									<a class="bg-2" href="#" target="_blank">
										<i class="lab la-twitter bg-2"></i>
									</a>
								</li>
								<li>
									<a class="bg-3" href="#" target="_blank">
										<i class="lab la-linkedin-in bg-3"></i>
									</a>
								</li>
								<li>
									<a class="bg-4" href="#" target="_blank">
										<i class="lab la-instagram bg-4"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-5 col-sm-6">
						<div class="row">

							<div class="col-lg-6 col-sm-6">
								<div class="footer-widget">
									<h3 class="title">Enlaces de interés</h3>
									<ul class="footer-text">
										<li>
											<a href="#">
												<i class="las la-angle-right"></i>
												Puntos de aprovechamiento
											</a>
										</li>
										<li>
											<a href="#">
												<i class="las la-angle-right"></i>
												Términos y condiciones
											</a>
										</li>
										<li>
											<a href="#">
												<i class="las la-angle-right"></i>
												Políticas de privacidad y de uso
											</a>
										</li>
										<li>
											<a href="#">
												<i class="las la-angle-right"></i>
												Contáctanos 
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6 offset-sm-4 offset-lg-0">
						<div class="footer-widget">
							<h3 class="title">Descargar (Próximamente)</h3>
							<div class="footer-image">
								<a href="#">
									<img src="user/assets/images/app-img/google-play.png" alt="Image">
								</a>
								<a href="#">
									<img src="user/assets/images/app-img/app-store.png" alt="Image">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="copyright-text">
				<p>Copyright {{ date('Y') }} Agencia APP - Alcaldía de Medellín. Derechos reservados <a href="https://app.gov.co" target="_blank">Agencia APP</a></p>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Go Top -->
		<div class="go-top">
			<i class="las la-angle-double-up"></i>
		</div>
		<!-- End Go Top -->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="{{ asset('user/assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('user/assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>
		<!-- Owl carousel JS -->
		<script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
		<!-- Magnific JS -->
		<script src="{{ asset('user/assets/js/jquery.magnific-popup.min.js') }}"></script>
		<!-- Wow JS -->
		<script src="{{ asset('user/assets/js/wow.min.js') }}"></script>
		<!-- Odometer JS -->
		<script src="{{ asset('user/assets/js/odometer.min.js') }}"></script>
		<!-- Jquery Apper JS -->
		<script src="{{ asset('user/assets/js/jquery.appear.js') }}"></script>
		<!-- Form Validator JS -->
		<script src="{{ asset('user/assets/js/form-validator.min.js') }}"></script>
		<!-- Contact JS -->
		<script src="{{ asset('user/assets/js/contact-form-script.js') }}"></script>
		<!-- Ajaxchimp JS -->
		<script src="{{ asset('user/assets/js/jquery.ajaxchimp.min.js') }}"></script>
		<!-- Custom JS -->
		<script src="{{ asset('user/assets/js/custom.js') }}"></script>
	</body>
</html>