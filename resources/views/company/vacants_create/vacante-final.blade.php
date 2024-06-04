@extends('company.admin_layout')

@section('title') Nueva Vacante  @stop

@section('titleHeader')Postula tu Vacante @stop

@section('content')
    <section class="container">
        @include('errors.mensaje')
        <div class="row card-panel">
            <div class="col s12">
                <div class="">
                    {!! Form::model($vacant,['route'=>['vacante.store_final_put',$vacant->id],'method'=>'PUT']) !!}
                    <div class="row">
                        <h3>Nueva Vacante</h3>
                        <p class="black-text">Crea tu vacante facilmente. Solo tiene que llenar el formulario y dar click en el boton de Pustular Vacante.</p>
                        <div class="black valign-wrapper z-depth-1">
                            <ul class="col s12 valign ul-breadcrum">
                                <li href="#!" class="white-text">Crea <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                                <li href="#!" class="white-text">Contratación <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                                <li href="#!" class="white-text
                                ">Requisitos, Beneficios e Idioma <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                                <li href="#!" class="white-text">Datos de Empresa <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                                <li href="#!" class="">Publicar <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <h5>Mostrar datos de Empresa.</h5>
                        <div class="input-field col s12 m3">
                            <p>
                                <input type="checkbox" class="filled-in" id="show_name" name="show_name" value="1" checked />
                                <label for="show_name">Nombre de la Empresa</label>
                            </p>
                        </div>
                        <div class="input-field col s12 m3">
                            <p>
                                <input type="checkbox" class="filled-in" id="show_logo" name="show_logo" value="1" checked/>
                                <label for="show_logo">Logotipo de la Empresa.</label>
                            </p>
                        </div><div class="input-field col s12 m3">
                            <p>
                                <input type="checkbox" class="filled-in" id="show_email" name="show_email" value="1" checked/>
                                <label for="show_email">Correo de Contacto.</label>
                            </p>
                        </div><div class="input-field col s12 m3">
                            <p>
                                <input type="checkbox" class="filled-in"  id="show_phone" name="show_phone" value="1" checked/>
                                <label for="show_phone">Telefono de Contacto.</label>
                            </p>
                        </div>

                    </div>
                    <div class="divider"></div>
                    <br>
                    <div class="row">
                        <div class="col s12 m4 offset-m4 grey-text text-darken-2 left-align">
                            <h6 class="black-text">Tiempo de Postulación<span class="red-text">*</span></h6>
                            {!!Form::select('num_expiration',trans('empleados.expiration'), null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 right-align">

                            <div class="input-field col s12 m4 right">
                                <button class="btn waves-effect waves-light black darken-2 btn-large center" type="submit" name="action">Postular Vacante
                                    <i class="material-icons left">cloud_upload</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>{{-- Temina Card-content  --}}
            </div>
        </div>
    </section>
@stop

@section('script')
    {!! Html::script('js/querys/pluemplea2.js') !!}
    {!! Html::script('js/querys/servi.js') !!}
    {!! Html::script('js/querys/script-localidades.js') !!}
@stop