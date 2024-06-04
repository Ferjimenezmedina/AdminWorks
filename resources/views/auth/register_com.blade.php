@extends('layouts.principal')

@section('title')
	Registro de Empresa
@stop

@section('content')

<section class="container">
	<div class="row">
		<div class="col s12">
			<h3 class="blue-text text-darken-2">Registra Gratis tu Empresa <i class="material-icons small ico-aling">business</i></h3>
			<p class="grey-text text-darken-2">
				Selecciona ahora <strong>entre los mejores perfiles que postulan directamente a
					tus vacantes</strong> o busca entre más de 1 millón de currículums publicados. En este portal hacemos que tu proceso de selección sea rápido y efectivo.
			</p>
		</div>
	</div>
</section>
<section class="contenedor">
	{!! Form::open(['route'=>'auth.register-data-com','method'=> 'POST']) !!}
	<section>
		<div class="row">
			<div class="col s12">
				<h5 class="center">Datos de representante de la Cuenta.</h5>
				<div class="row">
					<div class="col s12 m6">
						<div class="input-field col s12 m4 grey-text text-darken-2">
						</br>
							{!! Form::text('name', null, ['class' => 'validate', 'required' => 'required'])  !!}
							<label for="name">Nombre<span class="red-text">*</span></label>
						</div>
						<div class="input-field col s6 m4 grey-text text-darken-2">
						</br>
							{!! Form::text('a_paterno', null, ['class' => 'validate', 'required' => 'required'])  !!}
							<label for="a_paterno">Apellido Paterno<span class="red-text">*</span></label>
						</div>
						<div class="input-field col s6 m4 grey-text text-darken-2">
						</br>
							{!! Form::text('a_materno', null, ['class' => 'validate', 'required' => 'required'])  !!}
							<label for="a_materno">Apellido Materno<span class="red-text">*</span></label>
						</div>
						<div class="input-field col s12 l6 grey-text text-darken-2">
						</br>
							{!! Form::email('email', null, ['class' => 'validate'])	!!}
							<label for="email">Correo Electronico<span class="red-text">*</span></label>
						</div>
						<div class="input-field col s12 l6 grey-text text-darken-2">
						</br>
							{!! Form::email('email_confirmation', null, ['class' => 'validate'])	!!}
							<label for="email_confirmation">Confirmar Correo Electronico<span class="red-text">*</span></label>
						</div>
						<div class="input-field  col s6  grey-text text-darken-2 ">
						</br>
							{!! Form::password('password',['class' => 'validate'])	!!}
							<label for="password">Contraseña<span class="red-text">*</span></label>
						</div>
						<div class="input-field  col s6 grey-text text-darken-2">
						</br>
							{!! Form::password('password_confirmation',['class' => 'validate'])	!!}
							<label for="password_confirmation">Confirmar Contraseña<span class="red-text">*</span></label>
						</div>



						<div class="input-field col s12 m6 grey-text text-darken-2">
							<label class="label-select 	blue-text" for=" birthdate">Fecha de Nacimiento<span class="red-text">*</span></label>
							{!! Form::date('birthdate', null,['pattern'=>'(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))' ,'placeholder'=>'aaaa-mm-dd','oninvalid'=>'setCustomValidity("Debe usar este formato: aaaa-mm-dd")','oninput'=>'setCustomValidity("")','required' => 'required'])  !!}
						</div>
						<div class="input-field col s6 m6 grey-text text-darken-2">
							<label class="label-select blue-text" for="genero">Genero<span class="red-text">*</span></label>
							{!!Form::select('genero',trans('empleados.genero'), null,['placeholder' => 'Genero','class'=>'browser-default','required' => 'required'])!!}
						</div>
						
					</div>
					<div class="col s12 m6">
						<div class="slider mi-slider">
							<ul class="slides">
								<li>
									<img src="{!!asset('img/background2.jpg')!!}" alt="" class="responsive-img">
									<div class="caption left-align">
										<h3 class="white-text">AdminWorks</h3>
										<h5 class="light white-text text-darken-3">Los mejores beneficios.</h5>
									</div>
								</li>
								<li>
									<img src="{!!asset('img/3.jpg')!!}" alt="" class="responsive-img">
									<br>
									<br>
									<br>
									<div class="caption right-align">
										<h3 class="	white-text">AdminWorks</h3>
										<h5 class="light white-text text-darken-1">Servicios Internacionales.</h5>
									</div>
								</li>
								<li>
									<img src="{!!asset('img/admi-user.jpg')!!}" alt="" class="responsive-img">
									<div class="caption center-align">
										<h3 class="blue-text">AdminWorks</h3>
										<h5 class=" black-text text-lighten-3">Vacantes y Prospectos.</h5>
									</div>
								</li>
							</ul>
						</div>

						
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="divider"></div>


	<section>
		<div class="row">
			<div class="col s12 card black  white-text">
			<br>
				<p>Sacomer internacional S.A de C.V, (el "Responsable") con domicilio en Autopista México Querétaro #3130 Piso 7, 700C, Colonia Valle Dorado, Tlalnepantla de Baz, Estado de México. C.P. 54020 es responsable de tratar sus datos personales (los "Datos") aquí recabados, con la finalidad de ofrecerle nuestros servicios de promoción laboral, así como promociones comerciales de bienes o servicios propios o de terceros que consideramos pueden ser de su interés.
				</p>
			
				<br>
			</div>
			<div class="col s12">
				<h6 class="red-text text-lighten-3">Estos campos son requeridos*. </h6>
			</div>
		
		<div class="" align="center">
							{!!Form::checkbox('acepto', 'value' )!!}
							<input name="acepto" type="checkbox" id="test5" required/>
							<label for="test5" class="grey-text">He leído las politicas en la parte inferior y estoy de acuerdo</label>
						</div>
				<div class="input-field col s12 grey-text text-darken-2 center">

					<button class="btn waves-effect waves-light black darken-2 btn-large center" type="submit" name="action">Registrate
					</button>
				</div>
			</div>
		</div>
	</section>

	{!! Form::close() !!}
</section>


<br>
	<div class="divider"></div>
<br>

@stop 


@section('script')
	<script>
		$(document).ready(function(){
      		$('.slider').slider();
      		$('.tooltipped').tooltip({delay: 50});
      		$('input#pagina_web, textarea#descripcion').characterCounter();
    	});
	</script>
	{!! Html::script('js/querys/servi.js') !!}
	{!! Html::script('js/querys/script-localidades.js') !!}
@stop