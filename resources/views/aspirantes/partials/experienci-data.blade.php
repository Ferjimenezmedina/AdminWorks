<div class="row card-panel">
	<div class="row">
		<h5 class="blue-text">Experiencia Profesional <i class="material-icons left ">work</i></h5>
			<div class="col s12 m12 l8">
 				<h6 class="black-text text-darken-2">Experiencia Laboral</h6>
 			</div>
      	<div class="row">
      		<div class="input-field col s12 m7 grey-text text-darken-2">
        		{!!Form::text('empresa_exp', null) !!}
        		<label for="empresa_exp">Empresa</label>
        	</div>
      		<div class="input-field col s6 m5 grey-text text-darken-2">
      			{!!Form::text('puesto_exp', null) !!}
      			<label for="puesto_exp">Puesto</label>
      		</div>
      		<div class="col s6 grey-text text-darken-2">
            <label class="label-select black-text" for="descripcion">Descripción Breve de Actividades que Realizaba </label>
            <textarea name="descrip_exp" id="descrip_exp" class="materialize-textarea" maxlength="150" length="130"></textarea>
      		</div>
      		<!--  **** -->
      		<div class="col s12 m6">
            <div class="col s12 grey-text text-darken-2 ">
              <div class="col s6">
                <label class="label-select black-text" for="mo_ini_exp">Mes de Inicio</label>
                          {!!Form::select('mo_ini_exp',trans('empleados.dates'), null, ['placeholder' => 'Mes', 'class' => 'browser-default'])!!}
              </div>
              <div class="col s6">
                          <label class="label-select black-text" for="y_ini_exp">Año de Inicio</label>
                {!! Form::selectYear('y_ini_exp', date('Y'),1930 ,null,['class' =>'browser-default']) !!}
              </div>
            </div>
             
              <div class="col s6">
                         <label class="label-select black-text" for="mo_fin_exp">Mes de Termino o Actual</label>
                  {!!Form::select('mo_fin_exp',trans('empleados.dates'), null, ['placeholder' => 'Mes', 'class' => 'browser-default'])!!}
              </div>
              <div class="col s6">
                  <label class="label-select black-text" for="y_ini_exp">Año de Termino o Actual</label>
                {!!Form::selectYear('y_fin_exp',date('Y'),1930 , null, ['class' => 'browser-default'])!!}
              </div>
            </div>
          </div>

      	</div>
      	<div class="row">
      		<div class="input-field col s12 m6 grey-text text-darken-2">
      			{!!Form::text('referencia', null)!!}
      			<label for="referencia">Referencia</label>
      		</div>
      		<div class="input-field col s6 m3 grey-text text-darken-2">
      			{!!Form::text('puesto', null)!!}
      			<label for="puesto">Puesto</label>
      		</div>
      		<div class="input-field col s6 m3 grey-text text-darken-2">
      			{!!Form::text('tel_experien', null)!!}
      			<label for="tel_experien">Telefono</label>
      		</div>
      	</div>
      	<div class="row">
          <div class="col s12">
            <h6 class="blue-text">Llena los campos, despues da Click en el botón Agregar.</h6>
          </div>
          <div class="col s12 center">
            <a id="addExperiencia" href="#!" class="waves-effect waves-light btn black"><i class="material-icons left">add_circle</i>Agregar</a>
          </div>
      	</div>
        <div class="col s12">
            <h6 class="blue-text">Experiencia:</h6>
          </div>
      	<div id="boxExperiencia" class="col s12">
            @foreach($user->expes()->orderBy('id', 'DESC')->get()  as $expe)
              <article data-id="{{ $expe->id }}" class="col s12 valign-wrapper expedesc white lighten-4 ">
                  <div class="col s11 m11">
                     <ul class="experien">
                        <li><strong>Puesto: </strong>{{ $expe->puesto_exp }}</li>
                        </li>
                      </strong>
                        <li><strong>Empresa: </strong>{{ $expe->empresa_exp }}</li>
                        <li><strong>Referencia: </strong>{{ $expe->referencia }} &nbsp;&nbsp; {{ $expe->puesto }} &nbsp;&nbsp; {{ $expe->tel_experien }}</li>
                     </ul>
                     <div class="div-experien">
                        <h6 class="blue-text">Descripción de actividades que realizaba: </h6>
                        <p>{{ $expe->descrip_exp }}</p>
                     </div>
                  </div>
                  <div class="col s1 m1 right-align">
                      <a href="#!" class="btn-floating waves-effect waves-light white btn btn-exper-del"><i class="material-icons red-text">delete</i></a>
                  </div>
              </article>
            @endforeach 
        </div>
	</div>

<!-- #### Termina Experiencia Profecional #### -->