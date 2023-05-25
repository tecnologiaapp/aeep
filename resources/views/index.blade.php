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
		<link rel="stylesheet" href="{{ asset('user/assets/css/styloz.css')}}">
		<link rel="stylesheet" href="{{ asset('user/assets/css/custodio.css')}}">
		<!-- Stylesheet Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css')}}">
		<!-- Favicon -->
		<link rel="icon" type="images/png" href="{{ asset('logo_white.png')}}">
		<!-- Title -->
		<title>AEEP - Puntos de aprovechamiento - Agencia APP</title>
		<style>
			
/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: #f3f3f3;
  padding: 0 0 30px 0;
  color: #000;
  font-size: 14px;
}

#footer .footer-top {
  background: #f3f3f3;
  border-bottom: 1px solid #222222;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 28px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
  text-transform: inherit;
}

#footer .footer-top .footer-info h3 span {
  color: #ffc451;
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #000;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #b3b3b3;
  color: #000000;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 4px;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #3498db;
  color: #151515;
  text-decoration: none;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: 600;
  color: #000;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #3498db;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #000;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}


#footer .footer-top .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 4px;
}

#footer .footer-top .footer-newsletter form input[type=email] {
  border: 0;
  padding: 4px;
  width: calc(100% - 110px);
}

#footer .footer-top .footer-newsletter form input[type=submit] {
  position: absolute;
  top: 0;
  right: -2px;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #ffc451;
  color: #151515;
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
}

#footer .footer-top .footer-newsletter form input[type=submit]:hover {
  background: #ffcd6b;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

		</style>
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
				<a href="{{ url('/') }}">
					<img src="https://app.gov.co/assets/img/Proyectos/logo-landing.png" alt="logo" style=" width: 200px;
    height: 90px;">
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav m-auto">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('panel.spaces.index') }}">Puntos AEEP</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://www.app.gov.co/transparencia/contacto" target="_blank">Contáctanos</a>
						</li>                                                                
					</ul>
					<div class="nav-btn">
						@guest
						<a href="{{ route('login') }}" class="default-btn bg-main">Ingresar / Registrarse</a>
						@else
						<a href="{{ route('panel.spaces.index') }}" class="default-btn bg-main">Ver espacios</a>
						@endguest
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

	  <!-- ======= Footer ======= -->
	  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Agencia APP</h3>
              <p>
			  Medellin / Antioquia <br>
			  Carrera 55 # 42-180 Local 203 Edificio Plaza de La Libertad<br><br>
                <strong>Telefono:</strong> +57 604 448 1740<br>
                <strong>Correo:</strong> info@app.gov.co<br>
              </p>
        
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Enlaces de interés</h4>
            <ul>
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

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Síguenos en nuestras redes sociales.</h4>
            <!-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
			<div class="social-links mt-3">
				<a href="#" ><i class="lab la-twitter"></i></a>
                <a href="#" ><i class="lab la-facebook-f"></i></a>
                <a href="#" ><i class="lab la-instagram"></i></a>                
                <a href="#" ><i class="lab la-youtube"></i></a>
              </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Agencia APP - Alcaldía de Medellín</span></strong>. Todos los derechos reservados
      </div>
    </div>
  </footer><!-- End Footer -->

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