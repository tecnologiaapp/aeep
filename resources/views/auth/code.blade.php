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
                  @if($email != NULL)
                  <div class="alert alert-theme">
                     Hemos enviado un código a tu correo para que inicies sesión
                  </div>
                  @else
                  <div class="alert alert-danger">
                     Por favor ingresa tu correo electrónico y el último código que te enviamos
                  </div>
                  @endif
                  @if(session()->has('message'))
                  <div class="mt-4 alert alert-{{ session('message')[0] }}">
                     {{ session('message')[1] }}
                  </div>
                  @endif
               </div>
            </div>

            <form method="POST" action="{{ route('login') }}">
               @csrf

               @if($email != NULL)
               <input type="hidden" name="email" value="{{ $email }}">
               @endif

               @if($email == NULL)
               <div class="form-group text-center mb-3">
                  <label class="form-label" for="email">Correo electrónico</label>
                  <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" placeholder="Ingresa tu correo electrónico">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               @endif

               <div class="form-group text-center">
                  <label class="form-label" for="password">Código que llegó a tu correo</label>
                  <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" placeholder="Ingresa el código que llegó a tu correo">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="form-note-s2 text-center pt-4">
                  <a class="btn btn-link" href="{{ route('login') }}">
                     {{ __('¿Necesitas un nuevo código?') }}
                  </a>
               </div>

               

               <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">
                     {{ __('Validar código') }}
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection