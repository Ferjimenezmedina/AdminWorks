@extends('company.admin_layout')

@section('title')Editar Vacante  @stop

@section('titleHeader')Editar Vacante @stop

@section('content')
    <section class="container">
        @include('errors.mensaje')
        <div class="row card-panel">
            <div class="col s12">
                <div class="">
                    {!! Form::model($vacant,['route'=>['vacante.update',$vacant->id],'method'=>'PUT']) !!}
                    <h3>{{ $vacant->title }}</h3>
                    <p class="black-text">Para dar paso a la edicion de la vacante mostrada, favor de llenar los siguientes campos:</p>
                    <div class="row">
                        <div class="input-field col s12 m7  grey-text text-darken-2">
                            {!! Form::text('title',$vacant->title, ['class' => 'validate', 'required'=>'required'])	!!}
                            <label for="title">Titulo de la vacante<span class="red-text">*</span></label>
                        </div>
                        <div class="input-field col s12 m5  grey-text text-darken-2">
                            {!! Form::text('specialty', $vacant->specialty, ['class' => 'validate','required'=>'required'])	!!}
                            <label for="specialty">Especialidad Deseada Anotada<span class="red-text">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m5 grey-text text-darken-2">
                            <label class="label-select black-text" for="category_id">Area<span class="red-text">*</span></label>
                            {!!Form::select('category_id', $catego , $vacant->category_id, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'category_id','required'=>'required'])!!}
                        </div>
                        <div class="input-field col s12 m5 grey-text text-darken-2">
                            <label class="label-select black-text" for="subcategory_id">Especialidad<span class="red-text">*</span></label>
                            {!!Form::select('subcategory_id',$subcat, $vacant->subcategory_id, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'subcategory_id','required'=>'required'])!!}
                        </div>
                        <div class="input-field col s2 m2">
                            <label for="num_vacan" class="label-select black-text">Vacantes<span class="red-text">*</span></label>
                            {!! Form::selectRange('num_vacan', 1, 20, old('num_vacan'),['class' =>'browser-default','required'=>'required']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field  col s12 grey-text text-darken-2">
                            {!! Form::textarea('description', old('description'),['class'=>'materialize-textarea','length'=>'1000','placeholder'=>'Descripción Breve de la Empresa y desarrollo del puesto.','required'=>'required']) !!}
                            <label for="description">Descripción<span class="red-text">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="myaddreqben">
                            <div class="col s12 m3">
                                <h5>Requisitos <i class="material-icons left blue-text">forward</i></h5>
                            </div>
                            <div class="input-field col s12 m5  grey-text text-darken-2">
                                {!! Form::text('requisito', null, ['class' =>''])	!!}
                                <label for="requisito">Requisito<span class="red-text">*</span></label>
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
                                    <h6 class="blue-text">Es obligatorio agregar un beneficio como mínimo.</h6>
                                </div>
                            </div>
                            <div class="input-field col s12 m4 center">
                                <button class="btn waves-effect waves-light black center z-depth-2" type="button" id="addBenificio">Agregar
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
                                    <h6 class="blue-text">Es obligatorio agregar un Idioma como mínimo.</h6>
                                </div>
                            </div>
                            <div class="input-field col s12 m4 center">
                                <button class="btn waves-effect waves-light black center z-depth-2" type="button" id="addIdioma">Agregar
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
                        <h5>Contratación</h5>
                        <div class="col s12">
                            <div class="col s12 m3 grey-text text-darken-2">
                                <label class="label-select black-text" for="type_contract">Tipo de Contratación</label>
                                {!!Form::select('type_contract',trans('empleados.type_contract'), null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','required'=>'required'])!!}
                            </div>
                            <div class="col s12 m3 grey-text text-darken-2">
                                <label class="label-select black-text" for="type_schedule">Jornada Laboral</label>
                                {!!Form::select('type_schedule',trans('empleados.type_schedule'), null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','required'=>'required'])!!}
                            </div>
                            <div class="col s12 m3 grey-text text-darken-2">
                                <label class="label-select black-text" for="type_salary">Sueldo</label>
                                {!!Form::select('type_salary',trans('empleados.type_salary'), null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','required'=>'required'])!!}
                            </div>
                            <div class="col s12 m3 grey-text text-darken-2">
                                <label class="label-select black-text" for="type_pay">Pago</label>
                                {!!Form::select('type_pay',trans('empleados.type_pay'), null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','required'=>'required'])!!}
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="input-field col s12 ">
                                <p>
                                    <input type="checkbox" name="public_min_pay" value="1" class="filled-in " id="public_min_pay" @if($vacant->public_min_pay)checked @endif/>
                                    <label for="public_min_pay" class="black-text">Publicar el sueldo mínimo de la vacante</label>
                                </p>
                                </br>
                            </div>
                            <div class="input-field col s12">
                            
                                {!! Form::text('min_salary', null,['class'=>'materialize-textarea disabled','required'=>'required']) !!}
                                <label for="min_salary">Sueldo Mínimo</label>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="input-field col s12">
                                <p>
                                    <input type="checkbox" name="public_max_pay" value="1" class="filled-in" id="public_max_pay" @if($vacant->public_max_pay)checked @endif/>
                                    <label for="public_max_pay" class="black-text">Publicar el sueldo máximo de la vacante</label>
                                </p>
                                </br>
                            </div>
                            <div class="input-field col s12">
                                {!! Form::text('max_salary', null,['class'=>'materialize-textarea ','required'=>'required']) !!}
                                <label for="max_salary">Sueldo Máximo</label>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="input-field col s12 m6">
                                <label class="black-text">Disponibilidad para viajar</label>
                            </div>
                            <div class="input-field col s12 m3">
                                <p>
                                    <input type="radio" name="to_travel" value="false" class="filled-in" id="viajafalse" @if(!$vacant->to_travel)checked @endif/>
                                    <label for="viajafalse">No</label>
                                </p>
                            </div>
                            <div class="input-field col s12 m3">
                                <p>
                                    <input type="radio" name="to_travel" value="true" class="filled-in" id="viajatrue" @if($vacant->to_travel)checked @endif />
                                    <label for="viajatrue">Si</label>
                                </p>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="input-field col s12 m6">
                                <label class="black-text">Disponibilidad para cambio de residencia</label>
                            </div>
                            <div class="input-field col s12 m3">
                                <p>
                                    <input type="radio" name="change_address" value="false" class="filled-in" id="residenfalse"checked/>
                                    <label for="residenfalse">No</label>
                                </p>
                            </div>
                            <div class="input-field col s12 m3">
                                <p>
                                    <input type="radio" name="change_address" value="true" class="filled-in" id="residentrue"/>
                                    <label for="residentrue">Si</label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="divider"></div>
                    <br>
                    <div class="row">
                        <div class="col s12 m4 l4 grey-text text-darken-2 ">
                            <label class="label-select black-text" for="pais_id">País<span class="red-text">*</span></label>
                            {!!Form::select('pais_id',$pais, null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'pais_id','required' => 'required'])!!}
                        </div>
                        <div class="col s12 m4 l4  grey-text text-darken-2 ">
                            <label class="label-select black-text" for="state_id">Estado<span class="red-text">*</span></label>
                            {!!Form::select('state_id',$state, null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'state_id','required' => 'required'])!!}
                        </div>
                        <div class="col s12 m4 l4 grey-text text-darken-2">
                            <label class="label-select black-text" for="mpio_id">Municipio<span class="red-text">*</span></label>
                            {!!Form::select('mpio_id',$mun, null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'mpio_id','required' => 'required'] )!!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            {!! Form::textarea('final_comment', old('final_comment'),['class'=>'materialize-textarea','length'=>'1000','placeholder'=>'Comentario Final']) !!}
                            <label for="final_comment">Comentario Final</label>
                        </div>
                    </div>
                    <div class="row">
                        <h6>Mostrar datos de Empresa.</h6>
                        <div class="input-field col s12 m3">
                            <p>
                                <input type="checkbox" class="filled-in" id="show_name" name="show_name" value="1" @if($vacant->show_name)checked @endif />
                                <label for="show_name">Nombre de la Empresa</label>
                            </p>
                        </div>
                        <div class="input-field col s12 m3">
                            <p>
                                <input type="checkbox" class="filled-in" id="show_logo" name="show_logo" value="1" @if($vacant->show_logo)checked @endif/>
                                <label for="show_logo">Logotipo de la Empresa.</label>
                            </p>
                        </div><div class="input-field col s12 m3">
                            <p>
                                <input type="checkbox" class="filled-in" id="show_email" name="show_email" value="1" @if($vacant->show_email)checked @endif/>
                                <label for="show_email">Correo de Contacto.</label>
                            </p>
                        </div><div class="input-field col s12 m3">
                            <p>
                                <input type="checkbox" class="filled-in"  id="show_phone" name="show_phone" value="1" @if($vacant->show_phone)checked @endif/>
                                <label for="show_phone">Telefono de Contacto.</label>
                            </p>
                        </div>

                    </div>
                    <div class="divider"></div>
                    <br>
                    <div class="row">
                        <div class="col s12 right-align">
                            <div class="col s12 m4 offset-m4 grey-text text-darken-2 left-align">
                                <h6 class="blue-text">Tiempo de Postulación<span class="red-text">*</span></h6>
                                {!!Form::select('num_expiration',trans('empleados.expiration'), null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','required' => 'required'])!!}
                            </div>
                            <div class="input-field col s12 m4 center-align">
                                <button class="btn waves-effect waves-light black darken-2 btn-large center" type="submit" name="action">Modificar Vacante
                                    <i class="material-icons left">cloud_upload</i>
                                </button>
                            </div>

                           
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
    {!! Html::script('js/querys/dinamico.js') !!}

@stop