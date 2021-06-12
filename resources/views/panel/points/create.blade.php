@extends('layouts.panel')

@section('title', 'Agregar punto AEEP')
@section('sub_title', 'Aquí podrás ingresar un nuevo punto para el AEEP')
@section('content')

<div class="card shadow-sm card-preview">
	<div class="card-inner mt-3">
		<form action="{{ route('panel.spaces.store') }}" method="POST">
			@csrf
			<div class="col-sm-10 col-md-10 offset-md-1">
				<div class="row">
					<div class="row">
						<div class="col-sm-12 col-md-6 col-xxl-4 mb-2">
							<div class="form-group">
			               <label class="form-label" for="name">Código del punto</label>
			               <input type="text" class="form-control form-control-lg @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}" placeholder="Ej: SE-CBM-01">
			               @error('code')
			               <span class="invalid-feedback" role="alert">
			                  <strong>{{ $message }}</strong>
			               </span>
			               @enderror
			            </div>
						</div>

						<div class="col-sm-12 col-md-6 col-xxl-8 mb-2">
							<div class="form-group">
			               <label class="form-label" for="name">Dirección</label>
			               <input type="text" class="form-control form-control-lg @error('address') is-invalid @enderror" id="address" value="{{ old('address') }}" name="address" placeholder="Ingresa la dirección">
			               @error('address')
			               <span class="invalid-feedback" role="alert">
			                  <strong>{{ $message }}</strong>
			               </span>
			               @enderror
			            </div>
						</div>

						<div class="col-sm-12 col-md-6 col-xxl-4 mb-2">
							<div class="form-group">
			               <label class="form-label" for="name">Coordenada X</label>
			               <input type="text" class="form-control form-control-lg @error('x_coordinate') is-invalid @enderror" id="x_coordinate" value="{{ old('x_coordinate') }}" name="x_coordinate">
			               @error('x_coordinate')
			               <span class="invalid-feedback" role="alert">
			                  <strong>{{ $message }}</strong>
			               </span>
			               @enderror
			            </div>
						</div>

						<div class="col-sm-12 col-md-6 col-xxl-4 mb-2">
							<div class="form-group">
			               <label class="form-label" for="name">Coordenada Y</label>
			               <input type="text" class="form-control form-control-lg @error('y_coordinate') is-invalid @enderror" id="y_coordinate" value="{{ old('y_coordinate') }}" name="y_coordinate">
			               @error('y_coordinate')
			               <span class="invalid-feedback" role="alert">
			                  <strong>{{ $message }}</strong>
			               </span>
			               @enderror
			            </div>
						</div>

						<div class="col-sm-12 col-md-4 col-xxl-4 mb-2">
							<div class="form-group">
			               <label class="form-label" for="name">Área</label>
			               <input type="text" class="form-control form-control-lg @error('area') is-invalid @enderror" id="area" name="area" value="{{ old('area') }}" placeholder="Ingresa el área en metros cuadrados">
			               @error('area')
			               <span class="invalid-feedback" role="alert">
			                  <strong>{{ $message }}</strong>
			               </span>
			               @enderror
			            </div>
						</div>

						<div class="col-sm-12 col-md-4 col-xxl-4 mb-2">
							<div class="form-group">
			               <label class="form-label" for="name">Zona Geoeconómica</label>
			               <select class="form-control form-control-lg @error('geoeconomic_zone_id') is-invalid @enderror" name="geoeconomic_zone_id">
			               	@foreach($geoeconomic_zones as $zone)
			                  <option value="{{ $zone->id }}">${{ number_format($zone->price) }}</option>
			                  @endforeach
			               </select>
			               @error('geoeconomic_zone_id')
			               <span class="invalid-feedback" role="alert">
			                  <strong>{{ $message }}</strong>
			               </span>
			               @enderror
			            </div>
						</div>

						<div class="col-sm-12 col-md-4 col-xxl-4 mb-2">
							<div class="form-group">
			               <label class="form-label" for="mixture_id">Tipo de mixtura</label>
			               <select class="form-control form-control-lg @error('mixture_id') is-invalid @enderror" id="mixture_id" name="mixture_id">
			                  @foreach($mixtures as $mixture)
			                  <option value="{{ $mixture->id }}">{{ $mixture->name }}</option>
			                  @endforeach
			               </select>
			               @error('mixture')
			               <span class="invalid-feedback" role="alert">
			                  <strong>{{ $message }}</strong>
			               </span>
			               @enderror
			            </div>
						</div>

						<div class="col-sm-12 col-md-4 col-xxl-4 mb-2 text-right mt-5">
							<button type="submit" class="btn btn-dark">
								Guardar
							</button>
						</div>
					</div>
				</div>	
			</div>
		</form>
	</div>
</div><!-- .card-preview -->
@endsection