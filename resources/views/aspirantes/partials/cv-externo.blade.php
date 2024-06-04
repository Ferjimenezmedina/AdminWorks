<div class="row card-panel">
	<div class="row">
		<h5 class="blue-text">Curriculum Externo<i class="material-icons left ">work</i></h5>
      	<div class="row">
  
@foreach($user->archs()->orderBy('id','DESC')->get() as $arch)
                <article data-id="{{ $arch->id }}" class="col s12 m10 offset-m2" target="_blank">
                  <div class="col s10 borde-bottom ">
                    <a href="{{ asset('cvs/dir'.$user->id.'/'.$arch->cvfile) }}" target="_blank"  title="Descargar {{ $arch->cvfile_ornal_name }}"  ><h6 class="grey-text">{{ $arch->cvfile_ornal_name }}</h6></a>
                  </div>
                  <div class="col s2 center">
                    <a href="#!"  class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text btn-upcurriculum-del">delete</i></a>
                  </div>
                </article>
              @endforeach
      	</div>
	</div>
</div>
<!-- #### Termina Habilidades  #### -->