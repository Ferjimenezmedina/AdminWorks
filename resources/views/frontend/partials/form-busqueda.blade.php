

<div class="row">
    <div class="input-field col s12 l12 grey-text text-blue">
        {!! Form::text('palabraClave', null, ['class' => 'validate'])     !!}
        {!!   Form::label('palabraClave','Palabra Clave')     !!}
    </div>
</div>
<div class="row">
    <div class="col s6 m4  grey-text text-black ">
        <label class="label-select black-text" for="pais_id">País<span class="red-text">*</span></label>
        {!!Form::select('pais_id',$pais, null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'pais_id','required' => 'required'])!!}
    </div>
    <div class="col s6 m4  grey-text text-blue ">
        <label class="label-select black-text" for="state_id">Estado</label>
        {!!Form::select('state_id',[],null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'state_id',])!!}
    </div>
    <div class="col s12 m4 grey-text text-blue">
        <label class="label-select black-text" for="mpio_id">Municipio</label>
        {!!Form::select('mpio_id',[], null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'mpio_id'] )!!}
    </div>
</div>
<div class="row">
    <div id="descripCat"  class="col s6 m6 l6 grey-text text-blue">
        <label class="label-select black-text" for="category_id">Area de Interes</label>
        {!!Form::select('category_id',$catego, null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'category_id',])!!}
    </div>
    <div id="descripSubCat"  class="col s6 m6 l6 grey-text text-blue">
        <label class="label-select black-text" for="subcategory_id">Especialidad de Interes</label>
        {!!Form::select('subcategory_id',[], null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'subcategory_id'])!!}
    </div>
</div>
<div class="row">
    <div class="col s6 m3 grey-text text-blue">
        <label class="label-select black-text" for="dia">Desde</label>
        {!!Form::select('postulada',config('options.desde'), null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default'])!!}
    </div>
    <div class="input-field col s6 m3 black-text text-blue">
        {!! Form::number('min_salario', null, ['class' => 'validate']) !!}
        {!! Form::label('min_salario','Salario Minimo') !!}
    </div>
    <div class="input-field col s6 m3 black-text text-blue">
        {!! Form::number('max_salario', null, ['class' => 'validate']) !!}
        {!! Form::label('max_salario','Salario Maximo') !!}
    </div>

        
    <b>En la parte de abajo, podras visualizar las nuevas vacantes o anterior</b>
</div>
