@extends('aspirantes.admin_user')

@section('title')Subir Currículum  @stop
@section('titleHeader')Currículum Personal @stop 

@section('content')
		<div class="container ">
			@include('errors.mensaje')
			<div class="row complete">
				{!!Form::open(['route'=>'upcurriculum.store','method'=>'POST','files'=>true])!!}
				<div class="col s12 center card">
					<h5 class="condensada-regular black-text">Sube tu Curriculum Personal</h5>
					<div class="row">
						<div class="file-field input-field col s10 offset-s1">
							<div class="btn black white-text">
						  		<span>Subir CV <i class="material-icons right">backup</i></span>
						  		<input name="cvfile"  type="file" required/>
						 	</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
					   	</div>
					   	<div class="input-field col s12  grey-text text-darken-2 center">
							<button class="btn waves-effect waves-light  black rto-mono-regularo btn-large" type="submit" name="action">Guardar <i class="material-icons right small">save</i>
							</button>
						</div>
					</div>
					<div class="row">
						<div id="upCurriculum" class="col s12">
							<br>
							@foreach($user->archs()->orderBy('id','DESC')->get() as $arch)
								<article data-id="{{ $arch->id }}" class="col s12 m10 offset-m2">
									<div class="col s10 borde-bottom ">
										<a href="{{ asset('cvs/dir'.$user->id.'/'.$arch->cvfile) }}" title="Descargar {{ $arch->cvfile_ornal_name }}"><h6 class="grey-text">{{ $arch->cvfile_ornal_name }}</h6></a>
									</div>
									<div class="col s2 center">
										<a href="#!"  class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text btn-upcurriculum-del">delete</i></a>
									</div>
								</article>
							@endforeach
						</div>
					</div>
				</div>
				{!!Form::close()!!}
			</div>
		</div>
@stop 

@section('script')
	{!! Html::script('js/querys/jquery.reloadingdata.js') !!}
	{!! Html::script('js/querys/dinamico.js') !!}
@stop
