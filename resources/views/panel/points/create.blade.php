@extends('layouts.panel')

@section('title', 'Agregar punto AEEP')
@section('sub_title', 'Aquí podrás ingresar un nuevo punto para el AEEP')
@section('content')

<section>
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card shadow-sm card-preview px-4">
				<div class="card-inner mt-3">
						<form class="row g-3" action="{{ route('panel.spaces.store') }}" method="POST">
						@csrf
							<div class="col-md-4">
								<label  class="form-label">Código del punto</label>
								<input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}" placeholder="Ej: SE-CBM-01">
									@error('code')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
							</div>
							<div class="col-md-4">
								<label class="form-label">Dirección</label>
								<input type="text" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ old('address') }}" name="address" placeholder="Ingresa la dirección">
									@error('address')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
							</div>
							<div class="col-md-4">
								<label class="form-label">Área</label>
								<input type="text" class="form-control @error('area') is-invalid @enderror" id="area" name="area" value="{{ old('area') }}" placeholder="Ingresa el área en metros cuadrados">
										@error('area')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
							</div>
							<div class="col-md-5">
								<label  class="form-label">Coordenada X</label>
								<input type="text" class="form-control @error('x_coordinate') is-invalid @enderror" id="x_coordinate" value="{{ old('x_coordinate') }}" name="x_coordinate" placeholder="Ingrese coordenada X">
										@error('x_coordinate')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
							</div>
							<div class="col-md-5">
								<label class="form-label">Coordenada Y</label>
								<input type="text" class="form-control @error('y_coordinate') is-invalid @enderror" id="y_coordinate" value="{{ old('y_coordinate') }}" name="y_coordinate" placeholder="Ingrese coordenada Y">
										@error('y_coordinate')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
							</div>
							<div class="col-md-4">
								<label class="form-label">Zona Geoeconómica</label>
								<select class="form-select @error('geoeconomic_zone_id') is-invalid @enderror" name="geoeconomic_zone_id" required>
									<option value="" selected>Elegir...</option>
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

							<div class="col-md-4">
								<label for="inputState" class="form-label">Tipo de mixtura</label>
								<select class="form-select @error('mixture_id') is-invalid @enderror" id="mixture_id" name="mixture_id" required>
									<option value="" selected>Elegir...</option>
									@foreach($mixtures as $mixture)
										<option value="{{ $mixture->id }}">{{ $mixture->name }}</option>
									@endforeach
								</select>
								@error('mixture_id')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="col-sm-8 mx-auto mt-4 mb-4 text-center">
								<button type="submit" class="btn-principal">Registrar</button>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection