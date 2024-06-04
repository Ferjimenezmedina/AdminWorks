@foreach($user->archs()->orderBy('id','DESC')->get() as $arch)
								<article data-id="{{ $arch->id }}" class="col s12 m10 offset-m2">
									<div class="col s10 borde-bottom ">
										<a href="{{ asset('cvs/dir'.$user->id.'/'.$arch->cvfile) }}" title="Descargar {{ $arch->cvfile_ornal_name }}"><h6 class="grey-text">{{ $arch->cvfile_ornal_name }}</h6></a>
									</div>