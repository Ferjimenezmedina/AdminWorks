@extends('layouts.principal')

@section('title')
    Recuperar Cuenta
@stop

@section('content')
    <div class="getbackCuenta valign-wrapper">

        <div class="container valign">
            <div class="row ">
                    @include('errors.mensaje')
                    {!!Form::open(['route'=>'password.email', 'method'=> 'POST','class'=>'form-horizontal'])!!}
                <div class="col s12 m8 offset-m2 card center">
                    <h3 class="condensada-regular black-text">Recuperar Password </h3>
                    <div class="row">
                        <div class="input-field col s10 offset-s1 m6 offset-m1 offset-m1 grey-text text-darken-2">
                            {!! Form::email('email', null, ['class' => 'validate', 'required' => 'required'])   !!}
                            {!! Form::label('email','Email')    !!}
                        </div>
                        <div class="input-field col s12  m4 black-text text-darken-2">
                            <button class="btn waves-effect waves-light  blue  center condensada-light" type="submit" name="action">Recuperar Contraseña</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <p class="right-align black-text">Si no estas registrado</p>
                        </div>
                        <div class="col s6">
                            <p><a  class="blue-text" href="{!! route('auth.register') !!}">Registrate aquí como Aspirante</a></p>
                            <p class="black-text">ó <a class="blue-text"  href="{!! route('company.create') !!}">aquí como Empresa</a></p>
                        </div>
                    </div>
                </div>
                    {!!Form::close()!!}
            </div>
        </div>
        
    </div>
@stop
