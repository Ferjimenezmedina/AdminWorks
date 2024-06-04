@extends('company.admin_layout')

@section('title') Datos de Cuenta  @stop 

@section('titleHeader')Datos Personales  @stop 

@section('content')
	<section class="container">
		@include('errors.mensaje')
		<div class="row">
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
	              <img src="{!! asset('img/mi-curriculum.jpg') !!}">
	              <span class="card-title">Datos de Acceso</span>
	            </div>
					<div class="card-content">
						<div class="row">
							{!! Form::open(['route'=>'auth.updatepass','method'=>'PUT']) !!}
							<div class="input-field col s10 offset-s1 grey-text text-darken-2">
								{!! Form::password('old_password', null,['class' => 'validate','required' => 'required']) !!}
								<label for="old_password">Contraseña Actual<span class="red-text">*</span></label>
							</div>
							<div class="input-field col s10 offset-s1 grey-text text-darken-2">
								{!! Form::password('password', null,['class' => 'validate','required' => 'required'])	!!}
								<label for="password">Nueva Contraseña<span class="red-text">*</span></label>
							</div>
							<div class="input-field col s10 offset-s1 grey-text text-darken-2">
								{!! Form::password('password_confirmation', null, ['class' => 'validate','required' => 'required'])	!!}
								<label for="password_confirmation">Confirmar Contraseña<span class="red-text">*</span></label>
							</div>
							<div class="input-field col s6 offset-s3  grey-text text-darken-2 center">
								<br>
								<button class="btn waves-effect waves-light black  btn-large center z-depth-2" type="submit" name="action">
									Cambiar
									<i class="material-icons left">mode_edit</i>
								</button>
							</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
						<img src="{!! asset('img/mi-curriculum2.jpg') !!}">
						<span class="card-title" align="right">Datos de Representante</span>
					</div>
					<div class="card-content">
						<div class="row">
							{!! Form::model($user,['route'=>['company.update-account',$user->id],'method'=>'PUT']) !!}
								<div class="input-field col s12 grey-text text-darken-2">
									{!! Form::text('name', null, ['class' => 'validate', 'required' => 'required'])  !!}
									<label for="name">Nombre<span class="red-text">*</span></label>
								</div>
								<div class="input-field col s12 m6 grey-text text-darken-2">
									{!! Form::text('a_paterno', null, ['class' => 'validate', 'required' => 'required'])  !!}
									<label for="a_paterno">Apellido Paterno<span class="red-text">*</span></label>
								</div>
								<div class="input-field col s12 m6 grey-text text-darken-2">
									{!! Form::text('a_materno', null, ['class' => 'validate', 'required' => 'required'])  !!}
									<label for="a_materno">Apellido Materno<span class="red-text">*</span></label>
								</div>
								<div class="input-field col s12 m6 grey-text text-darken-2">
									<label class="label-select black-text" for=" birthdate">Fecha de Nacimiento<span class="red-text">*</span></label>
									{!! Form::date('birthdate',$user->birthdate, null,['pattern'=>'(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))' ,'placeholder'=>'aaaa-mm-dd','oninvalid'=>'setCustomValidity("Debe usar este formato: aaaa-mm-dd")','oninput'=>'setCustomValidity("")','required' => 'required'])  !!}
								</div>
								<div class="input-field col s6 m6 grey-text text-darken-2">
									<label class="label-select black-text" for="genero">Genero<span class="red-text">*</span></label>
									{!!Form::select('genero',trans('empleados.genero'), null,['placeholder' => 'Genero','class'=>'browser-default','required' => 'required'])!!}
								</div>
							<div class="input-field col s12 grey-text text-darken-2 center">
								<button class="btn waves-effect waves-light black btn-large center" type="submit" name="action">Actualizar
									<i class="material-icons left">mode_edit</i>
								</button>
							</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection