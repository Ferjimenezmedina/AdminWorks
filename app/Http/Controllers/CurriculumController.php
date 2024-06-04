<?php

namespace empleaDos\Http\Controllers;

use Illuminate\Http\Request;
use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use empleaDos\Entities\Country;
use empleaDos\Entities\Category;
use empleaDos\Entities\Estado;
use empleaDos\Entities\Municipio;
use empleaDos\Entities\Subcategory;
use empleaDos\Entities\PersonalData;
use empleaDos\Entities\AcademicData;
use empleaDos\Entities\CadreProfile;
use empleaDos\User;
use Illuminate\Support\Facades\Mail;
use Session;
use Redirect;
use Auth;
use empleaDos\Http\Requests\StoreCurriculumRequest;

class CurriculumController extends Controller
{
    protected $usid;
    public function __construct()
    {
        $this->usid = Auth::user()->id;
    }

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
        $user = User::findOrFail($this->usid);
        $pais = Country::lists('pais','id');
        $catego = Category::lists('category','id');
        $sub = Subcategory::select('subcategories.subcategory','categories.category','asig_categos.id')
            ->join('asig_categos', 'asig_categos.subcategory_id','=', 'subcategories.id')
            ->join('categories', 'subcategories.category_id','=', 'categories.id')
            ->where('asig_categos.user_id',Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('aspirantes.content.curriculum', compact('asings','pais','catego','user','sub'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(StoreCurriculumRequest $request)
    {
        //Actualizar imagen de Usuario
        $brand = User::find($this->usid);
        $brand->name        = $request['name'];
        $brand->a_paterno   = $request['a_paterno'];
        $brand->a_materno   = $request['a_materno'];
        $brand->birthdate   = $request['birthdate'];
        $brand->genero      = $request['genero'];
        $brand->photo       = $request['photo'];
        $brand->save();

        $per = PersonalData::where('user_id',$this->usid)->get();
        if ( $per->isEmpty()) {
            $personal = new PersonalData;
            $personal->user_id          =$this->usid;
            $personal->estado_civil     = $request->estado_civil;
            $personal->rfc              = $request->rfc;
            $personal->curp             = $request->curp;
            $personal->pais_id          = $request->pais_id;
            $personal->state_id         = $request->state_id;
            $personal->mpio_id          = $request->mpio_id;
            $personal->calle            = $request->calle;
            $personal->no_ext           = $request->no_ext;
            $personal->no_int           = $request->no_int;
            $personal->colonia          = $request->colonia;
            $personal->codigo_postal    = $request->codigo_postal;
            $personal->tipo_tel1        = $request->tipo_tel1;
            $personal->telefono1        = $request->telefono1;
            $personal->tipo_tel2        = $request->tipo_tel2;
            $personal->telefono2        = $request->telefono2;
            $personal->licencia         = $request->licencia;
            $personal->tipo_licencia    = $request->tipo_licencia;
            $personal->disp_veiculo     = $request->disp_veiculo;
            $personal->discapacidad     = $request->discapacidad;
            $personal->disp_viajar      = $request->disp_viajar;
            $personal->disp_cam_res     = $request->disp_cam_res;
            $personal->situcacion_ac    = $request->situcacion_ac;
            $personal->puesto_des       = $request->puesto_des;
            $personal->req_salary       = $request->req_salary;
            $personal->salary_type      = $request->salary_type;
            $personal->des_salary       = $request->des_salary;
            $personal->salary_type_des  = $request->salary_type_des;
            $personal->save();
        }
        $res = AcademicData::where('user_id',$this->usid)->get();
        if ($res->isEmpty()) {
            $studios = new AcademicData([
                "user_id"           =>$this->usid,
                "max_studio"        => $request['max_studio'],
                "institucion"       => $request['institucion'],
                "title_study"       => $request['title_study'],
                "ac_estudia"        => $request['ac_estudia'],
                "mes_start"         => $request['mes_start'],
                "year_start"        => $request['year_start'],
                "mes_fin"           =>$request['mes_fin'],
                "year_fin"          => $request['year_fin'],
            ]);
            $studios->save(); 
        }
        $res2 =CadreProfile::where('user_id',$this->usid)->get();
        if ($res2->isEmpty()) {

            $perfil = new CadreProfile([
                "user_id"       =>$this->usid,
                "title_prof"    => $request['title_prof'],
                "specialty"     => $request['specialty'],
                "descrip_prof"  => $request['descrip_prof'],
            ]);
            $perfil->save();           
        } 
        Session::flash('message', 'Tu Curriculum ha sido creado correctamente!!');
        return Redirect::route('adminuser.home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $user = User::findOrFail($this->usid);
        return view('aspirantes.content.curriculum_show' , compact('user'));
    }

    public function aspShow($id)
    {
        return view('company.content.aspirante-cv');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {
        $user = User::findOrFail($this->usid);
        $pais = Country::lists('pais','id');
        $edo = Estado::lists('nombre','id');
        $mpio = Municipio::lists('nombre','id');
        $catego = Category::lists('category','id');
        $sub = Subcategory::select('subcategories.subcategory','categories.category','asig_categos.id')
            ->join('asig_categos', 'asig_categos.subcategory_id','=', 'subcategories.id')
            ->join('categories', 'subcategories.category_id','=', 'categories.id')
            ->where('asig_categos.user_id',$this->usid)->orderBy('id', 'DESC')->get();

        return view('aspirantes.content.curriculum-edit', compact('pais','catego','user','sub','edo','mpio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(StoreCurriculumRequest $request)
    {
        $dir =  'dir'.$this->usid;
        if (! empty($request['photo'])) {
            $oldimage = Auth::user()->photo;
            if (! empty($oldimage)) {
                if (\Storage::disk('local2')->exists($dir."\\".$oldimage)) {
                    \Storage::disk('local2')->delete($dir."\\".$oldimage);
                }
            }
        }
        $brand = User::find($this->usid);
        $brand->name        = $request['name'];
        $brand->a_paterno   = $request['a_paterno'];
        $brand->a_materno   = $request['a_materno'];
        $brand->birthdate   = $request['birthdate'];
        $brand->genero      = $request['genero'];
        $brand->photo       = $request['photo'];
        $brand->save();

        PersonalData::where('user_id',$this->usid)
        ->update([
            "user_id"           =>$this->usid,
            "estado_civil"      => $request['estado_civil'],
            "rfc"               => $request['rfc'],
            "curp"              => $request['curp'],
            "pais_id"           => $request['pais_id'],
            "state_id"          => $request['state_id'],
            "mpio_id"           => $request['mpio_id'],
            "calle"             => $request['calle'],
            "no_ext"            => $request['no_ext'],
            "no_int"            => $request['no_int'],
            "colonia"           => $request['colonia'],
            "codigo_postal"     => $request['codigo_postal'],
            "tipo_tel1"         => $request['tipo_tel1'],
            "telefono1"         => $request['telefono1'],
            "tipo_tel2"         => $request['tipo_tel2'],
            "telefono2"         => $request['telefono2'],
            "licencia"          => $request['licencia'],
            "tipo_licencia"     => $request['tipo_licencia'],
            "disp_veiculo"      => $request['disp_veiculo'],
            "discapacidad"      => $request['discapacidad'],
            "disp_viajar"       => $request['disp_viajar'],
            "disp_cam_res"      => $request['disp_cam_res'],
            "situcacion_ac"     => $request['situcacion_ac'],
            "puesto_des"        => $request['puesto_des'],
            "req_salary"        => $request['req_salary'],
            "salary_type"       => $request['salary_type'],
            "des_salary"        => $request['des_salary'],
            "salary_type_des"   => $request['salary_type_des'],
        ]);

        AcademicData::where('user_id',$this->usid)
        ->update([
            "user_id"           => $this->usid,
            "max_studio"        => $request['max_studio'],
            "institucion"       => $request['institucion'],
            "title_study"       => $request['title_study'],
            "ac_estudia"        => $request['ac_estudia'],
            "mes_start"         => $request['mes_start'],
            "year_start"        => $request['year_start'],
            "mes_fin"           =>$request['mes_fin'],
            "year_fin"          => $request['year_fin'],
        ]);
   
        CadreProfile::where('user_id',$this->usid)
        ->update([
            "user_id"       => $this->usid,
            "title_prof"    => $request['title_prof'],
            "specialty"     => $request['specialty'],
            "descrip_prof"  => $request['descrip_prof'],
        ]);

        Session::flash('message', 'Tu Curriculum ha sido actualizado correctamente!');
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
