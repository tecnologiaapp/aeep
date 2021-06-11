@extends('layouts.panel')

@section('title', 'Terminando el registro')
@section('sub_title', 'Para terminar el proceso de registro deberás adjuntar la documentación necesaria')

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

            <form enctype="multipart/form-data" action="{{ route('user.documents.store') }}" method="POST">
               @csrf

               <div class="form-group mb-3">
                  <label class="form-label" for="document_copy">Fotocopia del documento de identificación</label>
                  <input type="file" 
                  accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf, image/*" class="form-control form-control-lg @error('document_copy') is-invalid @enderror" id="document_copy" name="document_copy" placeholder="Ingresa tu correo electrónicos">
                  @error('document_copy')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="form-group mb-3">
                  <label class="form-label" for="address">Dirección de residencia</label>
                  <input type="text" class="form-control form-control-lg @error('address') is-invalid @enderror" id="address" name="address" value="{{ Auth::user()->address }}" placeholder="Ingresa tu dirección">
                  @error('address')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="form-group mb-3">
                  <label class="form-label" for="phone">Número de teléfono</label>
                  <input type="text" class="form-control form-control-lg @error('phone') is-invalid @enderror" value="{{ Auth::user()->phone }}" id="phone" name="phone" placeholder="Ingresa tu número de teléfono">
                  @error('phone')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="form-group">
                  <label class="form-label" for="population_group_id">Grupo poblacional</label>
                  <select class="form-control" name="population_group_id">
                     @foreach($groups as $group)
                     <option @if(Auth::user()->population_group_id == $group->id) selected @endif value="{{ $group->id }}">{{ $group->name }}</option>
                     @endforeach
                  </select>
               </div>               

               <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">
                     {{ __('Terminar proceso') }}
                  </button>
               </div>
            </form>
         </div>
      </div>

      <div class="mt-3">
         <h6>Archivos que has subido</h6>

         <ul>
            @foreach($files as $file)
            <li>* {{ $file->document_title }}</li>
            @endforeach
         </ul>
      </div>
   </div>
@endsection