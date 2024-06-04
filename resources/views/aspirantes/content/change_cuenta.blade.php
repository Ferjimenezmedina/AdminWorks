@extends('aspirantes.admin_user')

@section('title')Cuenta  @stop 

@section('titleHeader')Cuenta  @stop 
@section('content')
	<section class="container">
	<br>
		<div class="row">
			@extends('errors.mensaje')
			<div class="col s12 hoverable">
				<div class="col s12 center">
					<br>
					<i class="material-icons medium white blue-text text-lighten-4">new_releases</i>
					<br>
				</div>
				<h3 class="condensada-regular center">Cambio de Contraseña</h3>
		        <div class="row center">
		          	{!! Form::open(['route'=>'auth.updatepass','method'=>'PUT']) !!}
						<div class="input-field col s6 offset-s3 grey-text text-darken-2">
							{!! Form::password('old_password', null,['class' => 'validate','required' => 'required']) !!}
                            <label for="old_password">Contraseña Actual<span class="red-text">*</span></label>
						</div>
						<div class="input-field col s6 offset-s3 grey-text text-darken-2">
		          			{!! Form::password('password', null,['class' => 'validate','required' => 'required'])	!!}
                            <label for="password">Nueva Contraseña<span class="red-text">*</span></label>
		          		</div>
						<div class="input-field col s6 offset-s3 grey-text text-darken-2">
							{!! Form::password('password_confirmation', null, ['class' => 'validate','required' => 'required'])	!!}
                            <label for="password_confirmation">Confirmar Contraseña<span class="red-text">*</span></label>
						</div>
		          		<div class="input-field col s6 offset-s3  grey-text text-darken-2 center">
	        				<button class="btn waves-effect waves-light  black btn-large center z-depth-2" type="submit" name="action">
                                Cambiar
                                <i class="material-icons right">settings_backup_restore</i>
                            </button>
	        			</div>
		          	{!! Form::close() !!}
		        </div>
			</div>

		</div>
		<br>
	</section>

</section>
@stop 