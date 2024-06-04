@extends('company.admin_layout')
@extends('errors.mensaje')
@section('title') Modulos Destacados  @stop 

@section('titleHeader')Bienvenido  @stop 


@section('content')
	<section class="container min-conta">
		<h3 class="condensada-regular">Modulos</h3>
		</br></br>
		</br>
		<div class="row">
			<div class="col s12 m4">
				<div class="card small">
				    <div class="card-image ">
				      <img src="{!!asset('img/vacantes.jpg')!!}">
				    </div>
				    <div class="card-content">
				      <p>Vacantes Postuladas</p>
							
				    </div>
				    <div class="card-action">
              <a href="{{ route('vacante.admin') }}">Ir</a>
            </div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card small">
				    <div class="card-image ">
				      <img src="{!!asset('img/vp1.jpg')!!}">
				    </div>
				    <div class="card-content">
				      <p>Crear Vacantes</p>
				    </div>
				    <div class="card-action">
              <a href="{{ route('vacante.create') }}">Ir</a>
            </div>
				  </div>
			</div>
			<div class="col s12 m4">
				<div class="card small">
				    <div class="card-image">
				      <img src="{!!asset('img/servicios1.jpg')!!}">
				    </div>
				    <div class="card-content">
				      <p>Ver Candidatos</p>
				    </div>
				    <div class="card-action">
              <a href="{{ route('prospect.index') }}">Ir</a>
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