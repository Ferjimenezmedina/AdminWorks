<?php

namespace empleaDos\Http\Controllers;

use DB;
use empleaDos\Entities\Country;
use empleaDos\Entities\Estado;
use empleaDos\Entities\Municipio;
use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;


class LocalidadesController extends Controller
{
   public function SelectState($id)
    {
        $estado = Estado::where('pais_id' , '=', $id )
                ->select('id as value','nombre as text')
                ->orderBy('nombre', 'asc')
                ->get()
                ->toArray();
        array_unshift($estado, ['value' => '' , 'text'=> 'Selecciona una opción']);
        return $estado;
    }
    public function SelectMunicipio($id)
    {
        $estado = Municipio::where('estado_id' , '=', $id )
                ->select('id as value','nombre as text')
                ->orderBy('nombre', 'asc')
                ->get()
                ->toArray();
        array_unshift($estado, ['value' => '' , 'text'=> 'Selecciona una opción']);
        return $estado;
    }

}
