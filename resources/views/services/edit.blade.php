<section class="container">
    @extends('errors.mensaje')
    {!!Form::model($services,['route'=>['services.update',$services->id],'method'=>'PUT', 'files' => true])!!}
    <div class="row card-panel">
        <h5 class="blue-text">Publicar Servicio </h5>
        <div class="col s12 m10 offset-m1">
            <div class="row">
                <div class="input-field col s12 m12 grey-text text-darken-2">
                    {!! Form::text('service', null, ['class' => 'validate', 'required' => 'required'])	!!}
                    {!! Form::label('service','Título')!!}
                </div>
                <div id="descripCat"  class="col s12 m6 grey-text text-darken-2">
                    <label class="label-select black-text" for="category_id">Categoría de Interes</label>
                    {!!Form::select('category_id',$catego,null ,['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'category_id',])!!}
                </div>
                <div class="col s12 m6 grey-text text-darken-2">
                    <label class="label-select black-text" for="subcategory_id">Subcategoría de Interes</label>
                    {!!Form::select('subcategory_id',$subcat, null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'subcategory_id',])!!}
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="file-field input-field col s10 offset-s1">
                        <div class="btn black white-text">
                            <input type="file" name="img_service" id="img_service" />
                            <span>Subir  <i class="material-icons right">photo_library</i></span>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Imagen de Portada"/>
                        </div>
                    </div>
                </div>
                <div class="col s12 center">
                    <div id="muestraimg" class="center">
                        <img src='{!! asset('cvs/dir'.$services->user_id.'/'.$services->img_service) !!}' class='responsive-img'/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field  col s12 grey-text text-darken-2">
                    <h4>Descripción de tu Servicio</h4>
                    <textarea name="description" id="description" class="ckeditor" required>{{ $services->description }}</textarea>
                </div>
            </div>
            <div class="row">
                @include('services.partials.btnmodal')
            </div>
            <div class="row">
                <div class="col s3">
                    <input class="with-gap" name="service_type" value="1" type="radio" id="tipo1"  @if($services->service_type == 1)checked @endif/>
                    
                </div>
                <div class="col s3">
                    <input class="with-gap" name="service_type" value="0" type="radio" id="tipo2" @if($services->service_type == 0)checked @endif />
                    <label for="tipo2">Público <a class="btn btn-floating white lighten-4" onclick="Materialize.toast('Tu Servicio podrá ser visto por todos los Usuarios y Empresas', 4000)"><i class="material-icons black-text">warning</i></a></label>
                </div>
            </div>
        </div>
        <div class="input-field col s12  grey-text text-darken-2  center">
            <button class="btn  waves-effect waves-light right  black rto-mono-regularo btn-large" type="submit" name="action">Editar <i class="material-icons right small">create</i>
            </button>
        </div>
    </div>
    {!! Form::close() !!}
</section>
@include('services.partials.modal-images')