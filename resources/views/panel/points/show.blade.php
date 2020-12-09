@extends('layouts.panel')

@push('styles')
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
@endpush

@section('title', $space->code)
@section('content')

<div class="card card-preview">
	<div class="card-inner mt-3">
		<form action="#" method="POST">
			@csrf
			<div class="col-sm-12">
				<div class="row">
					 <div id="mapid"></div>


					<div class="col-sm-12 col-xl-4 mb-2">
						<p><b>Dirección</b>: {{ $space->address }}</p>
						<p><b>Área</b>: {{ $space->area }}</p>
					</div>

					<div class="col-sm-12 col-xl-4 mb-2">
						<div class="form-group">
		               <label class="form-label" for="date">Actividad a realizar</label>
		               <select class="form-control form-control-lg @error('activity') is-invalid @enderror" id="activity" name="activity">
		               	<option>Licores</option>
		               	<option>Comidas</option>
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

 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

   <script type="text/javascript">
   	var mymap = L.map('mapid').setView([51.505, -0.09], 13);
   </script>

@endpush