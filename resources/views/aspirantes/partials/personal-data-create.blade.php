<div class="row card-panel">
	<h5 class="blue-text">Datos Personales</h5>
	<div class="row">
		<div class="col s12 m3 center">
            <div class="input-field col 12 grey-text text-darken-2 center">
                <div class="col 12 center " id="muestraimg">
                    @if(Auth::user()->photo)
                      <img class="circle responsive-img" src="{!! asset('cvs/dir'.Auth::user()->id.'/'.Auth::user()->photo)!!}">
                    @else
                      <img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
                    @endif
                </div>
                <div class="file-field input-field center">
                    <div class="btn black white-text ">
                        <span>Subir Imagen<i class="material-icons right">account_circle</i></span>
                            <input type="file" name="photo" id="img-aspi" />
                    </div>
                        <input class="file-path validate" type="text"/>
                </div>
            </div>
		</div>
		<div class="col s12 m9 box-personal-data">
			<div class="row">
        <div class="input-field col s12 m4 grey-text text-darken-2">
            {!! Form::text('name',null, ['class' => 'validate', 'required' => 'required'])  !!}
            <label for="name">Nombre<span class="red-text">*</span></label>
        </div>
        <div class="input-field col s6 m4 grey-text text-darken-2">
             {!! Form::text('a_paterno', null, ['class' => 'validate', 'required' => 'required'])  !!}
             <label for="a_paterno">Apellido Paterno<span class="red-text">*</span></label>
        </div>
        <div class="input-field col s6 m4 grey-text text-darken-2">
             {!! Form::text('a_materno', null, ['class' => 'validate', 'required' => 'required'])  !!}
             <label for="a_materno">Apellido Materno<span class="red-text">*</span></label>
        </div>
      </div>
    	<div class="row">
        <div class="input-field col s12 m4 grey-text text-darken-2">
          <label class="label-select black-text" for="birthdate">Fecha de Nacimiento<span class="red-text">*</span></label>
            {!! Form::date(' birthdate', Auth::user()->birthdate,['pattern'=>'(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))' ,'placeholder'=>'aaaa-mm-dd','oninvalid'=>'setCustomValidity("Debe usar este formato: aaaa-mm-dd")','oninput'=>'setCustomValidity("")','required' => 'required']) !!}
          </div>
          <div class="input-field col s6 m4 grey-text text-darken-2">
              <label class="label-select black-text" for="genero">Genero<span class="red-text">*</span></label>
            {!!Form::select('genero',trans('empleados.genero'), null,['placeholder' => 'Genero','class'=>'browser-default','required' => 'required'])!!}
        </div>
        <div class="input-field col s6 m4 grey-text text-darken-2 "> 
          <label class="label-select black-text" for="estado_civil">Estado Civil<span class="red-text">*</span></label> 
          {!!Form::select('estado_civil',trans('empleados.es_civil'), null, ['placeholder' => 'Selecciona ','class'=>'browser-default','required' => 'required'])!!}
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6 grey-text text-darken-2">
          {!!Form::text('curp', null, ['class' => 'validate', 'required' => 'required'])!!}
          <label for="curp">CURP<span class="red-text">*</span></label>
        </div>
        <div class="input-field col s6 m6 pull-m4 grey-text text-darken-2" >
          {!! Form::text('rfc', null) !!}
          {!! Form::label('rfc','RFC')!!}
        </div>
      </div>
		</div>
	</div>
	<div class="row">
        <div class="col s12"><h6 class="blue-text">Lugar donde Radica</h6></div>
		<div class="col s6 m4  grey-text text-darken-2 ">
            <label class="label-select black-text" for="pais_id">País<span class="red-text">*</span></label>
            {!!Form::select('pais_id',$pais, null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'pais_id','required' => 'required'])!!}
		</div>
    <div class="col s6 m4  grey-text text-darken-2 ">
        <label class="label-select black-text" for="state_id">Estado<span class="red-text">*</span></label>
				{!!Form::select('state_id',[], null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'state_id','required' => 'required'])!!}
		</div>
    <div class="col s12 m4 grey-text text-darken-2">
        <label class="label-select black-text" for="mpio_id">Municipio<span class="red-text">*</span></label>
      		{!!Form::select('mpio_id',[], null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'mpio_id','required' => 'required'] )!!}
    </div>
  </div>
	<div class="row">
		<div class="col s12 l7">
				<div class="input-field col s8 grey-text text-darken-2">
    			{!! Form::text('calle', null, ['class' => 'validate', 'required' => 'required'])	!!}
          <label for="calle">Calle<span class="red-text">*</span></label>
    		</div>
    		<div class="input-field col s2 grey-text text-darken-2">
    			{!! Form::text('no_ext', null, ['class' => 'validate', 'required' => 'required'])	!!}
          <label for="no_ext">No. Ext.<span class="red-text">*</span></label>
    		</div>
    		<div class="input-field col s2 grey-text text-darken-2">
    			{!! Form::text('no_int', null)	!!}
					{!! Form::label('no_int','No. Int.')!!}
    		</div>
		</div>
  	<div class="col s12 l5">
  		<div class="input-field col m6 s6 grey-text text-darken-2">
  			{!! Form::text('colonia', null, ['class' => 'validate', 'required' => 'required'])	!!}
        <label for="colonia">Colonia<span class="red-text">*</span></label>
  		</div>
  		<div class="input-field col m6 s5 grey-text text-darken-2">
  			{!! Form::text('codigo_postal', null, ['class' => 'validate', 'required' => 'required'])	!!}
        <label for="codigo_postal">Código Postal<span class="red-text">*</span></label>
  		</div>
  	</div>
	</div>
	<div class="row">
  		<div class="col s6 m3 grey-text text-darken-2 ">
  	    <label class="label-select black-text" for="tipo_tel1">Tipo de Telefono<span class="red-text">*</span></label>
        {!! Form::select('tipo_tel1',trans('empleados.tel'), null, ['class'=>'browser-default validate','placeholder' => 'Tipo de Telefono','required' => 'required'])!!}
      </div>
      <div class="input-field col s6 m3 grey-text text-darken-2">
      	{!! Form::text('telefono1', null, ['class' => 'validate','placeholder' =>'(999)999-99-9'])	!!}
        <label for="telefono1">Número Telefónico<span class="red-text">*</span></label>
      </div>
      <div class="col s6 m3 grey-text text-darken-2">
          {!! Form::label('tipo_tel2','Tipo de Telefono',['class'=>'label-select black-text' ])!!}
      	  {!!Form::select('tipo_tel2',trans('empleados.tel'), null, ['class'=>'browser-default','placeholder' => 'Tipo de Telefono'])!!}
      </div>
      <div class="input-field col s6 m3 grey-text text-darken-2">
      	{!! Form::text('telefono2', null)	!!}
      	{!!	Form::label('telefono2','Numero')	!!}
      </div>
  </div>
	<div class="row">
		<div class="col s12 m4 l5 ">
			<div class="col s12 m12 l7">
				<h6 class="grey-text text-darken-2">Licencia de Conducir</h6>
			</div>
			<div class="col s12 m12 l5 center">
        <div class="col s6">
          <input class="with-gap" name="licencia" value="0" type="radio" id="lic1" checked />
          <label for="lic1">NO</label>
        </div>
        <div class="col s6">
          <input class="with-gap" name="licencia" value="1" type="radio" id="lic2" />
          <label for="lic2">SI</label>
        </div>
			</div>
		</div>
		<div class="col s12 m8 l7">
        <div class="col s3">
          <input class="with-gap" disabled name="tipo_licencia" value="A" type="radio" id="tipo1" checked/>
          <label for="tipo1">Tipo A <a class="tooltipped grey-text" data-position="bottom" data-delay="50" data-tooltip="Autoriza a su titular a manejar los vehículos clasificados como de transporte particular o mercantil, de pasajeros, que no excedan de diez asientos o de carga cuyo peso no exceda de tres y media toneladas."><i class="material-icons tiny">help_outline</i></a></label>
        </div>
        <div class="col s3">
          <input class="with-gap" disabled name="tipo_licencia" value="B" type="radio" id="tipo2" />
          <label for="tipo2">Tipo B <a class="tooltipped grey-text" data-position="bottom" data-delay="50" data-tooltip="Autoriza a su titular a conducir, además de los vehículos autorizados en el tipo de licencia anterior, los dedicados a la prestación del servicio público y especial de transporte."><i class="material-icons tiny">help_outline</i></a></label>
        </div>
        <div class="col s3">
          <input class="with-gap" disabled name="tipo_licencia" value="C" type="radio" id="tipo3"  />
          <label for="tipo3">Tipo C <a class="tooltipped grey-text" data-position="bottom" data-delay="50" data-tooltip="Autoriza a su titular a conducir, además del tipo de vehículos amparados por las licencias anteriores, todas aquellas unidades que tengan más de dos ejes, así como tractores de semirremolque, camiones con remolque, equipos especiales movibles, vehículos con grúa y en general los de tipo pesado."><i class="material-icons tiny">help_outline</i></a></label>
        </div>
        <div class="col s3">
          <input class="with-gap" disabled name="tipo_licencia" value="D" type="radio" id="tipo4" />
          <label for="tipo4">Tipo D <a class="tooltipped grey-text" data-position="bottom" data-delay="50" data-tooltip="Autoriza a su titular a conducir motocicletas, motonetas y otros vehículos similares; este tipo no autoriza a conducir ningún vehículo de los considerados en las fracciones anteriores."><i class="material-icons tiny">help_outline</i></a></label>
        </div>
		</div>
	</div>
    <div class="divider"></div><br>
	<div class="row">
		<div class="col s12 m6">
			<div class="col s8 m12 l8">
				<h6 class="grey-text text-darken-2 ">Dispone de Vehículo propio</h6>
			</div>
			<div class="col s4 m12 l4 ">
        <div class="col s6">
          <input class="with-gap" name="disp_veiculo" value="0" type="radio" id="disvei1" checked/>
          <label for="disvei1">NO</label>
        </div>
        <div class="col s6">
          <input class="with-gap" name="disp_veiculo" value="1" type="radio" id="disvei2" />
          <label for="disvei2">SI</label>
        </div>
			</div>
		</div>
		<div class="col s12 m6 ">
			<div class="col s9 m12 l6">
				<h6 class="grey-text text-darken-2 ">Discapacidad</h6>
			</div>
			<div class="col s3 m12 l6 ">
        <div class="col s6">
        <input class="with-gap" name="discapacidad" value="0" type="radio" id="disca1" checked/>
          <label for="disca1">NO</label>
        </div>
        <div class="col s6">
          <input class="with-gap" name="discapacidad" value="1" type="radio" id="disca2"/>
          <label for="disca2">SI</label>
        </div>
			</div>
		</div>
	</div>
  <div class="row">
    <div class="col s12 m6">
      <div class="col s9 m12 l8">
        <h6 class="grey-text text-darken-2">Disponibilidad para viajar</h6>
      </div>
      <div class="col s3 m12 l4">
        <div class="col s6">
          <input class="with-gap" name="disp_viajar" value="0" type="radio" id="disviaj1" checked/>
          <label for="disviaj1">NO</label>
        </div>
        <div class="col s6">
          <input class="with-gap" name="disp_viajar" value="1" type="radio" id="disviaj2"/>
          <label for="disviaj2">SI</label>
        </div>
      </div>
    </div>

    <div class="col s12 m6 ">
      <div class="col s9 m12 l6">
        <h6 class="grey-text text-darken-2">Disponibilidad para cambiar de Residencia</h6>
      </div>
      <div class="col s3 m12 l6">
        <div class="col s6">
          <input class="with-gap" name="disp_cam_res" value="0" type="radio" id="disresiden1" checked/>
          <label for="disresiden1">NO</label>
        </div>
        <div class="col s6">
          <input class="with-gap" name="disp_cam_res" value="1" type="radio" id="disresiden2" />
          <label for="disresiden2">SI</label>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #### Termina Datos Personales ####-->