<?php

namespace empleaDos\Http\Controllers\Curriculums;

use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use empleaDos\Entities\Software;
use empleaDos\User;
use Auth;

class SoftwareController extends Controller
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
            $soft = new Software([
                'user_id' => $id,
                'software' => $request['software'],
            ]);
            $soft->save();

            $lastsoft = Software::where('user_id', $id)->orderBy('id', 'DESC')->first();
            return response()->json($lastsoft->toArray());
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
    public function destroy($id , Request $request)
    {
        //abort(500);
        $aca = Software::findOrFail($id);
        $aca->delete();
        if ($request->ajax()) {
            return response()->json([
                'message'=>'Fila Eliminada Correctamente!!' 
            ]);
        }
    }
}
