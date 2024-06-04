<section class="container">
    @extends('errors.mensaje')
    {!!Form::open(['route'=>'services.store','method'=>'POST','name'=>'FormServi','id'=>'FormServi','files' => true])!!}
    <div class="row card-panel">
        <h5 class="blue-text">Publicar Servicio </h5>
        @include('services.partials.formulario')
        <div class="input-field col s12  grey-text text-darken-2">
            <button class="btn  waves-effect waves-light right  black rto-mono-regularo btn-large" type="submit" name="action">Publicar <i class="material-icons right small">save</i>
            </button>
        </div>
    </div>
    {!! Form::close() !!}
</section>

@include('services.partials.modal-images')