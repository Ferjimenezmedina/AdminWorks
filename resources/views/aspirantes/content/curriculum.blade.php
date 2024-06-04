@extends('aspirantes.admin_user')

@section('title')Mi Currículum @stop

@section('titleHeader')Mi Currículum @stop 

@section('content') 
	<section class="container">
	@include('errors.mensaje')
	<br>
		{!!Form::model($user,['route'=>'curriculum.store', 'method'=> 'POST','id'=>'fm-curri','files' => true])!!}

			@include('aspirantes.partials.personal-data-create')
			
			@include('aspirantes.partials.profecional-data-create')

			@include('aspirantes.partials.academy-data-create')

			@include('aspirantes.partials.habilidades-data')
				
		  	@include('aspirantes.partials.experienci-data')

			@include('aspirantes.partials.idiomas-data')
			
			@include('aspirantes.partials.ofimatica-data')
			
			@include('aspirantes.partials.software-data')
			
			@include('aspirantes.partials.asigcat-data-create')

	
			
	   	<div class="input-field col s12  grey-text text-darken-2 right-align">
	   	<br>
			<button class="btn waves-effect waves-light  black rto-mono-regularo btn-large" type="submit" name="action">Guardar <i class="material-icons right small">save</i>
				</button>	
			<br>
		</div>



		{!!Form::close()!!}
	</section>
@stop 	


@section('script')
	{!! Html::script('js/querys/pluemplea2.js') !!}
	{!! Html::script('js/querys/servi.js') !!}
	{!! Html::script('js/querys/script-localidades.js') !!}
	{!! Html::script('js/querys/jquery.reloadingdata.js') !!}
	{!! Html::script('js/querys/dinamico.js') !!}
@stop 