@extends('layouts.panel')
@section('title', $space->code)
@section('content')

<div class="card card-preview">
	<div class="card-inner mt-3">
		<form action="{{ route('panel.spaces.booking.store', $space) }}" method="POST">
			@csrf
			<div class="col-sm-12">
				<div class="row">

					<div class="col-sm-12 mb-4">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.112873475963!2d-75.5712545846048!3d6.248854428027271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428ff50bf45ad%3A0xbefa9e6d18bf02c1!2sBolivar%20%2348-72%20a%2048-104%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1607898961848!5m2!1ses!2sco" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
