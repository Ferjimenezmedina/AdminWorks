<?php

namespace empleaDos\Http\Controllers;

use Illuminate\Http\Request;
use empleaDos\Entities\Category;
use empleaDos\Entities\Subcategory;
use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;

class SubcategoryController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcatego = Subcategory::select('subcategories.id','subcategories.subcategory')
                ->where('category_id' , '=', $id )
                ->orderBy('subcategory', 'asc')
                ->get();

        return response()->json($subcatego->toArray());
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
    public function destroy($id)
    {
        //
    }
    public function SelectSubcategory($id)
    {
        $subcatego = Subcategory::where('category_id' , '=', $id )
                ->select('id as value','subcategory as text')
                ->orderBy('subcategory', 'asc')
                ->get()
                ->toArray();
        array_unshift($subcatego, ['value'=>'' , 'text' => 'Selecciona una opción']);
        return $subcatego;
    }
}
