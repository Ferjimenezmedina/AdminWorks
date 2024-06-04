<?php

namespace empleaDos\Http\Controllers;

use empleaDos\Entities\Company\Postulation;
use empleaDos\Entities\Company\Vacant;
use Illuminate\Http\Request;

class PostulationController extends Controller
{
    public function submit(Request $request)
    {
        $vacant = Vacant::findOrFail($request->id);
        currentUser()->postulado($vacant);

        return redirect()->back();
    }

    public function Aspirantelist()
    {
        $postulations = Postulation::with(['vacant' => function ($query) {
            $query->select('id', 'title','created_at','min_salary');
        
        }])->where('user_id', currentUser()->id )->orderBy('id', 'ASC')->paginate(10);

        return view('aspirantes.postulaciones', compact('postulations'));
        
    }

    public function destroy(Request $request)
    {
    
        $vacant = Vacant::findOrFail($request->id);
        currentUser()->unpostulado($vacant);

        return redirect()->back();
    }

 public function show($id)
    {
        $vacant =  Vacant::findOrFail($id);
        return view("frontend.vacante_detalle", compact('vacant'));
    }
    // public function adminshow3($id)
    //{
     //   $vacant =  Vacant::findOrFail($id);
       // return view("aspirantes.content.vacante-adminshow", compact('vacant'));
   // }
}
