@extends('layouts.panel')

@section('title', 'Mis reservas')
@section('sub_title', 'Esta es la lista de las reservas que has hecho.')
@section('content')

<div class="card card-preview">
	<div class="card-inner mt-3">
		<div class="col-sm-12">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Código del punto</th>
						<th scope="col">Fecha</th>
						<th scope="col">Referencia</th>
						<th scope="col">Estado</th>
						<th scope="col">Actividad económica</th>
						<th scope="col">Dirección</th>
						<th scope="col">Ver detalles</th>
					</tr>
				</thead>

				<tbody>
					@foreach($bookings as $booking)
					<tr>
						<th scope="row">{{$booking->space->code}}</th>
						<td>{{$booking->date}}</td>
						<td>{{$booking->reference}}</td>
						<td>{{ __($booking->status) }}</td>
						<td>{{$booking->activity->name}}</td>
						<td>{{$booking->space->address}}</td>
						<td>
							<a href="{{ route('panel.spaces.show', $booking->space) }}" class="btn btn-outline-dark btn-sm">
								Ver detalles
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>  

		</div>
	</div>
</div><!-- .card-preview -->
@endsection