@extends('company.admin_layout')

@section('title') Candidatos  @stop 

@section('titleHeader')Elige tus Aspirantes  @stop 

@section('content')
	<section class="container">
		<div class="row card-panel">

			<h5 class="black-text">Candidatos en los que estas Interesada(o) </h5>

			@if($prospect->isEmpty())
				<div class="col s12 card valign-wrapper valign- blue">
					<h5 class="valign center col s12 white-text">Aún no se cuentan con aspirantes para vacantes.</h5>
				</div>
			@else
				<p>Tienes {{ $prospect->count() }} prospectos de un total de {{ $prospect->total() }}.</p>
				@foreach($prospect as $aspi)
					<article id="myleaflet{{ $aspi->id }}"  class="col s12">
						<div class="row ">
							<div class="col s12">
								<h5>{{ $aspi->title_prof }}</h5>
							</div>

							<div class="col s12 valign-wrapper caja-empleo">
								<div class="col s1 hide-on-med-and-down l2 center valign">
									@if($aspi->photo)
										<img class="circle responsive-img" src="{!!asset('cvs/dir'.$aspi->user_id.'/'.$aspi->photo)!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
									@else
										<img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
									@endif
								</div>
								<div class="col s9 m9 l8">
									<h6><i class="material-icons ico-aling blue-text">stars</i> <strong>Especialidad:</strong> {{ $aspi->specialty }} </h6>
									<div class="row">
										<div class="col s6">
											<p class="rto-mono-medium"><i class="material-icons blue-text ico-aling">account_box</i> <strong>Nombre: </strong>{{ $aspi->full_name  }}</p>
											<p class="rto-mono-medium"><i class="material-icons blue-text ico-aling">email</i> <strong>Email: </strong>{{ $aspi->email }}</p>
										</div>
										<div class="col s6">
											<p class="rto-mono-medium"><i class="material-icons blue-text ico-aling">phone</i>{{ $aspi->telefono1 }}</p>
											
										</div>
									</div>
									<p class="justificado slab-r-regular" >Presentación.</p>
									<p>{{ $aspi->descrip_prof }}</p>
									<p class="right-align">

									
										<a href="#mod-detalle-prospect" data-idprosp="{{ $aspi->id_user }}" class="modal-trigger btn-floating waves-effect waves-light blue btn btn-get-prospect"><i class="material-icons white-text">visibility</i></a>
										&nbsp;
										@if( ! currentUser()->company->hasleaflet($aspi) )
											{!! Form::open(['route'=> ['leaflet.submit', $aspi->id_user], 'method' => 'POST']) !!}
												<button type="submit" class="btn-floating waves-effect waves-light blue btn tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar a Prospectos">
													<i class="material-icons">thumb_up</i>
												</button>
											{!! Form::close() !!}
										@else
												<button data-name="{{ $aspi->full_name  }}" data-id="{{ $aspi->id  }}" class="btn-floating waves-effect waves-light white btn tooltipped deleteleaflet" data-position="top" data-delay="50" data-tooltip="Eliminar de mis Prospectos">
													<i class="material-icons black-text">thumb_down</i>
												</button>
										@endif
									</p>
								</div>

								<div class="col s4 m4 l2 card blue">
									<ul class="white-text text-darken-2" >
										<li><i class="material-icons ico-aling">location_on</i> {{ $aspi->nombre }}</li>
										<li><i class="material-icons ico-aling">event_note</i> {{ $aspi->birthdate->age }} años</li>
										<li><i class="material-icons ico-aling">people</i> {{ $aspi->estado_civil }}</li>
										<li><i class="material-icons ico-aling">attach_money</i> {{ $aspi->req_salary }}</li>
										<li><i class="material-icons ico-aling">flight_takeoff</i> Viajar: Si</li>
									</ul>
								</div>
							</div>
						</div>{{-- --}}
						<div class="divider"></div>
					</article>

				@endforeach
				<br><br>
				{!! $prospect->render() !!}
			@endif
		</div>
	</section>
	<!-- Modal Structure -->
	<div id="mod-detalle-prospect" class="modal modal-fixed-footer">
		<div class="modal-content">
			<div id="preloader-pros" class="valign-wrapper">
				<div class="valign center row">
					<div class="preloader-wrapper big active center">
						<div class="spinner-layer spinner-blue-only">
							<div class="circle-clipper left">
								<div class="circle"></div>
							</div>
							<div class="gap-patch">
								<div class="circle"></div>
							</div>
							<div class="circle-clipper right">
								<div class="circle"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="boxprospect"></div>
		</div>
		<div class="modal-footer">
			<a href="#!" id="closeModelProspect" class=" modal-action modal-close waves-effect waves-black btn-flat">Cerrar</a>
			<a href="#!" id="printProspect" target="_blank" class=" modal-action modal-close waves-effect waves-black btn-flat">Imprimir</a>
		</div>
	</div>
<div class="t" align="center">
			<b>Importante*: Al checar la informacion en el icono de azul, al final encontraras si el aspirante subio algun curriculum personal, estos curriculums se toman como externos, podras descargarlos y gestionarlos a tu criterio*</b>
		</div>
	<!-- Modal Structure -->
	<div id="delmodelleaflet" class="modal">
		<div class="modal-content red"> <!--  -->
			{!! Form::open(['route'=>['leaflet.destroy', ':CAT_ID'],'method'=>'DELETE' ,'id'=>'form-leaflet-delete']) !!}
			<input type="hidden" id="inputid">
			{!! Form::close() !!}
			<h4 class="white-text">Eliminar Prospecto</h4>
			<p class="grey-text text-lighten-2">¿Está seguro que desea <strong>Eliminar</strong> el(la) prospecto? <br>
				<span id="id-servis-name"></span>
			</p>
		</div>
		<div class="modal-footer">
			<a href="#!" id="btn-delete-leaflet" class="red white-text modal-action modal-close waves-effect btn-flat">Eliminar</a>
			<a href="#!" id="clsmodalleaflet" class=" modal-action modal-close waves-effect waves-black btn-flat">Cancelar</a>
		</div>

	</div>
@stop

@section('script')
	{!! Html::script('js/querys/pluemplea2.js') !!}
	{!! Html::script('js/querys/leaflet.js') !!}
@stop
