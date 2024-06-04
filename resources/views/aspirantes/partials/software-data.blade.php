<div class="row card-panel">
	<div class="row">
		<h5 class="blue-text">Otro Software que Utilizas<i class="material-icons left small">laptop_mac</i></h5>
		<div class="col s12 m10 offset-m1">
			<div class="row">
				<div class="col s12">
					<div class="input-field col s12 m6 grey-text text-darken-2">
						{!!Form::text('software', null,['placeholder' => 'Ingresa un Programa']) !!}
        				<label for="software">Programa</label>
      			</div>
	          	<div class="input-field col s12 m6 center">
			         <a id="addSoft" href="#!" class="waves-effect waves-light btn black"><i class="material-icons left">add_circle</i>Agregar</a>
			    	</div>
			    <div class="col s12">
            <h6 class="blue-text">Opcional.</h6>
          </div>
				</div>
			</div>
			<br>
			<div class="row">
					<div id="box-software"  class="col s12 m10 offset-m1">
						@foreach($user->softs()->orderBy('id', 'DESC')->get() as $soft)
							<div data-id="{{ $soft->id }}" class="chip del-chip blue lighten-4">
                        {{ $soft->software }}
                        <i class="material-icons btn-soft-del">close</i>
                     </div>
						@endforeach
					</div>
			</div>
		</div>
	</div>
</div>
<!-- #### Termina Otro Software que Utilizas #### -->