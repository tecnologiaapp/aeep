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
                  <label class="form-label" for="know">¿Cómo te enteraste del aplicativo?</label>
                  <select class="form-control form-control-lg @error('know') is-invalid @enderror" id="know" name="know">
                     <option value="Me lo recomendó un conocido">Me lo recomendó un conocido</option>
                     <option value="Me informaron en un evento">Me informaron en un evento</option>
                     <option value="Publicidad (TV, Redes sociales, papel)">Publicidad (TV, Redes sociales, papel)</option>
                     <option value="Información directa de la AGENCIA APP" selected>Información directa de la AGENCIA APP</option>
                     <option value="Otro">Otro</option>
                  </select>
                  @error('know')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
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
                     <input type="checkbox" class="custom-control-input @error('company_name') is-invalid @enderror" checked id="tyc">
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
            $('#isCompany').fadeIn(200);
         } else {
            $('#isCompany').fadeOut(200);
         }
      });
   </script>
@endpush