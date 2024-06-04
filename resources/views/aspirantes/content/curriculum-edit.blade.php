@extends('aspirantes.admin_user')

@section('title')Mi Currículum @stop

@section('titleHeader')Mi Currículum @stop 

@section('content') 
	<section class="container">
	@include('errors.message')
	<br>
		{!!Form::model(null,['route'=>'curriculum.update', 'method'=> 'PUT','id'=>'fm-curri','files' => true])!!}

			@include('aspirantes.partials.personal-data')
			
			@include('aspirantes.partials.profecional-data')

			@include('aspirantes.partials.academy-data')

			@include('aspirantes.partials.habilidades-data')
					
			@include('aspirantes.partials.experienci-data')

			@include('aspirantes.partials.idiomas-data')
			
			@include('aspirantes.partials.ofimatica-data')
			
			@include('aspirantes.partials.software-data')
			
			@include('aspirantes.partials.asigcat-data')
		<div class="row">
			<div class="col s12 m6 grey-text text-darken-2 ">
				<a href="{{ route('curriculum.show')  }}" class="btn waves-effect waves-light black  rto-mono-regularo btn-large" >Visualizar  <i class="material-icons right small">description</i>
				</a>
				<br>
			</div>
			<div class="col s12 m6 grey-text text-darken-2 ">
				<button class="btn waves-effect waves-light right blue rto-mono-regularo btn-large" type="submit" name="action">Actualizar <i class="material-icons right small">create</i>
				</button>
				<br>
			</div>
		</div>
			<!-- #### Termina Habilidades  #### -->

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