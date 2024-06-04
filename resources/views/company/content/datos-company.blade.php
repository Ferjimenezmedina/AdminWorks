@extends('company.admin_layout')

@section('title') Datos de Compañia  @stop

@section('titleHeader')Actualiza tus Datos  @stop

@section('content')

	<section class="container">
		@include('errors.mensaje')
		{!! Form::model($comp,['route'=>['company.update', $comp->id],'method'=>'PUT','files'=>true]) !!}
		{!! Form::hidden('user_id') !!}

		<div class="row card-panel">
			<div class="col s10 offset-s1">
				<h5 class="black-text">Datos de la Empresa</h5>
				<div class="row">
					<div class="input-field col s12 grey-text text-darken-2">
						{!! Form::text('nombre', null, ['class' => 'validate','required' =>'required'])	!!}
						<label for="nombre">Nombre de la Empresa<span class="red-text">*</span></label>
					</div>
					<div class="input-field col s12 grey-text text-darken-2">
						{!! Form::text('razon_social', null, ['class' => 'validate','required' =>'required'])	!!}
						<label for="razon_social">Razón Social<span class="red-text">*</span></label>
					</div>
				</div>
				<div class="row">
					<div class="input-field  col s12 m4  grey-text text-darken-2 ">
						{!! Form::text('rfc', null, ['class' => 'validate','required' =>'required'])	!!}
						<label for="rfc">RFC<span class="red-text">*</span></label>
					</div>
					<div class="input-field  col s12 m4  grey-text text-darken-2 ">
						{!! Form::text('telefono', null, ['class' => 'validate'])	!!}
						<label for="telefono">Teléfono</label>
					</div>
					<div class="col s12 m4 grey-text text-darken-2">
						<label class="label-select black-text" for="category_id">Giro Empresarial<span class="red-text">*</span></label>
						{!!Form::select('category_id',$catego, null, ['placeholder' => 'Giro Empresarial', 'class' => 'validate browser-default','required' =>'required'])!!}
					</div>
				</div>
				<div class="row">
					<div class="col s6 m4  grey-text text-darken-2 ">
						<label class="label-select black-text" for="pais_id">País<span class="red-text">*</span></label>
						{!!Form::select('pais_id',$pais, null, ['class'=>'browser-default','placeholder' => 'Selecciona una opción','id'=>'pais_id','required' => 'required'])!!}
					</div>
					<div class="col s6 m4  grey-text text-darken-2 ">
						<label class="label-select black-text" for="state_id">Estado<span class="red-text">*</span></label>
						{!!Form::select('state_id',$estado, null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'state_id','required' => 'required'])!!}
					</div>
					<div class="col s12 m4 grey-text text-darken-2">
						<label class="label-select black-text" for="mpio_id">Municipio<span class="red-text">*</span></label>
						{!!Form::select('mpio_id',$muni, null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'mpio_id','required' => 'required'] )!!}
					</div>
				</div>
				<div class="row">
					<div class="input-field  col s12 m6  grey-text text-darken-2 ">
						{!! Form::text('ciudad', null, ['class' => 'validate','required' =>'required'])	!!}
						<label for="ciudad">Ciudad<span class="red-text">*</span></label>
					</div>
					<div class="input-field  col s12 m6 grey-text text-darken-2">
						{!! Form::text('colonia', null, ['class' => 'validate','required' =>'required'])	!!}
						<label for="colonia">Colonia<span class="red-text">*</span></label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 grey-text text-darken-2">
						{!! Form::text('domicilio', null, ['class' => 'validate','required' =>'required'])	!!}
						<label for="domicilio">Dirección<span class="red-text">*</span></label>
					</div>
					<div class="input-field  col s12 m3 grey-text text-darken-2">
						{!! Form::text('no_exterior', null, ['class' => 'validate','required' =>'required'])	!!}
						<label for="no_exterior">No. Exterior<span class="red-text">*</span></label>
					</div>
					<div class="input-field  col s12 m3 grey-text text-darken-2">
						{!! Form::text('codigo_postal', null, ['class' => 'validate','required' =>'required'])	!!}
						<label for="codigo_postal">Código Postal<span class="red-text">*</span></label>
					</div>
				</div>
				<div class="row">
					<div class="input-field  col s12 grey-text text-darken-2">
						{!! Form::textarea('presentacion', null,['class'=>'materialize-textarea','required' =>'required','length'=>'500','maxlength'=>'500']) !!}
						<label for="presentacion">Presentación</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6">
						<div class="col s12 center " id="selogocom">
							@if(Auth::user()->photo)
								<img class="responsive-img" src="{!! asset('cvs/dir'.Auth::user()->id.'/'.Auth::user()->photo)!!}">
							@else
								<img class=" responsive-img" src="{!!asset('img/logo-repuesto.png')!!}">
							@endif
						</div>
						<div class="file-field input-field">
							<div class="btn black white-text">
								<span>Logo</span>
								<input name="photo" id="res_logo_com" type="file">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
					</div>
					<div class="col s12 m6">
						<div class="input-field  col s12 grey-text text-darken-2">
							{!! Form::text('pagina_web', null,array('lenght' => '120'))	!!}
							{!!	Form::label('pagina_web','Página Web de la Empresa')	!!}
						</div>
						<div class="col s12">
							<label for="tipo_contrata_emp">Tipo de Empresa</label>
							<p>
								<input name="tipo_contrata_emp" type="radio" id="check1" value="Empleador Directo" @if($comp->tipo_contrata_emp == "Empleador Directo" ) checked @endif />
								<label for="check1">Empleador Directo</label>
							</p>
							<p>
								<input name="tipo_contrata_emp" type="radio" value="Servicios Temporales" id="check2" @if($comp->tipo_contrata_emp == "Servicios Temporales" ) checked  @endif  />
								<label for="check2">Servicios Temporales</label>
							</p>
							<p>
								<input name="tipo_contrata_emp" type="radio" value="De Reclutamiento" id="check3"  @if($comp->tipo_contrata_emp == "De Reclutamiento" ) checked  @endif />
								<label for="check3">De Reclutamiento</label>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="input-field col s12  grey-text text-darken-2 right-align">
			<br>
			<button class="btn waves-effect waves-light  black rto-mono-regularo btn-large" type="submit" name="action">Guardar <i class="material-icons right small">save</i>
			</button>
			<br>
		</div>
		{!! Form::close() !!}
	</section>

@endsection

@section('script')
	<script>
		$(document).ready(function(){
			$('textarea#descripcion').characterCounter();
		});
	</script>
	{!! Html::script('js/querys/pluemplea2.js') !!}
	{!! Html::script('js/querys/servi.js') !!}
	{!! Html::script('js/querys/script-localidades.js') !!}
@stop