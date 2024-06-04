@extends('layouts.principal')

@section('title')
	Registro | Paso 2
@stop

@section('content')
	<div class="getbackCuenta valign-wrapper"> 

		<div class="container valign">
                    <h3 class="blue-text text-darken-2" align="center">Registro Aspirante <i class="material-icons small ico-aling">person</i></h3>
			<div class="row">
                                <div class="card col s12 m8 offset-m2">
                                 
				@include('errors.message')
				
				{!! Form::open(['route'=>'auth.register-data','method'=> 'POST']) !!}
                                  <br>
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
           
					
							
							
                                                              <div class="col s12 grey-text text-darken left-align">
								<input type ='button' class="btn waves-effect waves-light black darken-2 "  value = 'Anterior' onclick="location.href = 'javascript:history.back(1)'"/>
								<input type ='submit' name="action" class="btn waves-effect waves-light black darken-2 right-align "  value = 'Siguiente' onclick="location.href = '{{ route('auth.register3') }}'"/>
								
							</button>
                                                        
                                                      
							</button>
                                                              </div>
                                                        <br>
                                                        <br>
                                                                    <br>
							</div>
                                </div>
						</div>

					</div>


				{!! Form::close() !!}
			</div>
				</div>
			
		</div>
		
	</div>
        
@stop
