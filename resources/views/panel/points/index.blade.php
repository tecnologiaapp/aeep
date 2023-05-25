@extends('layouts.panel')

@section('title', 'Todos los puntos AEEP')
@section('sub_title', 'Esta es la lista de todos los puntos de AEEP que hemos dispuesto para su uso.')
@section('content')

<section>
	
    <div class="row justify-content-center">
        <div class="pb-5">
        <iframe src="https://storymaps.arcgis.com/stories/671e9a41f5e34da386d76100c10c8454" frameborder="0" width="100%"  height="500px;"></iframe>
        </div>
        
        <div class="col-md-10">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Dirección</th>
                                <th>Área</th>
                                <th>Código QR</th>
                                <th>Mixtura</th>
                                <th>Reservar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($spaces as $space)
                            <tr>
                                <td>
                                    <a href="{{ route('panel.spaces.show', $space) }}">
                                        {{$space->code}}
                                    </a>
                                </td>
                                <td>{{$space->address}}</td>
                                <td>{{$space->area}}</td>
                                <td>
                                    <a class="btn-principal" href="{{ route('panel.qr.show', $space) }}" target="_blank">
                                        Ver QR
                                    </a>
                                </td>
                                <td>{{$space->mixture->name}}</td>
                                <td>
                                    <a class="btn-blue" href="{{ route('panel.spaces.show', $space) }}">
                                        Reservar
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
				<div>
					{{ $spaces->links() }}
				</div>
            </div>
        </div>
    </div>
</section>

@endsection