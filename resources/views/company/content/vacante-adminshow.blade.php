@extends('company.admin_layout')

@section('title') {{ $vacant->title }}   @stop

@section('titleHeader')Vacante Realizada @stop

@section('content')
    <div class="container">
        <div class="row card-panel">
           <br>
	<div class="row">
		<div class="col s12 m8 offset-m1">
			<section class="">
				<div class="row ">
					<div class="col s9 m9 l10 ">
						<h4 class="grey-text text-darken-4">{{ $vacant->title }}</h4>
						@if($vacant->show_name)
							<h5 class="grey-text"><i class="material-icons ico-aling grey-text text-darken-4 ">label</i>{{ $vacant->company->nombre}}</h5>
						@else
							<h5 class="grey-text"><i class="material-icons ico-aling grey-text text-darken-4 ">label</i>Empresa Importante en el Ramo</h5>
						@endif
					
						@if($vacant->show_email)
							<h6 class="condensada-italica">{{ $vacant->company->user->email }}</h6>
						@endif
						<br>
						<br>
						<div class="col s12">
							<ul class="lista-detalle blue-text text-darken-2" >
								<li><i class="material-icons ico-aling">location_on</i> {{ $vacant->state->nombre.', '.$vacant->mpio->nombre }}</li>
								<li><i class="material-icons ico-aling">library_books</i>{{ $vacant->specialty }}</li>
								@if($vacant->show_phone)
									<li><i class="material-icons ico-aling">contact_phone</i> {{ $vacant->company->telefono }}</li>
								@endif
								@if($vacant->public_min_pay)
									<li><i class="material-icons tiny ico-aling-tiny">attach_money</i>{{ number_format($vacant->min_salary) }}</li>
								@endif
								@if($vacant->public_max_pay)
									<li><i class="material-icons ico-aling">attach_money</i>{{ number_format($vacant->max_salary) }}</li>
								@endif
								<li><i class="material-icons ico-aling">work</i>{{ trans('empleados.type_contract.'.$vacant->type_contract) }}</li>
								<li><i class="material-icons ico-aling">timer</i>{{ trans('empleados.type_schedule.'.$vacant->type_schedule) }}</li>
								<li><i class="material-icons ico-aling">monetization_on</i>{{ trans('empleados.type_salary.'.$vacant->type_salary) }}</li>
							</ul>
						</div>
					</div>
					<div class="col s3 m3 l2 center ">
						@if($vacant->show_logo)
							<p><i class="material-icons ico-aling">event_note</i>Publicada: <br>
								<span class="blue-text">
                                        {{ trans('empleados.dates.'.$vacant->created_at->format('F')).' '.$vacant->created_at->format('d, Y h:ia') }}
								</span>
							</p>
							@if($vacant->company->user->photo)
								<img class="responsive-img" src="{!!asset('cvs/dir'.$vacant->company->user->id.'/'.$vacant->company->user->photo)!!}">
							@else
								<img class="responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
							@endif
						@else
							<br class="hide-on-med-and-up">
							<img class="responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
						@endif
					</div>
				</div>
			</section>

			<section>
				<div class="divider"></div>



				<div class="row caja-empleo">
					<h5 class="blue-text condensada-regular">Puesto Solicitado:</h5>
                    <p class="justificado p-descrip-disdad2 font-large" >{{ $vacant->specialty }}</p>
				<h5 class="blue-text condensada-regular">Area:</h5>
					<p class="justificado p-descrip-disdad2 font-large" >{{ $vacant->category->category }}</p>
					<h5 class="blue-text condensada-regular">Especialidad:</h5>
					<p class="justificado p-descrip-disdad2 font-large" >{{ $vacant->subcategory->subcategory }}</p>
					<h5 class="blue-text condensada-regular">Descripción:</h5>
					<p class="justificado p-descrip-disdad2 font-large" >{{ $vacant->description }}</p>
                                        <h5 class="blue-text condensada-regular">Zona:</h5>
                                        <p class="justificado p-descrip-disdad2 font-large" >{{ $vacant->zone }}</p>
                                        <span title="Clic Aqui!!" class="etiqueta">
 <a href="https://maps.pixelis.es" target="_blank">Checar ubicacion</a>
</span>

				</div>
				<div class="row">
					<div class="col s6 ">
						<p><i class="material-icons tiny ico-aling-tiny">attach_money</i>
							<strong>Sueldo Mínimo:</strong><span class="blue-text">
								@if($vacant->min_salary)
									${{ number_format($vacant->min_salary) }}
								@else
									Por especificar.
								@endif
                                </span>
						</p>
						<p><i class="material-icons ico-aling">recent_actors</i><strong>Cantidad de Vacantes:</strong>
							<span class="blue-text">{{ $vacant->num_vacan }}</span>
						</p>
						<p><i class="material-icons ico-aling">date_range</i><strong>Pago: </strong>{{ trans('empleados.type_pay.'.$vacant->type_pay) }}</p>
					</div>
					<div class="col s6 ">
						<p>
							<i class="material-icons ico-aling">attach_money</i>
							<strong>Sueldo Máximo:</strong><span class="blue-text">
								@if($vacant->max_salary)
									${{ number_format($vacant->max_salary) }}
								@else
									Por especificar.
								@endif
                                </span>
						</p>
						<p><i class="material-icons ico-aling">local_airport</i><strong>Disponibilidad para Viajar:</strong>
							<span class="blue-text">
								@if($vacant->to_travel)
									Si.
								@else
									No.
								@endif
                                </span>
						</p>
						<p><i class="material-icons ico-aling">local_shipping</i><strong>Disponibilidad para Cambio de Residencia:</strong>
							<span class="blue-text">
								@if($vacant->change_address)
									Si.
								@else
									No.
								@endif
                                </span>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="">
						<h5 class="blue-text"><i class="material-icons ico-aling">label</i>Requisitos</h5>
						<blockquote>
							<ul class="p-descrip-disdad2">
							@foreach($vacant->demands as $dem)
									<li>{{ $dem->demand }}</li>
								@endforeach
								
							</ul>
						</blockquote>
					</div>
				</div>
				<div class="row">
					<div class="">
						<h5 class="blue-text"><i class="material-icons ico-aling">label</i>Beneficios</h5>
						<blockquote>
							<ul class="p-descrip-disdad2">
								@foreach($vacant->benefits as $ben)
									<li>{{ $ben->benefit }}</li>
								@endforeach
							</ul>
						</blockquote>
					</div>
				</div>

				<div class="row">
				<div class="">
                        <p>
                        <h5 class="black-text"><i class="material-icons ico-aling">label</i>Comentarios Finales:</h5>
                       <blockquote>
                        <ul class="p-descrip-disdad2">
                            {{ $vacant->final_comment }}
                            </ul>
                            </blockquote>
                        </p>
                        
                        <b style="color:#FF5733">**NOTA**:</b> <b> En todas las vacantes, es necesario primero activar, para ver la postulacion ya publicada en el portal.</b>
                    </div>
				<div class="col s12 center">

					@include('frontend.partials.haspostulate')

				</div>
				<div class="divider"></div>
			</section>
		</div>
		<div class="col m2 hide-on-small-only ">
			<div class="relativo">
				<div class="row card caja-sinfix ">
					<div class="col s12">
						<h6 class="black-text text-darken-2 center ">Resumen de Oferta</h6>
						<ul class="black-text text-darken-2 collection with-header lista-resumen" >
							<li class="collection-header black-text">
								@if($vacant->show_logo)
									@if($vacant->company->user->photo)
										<img class="responsive-img" src="{!!asset('cvs/dir'.$vacant->company->user->id.'/'.$vacant->company->user->photo)!!}">
									@else
										<img class="responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
									@endif
								@else
									<img class="responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
								@endif
							</li>
							<li><i class="material-icons ico-aling">event_note</i> {{ trans('empleados.dates.'.$vacant->created_at->format('F')).' '.$vacant->created_at->format('d, Y') }}</li>
							<li><i class="material-icons ico-aling">library_books</i>{{ $vacant->specialty }} </li>
							<li>
								<i class="material-icons ico-aling">attach_money</i>
								@if($vacant->min_salary && $vacant->max_salary)
									${{ number_format($vacant->min_salary) }} - ${{ number_format($vacant->max_salary) }}
								@else
									Por especificar.
								@endif
							</li>
                                                        
							
							<li><i class="material-icons ico-aling">timer</i>
								{{ trans('empleados.type_schedule.'.$vacant->type_schedule) }}
							</li>
						</ul>
						<div class="row card black valign-wrapper ">

							<div class="valign center col s12 center">
								<br>
								<a href="">
								<h6 class="center white-text condensada-regular">Resumen de Vacante</h6>
								
									<i class="material-icons white-text large">local_library</i>
								</a>
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="row">
                    <div class="input-field col s12 right-align">
                        <a href="{{ route('vacante.edit',$vacant->id) }}" class="btn waves-effect waves-light black darken-2 btn-large center">Editar Vacante
                            <i class="material-icons left">create</i>
                        </a>

                        <a href="{{ route('vacante.show',$vacant->id) }}" class="btn waves-effect waves-light black darken-2 btn-large center">Ver Publicación
                            <i class="material-icons left">book</i>
                        </a>
                        <a href="{{ route('vacante.admin',$vacant->id) }}" class="btn waves-effect waves-light black darken-2 btn-large center">Activar vacante
                            <i class="material-icons left">book</i>
                        </a>
                    </div>
                </div>


@stop

@section('script')



@stop