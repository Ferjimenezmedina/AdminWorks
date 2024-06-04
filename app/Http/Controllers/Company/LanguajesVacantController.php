<?php

namespace empleaDos\Http\Controllers\Company;

use empleaDos\Entities\Company\LanguajesVacant;
use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;

class LanguajesVacantController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        if ($request->ajax()) {

            $con =  LanguajesVacant::where('vacant_id',$id)->where('idioma', $request['idioma'])->get();
            if($con->isEmpty()){
                $dem = new LanguajesVacant([
                    'vacant_id'       => $id,
                    'idioma'     => $request['idioma'],
                    'idioma_nivel'     => $request['idioma_nivel'],
                ]);
                $dem->save();

                $deman = LanguajesVacant::where('id',$dem->id)->orderBy('id', 'DESC')->first();
                return response()->json($deman->toArray());
            }
            return response()->json(['message' =>'El Idioma ya ha sido seleccionado.']);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $aca = LanguajesVacant::findOrFail($id);
        $aca->delete();
        if ($request->ajax()) {
            return response()->json([
                'message'=>'Fila Eliminada Correctamente!!'
            ]);
        }
    }
}
