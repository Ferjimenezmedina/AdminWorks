@extends('layouts.principal')

@section('title')
	Registro | Paso 3
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
   <!----------------------------------------------------- MODULO 3 DE REGISTRO PRESENTRACION!-------------------------------------------------------------------------------> 
            <div class="row">
		<h5 class="blue-text" align='center'>Presentacion del Aspirante<i class="material-icons center-align small">person</i>  </h5> 
		<div class="col s12 m10 offset-m1">
			<div class="input-field col s12 m7 grey-text text-darken-2">
        		{!! Form::text('title_prof', null, ['class' => 'validate', 'required' => 'required'])	!!}
   				{!! Form::label('title_prof','Cargo o Titulo',['class'=>''])!!}
                                <div class="col s12">
	    		<h6 class="blue-text">Ejemplo: "Ingeniero en Comunicaciones"</h6>
	    	</div>
                                
      	</div>
                    
      	<div class="input-field col s12 m5 grey-text text-darken-2">
        		{!! Form::text('specialty', null, ['class' => 'validate', 'required' => 'required'])	!!}
   				{!! Form::label('specialty','Especialidad:', ['class'=>''])!!}
                                
                                <div class="col s12">
	    		<h6 class="blue-text">Ejemplo: "Logistica"</h6>
	    	</div>
      	</div>
                    
      	<div class="input-field col s12">
            <br>
            <br>
	         <textarea id="descrip_prof" name="descrip_prof" class="materialize-textarea" maxlength="500" length="500" required="required"></textarea>
                 <br>
	         <label for="descrip_prof">Descripción breve de su perfil: </label>
	    	</div>
                    <!----------------------------------------------------- FIN MODULO 3 DE REGISTRO PRESENTACION!-------------------------------------------------------------------------------> 
	    	<div class="col s12">
	    		<h6 class="blue-text">Toma en cuenta que este sección es la Carta de Presentación de tu Curriculum.</h6>
	    	</div>
		</div>
	</div>
   
   
	<div class="">
                    
           
							<div class="input-field col s12 grey-text text-darken-2 left-align"><br>
                                                            
                <br>
                                                                <input type ='button' class="btn waves-effect waves-light black darken-2 "  value = 'Anterior' onclick="location.href = 'javascript:history.back(1)'"/>
								<button class="btn waves-effect waves-light black darken-2 " type="submit" name="action"> Registrar
								<i class="material-icons left">save</i>
                                                                
                                                                
                                                                
                                                      
			</p>
							</button>
                                                        </button>
                                                            
                				
                </div>
            <br>
           <br>
            <br>
             <br>
            
                <div class="" align="center"> <br>
                                                                    <br>
                                                                    <br>
                                                                <p class="grey-text text-darken-2" align="">**Al registrar deberas confirmar tu correo electronico y entrar para verificar, completar los datos con (*) necesarios,si tus datos se encuentran incompletos, no podras hacer uso del sistema web de empleos y seras eliminado en un lapso de 24/36 horas **
                                                                   <br>
                                                                    <br>
                                                                    <br>
		</div>	
            </div>
            
                </div>
                   
                   
                    
		</div>
                
	</div>
					
                                
					

				{!! Form::close() !!}
        </div>
                                </div></div>
			</div>
				</div>
			
		
	
        
@stop
