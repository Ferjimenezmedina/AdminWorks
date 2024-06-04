@extends('aspirantes.admin_user')

@section('title') Mi Curriculum  @stop 

@section('titleHeader') Mi Perfil  @stop 

@section('content')
	<section class="container">
		<div class="row">
			<div class="col s12 card">
				@include('aspirantes.cvpartials.cvperdata')
				<div class="cartelPer"></div>
				@include('aspirantes.cvpartials.cvexperien')
				<div class="cartelPer"></div>
				@include('aspirantes.cvpartials.cvability')
				<div class="cartelPer"></div>
				@include('aspirantes.cvpartials.cvofimatica')
				<div class="cartelPer"></div>
				@include('aspirantes.cvpartials.cvacadata')
				<div class="cartelPer"></div>
				@include('aspirantes.cvpartials.cvexterno')
				<div class="row">
					<div class="col s12 right-align">
					<br>
						<a href="{{ route('curriculum.pdf') }}" target="_blank" class="btn waves-effect blue white-text btn-large btn-chip waves-light">Imprimir<i class="material-icons right btn-chip ">print</i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop 