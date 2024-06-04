<?php

namespace empleaDos\Http\Controllers;

use Carbon\Carbon;
use empleaDos\Entities\Myimg;
use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class MyimgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $imags = Myimg::where('user_id',$id)->paginate(6);

        return View::make('services.images')->with('imags', $imags)->render();
    }

    public function store(Request $request)
    {
        $id =  Auth::user()->id;
        $file =  $request->file('myimg');
        $name = $filename = Carbon::now()->second.$file->getClientOriginalName();
        $url   = 'cvs/dir'.$id.'/'.$name;
        \Storage::disk('local2')->put('dir'.$id.'/'.$name, \File::get($file));

        if ($request->ajax()) {
            $imgs = new Myimg;
            $imgs->user_id      = $id;
            $imgs->img          = $name;
            $imgs->url          = $url;

            $exists = \Storage::disk('local2')->exists('dir'.$id.'/'.$name);
            if($exists){

                $imgs->save();
                $lastimg = Myimg::where('user_id',$id)->orderBy('id', 'DESC')->first();
                return response()->json($lastimg->toArray());

            }else{
                return response()->json([
                    'error' => "Error al subir el archivo."
                ]);
            }

        }
    }

    public function destroy($id, Request $request)
    {
        $usid = Auth::user()->id;
        $dir =  'dir'.$usid;
        if ($request->ajax()) {
            $img = Myimg::findOrFail($id);
            $oldimage= $img->img;
            if (! empty($oldimage)) {
                if (\Storage::disk('local2')->exists($dir."\\".$oldimage)) {
                    \Storage::disk('local2')->delete($dir."\\".$oldimage);
                }
            }
            $img->delete();

            return response()->json([
                'message'=>'Imagen Eliminada Correctamente!!'
            ]);
        }
    }
}
