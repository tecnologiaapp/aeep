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
                  Tu información fue enviada exitosamente. Te notificaremos al correo <b>{{ Auth::user()->email }}</b> cuando validemos tu información y activemos tu cuenta.
               </div>
            </div>

            {{-- <form method="get" action="{{ route('finish') }}">
               @csrf --}}

            

               <div class="form-group">
                  <a href="" class="btn btn-primary btn-block">
                     {{ __('Cerrar') }}
                  </a>
                  {{-- <button type="submit" >
                     
                  </button> --}}
               </div>
            {{-- </form> --}}
         </div>
      </div>
   </div>
@endsection