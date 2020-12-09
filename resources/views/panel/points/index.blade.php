@extends('layouts.panel')

@section('title', 'Todos los puntos AEEP')
@section('content')

<div class="card card-preview">
	<div class="card-inner mt-3">
		<div class="col-sm-12">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Código</th>
						<th scope="col">Dirección</th>
						<th scope="col">Área</th>
						<th scope="col">Ver en mapa</th>
						<th scope="col">Mixtura</th>
						<th scope="col">Reservar</th>
					</tr>
				</thead>

				<tbody>
					@foreach($spaces as $space)
					<tr>
						<th scope="row">{{$space->code}}</th>
						<td>{{$space->address}}</td>
						<td>{{$space->area}}</td>
						<td>
							<a href="https://www.google.com/maps/&#64;{{$space->x_coordinate}},{{$space->y_coordinate}},20z" target="_blank">
								Ver en mapa
							</a>
						</td>
						<td>{{$space->mixture->name}}</td>
						<td>
							<a href="{{ route('panel.spaces.show', $space) }}">
								Reservar
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