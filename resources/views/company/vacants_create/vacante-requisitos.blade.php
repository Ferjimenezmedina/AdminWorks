@extends('company.admin_layout')

@section('title') Nueva Vacante  @stop

@section('titleHeader')Postula tu Vacante @stop

@section('content')
    <section class="container">
        @include('errors.mensaje')
        <div class="row card-panel">
            <div class="col s12">
                <div class="">
                    {!! Form::model($vacant, ['route'=>['vacante.store_demands_put', $vacant->id],'method'=>'POST']) !!}
                    <div class="row">
                        <h3>Nueva Vacante</h3>
                        <p class="black-text">Crea tu vacante facilmente. Solo tiene que llenar el formulario y dar click en el boton de Pustular Vacante.</p>
                        <div class="black valign-wrapper z-depth-1">
                            <ul class="col s12 valign ul-breadcrum">
                                <li href="#!" class="white-text">Crea <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                                <li href="#!" class="white-text">Contratación <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                                <li href="#!" class="white-text
                                ">Requisitos, Beneficios e Idioma <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                                <li href="#!" class="">Datos de Empresa <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                                <li href="#!" class="">Publicar <i class="material-icons ico-aling">keyboard_arrow_right</i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="myaddreqben">
                            <div class="col s12 m3">
                                <h5>Requisitos <i class="material-icons left blue-text">forward</i></h5>
                            </div>
                            <div class="input-field col s12 m5  grey-text text-darken-2">
                                {!! Form::text('requisito', null, ['class' =>''])	!!}
                                <label for="specialiti">Requisito<span class="red-text">*</span></label>
                                <div class="col s12">
                                    <h6 class="blue-text">Es obligatorio agregar un requisito como mínimo.</h6>
                                </div>
                            </div>
                            <div class="input-field col s12 m4 center">
                                <button class="btn waves-effect waves-light black center z-depth-2" data-vac="{{ $vacant->id }}" type="button" id="updateRequisito">Agregar
                                    <i class="material-icons left">add_box</i>
                                </button>
                            </div>
                        </div>
                        <div class="col s12">
                            <div id="requisitosagre">
                                @foreach($vacant->demands()->orderBy('id', 'DESC')->get() as $deman)
                                    <article data-id="{{ $deman->id }}" class="col s10 m7 offset-m3 borde-bottom">
                                        <div class="col s10 m9">
                                            <p>{{ $deman->demand }}</p>
                                        </div>
                                        <div class="col s2 m3 right-align">
                                            <a href="#!" class="btn btn-floating red waves-effect waves-light  btn-required-del">
                                                <i class="material-icons white-text">delete</i>
                                            </a>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="myaddreqben">
                            <div class="col s12 m3">
                                <h5>Beneficios <i class="material-icons left blue-text">forward</i></h5>
                            </div>
                            <div class="input-field col s12 m5  grey-text text-darken-2">
                                {!! Form::text('beneficio', null, ['class' => ''])	!!}
                                <label for="beneficio">Beneficio<span class="red-text">*</span></label>
                                <div class="col s12">
                                    <h6 class="blue-text">Es obligatorio agregar un Beneficio como mínimo.</h6>
                                </div>
                            </div>
                            <div class="input-field col s12 m4 center">
                                <button class="btn waves-effect waves-light black center z-depth-2" data-vacbe="{{ $vacant->id }}" type="button" id="updateBeneficio">Agregar
                                    <i class="material-icons left">add_box</i>
                                </button>
                            </div>
                        </div>
                        <div class="col s12">
                            <div id="beneficiosagre">
                                @foreach($vacant->benefits()->orderBy('id', 'DESC')->get() as $benefit)
                                    <article data-id="{{ $benefit->id }}" class="col s10 m7 offset-m3 borde-bottom">
                                        <div class="col s10 m9">
                                            <p>{{ $benefit->benefit }}</p>
                                        </div>
                                        <div class="col s2 m3 right-align">
                                            <a href="#!" class="btn btn-floating red waves-effect waves-light  btn-required-del">
                                                <i class="material-icons white-text">delete</i>
                                            </a>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <h5>Idiomas</h5>
                        <div class="addarray-select">
                            <div class="col s12 m8">
                                <div class="col s6 grey-text text-darken-2">
                                    <label class="label-select black-text" for="idioma">Idioma</label>
                                    {!!Form::select('idioma',trans('empleados.idioma'), null, ['placeholder' => 'Idioma','class' =>'browser-default'])!!}
                                </div>
                                <div class="col s6 grey-text text-darken-2">
                                    <label class="label-select black-text" for="idioma_nivel">Nivel de Idioma</label>
                                    {!!Form::select('idioma_nivel',trans('empleados.idioma_nivel'), null, ['placeholder' => 'Nivel','class' =>'browser-default'])!!}
                                </div>
                                <div class="col s12">
                                    <h6 class="blue-text">Es obligatorio agregar un idioma como mínimo.</h6>
                                </div>
                            </div>
                            <div class="input-field col s12 m4 center">
                                <button class="btn waves-effect waves-light black center z-depth-2" data-langvac="{{ $vacant->id }}" type="button" id="addIdiomaVacant">Agregar
                                    <i class="material-icons left">add_box</i>
                                </button>
                            </div>
                        </div>
                        <div class="col s12">
                            <div id="lenguajeagre">
                                @foreach($vacant->languages()->orderBy('id', 'DESC')->get() as $lang)
                                    <article data-id="{{ $lang->id }}" class="col s12 m8 offset-m2 arti-aca-ex">
                                        <div class="col s10 borde-bottom ">
                                            <h6 class="grey-text">{{ $lang->idioma }} - {{ $lang->idioma_nivel }}</h6>
                                        </div>
                                        <div class="col s2 center">
                                            <a href="#!" class="btn-floating waves-effect waves-light white btn btn-langvac-del">
                                                <i class="material-icons red-text">delete</i>
                                            </a>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="input-field col s12 m4 right">
                            <button class="btn waves-effect waves-light black darken-2 btn-large" type="submit" name="action">Guardar y Continuar
                                <i class="material-icons right">keyboard_arrow_right</i>
                            </button>
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
    {!! Html::script('js/querys/script-localidades.js') !!}
    {!! Html::script('js/querys/dinamico.js') !!}
@stop