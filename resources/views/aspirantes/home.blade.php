@extends('aspirantes.admin_user')

@section('title') Inicio  @stop

@section('titleHeader')Mi Perfil  @stop 
@section('content')
<section class="container">
	@include('errors.mensaje')
	<div class="row">
		<h3 class="">Bienvenido <spam class="condensada-regular blue-text">{{ auth()->user()->name }}</spam> </h3> 
		<ul class="collection">
			<li class="collection-item avatar">
				@if(Auth::user()->photo)
					<img class="circle" src="{!!asset('cvs/dir'.Auth::user()->id.'/'.Auth::user()->photo)!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
				@else
					<img class="circle" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
				@endif
				<span class="title">{{ auth()->user()->fullName }}</span>
					@foreach(currentUser()->cadres()->get() as $prof)
						<p>{{ $prof->title_prof }} <br>
							{{ $prof->specialty }}
						</p>
					@endforeach
				<a href="{{ route("curriculum.edit") }}" class="secondary-content"><i class="material-icons">edit</i></a>

			</li>
		</ul>
	</div>
        <div class="row">
		<h3 class="">¡Necesitas asesoria en el portal <spam class="condensada-regular blue-text">{{ auth()->user()->name }} ?</spam> </h3> 
		<ul class="collection">
			<li class="collection-item avatar">
                            <p>Te podemos ayudar directamente del portal de ayuda, dando clic en el icono de lado derecho de color verde oscuro  <p> <p> o ve a pagina de inicio para levantar un chat de atencion en linea que se encuentra en la parte inferior derecha con la leyenda "Soporte en Linea".</p>
                            <br>   
                            <a href="{{ route("frontend.help") }}"  class="secondary-content" target="_blank"><i class="material-icons">help</i></a>
			</li>
		</ul>
	</div>


</section>
<div class="row">
	<div class="col s12 m6">
		<div class="card">
			<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="{!! asset('img/admi-user2.jpg') !!}">
			</div>
			<div class="card-content">
				<span class="card-title activator grey-text text-darken-4">Mi Currículum<i class="material-icons right">more_vert</i></span><p>Da clic en "Mi Curriculum"</p>
				<p><a href="{{ route('upcurriculum.create') }}" class="grey-text">Subir Currículum <i class="material-icons ico-aling">backup</i></a> <span class="condensada-light  grey-text text-lighten-1"> En formato .doc ó .pdf </span></p>
			</div>
			<div class="card-reveal">
				<span class="card-title grey-text text-darken-4">Mi Currículum<i class="material-icons right">close</i></span>
				<p><a href="{{ route('curriculum.edit') }}" class="blue-text text-darken-4">Editar mi Currículum <br><p>Da clic aqui</p> <br>
				</a>En esta sección podrás llenar tu currículum y actualizar cada vez que quieras, ademas de poder descargarlo en formato PDF una vez que lo hayas rellenado nuestro formulario completamente.</p><br>
				<p><a href="{{ route('upcurriculum.create') }}" class="blue-text text-darken-4">Subir CV Personal <br><p>Da clic aqui</p> <br>
				</a>Al momento de llenar tu curriculum, podras adicionar un curriculum personal en el apartado "Subir CV Personal" que se encuentra en la parte de arriba</p>
				<p>Ó si prefieres sube tu currículum en formato Word ó PDF.</p>
			</div>
		</div>
	</div>
	<di class="col s12 m6">
		<div class="card">
			<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="{!!asset('img/admi-user.jpg')!!}">
			</div>
			<div class="card-content">
				<span class="card-title activator grey-text text-darken-4">Mis Postulaciones<i class="material-icons right">more_vert</i></span><p>Da clic en "Mis Postulaciones"</p>
				<p><a href="{{ route('aspirantes.postulaciones') }}" class="grey-text">Ver mis postulaciones<i class="ico-aling material-icons">storage</i></a></p>
			</div>
			<div class="card-reveal">
				<span class="card-title grey-text text-darken-4">Mis Postulaciones<i class="material-icons right">close</i></span>
				<p><a href="{{ route('aspirantes.postulaciones') }}" class="black-text text-darken-4">Postulaciones: <br><p>Da clic aqui</p><br>
				 </a>Es la sección donde podrás ver tus postulaciones de vacantes y podra quitar la postulacion directamente en la vacante en caso que ya no le llegue a interesar</p><br>
				La empresa vera tu postulacion al momento de realizar tu match con la plataforma y ver si eres candidato para la vacante</p><br>
				 <br>

			</div>
		</div>
	</di>
</div>
@stop 