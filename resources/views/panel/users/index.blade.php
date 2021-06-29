@extends('layouts.panel')

@section('title', 'Todos los usuarios registrados')
@section('sub_title', 'Esta es la lista de todos los usuarios inscritos en la plataforma.')
@section('content')

<div class="nk-block">
	<div class="card shadow-sm card-preview">
		<div class="row g-gs">
	   	<div class="table-responsive">
				<!-- Headline -->
				<div class="add-listing-headline">

					<div class="nk-tb-list is-separate mb-3">
					   <div class="nk-tb-item nk-tb-head">
					      <div class="nk-tb-col tb-col-mb"><span class="sub-text">Nombre completo</span></div>
					      <div class="nk-tb-col tb-col-md"><span class="sub-text">Correo electrónico</span></div>
					      <div class="nk-tb-col tb-col-lg"><span class="sub-text">Cuenta verificada</span></div>
					      <div class="nk-tb-col tb-col-lg"><span class="sub-text">Documento</span></div>
					      <div class="nk-tb-col tb-col-md"><span class="sub-text">Tipo de población</span></div>
					      <div class="nk-tb-col tb-col-md"><span class="sub-text">Información extra</span></div>
					      <div class="nk-tb-col tb-col-md"><span class="sub-text">Acciones</span></div>
					      <div class="nk-tb-col nk-tb-col-tools">

					         <ul class="nk-tb-actions gx-1 my-n1">
					            <li>
					               <div class="drodown">
					                  <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
					                  {{-- <div class="dropdown-menu dropdown-menu-right">
					                     <ul class="link-list-opt no-bdr">
					                        <li>
					                           <a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a>
					                        </li>
					                        <li>
					                           <a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a>
					                        </li>
					                        <li>
					                           <a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a>
					                        </li>
					                        <li>
					                           <a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Password</span></a>
					                        </li>
					                     </ul>
					                  </div> --}}
					               </div>
					            </li>
					         </ul>
					      </div>
					   </div>

					   @foreach($users as $user)
					   <div class="nk-tb-item">
					      <div class="nk-tb-col tb-col-mb">
					         <span class="tb-amount">
					         	<a href="{{ route('panel.users.show', $user) }}" >
										{{ $user->name }}
									</a>
					         </span>
					      </div>

					      <div class="nk-tb-col tb-col-mb">
					         {{ $user->email }}
					      </div>

					      <div class="nk-tb-col tb-col-mb">
					         @if($user->active == 1) Verificado @else No verificado @endif
					      </div>

					      <div class="nk-tb-col tb-col-mb">
					         {{$user->document_type}}: {{$user->document_number}}
					      </div>

					      <div class="nk-tb-col tb-col-mb">
					         <span>{{$user->population_group_id}}</span>
					      </div>

					      {{-- <div class="nk-tb-col tb-col-mb">
					         <span class="tb-status text-success">{{ __($property->status) }}</span>
					      </div> --}}

					      <div class="nk-tb-col nk-tb-col-tools">
					         <ul class="nk-tb-actions gx-1">
					            <li>
					               <div class="drodown">
					                  <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
					                  <div class="dropdown-menu dropdown-menu-right" style="">
					                     <ul class="link-list-opt no-bdr">
					                        <li>
					                           {{-- <a href="{{ route('user.properties.show', $property) }}"><em class="icon ni ni-eye"></em><span>Ver propiedad</span></a> --}}
					                        </li>
					                        <li>
					                           {{-- <a href="{{ route('panel.properties.edit', $property) }}"><em class="icon ni ni-edit"></em><span>Editar propiedad</span></a> --}}
					                        </li>
					                        <li>
					                           <a href="#"><em class="icon ni ni-na"></em><span>Ocultar</span></a>
					                        </li>
					                     </ul>
					                  </div>
					               </div>
					            </li>
					         </ul>
					      </div>
					   </div>
					   @endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- 
<div class="card card-preview">
	<div class="card-inner mt-3">
		<div class="col-sm-12">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Nombre completo</th>
						<th scope="col">Correo electrónico</th>
						<th scope="col">Cuenta verificada</th>
						<th scope="col">Documento</th>
						<th scope="col">Tipo de población</th>
						<th scope="col">Información extra</th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
					<tr>
						<th scope="row">
							<a href="{{ route('panel.users.show', $user) }}" >
								{{ $user->name }}
							</a>
						</th>
						<td>{{ $user->email }}</td>
						<td>@if($user->active == 1) Verificado @else No verificado @endif </td>
						<td>{{$user->document_type}}: {{$user->document_number}}</td>
						<td> 
							{{$user->population_group_id}}
						</td>
						<td>@if($user->nit) Tiene una empresa @else No tiene una empresa @endif</td>
					</tr>
					@endforeach
				</tbody>
			</table>  

		</div>
	</div>
</div><!-- .card-preview --> --}}
@endsection