<?php

namespace empleaDos\Http\Controllers\Curriculums;

use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use empleaDos\Entities\Languages;
use empleaDos\User;
use Auth;

class LanguagesController extends Controller
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
        // $id = Auth::user()->id;
        // $idioma = Languages::where('user_id',$id)->orderBy('id', 'DESC')->first();
        $idioma = Languages::where('user_id',$this->usid)
                            ->orderBy('id' , 'asc')->get();
        return response()->json(
            $idioma->toArray()
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
            $lang = new Languages([
                'user_id'       => $this->usid,
                'idioma'     => $request['idioma'],
                'idioma_nivel'    => $request['idioma_nivel'], 
            ]);
            $lang->save();
            
            $lastlang = Languages::where('user_id',$this->usid)->orderBy('id', 'DESC')->first();
            return response()->json($lastlang->toArray());
            // return response()->json([
            //     'mensaje' => 'Insercion correcta.'
            // ]);
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
        $aca = Languages::findOrFail($id);
        $aca->delete();
        if ($request->ajax()) {
            return response()->json([
                'message'=>'Fila Eliminada Correctamente!!' 
            ]);
        }
    }
}
