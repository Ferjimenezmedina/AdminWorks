<div class="row card-panel">
	<div class="row">
		<h5 class="blue-text">Idiomas <i class="material-icons left">language</i></h5>
	</div>
	<div class="row">
		<div id="descripIdioma" class="col s12 m10 offset-m1 ">
			<div class="col s6 m4 grey-text text-darken-2">
					<label class="label-select black-text" for="idioma">Idioma</label>
	  		{!!Form::select('idioma',trans('empleados.idioma'), null, ['placeholder' => 'Idioma','class' =>'browser-default'])!!}
  			</div>
			<div class="col s6 m4 grey-text text-darken-2">
					<label class="label-select black-text" for="idioma_nivel">Nivel de Idioma</label>
				{!!Form::select('idioma_nivel',trans('empleados.idioma_nivel'), null, ['placeholder' => 'Nivel','class' =>'browser-default'])!!}
			</div>
      		<div class="input-field col s12 m4 center">
	         	<a id="addIdioma" href="#!" class="waves-effect waves-light btn black"><i class="material-icons left">add_circle</i>Agregar</a>
	    	</div>
	   <div class="col s12">
            <h6 class="blue-text">Opcional.</h6>
          </div>
		</div>
	</div>
	<div id="box-idiooma" class="row">
		@foreach($user->langs()->orderBy('id', 'DESC')->get()  as $leng)
			<article data-id="{{$leng->id}}" class="col s12 m8 offset-m2 arti-aca-ex">
             <div class="col s10 borde-bottom ">
                 <h6  class="grey-text">{{ $leng->idioma }} - {{ $leng->idioma_nivel }}</h6>
             </div>
             <div class="col s2 center">
                 <a href="#!" class="btn-floating waves-effect waves-light white btn btn-lang-del">
                     <i class="material-icons red-text">delete</i>
                 </a>
             </div>
         </article>
		@endforeach
	</div>
</div>
<!-- #### Termina Idiomas #### -->