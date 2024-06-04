<?php

namespace empleaDos\Http\Controllers\Company;

use empleaDos\Entities\Company\Demand;
use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;

class DemandController extends Controller
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
            $dem = new Demand([
                'vacant_id'       => $id,
                'demand'     => $request['demand'],
            ]);
            $dem->save();

            $deman = Demand::where('id',$dem->id)->orderBy('id', 'DESC')->first();
            return response()->json($deman->toArray());
            // return response()->json([
            //     'mensaje' => 'Insercion correcta.'
            // ]);
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
        $aca = Demand::findOrFail($id);
        $aca->delete();
        if ($request->ajax()) {
            return response()->json([
                'message'=>'Fila Eliminada Correctamente!!'
            ]);
        }
    }
}
