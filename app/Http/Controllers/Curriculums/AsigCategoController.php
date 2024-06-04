<?php

namespace empleaDos\Http\Controllers\Curriculums;

use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use empleaDos\Entities\AsigCatego;
use empleaDos\User;
use Auth;

class AsigCategoController extends Controller
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
            $categos = new AsigCatego([
                'user_id'       => $id,
                'category_id'     => $request['category_id'],
                'subcategory_id'    => $request['subcategory_id'], 
            ]);
            $categos->save();
            
            $categos = AsigCatego::select('asig_categos.id','categories.category','subcategories.subcategory')
                ->join('categories', 'asig_categos.category_id','=', 'categories.id')
                ->join('subcategories', 'asig_categos.subcategory_id','=', 'subcategories.id')
                ->where('user_id', $id)
                ->orderBy('id', 'DESC')->first();
            return response()->json($categos->toArray());
            
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
        $aca = AsigCatego::findOrFail($id);
        $aca->delete();
        if ($request->ajax()) {
            return response()->json([
                'message'=>'Fila Eliminada Correctamente!!' 
            ]);
        }
    }
}
