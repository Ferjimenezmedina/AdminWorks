<div class="row">
    <div class="input-field col s12 l12 grey-text text-darken-2">
        {!! Form::text('palabraClave', null, ['class' => 'validate'])     !!}
        {!!   Form::label('palabraClave','Palabra Clave')     !!}
    </div>
</div>
<div class="row">
    <div class="col s6 m4  grey-text text-darken-2 ">
        <label class="label-select black-text" for="pais_id">País<span class="red-text">*</span></label>
        {!!Form::select('pais_id',$pais, null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'pais_id','required' => 'required'])!!}
    </div>
    <div class="col s6 m4  grey-text text-darken-2 ">
        <label class="label-select black-text" for="state_id">Estado<span class="red-text">*</span></label>
        {!!Form::select('state_id',$estado,null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'state_id'])!!}
    </div>  
    <div class="col s12 m4 grey-text text-darken-2">
        <label class="label-select black-text" for="mpio_id">Municipio<span class="red-text">*</span></label>
        {!!Form::select('mpio_id',$muni, null, ['class'=>'browser-default ','placeholder' => 'Selecciona una opción','id'=>'mpio_id'] )!!}
    </div>
</div>
<div class="row">
    <div id="descripCat"  class="col s6 m6 l6 grey-text text-darken-2"> 
        <label class="label-select black-text" for="category_id">Area de Interes</label>
        {!!Form::select('category_id',$catego, null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'category_id'])!!}
    </div>
    <div class="col s6 m6 l6 grey-text text-darken-2">
        <label class="label-select black-text" for="subcategory_id">Especialidad de Interes</label>
        {!!Form::select('subcategory_id',$subc, null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default','id'=>'subcategory_id'])!!}
    </div>
</div>
<div class="row">
    <div class="col s6 m3 grey-text text-darken-2">
        <label class="label-select black-text" for="dia">Desde</label>
        {!!Form::select('postulada',config('options.desde'), null, ['placeholder' => 'Selecciona una opción','class' =>'browser-default',])!!}
    </div>

    <div class="input-field col s6 m3 grey-text text-darken-2">
        {!!Form::select('des_salary',trans('empleados.sueldo'), ['class' =>'browser-default'])!!}
        {!! Form::label('min_salario','Salario Minimo') !!}
    </div>
    <div class="input-field col s6 m3 grey-text text-darken-2">
       {!!Form::select('des_salary',trans('empleados.sueldo'), ['class' =>'browser-default'])!!}
        {!! Form::label('max_salario','Salario Maximo') !!}
    </div>
        
    </div>

    <!-- Busqueda por ubicacion-->
    
    <div class="input-field col s6 m3 grey-text text-darken-2">
        
        

    </div>

    


    
