@extends('layouts.panel')

@section('title', 'Todos los puntos AEEP')
@section('sub_title', 'Esta es la lista de todos los puntos de AEEP que hemos dispuesto para su uso.')
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
						<th scope="col">Código QR</th>
						<th scope="col">Mixtura</th>
						<th scope="col">Reservar</th>
					</tr>
				</thead>

				<tbody>
					@foreach($spaces as $space)
					<tr>
						<th scope="row">
							<a href="{{ route('panel.spaces.show', $space) }}" >
								{{$space->code}}
							</a>
						</th>
						<td>{{$space->address}}</td>
						<td>{{$space->area}}</td>
						<td> 
							<a href="{{ route('panel.qr.show', $space) }}" target="_blank">
								Ver QR
							</a>
						</td>
						<td>{{$space->mixture->name}}</td>
						<td>
							<a href="{{ route('panel.spaces.show', $space) }}" class="btn btn-outline-dark btn-sm">
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