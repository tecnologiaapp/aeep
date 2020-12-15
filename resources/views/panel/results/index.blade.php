@extends('layouts.panel')
@section('title', 'Liquidación para ' . $space->code)
@section('content')

	<div class="col-sm-8 offset-2 mb-5">
		<div class="alert alert-danger text-center">
			<b>¡Atención!</b> La venta de licores es una actividad no permitida
		</div>
	</div>

<div class="card card-preview">
	<div class="card-inner mt-3">
		<div class="row">

			<div class="col-sm-12 col-xl-8 offset-xl-2 mb-2">
				<div class="text-center">
					<h5>DOCUMENTO DE COBRO</h5>
					<div>Nit. 890.905.211-1</div>
					<div>Calle 44 N° 52 - 165 Medellín</div>
					<div>Tel. 385 55 55</div>
				</div>

				<div class="text-left">
					
					
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
								Fecha límite de pago: {{ \Carbon\Carbon::now()->addHours(2) }}
							</div>
							<div><b>Nombre o razón social: </b> {{ Auth::user()->name }}</div>
							<div><b>Cédula o NIT:</b> {{ Auth::user()->document_number }}</div>
							<div><b>Dirección:</b> {{ $space->address }}</div>
							<div><b>Código de dirección:</b> 5471920500006005{{ rand(01, 99) }}</div>
						</div>
					</div>

					<div class="table-responsive-sm">
						<table class="table table-striped">
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
						</table>
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

				<div class="col-sm-12 text-right mt-4">

					<form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu" id="payForm">
                  <input name="merchantId" type="hidden" value="508029">
                  <input name="accountId" type="hidden" value="512321" >
                  <input name="description" type="hidden" value="Pago de AEEP">
                  <input name="referenceCode" type="hidden" value="{{ rand(1,100) }} {{ Str::random(100)  }}">
                  <input name="extra1" type="hidden" value="{{ rand(1,100) }} {{ Str::random(100)  }}">
                  <input name="amount" type="hidden" value="{{ $grand_total }}">
                  <input name="tax" type="hidden" value="19">
                  <input name="taxReturnBase" type="hidden" value="0">
                  <input name="currency" type="hidden" value="COP">
                  <input name="algorithmSignature" type="hidden" value="SHA256">
                  <input name="signature" type="hidden" value="34fdss">
                  <input name="test" type="hidden" value="0">
                  <input name="buyerFullName" type="hidden" value="{{ Auth::user()->name }}">
                  <input name="buyerEmail" type="hidden" value="{{ Auth::user()->email }}">
                  <input name="responseUrl"    type="hidden"  value="https://evaportal.co/pagar/v1/response">
                  <input name="confirmationUrl" type="hidden"  value="https://evaportal.co/pagar/v1/confirmation">
                  <input name="shippingCity" type="hidden" value="Medellin">
                  <input name="shippingAddress" type="hidden" value="{{ $space->address }}">
                  <input name="shippingCountry" type="hidden" value="CO">

                  <button type="submit" class="btn btn-dark">
							Ir a pagar
						</button>
               </form>


					{{-- <button type="submit" class="btn btn-dark">
						Ir a pagar
					</button> --}}
				</div>

			</div>

		</div>

		
	</div>	
</div><!-- .card-preview -->
@endsection
