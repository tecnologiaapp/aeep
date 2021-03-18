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
						<th scope="col">Código QR</th>
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
							<a href="https://upload.wikimedia.org/wikipedia/commons/d/d7/Commons_QR_code.png" target="_blank">
								Ver QR
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