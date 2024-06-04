<?php

namespace empleaDos\Http\Controllers;

use empleaDos\Entities\PersonalData;
use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use empleaDos\Entities\Category;
use empleaDos\Entities\Subcategory;
use empleaDos\User;
use Session;
use Redirect;
use Auth;

class PreferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $catego = Category::lists('category','id');
        $sub = Subcategory::select('subcategories.subcategory','categories.category','asig_categos.id')
            ->join('asig_categos', 'asig_categos.subcategory_id','=', 'subcategories.id')
            ->join('categories', 'subcategories.category_id','=', 'categories.id')
            ->where('asig_categos.user_id',Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('aspirantes.content.preferencias', compact('user','catego','sub'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $catego = Category::lists('category','id');
        $sub = Subcategory::select('subcategories.subcategory','categories.category','asig_categos.id')
            ->join('asig_categos', 'asig_categos.subcategory_id','=', 'subcategories.id')
            ->join('categories', 'subcategories.category_id','=', 'categories.id')
            ->where('asig_categos.user_id',Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('aspirantes.content.preferencias', compact('user','catego','sub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        PersonalData::where('user_id',$id)
            ->update([
                "situcacion_ac"     => $request['situcacion_ac'],
                "puesto_des"        => $request['puesto_des'],
                "req_salary"        => $request['req_salary'],
                "salary_type"       => $request['salary_type'],
                "des_salary"        => $request['des_salary'],
                "salary_type_des"   => $request['salary_type_des'],
            ]);
        Session::flash('message', 'Tu Curriculum ha sido actualizado correctamente!!.');
        return Redirect::route('adminuser.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
