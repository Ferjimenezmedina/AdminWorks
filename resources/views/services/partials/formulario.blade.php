<div class="col s12 m10 offset-m1">
    <div class="row">
        <div class="input-field col s12 m12 grey-text text-darken-2">
            {!! Form::text('service', null, ['class' => 'validate', 'required' => 'required'])	!!}
            {!! Form::label('service','Título')!!}
        </div>
        <div id="descripCat"  class="col s12 m6 grey-text text-darken-2">
            <label class="label-select black-text" for="category_id">Area de Interes</label>
            {!!Form::select('category_id',$catego,null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'category_id',])!!}
        </div>
        <div class="col s12 m6 grey-text text-darken-2">
            <label class="label-select black-text" for="subcategory_id">Categoria de Interes</label>
            {!!Form::select('subcategory_id',array(''),null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'subcategory_id',])!!}
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="file-field input-field col s10 offset-s1">
                <div class="btn black white-text">
                    <input type="file" name="img_service" id="inputFile" />
                    <span>Subir  <i class="material-icons right">photo_library</i></span>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Imagen de Portada"/>
                </div>
            </div>
        </div>
        <div class="col s12 center">
            <div id="muestraimg" class="center">
                <h6 class="valign black-text lighten-2">
                    Sube una imagen referente a tu servicio, maximo de 1MB!
                </h6>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field  col s12 blue-text text-darken-2">
            <h4>Descripción de tu Servicio</h4><p align="center ">Notas*:<br>1. Aqui puedes crear tu texto con estilo, en graficos a tu gusto, y debes tener en cuenta las dimensiones de tus imagenes que seran totalmente originales!!</p>
            <b align="center">2. Deja tus datos de contacto para que la persona pueda ver tu informacion y contactar contigo inmediatamente al momento de buscar</b><br>
            <br>
            <textarea name="description" id="description" class="ckeditor" required></textarea>
        </div>
    </div>
    <div class="row">
        @include('services.partials.btnmodal')
    </div>
    <div class="row">
        <div class="col s3">
            <input class="with-gap" name="service_type" value="0" type="radio" id="tipo2" />
            <label for="tipo2">Público <a class="btn btn-floating white " onclick="Materialize.toast('Tu Servicio podrá ser visto por todos los Usuarios y Empresas', 4000)"><i class="material-icons black-text">warning</i></a></label>
        </div>
    </div>
</div>