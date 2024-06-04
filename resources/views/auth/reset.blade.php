@extends('layouts.principal')

@section('title')
  Restablecimiento de Contraseña
@stop

@section('content')
  <div class="getbackCuenta valign-wrapper">

    <div class="container valign">
      <div class="row">
       <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-title" align="center"><h4>Restablecimiento de Contraseña</h4></div>
           <div class="card">
               <div class="card-content">
                   @extends('errors.mensaje')
                   {!! Form::open(['route'=>'auth.reset','method'=>'POST']) !!}
                   <input type="hidden" name="token" value="{{ $token }}">
                   <div class="input-field col s12 black-text text-darken-2">
                       {!! Form::email('email', old('email'), ['class' => 'validate', 'required' => 'required'])   !!}
                       {!! Form::label('email','Email:')    !!}
                   </div>
                   <div class="input-field col s12 m6 black-text text-darken-2">
                       {!! Form::password('password', null, ['class' => 'validate', 'required' => 'required'])   !!}
                       {!! Form::label('password','Contraseña Nueva:')    !!}
                   </div>
                   <div class="input-field col s12 m6 black-text text-darken-2">
                       {!! Form::password('password_confirmation', null, ['class' => 'validate', 'required' => 'required'])   !!}
                       {!! Form::label('password_confirmation','Confirmar Contraseña:')    !!}
                      
                   </div>
                    <br>
                     <br>
                   <div class="row">
                       <div class="col s12 center">
                        <br>
                           <button type="submit" class="btn waves-effect waves-light black darken-2">
                               Restablecer Contraseña
                           </button>
                       </div>
                   </div>
                   {!! Form::close() !!}
               
           </div>
       </div>
   </div>
      
      </div>
    </div>
    
  </div>
@stop