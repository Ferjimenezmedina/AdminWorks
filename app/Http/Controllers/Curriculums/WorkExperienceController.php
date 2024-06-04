<?php

namespace empleaDos\Http\Controllers\Curriculums;

use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use empleaDos\Entities\WorkExperience;
use empleaDos\User;
use Auth;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
            $work = new WorkExperience([
                'user_id'       => $id,
                'empresa_exp'   => $request['empresa_exp'],
                'puesto_exp'    => $request['puesto_exp'],
                'descrip_exp'   => $request['descrip_exp'],
                'to_date'       => $request['to_date'],
                'mo_ini_exp'   => $request['mo_ini_exp'],
                'y_ini_exp'     => $request['y_ini_exp'],
                'mo_fin_exp'    => $request['mo_fin_exp'],
                'y_fin_exp'     => $request['y_fin_exp'],
                'referencia'    => $request['referencia'],
                'puesto'        => $request['puesto'],
                'tel_experien'  => $request['tel_experien'],
            ]);
            $work->save();
        
            $lastwork = WorkExperience::where('user_id',$id)->orderBy('id', 'DESC')->first();
            return response()->json($lastwork->toArray());
        // return response()->json([
        //     'mensaje' => $request['mo__ini_exp']
        //]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        $aca = WorkExperience::findOrFail($id);
        $aca->delete();
        if ($request->ajax()) {
            return response()->json([
                'message'=>'Fila Eliminada Correctamente!!' 
            ]);
        }
    }
}
