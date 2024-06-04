@extends('company.admin_layout')

@section('title') Nueva Vacante  @stop 

@section('titleHeader')Postula tu Vacante @stop 

@section('content')
	<section class="container">
		@include('errors.mensaje')
		<div class="row card-panel">
			<div class="col s12">
				<div class="">
					{!! Form::open(['route'=>'vacante.store','method'=>'POST']) !!}
					<div class="row">
						<h3>Nueva Vacante</h3>
						<p class="black-text">Crea tu vacante facilmente. Solo tiene que llenar el formulario y dar click en el boton de Pustular Vacante.</p>
						<div class="black valign-wrapper z-depth-1">
							<ul class="col s12 valign ul-breadcrum">
								<li href="#!" class="white-text">Crea <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
								<li href="#!" class="">Contratación <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
								<li href="#!" class="">Requisitos, Beneficios e Idioma <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
								<li href="#!" class="">Datos de Empresa <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
								<li href="#!" class="">Publicar <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m7  grey-text text-darken-2">
							{!! Form::text('title', old('title'), ['class' => 'validate', 'required'=>'required'])	!!}
							<label for="title">Titulo de la vacante<span class="red-text">*</span></label>
						</div>
						<div class="input-field col s12 m5  grey-text text-darken-2">
							{!! Form::text('specialty', old('specialty'), ['class' => 'validate','required'=>'required'])	!!}
							<label for="specialty">Puesto Solicitado<span class="red-text">*</span></label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m5 grey-text text-darken-2">
							<label class="label-select black-text" for="category_id">Area<span class="red-text">*</span></label>
							{!!Form::select('category_id', $catego , null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'category_id','required'=>'required'])!!}
						</div>
						<div class="input-field col s12 m5 grey-text text-darken-2">
							<label class="label-select black-text" for="subcategory_id">Especialidad<span class="red-text">*</span></label>
							{!!Form::select('subcategory_id',[], old('subcategory_id'), ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'subcategory_id','required'=>'required'])!!}
						</div>
						<div class="input-field col s2 m2">
							<label for="num_vacan" class="label-select black-text">Cantidad de Vacantes<span class="red-text">*</span></label>
							{!! Form::selectRange('num_vacan', 1, 20, old('num_vacan'),['class' =>'browser-default','required'=>'required']) !!}
						</div>
					</div>
					<div class="row">
						<div class="input-field  col s12 black-text text-darken-2">
							{!! Form::textarea('description', old('description'),['class'=>'materialize-textarea','length'=>'1000','placeholder'=>'Descripción Breve de la Empresa y desarrollo del puesto.','required'=>'required']) !!}
							<label for="description">Descripción<span class="red-text">*</span></label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m4 right">
							<button class="btn waves-effect waves-light black darken-2 " type="submit" name="action">Crear y Continuar
								<i class="material-icons left">save</i>
							</button>
						</div>
					</div>
					{!! Form::close() !!}
				</div>{{-- Temina Card-content  --}}
			</div>
		</div>
	</section>
@stop

@section('script')
	{!! Html::script('js/querys/pluemplea2.js') !!}
	{!! Html::script('js/querys/servi.js') !!}
	{!! Html::script('js/querys/script-localidades.js') !!}
@stop