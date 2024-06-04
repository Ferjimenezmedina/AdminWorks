@extends('company.admin_layout')

@section('title') Administración de Vacantes  @stop 

@section('titleHeader')Mis Vacantes @stop 

@section('content')
	@include('errors.mensaje')
	<section class="container">
		<div class="row">
			<div class="col s12">
				<div class="">
					<h3 class="blue-text">Vacante Eliminada Correctamente</h3>
					
	</div>
</div>
</div>
@stop

@section('script')
	{!! Html::script('js/querys/pluemplea2.js') !!}
	{!! Html::script('js/querys/servi.js') !!}
@stop