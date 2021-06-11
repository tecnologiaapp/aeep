@extends('layouts.panel')
@section('title', $space->code)

@push('styles')
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
@endpush

@section('content')

<div class="card card-preview">
	<div class="card-inner mt-3">
		<form action="{{ route('panel.spaces.booking.store', $space) }}" method="POST">
			@csrf
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-12 shadow-sm p-0 mb-5">
						<div id="mapid" style="width: 100%; height: 600px;"></div>
					</div>

					<div class="col-sm-12 col-xl-4 mb-2">
						<p><b>Dirección</b>: {{ $space->address }}</p>
						<p><b>Área</b>: {{ $space->area }}</p>
					</div>

					<div class="col-sm-12 col-xl-4 mb-2">
						<div class="form-group">
		               <label class="form-label" for="date">Actividad a realizar</label>
		               <select class="form-control form-control-lg @error('activity') is-invalid @enderror" id="activity" name="activity">
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
							<input type="date" class="form-control form-control-lg @error('date') is-invalid @enderror" id="date" name="date">

							@error('date')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
		            </div>
					</div>

					<div class="col-sm-12 text-right mt-4">
						<button type="submit" class="btn btn-dark">
							Continuar
						</button>
					</div>
				</div>	
			</div>
		</form>
	</div>
</div><!-- .card-preview -->
@endsection

@push('scripts')
<script>

	var mymap = L.map('mapid').setView([{{ $space->x_coordinate }}, {{ $space->y_coordinate }}], 15);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 20,
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

	L.marker([{{ $space->x_coordinate }}, {{ $space->y_coordinate }}]).addTo(mymap)
	.bindPopup("<b> {{ $space->address }} ({{ $space->code }}) </b>").openPopup();
</script>

@endpush


