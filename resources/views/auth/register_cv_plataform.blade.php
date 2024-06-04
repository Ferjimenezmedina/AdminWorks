@extends('layouts.principal')

@section('title')
	Registro Candidato
@stop

@section('content')
	<div class="getbackCuenta valign-wrapper"> 

		<div class="container valign">
                    <h3 class="blue-text text-darken-2" align="center">Registro Aspirante CV Plataforma <i class="material-icons small ico-aling">person</i></h3>
			<div class="row">
                                <div class="card col s12 m8 offset-m2">
                                 
				@include('errors.message')
				
				{!! Form::open(['route'=>'auth.register-data2','method'=> 'GET']) !!}
                                  <br>
                                   <h5 class="blue-text" align='center'>Datos Personales <i class="material-icons center-align small" align >books</i>  </h5> 
		        <div class="input-field col s12 m4 darken-2-text text-darken-2">
		            {!! Form::text('name', old("name"), ['class' => 'validate', 'required' => 'required'])  !!}
		            <label for="name">Nombre<span class="red-text">*</span></label>
		        </div>
		        <div class="input-field col s6 m4 darken-2-text text-darken-2">
		             {!! Form::text('a_paterno', null, ['class' => 'validate', 'required' => 'required'])  !!}
		             <label for="a_paterno">Apellido Paterno<span class="red-text">*</span></label>
		        </div>
		        <div class="input-field col s6 m4 darken-2-text text-darken-2">
		             {!! Form::text('a_materno', null, ['class' => 'validate', 'required' => 'required'])  !!}
		             <label for="a_materno">Apellido Materno<span class="red-text">*</span></label>
		        </div>
        			<div class="input-field col s12 m6 darken-2-text text-darken-2">
        				{!! Form::email('email', null, ['class' => 'validate', 'required' => 'required'])	!!}
        				<label for="email">Correo Electronico<span class="red-text">*</span></label>
        			</div>
        			<div class="input-field col s12 m6 darken-2-text text-darken-2">
        				{!! Form::email('email_confirmation', null, ['class' => 'validate','required' => 'required'])	!!}
        				<label for="email_confirmation">Confirmar Correo Electronico<span class="red-text">*</span></label>
        			</div>
        			<div class="input-field  col s6  darken-2-text text-darken-2 ">
        				{!! Form::password('password', null, ['class' => 'validate','required' => 'required'])	!!}
        				<label for="password">Contraseña<span class="red-text">*</span></label>
        			</div>
        			<div class="input-field  col s6 darken-2-text-text text-darken-2">
        				{!! Form::password('password_confirmation', null, ['class' => 'validate', 'required' => 'required'])	!!}
        				<label for="password_confirmation">Confirmar Contraseña<span class="red-text">*</span></label>
        			</div>
				<label class="label-select blue-text">Fecha de Nacimiento<span class="red-text">*</span></label>
					<div class="row">
						<div class="input-field  col s4 darken-2-text text-darken-2">
							{!! Form::select('date_birth', config('options.date'),old(),['placeholder' => 'Día','required' => 'required','class' =>'browser-default']) !!}
						</div>
						<div class="input-field col s4 darken-2-text text-darken-2">
							{!! Form::select('month_birth', config('options.month'),null,['placeholder' => 'Mes','class' =>'browser-default','required' => 'required']) !!}
						</div>
						<div class="input-field col s4 darken-2-text text-darken-2">
							{!! Form::selectYear('year_birth', date('Y'),1930 ,null,['placeholder' => 'Año','class' =>'browser-default','required' => 'required']) !!}
						</div>
					</div>
					<div class="input-field col s12 darken-2-text text-darken-2">
						<label class="label-select blue-text" for="genero">Genero<span class="red-text">*</span></label>
						{!!Form::select('genero',trans('empleados.genero'), null,['placeholder' => 'Genero','class'=>'browser-default','required' => 'required'])!!}
					</div>
           <!----------------------------------------------------- MODULO 2 DE REGISTRO!------------------------------------------------------------------------------->                             
        <div class="row">
            
                <h5 class="blue-text" align='center'>Desarrollo Profesional y Academico<i class="material-icons center-align small" align >school</i>  </h5> 
		<div class="col s12 m6 grey-text text-darken-2 ">
			<label class="label-select black-text" for="max_studio">Máximo Nivel de Estudios<span class="red-text">*</span></label>
			{!!Form::select('max_studio',trans('empleados.max_academy'), null, ['class'=>'browser-default validate','placeholder' => 'Máximo Nivel de Estudios','required' => 'required'])!!}
		</div>
		<div class="col s12 m6">
			<div class="input-field col s12 grey-text text-darken-2">
				{!! Form::text('institucion', null, ['class' => 'validate'])	!!}
				<label for="institucion">Nombre de Institución<span class="red-text">*</span></label>
			</div>
			<div class="input-field col s12 grey-text text-darken-2">
				{!! Form::text('title_study', null, ['class' => 'validate'])	!!}
				<label for="title_study">¿Que estudiaste?<span class="red-text">*</span></label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m4 l6 ">
			<div class="col s12 m12 l8">
 						<h6 class="grey-text text-darken-2">¿Estudias Actualmente?</h6>
 			</div>
 			<div class="col s12 m12 l4">
 				<div class="col s6">
        			<input class="with-gap" name="ac_estudia" value="0" type="radio" id="estudiano" checked />
 					<label for="estudiano">NO</label>
 				</div>
 				<div class="col s6">
 					<input class="with-gap" name="ac_estudia" value="1" type="radio" id="estudiasi" />
 					<label for="estudiasi">SI</label>
 				</div>
      		</div>
     	</div>
            
		<div class="col s12 m6">
		  	<h6 class="blue-text">Iniciaste en:</h6>
  	  		<div class="col s6 grey-text text-darken-2 ">
  				<label class="label-select vlack-text" for="mes_start">Mes de Inicio<span class="red-text">*</span></label>
  				{!!Form::select('mes_start',trans('empleados.dates'), null , ['placeholder' => 'Elige Mes', 'class' => 'validate','class'=>'browser-default validate']) !!}
  			</div>
  			<div class="col s6 grey-text text-darken-2 ">
  				<label class="label-select black-text" for="year_start">Año de Inicio<span class="red-text">*</span></label>
  				{!! Form::selectYear('year_start', date('Y'),1930 ,null,['placeholder' => 'Elige Año','class' =>'browser-default']) !!}
  			</div>
  			<div id="box-estudiono">
  				<h6 class="blue-text">Terminaste en:</h6>
			  	<div class="col s6 grey-text text-darken-2 ">
					<label class="label-select black-text" for="mes_fin">Mes de Inicio<span class="red-text">*</span></label>
					{!!Form::select('mes_fin',trans('empleados.dates'), null, ['placeholder' => 'Elige Mes', 'class' => 'validate','class'=>'browser-default validate']) !!}
				</div>
				<div class="col s6 grey-text text-darken-2 ">
					<label class="label-select black-text" for="year_fin">Año de Termino<span class="red-text">*</span></label>
					{!! Form::selectYear('year_fin',date('Y'), 1930, null,['placeholder' => 'Elige Año','class' =>'browser-default']) !!}
				<br>
            <br>
                                </div>
  			</div>
		</div>
            <!----------------------------------------------------- FIN MODULO 2 DE REGISTRO!-------------------------------------------------------------------------------> 
            <!----------------------------------------------------- MODULO 3 DE REGISTRO PRESENTRACION!-------------------------------------------------------------------------------> 
            <div class="row">
		<h5 class="blue-text" align='center'>Presentacion del Aspirante<i class="material-icons center-align small">person</i>  </h5> 
		<div class="col s12 m10 offset-m1">
			<div class="input-field col s12 m7 grey-text text-darken-2">
        		{!! Form::text('title_prof', null, ['class' => 'validate', 'required' => 'required'])	!!}
   				{!! Form::label('title_prof','Cargo o Titulo',['class'=>''])!!}
                                
                                
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
                    <div class="col s12" align="center">
	    		<h6 class="blue-text">Toma en cuenta que este sección es la Carta de Presentación de tu Curriculum.</h6>
	    	</div>
                   <!----------------------------------------------------- FIN MODULO 3 DE REGISTRO PRESENTACION!-------------------------------------------------------------------------------> 
	    	
                   <div class="row">
                    
							<div class="input-field col s12 grey-text text-darken-2 center"><br>
                <br>
								<button class="btn waves-effect waves-light black darken-2 " type="submit" name="action"> Registrar
								<i class="material-icons left">save</i>
                                                                
			</p>
							</button>
                                                            
                				
                </div>
                </div>
                   <div class="" align="center">
                                                                <p class="grey-text text-darken-2" align="center">**Al registrar deberas confirmar tu correo electronico y entrar para verificar, acompletar los datos con (*) necesarios,si tus datos se encuentran incompletos, no podras hacer uso del sistema web de empleos y seras eliminado en un lapso de 24/36 horas **
                                                                    
		</div>	
                   
                    
		</div>
                
	</div>
					
                                
					

				{!! Form::close() !!}
        </div>
                                </div></div>
			</div>
				</div>
			
		
	
        
@stop
