<div class="row card-panel">
	<div class="row">
		<h5 class="blue-text">Mis Preferencias<i class="material-icons left ">library_books</i></h5>
		<div class="col s12 m10 offset-m1">
			<p>Esta sección es muy importante, por que al asignarte a una categoria( ó categorías), las Empresas que están buscando Aspirantes podrán encontrarte de manera más eficiente.</p>
			<div class="row">
				<div class="col s6 m5 grey-text text-darken-2">
					<label class="label-select black-text" for="situcacion_ac">Situación Actual</label>
   				{!! Form::select('situcacion_ac',trans('empleados.situacion_empleo'), null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default']) !!}
   			</div>
   			<div class="input-field col s6 m7 grey-text text-darken-2">
          		{!!Form::text('puesto_des', null, ['class' => 'validate', 'required' => 'required'])!!}
   				<label for="puesto_des">Puesto de Trabajo Deseado<span class="red-text">*</span></label>
          	</div>
			</div>
			<div class="row">
				<div class="input-field col s6 m4 grey-text text-darken-2 center">
          		<h6 class="">Sueldo Requerido </h6>
          	</div>
          	<div class="input-field col s6 m4 grey-text text-darken-2">
          		<label class="label-select black-text" for="req_salary">Cantidad</label>
          		{!!Form::select('req_salary',trans('empleados.sueldo'), null, ['placeholder' => 'Cantidad','class' =>'browser-default'])!!}
          	</div>
          	<div class="input-field col s6 m4 grey-text text-darken-2 ">
          		<label class="label-select black-text" for="salary_type">Cantidad</label>
          		{!!Form::select('salary_type',trans('empleados.type_salary'), null, ['placeholder' => 'Por','class' =>'browser-default'])!!}
          	</div>
			</div>
			<div class="row">
				<div class="input-field col s6 m4 grey-text text-darken-2 center">
          			<h6 class="">Sueldo Deseado</h6>
          		</div>
				<div class="input-field col s6 m4 grey-text text-darken-2">
					<label class="label-select black-text" for="cantidad_deseada">Cantidad</label>
					{!!Form::select('des_salary',trans('empleados.sueldo'), null, ['placeholder' => 'Cantidad','class' =>'browser-default'])!!}
				</div>
				<div class="input-field col s6 m4 grey-text text-darken-2 center">
					<label class="label-select black-text" for="cantidad_deseada">Cantidad</label>
					{!!Form::select('salary_type_des',trans('empleados.type_salary'), null, ['placeholder' => 'Por','class' =>'browser-default'])!!}
				</div>
			</div>
			<div class="row">
				<div id="descripCat"  class="col s6 m6 l5 grey-text text-darken-2">
      				<label class="label-select black-text" for="category_id">Area de Interes</label>
	  				{!!Form::select('category_id',$catego, null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'category_id',])!!}
      			</div>
				<div class="col s6 m6 l4 grey-text text-darken-2">
					<label class="label-select black-text" for="subcategory_id">Especialidad de Interes</label>
						{!!Form::select('subcategory_id',array(''), null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'subcategory_id'])!!}
				</div>
				<div class="input-field col s12 m6 13 center">
			         <a id="addAsigCat" href="#!" class="waves-effect waves-light btn black"><i class="material-icons left">add_circle</i>Agregar</a>
			    	</div>
	      	
			  	<div class="col s12">
	    			<h6 class="blue-text">Es obligatorio agregar un area y especialidad como mínimo.</h6>
	    		</div>
			</div>
			<br>
		</div>
		<div id="box-categoria" class="row">
			@foreach( $sub as $asing )
				<article data-id="{{ $asing->id }} " class="col s12 m8 offset-m2 arti-aca-ex">
	             <div class="col s10 borde-bottom ">
	                 <h6 class="grey-text">{{ $asing->category }} - {{ $asing->subcategory }}</h6>
	             </div>
	             <div class="col s2 center">
	                 <a href="#!" class="btn-floating waves-effect waves-light white btn btn-asigcat-del">
	                     <i class="material-icons red-text">delete</i>
	                 </a>
	             </div>
	         </article>
			@endforeach
		</div>

	</div>
</div>
<!-- #### Termina Asignación de Categorías #### -->