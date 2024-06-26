<?php

namespace empleaDos\Http\Controllers\Curriculums;

use Illuminate\Http\Request;
use empleaDos\Entities\AcaDatExt;
use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use empleaDos\User;
use Auth;

class AcaDatExtController extends Controller
{
    public function __construct()
    {
        $this->usid = Auth::user()->id;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acaDatext = AcaDatExt::where('user_id',$this->usid)
                                ->orderBy('id' , 'desc')->get();
        return response()->json(
            $acaDatext->toArray()
        );
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
        if ($request->ajax()) {
            $acaext = new AcaDatExt([
                'user_id'       => $this->usid,
                'type_acex'     => $request['type_acex'],
                'acaext_tit'    => $request['acaext_tit'], 
            ]);
            $acaext->save();
            
            $acaext = AcaDatExt::where('user_id',$this->usid)->orderBy('id', 'DESC')->first();
            return response()->json($acaext->toArray());
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
        $aca = AcaDatExt::findOrFail($id);
        $aca->delete();
        if ($request->ajax()) {
            return response()->json([
                'message'=>'Fila Eliminada Correctamente!!' 
            ]);
        }
    }
}
