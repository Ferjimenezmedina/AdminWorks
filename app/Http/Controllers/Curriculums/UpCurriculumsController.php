<?php

namespace empleaDos\Http\Controllers\Curriculums;

use empleaDos\Entities\CvArchive;
use empleaDos\User;
use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;

use Auth;
use Validator;
use Session;
use Redirect;
use Storage;


class UpCurriculumsController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::findOrFail($this->usid);
        return view('aspirantes.content.subircv', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cvfile'    => 'required|mimes:doc,dot,docx,pdf,ppt,pptx',
        ]);


        $files = $request->file('cvfile');
        $arch  = new CvArchive();
        $arch->user_id              = $this->usid;
        $arch->cvfile               = $request['cvfile'];
        $arch->cvfile_ornal_name    = $files->getClientOriginalName();
        $arch->type                 = $files->getClientOriginalExtension();
        $arch->save();

        Session::flash('message', 'El Archivo '.$files->getClientOriginalName().' se ha agregado Correctamente.');
        return Redirect::route('upcurriculum.create');
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
    public function destroy(Request $request, $id)
    {
        $mensaje = 'Archivo Eliminado Correctamente!!';
        $arch = CvArchive::findOrFail($id);
        $dir =  'dir'.Auth::user()->id;



        $oldarchivo = $arch->cvfile;
        if (! empty($oldarchivo)) {
            if (\Storage::disk('local2')->exists($dir."\\".$oldarchivo)) {
                \Storage::disk('local2')->delete($dir."\\".$oldarchivo);
            }
        }

        $arch->delete();

        if ($request->ajax()) {
            return response()->json([
                'message' => $mensaje
            ]);
        }

        Session::flash('message', $mensaje);
        return Redirect::route('equipment.admin');
    }
}
