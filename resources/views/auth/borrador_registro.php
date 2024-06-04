@extends('layouts.principal')

@section('title')
	Registro Candidato
@stop

@section('content')
	<div class="getbackCuenta valign-wrapper">

		<div class="container valign">
			<div class="row">
					    <div class="col s12 l6 ">
			<div class="row">

				@include('errors.message')
				
				{!! Form::open(['route'=>'auth.register-data','method'=> 'POST']) !!}
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
					<div class="row">
						<div class="input-field col s12 m6">
							{!! Captcha::img() !!}
							{!! Form::text('captcha',null,['placeholder'=> 'Introduce la clave']) !!}
						</div>
						<div class="input-field col s12 m6 center">
							{!!Form::checkbox('acepto', 'value' )!!}
							<input name="acepto" type="checkbox" id="test5" required/>
							<label for="test5" class="grey-text">He leído y acepto el Aviso de Privacidad.</label>
							<div class="input-field col s12 grey-text text-darken-2 center">
								<button class="btn waves-effect waves-light black darken-2 " type="submit" name="action">Continuar
								<i class="material-icons left">save</i>
							</button>
							</div>
						</div>

					</div>


				{!! Form::close() !!}
			</div>
				</div>
			</div>
		</div>
		
	</div>
@stop