<div class="row card-panel">
	<div class="row">
		<h5 class="blue-text">Habilidades<i class="material-icons left ">work</i></h5>
      	<div class="row">
      		<div class="col s12 m10 offset-m1">
      			<div class="input-field col s12 grey-text text-darken-2">
          		   {!!Form::text('ability', null)!!}
          		   <label for="ability">Habilidad(Aqui se describen todos los talentos)</label>
          	    </div>
      			<div class="col s12 m6 grey-text text-darken-2">
      				<label for="nivel" class="label-select black-text">Nivel de Conocimiento</label>
                  {!!Form::select('nivel',trans('empleados.nivel_habi'), null, ['placeholder' => 'Nivel','class'=>'browser-default'])!!}
      			</div>
               <div class="col s12 m6 grey-text text-darken-2 ">           
                  <label for="year_exp" class="label-select black-text">Años de Esperiencia </label>                    
                  {!!Form::select('year_exp',trans('empleados.year_experi'), null, ['placeholder' => 'Años de Esperiencia ', 'class' => 'browser-default'])!!}
               </div>
      		</div>
      	</div>
         <div class="row ">                     
            <div class="col s12 center">
               <a id="addHabilidad" href="#!" class="waves-effect waves-light btn black"><i class="material-icons left">add_circle</i>Agregar</a>
            </div>               
         </div>
      	<div id="boxHabilidad" class="row">
            @foreach($user->abils()->orderBy('id', 'DESC')->get()  as $abi)
               <article data-id="{{ $abi->id }}" id="expedesc" class="col s12 m10 offset-m1 valign-wrapper">
                  <div class="col s10 borde-bottom">
                      <div class="col s12 m5 valign">
                          <p class="grey-text text-darken-1 center valign">{{ $abi->ability }}</p>
                      </div>
                      <div class="col s4 m3 ">
                          <p class="grey-text text-darken-1 center valign">{{ $abi->nivel }}</p>
                      </div>
                      <div class="col s4 m2 ">
                          <p class="grey-text text-darken-1 center valign">{{ $abi->year_exp }}</p>
                      </div>
                  </div>

                   <div class="col s2 center valign">
                      <a href="#!" class="btn-floating waves-effect waves-light white btn btn-ability-del"><i class="material-icons red-text">delete</i></a>
                  </div>
                </article>
              
          

                 

            @endforeach  
              
        </div>
        </div>
</div>
<!-- #### Termina Habilidades  #### -->