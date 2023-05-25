@extends('layouts.panel')
@section('title', 'Liquidación para ' . $space->code)
@section('content')

	<div class="col-sm-8 offset-2 mb-5">
		<div class="alert alert-warning text-center">
			<b>¡Atención!</b> La venta de licores es una actividad no permitida
		</div>
	</div>
	<div class="row justify-content-center">
<div class="card card-preview col-md-10">
	<div class="card-inner mt-3">
		

			<div class="col-sm-12 col-xl-8 offset-xl-2 mb-2">
				<div class="text-center">
					<h5>LIQUIDACIÓN</h5>
					<div>Nit. 890.905.211-1</div>
					<div>Plaza de La Libertad de Medellín, Calle 44 # 55A-31, Medellín, Antioquia</div>
					<div>Tel. (+57) (4) 448 1740 Ext 100</div>
				</div>
				
				<div class="card-header">
					Liquidación para {{$space->code}}
					<strong>{{$request_date}}</strong> 
					<span class="float-right"> <strong>Estado:</strong> Pendiente de pago</span>
				</div>

				<div class="card-body">
					<div class="row mb-4">
						<div class="col-sm-12">
							<div class="text-right">
								Fecha límite de pago: <b>Pago inmediato</b>
							</div>
							<div><b>Nombre o razón social: </b> {{ Auth::user()->name }}</div>
							<div><b>Cédula o NIT:</b> {{ Auth::user()->document_number }}</div>
							<div><b>Dirección:</b> {{ $space->address }}</div>
							<div><b>Código de radicado:</b> 5471920500006005{{ rand(01, 99) }}</div>
						</div>
					</div>

					<div class="table-responsive-sm">

						<table class="table table-striped">
							<thead>
								<tr>
									<th class="center">Fecha</th>
									<th>Dirección</th>
									<th>Área a ocupar</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td class="center">{{$request_date}}</td>
									<td class="left strong">{{ $space->address }}</td>
									<td class="left strong">{{ $space->area }}</td>
								</tr>

							</tbody>
						</table>

						<div class="mt-3">
							El valor a pagar es de <b>${{ number_format($grand_total) }}</b> pesos. Este valor se calcula por el día solicitado.
						</div>

						{{-- <table class="table table-striped">
							<thead>
								<tr>
									<th class="center">Código Renta/Ingreso</th>
									<th>Concepto de cobro</th>
									<th>Valor</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td class="center">84858776</td>
									<td class="left strong">Costo de sostenimiento</td>
									<td class="left">${{ number_format($sustaining_cost) }}</td>
								</tr>

								<tr>
									<td class="center">23658776</td>
									<td class="left strong">Base del cálculo</td>
									<td class="left">${{ number_format($calculation_basis) }}</td>
								</tr>

								<tr>
									<td class="center">83658712</td>
									<td class="left strong">Uso del suelo</td>
									<td class="left">${{ number_format($floor_use) }}</td>
								</tr>

								<tr>
									<td class="center">43658556</td>
									<td class="left strong">Valor de actividad específica</td>
									<td class="left">${{ number_format($activity_value) }}</td>
								</tr>

								<tr>
									<td class="center">16658111</td>
									<td class="left strong">Temporada</td>
									<td class="left">${{ number_format($period_cost) }}</td>
								</tr>

								<tr>
									<td class="center">11658567</td>
									<td class="left strong">Impacto</td>
									<td class="left">${{ number_format($impact) }}</td>
								</tr>
							</tbody>
						</table> --}}
					</div>

					<div class="row">
						<div class="col-lg-4 col-sm-5 ml-auto">
							<table class="table table-clear">
								<tbody>
									<tr>
										<td class="left">
											<strong>Subtotal</strong>
										</td>

										<td class="right">${{ number_format($subtotal) }}</td>
									</tr>

									<tr>
										<td class="left">
											<strong>IVA (19%)</strong>
										</td>

										<td class="right">${{ number_format($subtotal_iva) }}</td>
									</tr>
									
									<tr>
										<td class="left">
											<strong>Total a pagar</strong>
										</td>
										<td class="right">
											<strong>${{ number_format($grand_total) }}</strong>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="row">
				<div class="col-sm-12 d-flex justify-content-between mt-2 mb-4">
					<a href="{{ route('panel.spaces.show', $space) }}" class="btn-red">
					Rechazar proceso
					</a>
					<form method="post" action="{{ route('panel.spaces.booking.confirm.store', $space) }}">
					@csrf
					<button type="submit" class="btn-blue">
						Continuar con el pago
					</button>
					</form>
				</div>
				</div>
				

			</div>

		</div>

		
	</div>	
</div>
<!-- .card-preview -->
@endsection
