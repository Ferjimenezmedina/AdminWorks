<?php

namespace empleaDos\Http\Controllers;

use empleaDos\Entities\Category;
use empleaDos\Entities\Company\Company;
use empleaDos\Entities\Country;
use empleaDos\Entities\Estado;
use empleaDos\Entities\Municipio;
use empleaDos\Http\Requests\CompanyRequestTable;
use empleaDos\Http\Requests\CompanyUpadteRequest;
use empleaDos\User;
use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->usid = Auth::user()->id;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        return view('company.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $pais =  Country::lists('pais','id');
        $catego =  Category::lists('category','id');
        return view('company.content.create_empresa',compact('pais','catego'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CompanyRequestTable $request)
    {
        $brand = User::find($request->user_id);
        $brand->photo       = $request['photo'];
        $brand->save();

        $com = new Company;
        $com->fill($request->all());
        $com->save();

        Session::flash('message', '¡Los datos de tu Empresa han sido creados correctamente!');
        return redirect()->route('company.index');

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

    

    public function editCuenta()
    {
        $user = User::findOrFail($this->usid);
        return view('company.content.datos-cuenta',compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function updateCuenta(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message', '¡Los datos de tu Empresa han sido actualizados correctamente!');
        return redirect()->back();

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $comp = Company::where('user_id',$id)->firstOrFail();
        $pais =  Country::lists('pais','id');
        $estado =  Estado::lists('nombre','id');
        $muni = Municipio::lists('nombre','id');
        $catego =  Category::lists('category','id');

        return view('company.content.datos-company', compact('pais','catego','comp', 'estado','muni'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CompanyUpadteRequest $request, $id)
    {
        $brand = User::find($request->user_id);
        $dir =  'dir'.$request->user_id;
        if (! empty($request['photo'])) {
            $oldimage = $brand->photo;
            if (! empty($oldimage)) {
                if (\Storage::disk('local2')->exists($dir."\\".$oldimage)) {
                    \Storage::disk('local2')->delete($dir."\\".$oldimage);
                }
            }
        }
        $brand->photo       = $request['photo'];
        $brand->save();

        $comp = Company::find($id);
        $comp->fill($request->all());
        $comp->save();

        Session::flash('message', '¡Los datos de tu Empresa han sido actualizados correctamente!');
        return redirect()->route('company.index');

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
