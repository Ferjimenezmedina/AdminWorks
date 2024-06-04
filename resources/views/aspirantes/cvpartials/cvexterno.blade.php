<div class="row">
	<div class="col s12">
		<h5 class="mwhite">CV Personal<i class="material-icons left blue-text ">class</i></h5>
	</div>
	@foreach($user->archs()->orderBy('id','DESC')->get() as $arch)
								<article data-id="{{ $arch->id }}" class="col s12 m10 offset-m2">
									<div class="col s10 borde-bottom ">
										<a href="{{ asset('cvs/dir'.$user->id.'/'.$arch->cvfile) }}" target="_blank" title="Descargar {{ $arch->cvfile_ornal_name }}"><h6 class="grey-text">{{ $arch->cvfile_ornal_name }}</h6></a>
									</div>
									<div class="col s2 center">
										<a href="#!"  class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text btn-upcurriculum-del">delete</i></a>
									</div>
								</article>
									<br>
									<div align="center">
								<b>**Da clic en el nombre del Curriculum Vitae Personal cargado para visualizarlo**
								</b>
							</div>
							@endforeach
</div>