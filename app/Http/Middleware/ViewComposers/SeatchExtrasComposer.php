<?php

namespace empleaDos\Http\ViewComposers;


use empleaDos\Entities\Category;
use empleaDos\Entities\Estado;
use empleaDos\Entities\Municipio;
use empleaDos\Entities\Subcategory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class SeatchExtrasComposer
{
    public function compose(View $view)
    {
        $makeForm = Request::only('pais_id','state_id','mpio_id','category_id','subcategory_id','postulada','min_salario','min_salario');
        $name_state = $name_muni  = $name_subc =
        $name_catego = $name_subc = $is_postulada = $min_salary = array();

        if ($makeForm['state_id'] != null ){
            $name_state = Estado::where('id',$makeForm['state_id'])->select('nombre')->first();;
        }
        if ($makeForm['mpio_id'] != null ){
            $name_muni = Municipio::where('id',$makeForm['mpio_id'])->select('nombre')->first();;
        }

        if ($makeForm['category_id'] != null ){
            $name_catego = Category::where('id',$makeForm['category_id'])->select('category')->first();;
        }
        if ($makeForm['subcategory_id'] != null ){
            $name_subc = Subcategory::where('id',$makeForm['subcategory_id'])->select('subcategory')->first();;
        }

        if ($makeForm['postulada'] != null ){
            $is_postulada = config('options.desde.'.$makeForm['postulada']);
        }

        if($makeForm['min_salario']){
            $min_salary = $makeForm['min_salario'];
        }


        $view->with(compact('name_state','name_muni', 'name_catego', 'name_subc', 'is_postulada', 'min_salary'));



    }
}