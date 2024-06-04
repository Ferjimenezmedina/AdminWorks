@extends('company.admin_layout')

@section('title') Datos de Compañia  @stop

@section('titleHeader')Datos de Compañia   @stop

@section('content')

    <section class="container">
        @include('errors.mensaje')
        {!! Form::open(['route'=>'company.store','method'=>'POST','files'=>true]) !!}
        {!! Form::hidden('user_id', Auth::user()->id) !!}

        @include('company.partials.form_company')

        <div class="input-field col s12  grey-text text-darken-2 right-align">
            <br>
            <button class="btn waves-effect waves-light  black rto-mono-regularo btn-large" type="submit" name="action">Guardar <i class="material-icons right small">save</i>
            </button>
            <br>
        </div>
        {!! Form::close() !!}
    </section>

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('textarea#descripcion').characterCounter();
        });
    </script>
    {!! Html::script('js/querys/pluemplea2.js') !!}
    {!! Html::script('js/querys/servi.js') !!}
    {!! Html::script('js/querys/script-localidades.js') !!}
@stop