<div class="row card-panel">
	<div class="row">
		<h5 class="blue-text">Ofimática<i class="material-icons left small">keyboard</i></h5>
		<div class="col s12 m10 offset-m1">
			<div class="row">
				<div class="col s12 m6 grey-text text-darken-2">
							<label class="label-select black-text" for="ofimatica">Programa</label>
      				{!!Form::select('ofimatica',trans('empleados.office'), null, ['placeholder' => 'Elige un Programa','class' =>'browser-default'])!!}
      	</div>
	      <div class="input-field col s12 m6 center">
			         <a id="addOffice" href="#!" class="waves-effect waves-light btn black"><i class="material-icons left">add_circle</i>Agregar</a>
			   </div>
			   <div class="col s12">
            <h6 class="blue-text">Opcional.</h6>
          </div>
			</div>
			<br>
			<div class="row">
					<div id="box-office" class="col s12 m10 offset-m1">
						@foreach($user->ofis()->orderBy('id', 'DESC')->get() as $ofi)
							<div data-id="{{ $ofi->id }}" class="chip del-chip blue lighten-4">
                        {{ trans('empleados.office.'.$ofi->ofimatica) }}
                        <i class="material-icons btn-offim-del">close</i>
                     </div>
						@endforeach
					</div>
			</div>
		</div>
	</div>
</div>
<!-- #### Termina Ofimática #### -->