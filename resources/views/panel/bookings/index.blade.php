@extends('layouts.panel')

@section('title', 'Mis reservas')
@section('sub_title', 'Esta es la lista de las reservas que has hecho.')
@section('content')

<section>
	
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
								<th >Código del punto</th>
								<th >Fecha</th>
								<th >Referencia</th>
								<th >Estado</th>
								<th >Actividad económica</th>
								<th >Dirección</th>
								<th >Ver detalles</th>
                            </tr>
                        </thead>
                        <tbody>
							@foreach($bookings as $booking)
                            <tr>
								<th>{{$booking->space->code}}</th>
								<td>{{$booking->date}}</td>
								<td>{{$booking->reference}}</td>
								<td>{{ __($booking->status) }}</td>
								<td>{{$booking->activity->name}}</td>
								<td>{{$booking->space->address}}</td>
								<td>
									<a href="{{ route('panel.spaces.show', $booking->space) }}" class="btn-principal">
										Ver detalles
									</a>
								</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
				<div>
					{{ $bookings->links() }}
				</div>
            </div>
        </div>
    </div>
</section>

@endsection