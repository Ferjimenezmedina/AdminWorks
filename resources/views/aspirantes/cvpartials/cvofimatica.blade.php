<div class="row">
	<div class="col s12 m4">
		<h5 class="mwhite">Ofimática <i class="material-icons left blue-text ">keyboard</i></h5>
		<ul class="ul-offi-soft">
			@foreach($user->ofis()->orderBy('id', 'DESC')->get() as $ofi)
			<li> {{ $ofi->ofimatica }}</li>
			@endforeach
		</ul>
	</div>
	<div class="col s12 m4">
		<h5 class="mwhite">Idiomas <i class="material-icons left blue-text ">language</i></h5>
		<ul class="ul-offi-soft">
			@foreach($user->langs()->orderBy('id', 'DESC')->get()  as $leng)
			<li>{{ $leng->idioma }} - <span class="black-text">{{ $leng->idioma_nivel }}</span></li>
			@endforeach
		</ul>
	</div>
	<div class="col s12 m4">
		<h5 class="mwhite">Otro Software <i class="material-icons left blue-text ">laptop_windows</i></h5>
		<ul class="ul-offi-soft">
			@foreach($user->softs()->orderBy('id', 'DESC')->get() as $soft)
			<li>{{ $soft->software }}</li>
			@endforeach
		</ul>
	</div>
</div>