<?php

namespace empleaDos\Http\Controllers;

use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use Mapper;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        Mapper::circle([['latitude' => 53.381128999999990000, 'longitude' => -1.470085000000040000]]);
Mapper::circle([['latitude' => 53.381128999999990000, 'longitude' => -1.470085000000040000]], ['editable' => 'true']);
Mapper::map(52.381128999999990000, 0.470085000000040000)->circle([['latitude' => 53.381128999999990000, 'longitude' => -1.470085000000040000]], ['strokeColor' => '#000000', 'strokeOpacity' => 0.1, 'strokeWeight' => 2, 'fillColor' => '#FFFFFF', 'radius' => 1000]);
Render

    return view('auth.gmaps');

    }
public function getMapa()
    {
        $users =$this->company->findById($id); // User::find($id)  yo estaba ocupando inyeccion de dependencias
  	return View::make('muestramapa')->with('usuarios',$usuarios);
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
    public function destroy($id)
    {
        //
    }
}
