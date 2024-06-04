@extends('company.admin_layout')

@section('title') Administración de Vacantes  @stop 

@section('titleHeader')Mis Vacantes @stop 

@section('content')
	@include('errors.mensaje')
	<section class="container">
		<div class="row">
			<div class="col s12">
				<div class="">
					<h3 class="blue-text">Vacantes</h3>
					<p>Cuentas con <span class="blue-text">{{ $vats->count() }} vacantes</span> activas.</p>
					<table class="responsive-table striped">
						<thead>
							<tr>
								<th colspan="2">Vacante</th>
								<th colspan="1" class="center-align">Postulaciones</th>
								<th class="center">Estatus</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						@if($vats->isEmpty())
							<tr>
								<td colspan="5" class="center-align"><h6>No se han postulado vacantes</h6></td>
							</tr>
						@else
							@foreach($vats as $vat)
								<tr>
									<td>
										<p data-title="{{ $vat->id }}"><strong>{{ $vat->title }} - {{ $vat->specialty }}<i class="material-icons left">label_outline</i></strong></p>
										<p>
											{{ $vat->state->nombre . ' - ' . $vat->mpio->nombre }}
										</p>
									</td>
									<td>
										<p><strong>Creada:</strong> {{ trans('empleados.dates.'.$vat->created_at->format('F')).' '.$vat->created_at->format('d, Y h:ia') }}</p>
										<p data-dataexp="{{ $vat->id }}"><strong>Expira:</strong> {{ trans('empleados.dates.'.$vat->date_expiration->format('F')).' '.$vat->date_expiration->format('d, Y h:ia') }}</p>
									</td>
									<td class="center">
										<a href="{{ route('vacante.listaspvacant', $vat->id) }}" class="btn-floating white green-text"><strong>{{ $vat->postulations()->count()}}</strong></a>
									</td>
									<td class="center">
										<a class="btn-floating tooltipped white" data-position="top" data-delay="50" data-tooltip="Activo"><i class="material-icons green-text">assignment_turned_in</i></a>
									</td>
									<td class="center">
										<!-- Dropdown Trigger -->
										<a class='dropdown-button btn-floating white' href='#' data-activates='dropdown{{ $vat->id }}'><i class="material-icons green-text accent-3">more_vert</i></a>
										<!-- Dropdown Structure -->
										<ul id='dropdown{{ $vat->id }}' class='dropdown-content'>
											<li><a href="{{ route('vacante.adminshow', $vat->id) }}">Ver</a></li>
											<li><a href="{{ route('vacante.edit',$vat->id) }}">Modificar</a></li>
											<li><a href="{{ route('vacante.delete',$vat->id) }}">Eliminar</a></li>
											<li><a href="{{ route('vacante.desactivar',$vat->id) }}">Desactivar</a></li>
											
										</ul>
									</td>
								</tr>
							@endforeach
						@endif
						</tbody>
					</table>
				</div>
			</div>
			<div class="col s12">
				<div class="row">
					<div class="col s12">
						<h3 class="blue-text">Historial</h3>
						<p>Cuentas con <span class="red-text">{{ $inacti->count() }} vacantes</span> inactivas.</p>
						<table class="responsive-table striped">
							<thead>
							<tr>
								<th colspan="2">Vacante</th>
								<th colspan="1" class="center-align">Postulaciones</th>
								<th class="center">Estatus</th>
								<th></th>
							</tr>
							</thead>
							<tbody>
							@if($inacti->isEmpty())
								<tr>
									<td colspan="5" class="center-align"><h6>No tienes vacantes inactivas.</h6></td>
								</tr>
							@else
								@foreach($inacti as $vat)
									<tr>
										<td>
											<p><strong>{{ $vat->title }} - {{ $vat->specialty }}<i class="material-icons left">label_outline</i></strong></p>
											<p>
												{{ $vat->state->nombre . ' - ' . $vat->mpio->nombre }}
											</p>
										</td>
										<td>
											<p><strong>Creada:</strong> {{ trans('empleados.dates.'.$vat->created_at->format('F')).' '.$vat->created_at->format('d, Y h:ia') }}</p>
											<p><strong>Expira:</strong> {{ trans('empleados.dates.'.$vat->date_expiration->format('F')).' '.$vat->date_expiration->format('d, Y h:ia') }}</p>
										</td>
										<td class="center">
											<a href="{{ route('vacante.listaspvacant', $vat->id) }}" class="btn-floating white green-text"><strong>{{ $vat->postulations()->count()}}</strong></a>
										</td>
										<td class="center">
											<a class="btn-floating tooltipped white" data-position="top" data-delay="50" data-tooltip="Activo"><i class="material-icons red-text">assignment_late</i></a>
										</td>
										<td class="center">
											<!-- Dropdown Trigger -->
											<a class='dropdown-button btn-floating white' href='#' data-activates='dropdown{{ $vat->id }}'><i class="material-icons green-text accent-3">more_vert</i></a>
											<!-- Dropdown Structure -->
											<ul id='dropdown{{ $vat->id }}' class='dropdown-content'>
												<li><a class="orange-text" href="{{ route('vacante.adminshow', $vat->id) }}">Ver</a></li>
												<li><a class="orange-text" href="{{ route('vacante.activate',$vat->id) }}">Activar</a></li>
												<li class="divider"></li>
												<li><a href="{{ route('vacante.delete',$vat->id) }}">Eliminar</a></li>
											</ul>
										</td>
									</tr>
								@endforeach
							@endif
							</tbody>
						</table>
					</div>
				</div>{{-- card end --}}
			</div>
		</div>{{-- row end --}}
	</section>
	
@stop

@section('script')
	{!! Html::script('js/querys/pluemplea2.js') !!}
	{!! Html::script('js/querys/servi.js') !!}
@stop