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
                  <div class="alert alert-success">
                     Adjunta tu documento de identidad y completa la información para terminar el proceso
                  </div>
               </div>
            </div>

            {{-- <form method="get" action="{{ route('finish') }}">
               @csrf --}}

               <div class="form-group mb-3">
                  <label class="form-label" for="document_copy">Fotocopia del documento de identificación</label>
                  <input type="file" class="form-control form-control-lg @error('document_copy') is-invalid @enderror" id="document_copy" name="document_copy" placeholder="Ingresa tu correo electrónicos">
                  @error('document_copy')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="form-group mb-3">
                  <label class="form-label" for="address">Dirección de residencia</label>
                  <input type="text" class="form-control form-control-lg @error('address') is-invalid @enderror" id="address" name="address" placeholder="Ingresa tu dirección">
                  @error('address')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="form-group mb-3">
                  <label class="form-label" for="address">Número de teléfono</label>
                  <input type="text" class="form-control form-control-lg @error('address') is-invalid @enderror" id="address" name="address" placeholder="Ingresa tu número de teléfono">
                  @error('address')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>


               <div class="form-group">
                  <label class="form-label" for="password">Grupo poblacional</label>
                  <select class="form-control">
                     <option value="1">Grupo poblacional 1</option>
                     <option value="2">Grupo poblacional 2</option>
                     <option value="3">Grupo poblacional 3</option>
                  </select>
               </div>               

               <div class="form-group">
                  <a href="{{ route('finish.process') }}" class="btn btn-primary btn-block">
                     {{ __('Terminar proceso') }}
                  </a>
                  {{-- <button type="submit" >
                     
                  </button> --}}
               </div>
            {{-- </form> --}}
         </div>
      </div>
   </div>
@endsection