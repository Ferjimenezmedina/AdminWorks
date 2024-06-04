@extends('admin.admin_layout')

@section('title') Crear Usuario   @stop


@section('content')


{!! Form::open(['route'=> 'admin.users.store', 'method' => 'POST']) !!}

<div class="form-group">
	{!! Form::label ('name', 'Nombre')!!}
	{!! Form::text ('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre ' , ' required']) !!}

</div>

<div class="form-group">
	{!! Form::label ('a_paterno', 'Apellido Paterno')!!}
	{!! Form::text ('a_paterno', null, ['class' => 'form-control', 'placeholder' => 'Apellido Paterno ' , ' required']) !!}

</div>


<div class="form-group">
	{!! Form::label ('a_materno', 'Apellido Paterno')!!}
	{!! Form::text ('a_materno', null, ['class' => 'form-control', 'placeholder' => 'Apellido Materno ' , ' required']) !!}

</div>

<div class="form-group">
	{!! Form::label ('type', 'Tipo de Usuario')!!}
	{!! Form::select ('type', ['user' => 'Aspirante', 'company' => 'Empresa' , 'root' => 'Administrador'], null, ['class' =>      		form-control' ])  !!}

</div>

<div class="form-group">
	{!! Form::label ('email', 'Correo Electronico')!!}
	{!! Form::email ('email', $user->email, ['class'=> 'form-control', 'placeholder' => 'example@hotmail.com', 'required'])  !!}

</div>

<div class="form-group">
	{!! Form::label ('password', 'Contraseña')!!}
	{!! Form::password('password_confirmation', null, ['class' => 'validate', 'required' => 'required']) !!}

</div>

<div class="form-group">
	{!! Form::label ('genero', 'Sexo')!!}
	{!! Form::select ('genero', ['male'=> 'Masculino', 'female' => 'Femenino'], null, ['class' => form-control' ])  !!}

</div>

<div class="form-group">
	{!! Form::label ('birthdate', 'Sexo')!!}
	{!! Form::select ('genero', ['male'=> 'Masculino', 'female' => 'Femenino'], null, ['class' => form-control' ])  !!}

</div>
<div class="form-group">
	!! Form::select('date_birth', config('options.date'),old(),['placeholder' => 'Día','required' => 'required','class' =>'browser-default']) !!}

	</div>

	<div class="form-group">
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}
	@stop
		@endsection