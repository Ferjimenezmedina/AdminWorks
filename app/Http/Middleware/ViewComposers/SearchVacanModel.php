<?php

namespace empleaDos\Http\ViewComposers;

use empleaDos\Entities\Category;
use empleaDos\Entities\Country;
use empleaDos\Entities\Estado;
use empleaDos\Entities\Municipio;
use empleaDos\Entities\Subcategory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;


class SearchVacanModel
{
    public function compose(View $view)
    {
        $makeForm = Request::only('pais_id','state_id','mpio_id','category_id','subcategory_id');
        $pais = Country::orderBy('pais', 'ASC')->lists('pais','id')->toArray();
        $estado = $muni  = $subc = array();

        if ($makeForm['pais_id'] != null){
            $estado = Estado::where('pais_id',$makeForm['pais_id'])->lists('nombre','id');
            if ($makeForm['state_id'] != null){
                $muni = Municipio::where('estado_id',$makeForm['state_id'])->lists('nombre','id');
            }
        }
        $catego = Category::lists('category','id');
        if ($makeForm['category_id'] != null){
            $subc =  Subcategory::where('category_id',$makeForm['category_id'])->lists('subcategory','id');
        }
        $view->with(compact('makeForm','pais','catego','estado','subc','muni'));

    }
}