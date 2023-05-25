@extends('layouts.panel')
@section('title', $space->code)

@push('styles')
	<!-- Agrega las hojas de estilo CSS de Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

<!-- Agrega los archivos JavaScript de Leaflet -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endpush

@section('content')

<div class="row justify-content-center">
	<div class="card card-preview col-md-10">
		<div class="card-inner mt-3">
			<form action="{{ route('panel.spaces.booking.store', $space) }}" method="POST">
				@csrf
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-12 shadow-sm p-0 mb-5">
							<div id="mapid" style="width: 100%; height: 500px;"></div>
						</div>

						<div class="col-sm-12 col-xl-4 mb-2">
							<p><b>Dirección</b>: {{ $space->address }}</p>
							<p><b>Área</b>: {{ $space->area }} m2</p>
						</div>

						<div class="col-sm-12 col-xl-4 mb-2">
							<div class="form-group">
						<label class="form-label" for="date">Actividad a realizar</label>
						<select class="form-control @error('activity') is-invalid @enderror" id="activity" name="activity" required>
							@foreach($economic_activities as $activity)
							<option value="{{ $activity->id }}">{{ $activity->name }}</option>
							@endforeach
						</select>
						@error('activity')
						<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
						</span>
						@enderror
						</div>
						</div>

						<div class="col-sm-12 col-xl-4 mb-2">
							<div class="form-group">
								<label class="form-label" for="date">Fecha a reservar</label>
								<input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" required>

								@error('date')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
						</div>
						</div>

						<div class="col-sm-12 mx-auto mt-4 mb-4 text-center">
							<a class="btn-red" href="{{ route('panel.spaces.index') }}">Cancelar</a>
							<button type="submit" class="btn-blue">
								Continuar
							</button>
						</div>
					</div>	
				</div>
			</form>
		</div>
	</div>
	<!-- .card-preview -->
</div>

@endsection

@push('scripts')

<script>

var mymap = L.map('mapid').setView([{{ $space->x_coordinate }}, {{ $space->y_coordinate }}], 15);

// Agrega un tile layer a tu mapa
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 20,
	id: 'mapbox/streets-v11',
	tileSize: 512,
	zoomOffset: -1
}).addTo(mymap);

L.marker([{{ $space->x_coordinate }}, {{ $space->y_coordinate }}]).addTo(mymap)
.bindPopup("<b> {{ $space->address }} ({{ $space->code }}) </b>").openPopup();
</script>
@endpush


