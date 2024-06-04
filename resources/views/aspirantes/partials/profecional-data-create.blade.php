<div class="row card-panel">
	<div class="row">
		<h5 class="blue-text">Presentacion del Aspirante<i class="material-icons left small">person</i>  </h5> 
		<div class="col s12 m10 offset-m1">
			<div class="input-field col s12 m7 grey-text text-darken-2">
        		{!! Form::text('title_prof', null, ['class' => 'validate', 'required' => 'required'])	!!}
   				{!! Form::label('title_prof','Cargo o Titulo',['class'=>''])!!}
                               
                               <div class="col s12">
	    		<h6 class="blue-text">** Ejemplo: "Ing. en Sistemas" **</h6>
	    	</div> 
                                
      	</div>
      	<div class="input-field col s12 m5 grey-text text-darken-2">
        		{!! Form::text('specialty', null, ['class' => 'validate', 'required' => 'required'])	!!}
   				{!! Form::label('specialty','Especialidad:', ['class'=>''])!!}
                                
                                <div class="col s12">
	    		<h6 class="blue-text">** Ejemplo: "Desarrollador en Aplicaciones Moviles" **</h6>
	    	</div>
      	</div>
      	<div class="input-field col s12">
	         <textarea id="descrip_prof" name="descrip_prof" class="materialize-textarea" maxlength="500" length="500" required="required"></textarea>
	         <label for="descrip_prof">Descripción breve de su perfil: </label>
	    	</div>
	    	<div class="col s12">
	    		<h6 class="blue-text">Toma en cuenta que este sección es la Carta de Presentación de tu Curriculum.</h6>
	    	</div>
		</div>
	</div>
</div>
<!-- #### Termina Perfil Profecional #### -->