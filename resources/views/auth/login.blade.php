@extends('layouts.principal')

@section('title')
	Login
@stop

@section('content')
	<div class="getbackCuenta valign-wrapper">

		<div class="container valign">
			<div class="row">
				<div class="card col s12 m8 offset-m2">
					<div class="card-content col s12 m10 offset-m1">
						{!! Form::open(['route'=>'auth.login', 'method'=> 'POST','class'=>'form-horizontal','id'=>'form-login']) !!}
			      		<div class="row">
							<div class="input-field col s12 black-text text-darken-2">
</br>
								{!! Form::email('email', old('email'), ['class' => 'validate', 'required' => 'required'])	!!}
								{!!	Form::label('email','Email')!!} 
							</div>
							<div class="input-field  col s12  black-text text-darken-2 ">
							</br>
							</br>

								{!! Form::password('password', null, ['class' => 'validate','required' => 'required'])	!!}
								{!!	Form::label('password','Contraseña')!!}
							</div>
							<div class="input-field col s12 right-align">
								{!!Form::checkbox('name', 'value' )!!}
								<input type="checkbox" id="test5" />
								<label for="test5" class="blue-text">Recordarme.</label>
							</div>
							<div class="input-field col s12 right-align">
								<a href="{{ route('auth.updatepass') }}" class="black-text">Olvidaste tu contraseña?</a>
							</div>
							<div class="input-field col s12 right-align">
			      				<button type="submit" class="btn blue">
			      					Entrar
			      				</button>
							</div>
			  			</div>
			    	{!! Form::close()  !!}
					</div>	
				</div>
			</div>
		</div>
		
	</div>
@stop