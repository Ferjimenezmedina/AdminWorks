@extends('admin.admin_layout')

@section('title') Plataforma @stop 

@section('titleHeader')Administrador  @stop 

@section('content')
	<section class="container min-conta">
		<h3 class="condensada-regular">Modulo de Reportes</h3>
		<div class="row">
			<div class="col s12 m4">
				<div class="card small">
				    <div class="card-image ">
				      <img src="{!!asset('img/ad-repor.jpg')!!}">
				    </div>
				    <div class="card-content">
				      <p>Usuarios Aspirantes</p>
							
				    </div>
				    <div class="card-action">
              <a href="{{ route('pdf.aspirantes') }}" target="_blank">Generar PDF</a>
            </div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card small">
				    <div class="card-image ">
				      <img src="{!!asset('img/ad-schol.jpg')!!}">
				    </div>
				    <div class="card-content">
				      <p>Usuarios Empresas</p>
				    </div>
				    <div class="card-action">
              <a href="{{ route('pdf.empresas') }}" target="_blank">GENERAR PDF</a>
            </div>
				  </div>
			</div>
			<div class="col s12 m4">
				<div class="card small">
				    <div class="card-image">
				      <img src="{!!asset('img/actualizar.jpg')!!}">
				    </div>
				    <div class="card-content">
				      <p>Actualizar</p>
				    </div>
				    <div class="card-action">
              <a href="{{ route('admin.home') }}">Recargar</a>
            </div>
				  </div>
			</div>
				  </div>
			</div>
			
				  </div>
			</div>
			
			</div>

		
	</section>
	@endsection