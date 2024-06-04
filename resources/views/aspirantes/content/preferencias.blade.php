@extends('aspirantes.admin_user')

@section('title')Mis Preferencias  @stop
@section('titleHeader')Preferencias @stop 

@section('content')
	<section class="container">
		{!!Form::model($user,['route'=>'preferences.update', 'method'=> 'PUT','id'=>'fm-curri','files' => true])!!}
			<div class="row card-panel">
				<h5 class="blue-text ">Mis Preferencias<i class="material-icons left ">library_books</i></h5>
				<div class="col s12 m10 offset-m1">
					@foreach($user->perdatas as $perdata)
						<p>Esta sección es muy importante, por que al asignarte a una categoria( ó categorías), las Empresas que están buscando Aspirantes podrán encontrarte de manera más eficiente.</p>
						<div class="row">
							<div class="col s6 m5 grey-text text-darken-2">
								<label class="label-select black-text" for="situcacion_ac">Situación Actual</label>
								{!! Form::select('situcacion_ac',trans('empleados.situacion_empleo'), $perdata->situcacion_ac, ['placeholder' => 'Selecciona una opción','class' =>'browser-default']) !!}
							</div>
							<div class="input-field col s6 m7 black-text text-darken-2">
							</br>	{!!Form::text('puesto_des', $perdata->puesto_des, ['class' => 'validate', 'required' => 'required'])!!}
								
								<label for="puesto_des">Puesto de Trabajo Deseado<span class="red-text">*</span></label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6 m4 grey-text text-darken-2 center">
								<h6 class="">Sueldo Requerido </h6>
							</div>
							<div class="input-field col s6 m4 grey-text text-darken-2">
								<label class="label-select black-text" for="req_salary">Cantidad</label>
								{!!Form::select('req_salary',trans('empleados.sueldo'), $perdata->req_salary, ['placeholder' => 'Cantidad','class' =>'browser-default'])!!}
							</div>
							<div class="input-field col s6 m4 grey-text text-darken-2 ">
								<label class="label-select black-text" for="salary_type">Periodo</label>
								{!!Form::select('salary_type',trans('empleados.type_salary'), $perdata->salary_type, ['placeholder' => 'Por','class' =>'browser-default'])!!}
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6 m4 grey-text text-darken-2 center">
								<h6 class="">Sueldo Deseado</h6>
							</div>
							<div class="input-field col s6 m4 grey-text text-darken-2">
								<label class="label-select black-text" for="cantidad_deseada">Cantidad</label>
								{!!Form::select('des_salary',trans('empleados.sueldo'), $perdata->des_salary, ['placeholder' => 'Cantidad','class' =>'browser-default'])!!}
							</div>
							<div class="input-field col s6 m4 grey-text text-darken-2 ">
								<label class="label-select black-text" for="cantidad_deseada">Periodo</label>
								{!!Form::select('salary_type_des',trans('empleados.type_salary'), $perdata->salary_type_des, ['placeholder' => 'Por','class' =>'browser-default'])!!}
							</div>
						</div>
						<div class="row">
						<div id="descripCat"  class="col s6 m6 l5 grey-text text-darken-2">
								<label class="label-select black-text" for="category_id">Categoría de Interes</label>
								{!!Form::select('category_id',$catego, null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'category_id',])!!}
							
							</div>
							<div class="row">
							<div id="descripCat"  class="col s6 m6 l5 grey-text text-darken-2">
							<label class="label-select black-text" for="subcategory_id">Subcategoría de Interes</label>
							{!!Form::select('subcategory_id',$sub, null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'subcategory_id'])!!}
						</div>	

							<div class="input-field col s12  grey-text text-darken-2 left-align">
								<a id="addAsigCat" href="#!"  class="btn waves-effect waves-light  black rto-mono-regularo btn-large"><i class="material-icons right">add_circle</i>Agregar</a>
							</div>
							<div class="col s12">
								<h6 class="blue-text">Es obligatorio Agragar una Categoría como mínimo.</h6>
							</div>
						</div>
						<br>
					@endforeach
				</div>
				<div id="box-categoria" class="row">
					@foreach( $sub as $asing )
						<article data-id="{{ $asing->id }} " class="col s12 m8 offset-m2 arti-aca-ex">
							<div class="col s10 borde-bottom ">
								<h6 class="grey-text">{{ $asing->category_id }} - {{ $asing->subcategory_id }}</h6>
							</div>
							<div class="col s2 center">
								<a href="#!" class="btn-floating waves-effect waves-light white btn btn-asigcat-del">
									<i class="material-icons red-text">delete</i>
								</a>
							</div>
						</article>
					@endforeach
				</div>
				<div class="input-field col s12  grey-text text-darken-2 right-align">
					<br>
					<button class="btn waves-effect waves-light  blue rto-mono-regularo btn-large" type="submit" name="action">Actualizar <i class="material-icons right small">update</i>
					</button>
					<br>
				</div>
				</div>
			</div>
		{!!Form::close()!!}
	</section>

@stop 

@section('script')
	{!! Html::script('js/querys/servi.js') !!}
	{!! Html::script('js/querys/script-localidades.js') !!}
	{!! Html::script('js/querys/jquery.reloadingdata.js') !!}
	{!! Html::script('js/querys/dinamico.js') !!}
@stop