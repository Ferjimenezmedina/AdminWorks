<?php

namespace empleaDos\Http\Controllers\Company;

use empleaDos\Entities\Company\Company;
use empleaDos\Entities\Company\Leaflet;
use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;

class LeafletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pros =  Leaflet::where('company_id', currentUser()->company->id)->get();
        $id = currentUser()->company->id;
        $prospect = Leaflet::
        selectRaw('leaflets.*,'
            .'users.id as id_user,users.name,users.a_paterno, users.a_materno, users.email, users.birthdate, users.photo,'
            .'cadre_profiles.title_prof, cadre_profiles.descrip_prof, cadre_profiles.specialty,'
            .'personal_datas.telefono1,personal_datas.telefono2,personal_datas.estado_civil,'
            .'personal_datas.disp_cam_res,personal_datas.disp_viajar,personal_datas.disp_viajar,'
            .'personal_datas.req_salary,municipios.nombre')
            ->join('users', 'leaflets.user_id','=', 'users.id')
            ->join('cadre_profiles', 'cadre_profiles.user_id','=', 'users.id')
            ->join('personal_datas', 'personal_datas.user_id','=', 'users.id')
            ->join('municipios', 'personal_datas.mpio_id','=', 'municipios.id')
            ->with('users')
            ->where('leaflets.company_id',$id)
            ->orderBy('created_at', 'DESC')
            ->paginate(5);;
        return view('company.content.prospectos', compact('prospect'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( $id_user, Request $request)
    {
        if ($request->ajax()){
            $leaflet = new Leaflet([
                'company_id' => currentUser()->company->id,
                'user_id' => $id_user,
            ]);
            $leaflet->save();
            return response()->json([
                'id' => $id_user,
            ]);
        }
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
        $leaflet = Leaflet::findOrFail($id);
        $leaflet->delete();
        if ($request->ajax()) {
            return response()->json([
                'message'=>'Fila Eliminada Correctamente!!'
            ]);
        }

    }
    public function delete($id, Request $request)
    {
        //abort(500);
        $leaflet = Leaflet::where(['company_id' => currentUser()->company->id, 'user_id' => $id]);
        $leaflet->delete();
        if ($request->ajax()) {
            return response()->json([
                'id' => $id,
                'message'=>'Fila Eliminada Correctamente!!'
            ]);
        }

    }
}
