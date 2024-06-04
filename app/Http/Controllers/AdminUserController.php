<?php

namespace empleaDos\Http\Controllers;

use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\User;
use empleaDos\Http\Controllers\Controller;
use Auth;

class AdminUserController extends Controller
{

    protected $usid;
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
        $perda =  currentUser()->perdatas()->where('user_id' , $this->usid)->get();
        return view('aspirantes.home', compact('perda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
        return "aqui creas una admin ";
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
    public function helpmiperfil()
    {
        return view('aspirantes.help-miperfil');
    }
   
    public function helpmicurriculum()
    {
        return view('aspirantes.help-micurriculum');
    }

      public function help1()
    {
        return view('company.help-perfil');
    }

    public function help2()
    {
        return view('company.help-admin');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        
    }

    public function getPostu()
    {
        return view('aspirantes.content.postulaciones');
    }

    

}
