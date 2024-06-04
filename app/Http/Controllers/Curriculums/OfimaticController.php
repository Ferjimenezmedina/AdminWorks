<?php

namespace empleaDos\Http\Controllers\Curriculums;

use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use empleaDos\Entities\Ofimatic;
use empleaDos\User;
use Auth;

class OfimaticController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        if ($request->ajax()) {
            $ofim = new Ofimatic([
                'user_id'       => $id,
                'ofimatica'     => $request['ofimatica'],
            ]);
            $ofim->save();
            
            $lastofi = Ofimatic::where('user_id',$id)->orderBy('id', 'DESC')->first();
            return response()->json($lastofi->toArray());
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
        //abort(500);
        $aca = Ofimatic::findOrFail($id);
        $aca->delete();
        if ($request->ajax()) {
            return response()->json([
                'message'=>'Fila Eliminada Correctamente!!' 
            ]);
        }
    }
}
