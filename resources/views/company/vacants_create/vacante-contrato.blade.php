@extends('company.admin_layout')

@section('title') Nueva Vacante  @stop

@section('titleHeader')Postula tu Vacante @stop

@section('content')
    <section class="container">
        @include('errors.mensaje')
        <div class="row card-panel">
            <div class="col s12">
                <div class="">
                    {!! Form::model(['route'=>['vacante.store_contract_put', $id],'method'=>'PUT']) !!}
                    <div class="row">
                        <h3>Nueva Vacante</h3>
                        <p class="black-text">Crea tu vacante facilmente. Solo tiene que llenar el formulario y dar click en el boton de Pustular Vacante.</p>
                        <div class="black valign-wrapper z-depth-1">
                            <ul class="col s12 valign ul-breadcrum">
                                <li href="#!" class="white-text">Crea <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                                <li href="#!" class="white-text">Contratación <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                                <li href="#!" class="">Requisitos, Beneficios e Idioma <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                                <li href="#!" class="">Datos de Empresa <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                                <li href="#!" class="">Publicar <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <h5>Contratación</h5>
                        <div class="col s12">
                            <div class="col s12 m3 grey-text text-darken-2">
                                <label class="label-select black-text" for="type_contract">Tipo de Contratación</label>
                                {!!Form::select('type_contract',trans('empleados.type_contract'), null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','required'=>'required'])!!}
                            </div>
                            <div class="col s12 m3 grey-text text-darken-2">
                                <label class="label-select black-text" for="type_schedule">Jornada Laboral</label>
                                {!!Form::select('type_schedule',trans('empleados.type_schedule'), null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','required'=>'required'])!!}
                            </div>
                            <div class="col s12 m3 grey-text text-darken-2">
                                <label class="label-select black-text" for="type_salary">Sueldo</label>
                                {!!Form::select('type_salary',trans('empleados.type_salary'), null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','required'=>'required'])!!}
                            </div>
                            <div class="col s12 m3 grey-text text-darken-2">
                                <label class="label-select black-text" for="type_pay">Pago</label>
                                {!!Form::select('type_pay',trans('empleados.type_pay'), null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','required'=>'required'])!!}
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="input-field col s12 ">
                                <p>
                                    <input type="checkbox" name="public_min_pay" value="1" class="filled-in " id="public_min_pay" checked/>

                                    <label for="public_min_pay" class="black-text">Publicar el Sueldo mínimo de la Vacante  <br><br><br></label>
                                </p>
                            </div>
                            <div class="input-field col s12">
                                <br>
                                {!! Form::text('min_salary', null,['class'=>'materialize-textarea disabled','required'=>'required']) !!}

                                <label for="min_salary">Sueldo Mínimo($0)</label>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="input-field col s12">
                                <p>
                                    <input type="checkbox" name="public_max_pay" value="1" class="filled-in" id="public_max_pay" checked/>
                                    <label for="public_max_pay" class="black-text">Publicar el Sueldo máximo de la Vacante <br><br><br></label>
                                </p>
                            </div>
                            <div class="input-field col s12">
                                <br>
                                {!! Form::text('max_salary', null,['class'=>'materialize-textarea ','required'=>'required']) !!}

                                <label for="max_salary">Sueldo Máximo($1)</label>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="input-field col s12 m6">
                                <label class="black-text">Disponibilidad para Viajar</label>
                            </div>
                            <div class="input-field col s12 m3">
                                <p>
                                    <input type="radio" name="to_travel" value="false" class="filled-in" id="viajafalse" checked/>
                                    <label for="viajafalse">No</label>
                                </p>
                            </div>
                            <div class="input-field col s12 m3">
                                <p>
                                    <input type="radio" name="to_travel" value="true" class="filled-in" id="viajatrue" />
                                    <label for="viajatrue">Si</label>
                                </p>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="input-field col s12 m6">
                                <label class="black-text">Disponibilidad para cambio de Residencia</label>
                            </div>
                            <div class="input-field col s12 m3">
                                <p>
                                    <input type="radio" name="change_address" value="false" class="filled-in" id="residenfalse"checked/>
                                    <label for="residenfalse">No</label>
                                </p>
                            </div>
                            <div class="input-field col s12 m3">
                                <p>
                                    <input type="radio" name="change_address" value="true" class="filled-in" id="residentrue"/>
                                    <label for="residentrue">Si</label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="divider"></div>
                    <br>
                    <div class="row">
                        <div class="col s12 m4 l4 grey-text text-darken-2 ">
                            <label class="label-select black-text" for="pais_id">País<span class="red-text">*</span></label>
                            {!!Form::select('pais_id', $pais , null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'pais_id','required' => 'required'])!!}
                        </div>
                        <div class="col s12 m4 l4  grey-text text-darken-2 ">
                            <label class="label-select black-text" for="state_id">Estado<span class="red-text">*</span></label>
                            {!!Form::select('state_id',[], null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'state_id','required' => 'required'])!!}
                        </div>
                        <div class="col s12 m4 l4 grey-text text-darken-2">
                            <label class="label-select black-text" for="mpio_id">Municipio<span class="red-text">*</span></label>
                            {!!Form::select('mpio_id',[], null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'mpio_id','required' => 'required'] )!!}
                        </div>
                    </div>
                    <!-- AQUI VAN LOS PARAMETROS DE UBICACION -->
                     <div class="row">
    <div class="col s7 m3 grey-text text-darken-7">
        <div class="input-field   grey-text text-darken-2">
							{!! Form::text('lat', old('lat'), ['class' => 'validate', 'required'=>'required'])	!!}
							<label for="lat">Latitud<span class="red-text">*</span></label>
                                                         <label class="label-select black-text" for="">Copia y Pega" la latitud cargada.</label>
                                                        
						</div>
         
       
            <div class="input-field   grey-text text-darken-3">
							{!! Form::text('lng', old('lng'), ['class' =>  'validate', 'required'=>'required'])	!!}
                                                        <br>
                                                        
                                                        <label class=""for="lng">Longitud<span class="red-text">*</span></label>
                                                        <label class="label-select black-text" for="">Copia y Pega" la longitud cargada.</label>
                                                        
                                                        
						</div>
        <div class="row">
      
            </div>
       <!-- <label class="label-select black-text" for="dia">Latitud</label>
        {!! Form::text('coord_lat',null, ['class' => 'validate'])     !!}
        {!!   Form::label('coord_lat','"Copia y Pega" la latitud cargada. ')     !!}
    </div>
   <div class="col s6 m3 grey-text text-darken-2">
        <label class="label-select black-text" for="dia">Longitud</label>
        {!! Form::text('coord_long',null ,['class' => 'validate'])     !!}
        {!!   Form::label('coord_long','"Copia y Pega" la longitud cargada. ')     !!}
    -->
       </div>
    
    <div class="input-field col s6 m3 grey-text text-darken-2">
       <b>Ubicacion</b>
       <div id='ubicacion'></div>
<script type="text/javascript">
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(mostrarUbicacion);
    } else {alert("¡Error! Este navegador no soporta la Geolocalización.");}
function mostrarUbicacion(position) {
    var times = position.timestamp;
    var latitud = position.coords.latitude;
    var longitud = position.coords.longitude;
    var altitud = position.coords.altitude; 
    var exactitud = position.coords.accuracy;   
    var div = document.getElementById("ubicacion");
    div.innerHTML = "Timestamp: " + times + "<br>Latitud: " + latitud + "<br>Longitud: " + longitud + "<br>Altura en metros: " + altitud + "<br>Exactitud: " + exactitud;}  
function refrescarUbicacion() { 
    navigator.geolocation.watchPosition(mostrarUbicacion);} 
</script>

<span title="Si no ves la ubicacion en la pagina da clic aqui!!" class="etiqueta">
 <a href="https://www.coordenadas-gps.com/" target="_blank">Ubicacion Externa</a>
</span>

    </div>
</div>
                    
                    <!-- AQUI FINALIZAN LOS PARAMETROS DE UBICACION -->

                    <div class="row">
                        <div class="input-field col s12">
                            {!! Form::textarea('final_comment', old('final_comment'),['class'=>'materialize-textarea','length'=>'1000','placeholder'=>'Comentario Final']) !!}
                            <label for="final_comment">Comentario Final</label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="input-field col s12 m4 right">
                            <button class="btn waves-effect waves-light black darken-2 btn-large" type="submit" name="action">Guardar y Continuar
                                <i class="material-icons right">keyboard_arrow_right</i>
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>{{-- Temina Card-content  --}}
            </div>
        </div>
    </section>
@stop

@section('script')
    {!! Html::script('js/querys/pluemplea2.js') !!}
    {!! Html::script('js/querys/servi.js') !!}
    {!! Html::script('js/querys/script-localidades.js') !!}
@stop