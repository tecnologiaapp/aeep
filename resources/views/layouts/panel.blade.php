<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title', 'AEEP') - AGENCIA APP</title>
   <!-- Favicons -->
  <link rel="stylesheet" href="{{ asset('assets/img/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('assets/img/apple-touch-icon.png') }}">
	<!-- Line Awesome CSS -->
   <link rel="stylesheet" href="{{ asset('user/assets/css/line-awesome.min.css')}}">
	<!-- Odometer CSS -->
	<link rel="stylesheet" href="{{ asset('user/assets/css/odometer.css')}}">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/remixicon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">


<!-- Template Main CSS File -->
<link rel="stylesheet" href="{{ asset('assets/css/pan.css') }}">
<style>
  .fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
  background: rgba(255, 255, 255, 0.9);
}
</style>
@stack('styles')
</head>
<body>
     <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <a href="{{ url('/') }}">
    <img class="logo me-auto" src="https://app.gov.co/assets/img/Proyectos/logo-landing.png" style=" width: 200px; height: 90px;">
    </a>
    

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="#"><span>Puntos AEEP</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('panel.spaces.index') }}">Todos los puntos</a></li>
              @if (Auth::user()->rol == 'Admin')
              <li><a href="{{ route('panel.spaces.create') }}">Agregar punto</a></li>
              @endif
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Solicitudes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('panel.bookings.index') }}">Mis solicitudes</a></li>
            </ul>
          </li>
          @if (Auth::user()->rol == 'Admin')
          <li class="dropdown"><a href="#"><span>Usuarios</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Todos los usuarios</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Roles</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Todos los roles</a></li>
            </ul>
          </li>
          @endif
          <li><a class="nav-link scrollto" href="#">test</a></li>
          <li class="dropdown">
            <a href="#" class="user-nav-link"><i class="bi bi-person"></i>{{ Auth::user()->name }}</a>
            <ul>
            <li>
               <a href="#">
                <h6 class="overline-title-alt">Balance</h6>
                <div class="user-balance">0 <small class="currency currency-usd">COP</small></div>
               </a>           
            </li>
            <li><a href="#">Ver perfil</a></li>
            <li><a href="#">Configuración</a></li>
            <li>            
               <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <span>
                     Cerrar sesión
                  </span>
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
               </form>            
            </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>@yield('title')</h2>
          <p>@yield('sub_title')</p>         
        </div>

        <div class="row align-items-center">            
            @yield('content')
        </div> 

      </div>
    </section>
    <!-- End Section -->

  </main>

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
  </footer>
  <!-- End Footer -->

      <!-- Go Top -->
      <div class="go-top">
			<i class="las la-angle-double-up"></i>
		</div>
		<!-- End Go Top -->


  <!-- scripts -->
<script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/aeep.js')}}"></script>
  @stack('scripts')
</body>
</html>