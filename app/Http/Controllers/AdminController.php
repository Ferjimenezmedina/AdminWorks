<?php

namespace empleaDos\Http\Controllers;

use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function getIndex()
    {
        $users = User::orderBy('id','DESC')->get();

        return View::make('admin.usuarios')->with('admin',$users);
}
     public function index()
     {
         $perda =  currentUser()->perdatas()->where('user_id')->get();
         return view('admin.home', compact('perda'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User($request->all());
        $user -> password = bcrypt($request->password);
        $user -> save();

        Flash::success("Se ha registrado" . $user->name . "de forma exitosa");

        return redirect()->route('return.users.index');

    }

    public function userControl()
    {

         return view('admin.usuarios');
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
        $user = User::find($id);
        return view(admin.users.edit)->with('user', $user);
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
      public function listview()
    {
        return view('admin.users.list');
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
