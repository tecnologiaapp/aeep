@extends('layouts.app')

@section('content')
   <div class="nk-block nk-block-middle nk-auth-body wide-xs">
      <div class="brand-logo pb-4 text-center">
         <a href="{{ url('/') }}" class="logo-link">
            <!-- <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">

            <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark"> -->
            Puntos de aprovechamiento económico
         </a>
      </div>

      <div class="card card-bordered">
         <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
               <div class="nk-block-head-content">
                  <h4 class="nk-block-title">Registrarse</h4>
                  <div class="nk-block-des">
                     <p>Crear una nueva cuenta</p>
                  </div>
               </div>
            </div>

            <form method="POST" action="{{ route('register') }}">
               @csrf
               <div class="form-group">
                  <label class="form-label" for="name">Nombre completo</label>
                  <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" name="name" placeholder="Ingresa tu nombre completo">
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="form-group">
                  <label class="form-label" for="email">Correo electrónico</label>
                  <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" placeholder="Ingresa tu correo electrónico">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="form-group">
                  <label class="form-label" for="document_type">Tipo de documento</label>
                  <select class="form-control form-control-lg @error('document_type') is-invalid @enderror" id="document_type" name="document_type">
                     @foreach($document_types as $document_type)
                     <option value="{{ $document_type->id }}">{{ $document_type->name }}</option>
                     @endforeach
                  </select>
                  @error('document_type')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="form-group">
                  <label class="form-label" for="document_number">Número de documento</label>
                  <input type="number" class="form-control form-control-lg @error('document_number') is-invalid @enderror" id="document_number" name="document_number" placeholder="Ingresa el número de tu documento">
                  @error('document_number')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="form-group">
                  <label class="form-label" for="password">Contraseña</label>
                  <div class="form-control-wrap">
                     <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                     </a>
                     <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" placeholder="Ingresa una contraseña">
                     @error('password')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>

               <div class="text-center mt-2 mb-3">
                  <div class="form-group">
                     <h6>¿Cuentas con una empresa legalmente constituida?</h6>
                  </div>

                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="company" id="companyYes" value="yes">
                     <label class="form-check-label" for="companyYes">Sí</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="company" id="companyNo" value="no">
                     <label class="form-check-label" for="companyNo">No</label>
                  </div>
               </div>

               <div id="isCompany" class="mb-3" style="display: none;">
                  <div class="form-group">
                     <label class="form-label" for="name">NIT</label>
                     <input type="text" class="form-control form-control-lg @error('nit') is-invalid @enderror" id="nit" name="nit"  placeholder="NIT">
                     @error('nit')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group mb-5">
                     <label class="form-label" for="email">Razón social</label>
                     <input type="text" class="form-control form-control-lg @error('company_name') is-invalid @enderror" id="company_name" name="company_name"  placeholder="Ingresa el nombre de tu empresa">
                     @error('company_name')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>

               <div class="form-group">
                  <div class="custom-control custom-control-xs custom-checkbox">
                     <input type="checkbox" class="custom-control-input @error('company_name') is-invalid @enderror" id="tyc">
                     <label class="custom-control-label" for="tyc">Acepto las <a href="#">políticas de privacidad </a> y el <a href="#">tratamiento de datos personales</a>.</label>
                  </div>
               </div>

               <div class="form-group">
                  <button class="btn btn-lg btn-primary btn-block">Crear mi cuenta</button>
               </div>
            </form>

            <div class="form-note-s2 text-center pt-4">¿Ya tienes una cuenta? 
               <a href="{{ route('login') }}"><strong>Inicia sesión</strong></a>
            </div>
         </div>
      </div>
   </div>
@endsection

@push('scripts')
   <script type="text/javascript">
      $("input:radio[name=company]").click(function () { 
         let selected_option = $('input:radio[name=company]:checked').val();

         if (selected_option == 'yes') {
            $('#isCompany').fadeIn(1000);
         } else {
            $('#isCompany').fadeOut(1000);
         }
      });
   </script>
@endpush

{{-- @extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}