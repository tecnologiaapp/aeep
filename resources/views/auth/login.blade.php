@extends('layouts.app')

@section('content')
   <div class="nk-block nk-block-middle nk-auth-body wide-xs">
      <div class="brand-logo pb-4 text-center">
         <a href="{{ url('/') }}" class="logo-link">
            <img class="logo-light logo-img logo-img-lg" src="{{ asset('logo.png') }}" srcset="{{ asset('logo.png') }}" alt="logo">

            <img class="logo-dark logo-img logo-img-lg" src="{{ asset('logo.png') }}" srcset="{{ asset('logo.png') }}" alt="logo-dark">
         </a>
      </div>

      <h6 class="text-center">Puntos de aprovechamiento económico</h6>

      <div class="card card-bordered">
         <div class="card-inner card-inner-lg">
            <div class="nk-block-head text-center">
               <div class="nk-block-head-content">
                  <h4 class="nk-block-title">Iniciar sesión</h4>
                  <div class="nk-block-des">
                     <p>El código llegará a tu correo electrónico</p>
                  </div>
               </div>

               @if(session()->has('message'))
               <div class="mt-4 alert alert-{{ session('message')[0] }}">
                  {{ session('message')[1] }}
               </div>
               @endif
            </div>

            <form method="POST" action="{{ route('user.code.store') }}">
               @csrf

               <div class="form-group">
                  <label class="form-label" for="name">Correo electrónico o número de documento</label>
                  <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" name="info" placeholder="Ingresa tu correo electrónico o número de documento" required autofocus="">
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="form-group">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                     <label class="form-check-label" for="remember">
                        {{ __('Recordar mis datos') }}
                     </label>
                  </div>
               </div>

               <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">
                     {{ __('Generar código') }}
                  </button>
               </div>
            </form>

            @if (Route::has('password.request'))
               <div class="form-note-s2 text-center pt-4">
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                     {{ __('¿Tienes problemas para recibir tu código?') }}
                  </a>
               </div>
            @endif

            <div class="form-note-s2 text-center pt-4">
               ¿NO tienes una cuenta? 
               <a href="{{ route('register') }}"><strong>Regístrate</strong></a>
            </div>
         </div>
      </div>
   </div>
@endsection