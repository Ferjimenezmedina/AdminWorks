<?php

namespace empleaDos\Http\Controllers;

use Carbon\Carbon;
use empleaDos\Entities\Category;
use empleaDos\Entities\Company\Postulation;
use empleaDos\Entities\Company\Vacant;
use empleaDos\Entities\Country;
use empleaDos\Entities\Estado;
use empleaDos\Entities\Municipio;
use empleaDos\Entities\Subcategory;
use empleaDos\Entities\minsalary;
use empleaDos\Http\Requests\VacantCreateRequest;
use empleaDos\Repositories\DemandRepository;
use empleaDos\Repositories\VacantRepository;
use Illuminate\Http\Request;
use empleaDos\User;
use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Session;

class VacanteController extends Controller
{

    private $vacantRepository;
    private $demandRepository;

    public function __construct
    (
        VacantRepository $vacantRepository,
        DemandRepository $demandRepository
    )
    {
        $this->vacantRepository = $vacantRepository;
        $this->demandRepository = $demandRepository;
    }


    public function admin()
    {
        $vats = $this->vacantRepository->selectVacantAdmin();
        $inacti = $this->vacantRepository->selectVacantAdminInactive();
        return view('company.content.vacante-admin',compact('vats','inacti'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {   

        $vacan =  $this->vacantRepository->selectVacantSearch()
            ->palabra($request->palabraClave)
            ->category($request->category_id)
            ->supcategory($request->supcategory_id)
            ->pais($request->pais_id)
            ->estados($request->state_id)
            ->municip($request->mpio_id)
            ->since($request->postulada)
            ->minsalary($request->min_salario,$request->max_salario)
            ->where('activo', 'true')
            ->orderBy('created_at', 'DESC')->paginate();

        return view('frontend.busqueda', compact('vacan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $catego = Category::lists('category','id');
        return view('company.vacants_create.vacante-create', compact('catego'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $date = Carbon::now();
        $exp = $date->addDay($request->get('num_expiration'));
        $vac = $this->vacantRepository->vacantNew(currentUser(), $request, $exp);
        return Redirect::route('vacante.store_contract' , $vac->id);

    }

    public function contract($id)
    {
        $pais = Country::lists('pais','id');
        return view('company.vacants_create.vacante-contrato' ,compact('id', 'pais'));
    }

    public function contractPut(Request $request, $id)
    {
        $vacant = $this->vacantRepository->vacContract(currentUser(), $request, $id);
        return Redirect::route('vacante.store_demands' ,$vacant);
    }

    public function demands($id)
    {
        $vacant = currentUser()->company->vacants()->findOrFail($id);;
        return view('company.vacants_create.vacante-requisitos' ,compact('id', 'vacant'));
    }

    public function demandsPut($id)
    {
        $vacant = currentUser()->company->vacants()->findOrFail($id);;
        return view('company.vacants_create.vacante-final' ,compact('vacant'));
    }
    public function storeFinal($id)
    {
        $vacant = currentUser()->company->vacants()->findOrFail($id);;
        return view('company.vacants_create.vacante-final' ,compact('vacant'));
    }

    public function storeFinalPut(Request $request, $id)
    {
        $date = Carbon::now();
        $exp = $date->addDay($request->get('num_expiration'));
        $vacant = $this->vacantRepository->vacEnd(currentUser(), $request, $id ,$exp);
        return Redirect::route('vacante.adminshow' ,$vacant->id);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $vacant =  Vacant::findOrFail($id);
        $vacant-> activo = 'true';
        return view("frontend.vacante_detalle", compact('vacant'));

    }

    public function adminshow($id)
    {
        $vacant =  Vacant::findOrFail($id);
        return view("company.content.vacante-adminshow", compact('vacant'));
    }
    public function adminshow2($id)
    {
        $vacant =  Vacant::findOrFail($id);
        return redirect()->route('company.content.home');
        return view("company.content.home", compact('vacant'));
    }
    public function adminshow3($id)
    {
        $vacant =  Vacant::findOrFail($id);
        return view("aspirantes.content.vacante-adminshow", compact('vacant'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        
        $vacant =  Vacant::findOrFail($id);
        $catego = Category::lists('category','id');
        $subcat = Subcategory::where('category_id', $vacant->category_id)->lists('subcategory','id');
        $pais = Country::lists('pais','id');
        $state = Estado::where('pais_id',$vacant->pais_id)->lists('nombre','id');
        $mun = Municipio::where('estado_id', $vacant->state_id)->lists('nombre','id');

        


        return view("company.content.vacante-edit", compact('vacant','catego','pais','subcat','state','mun'));

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

        $vacant =  Vacant::findOrFail($id);
        $vacant ->exists = true;
        $vacant ->title = $request->title;
         $vacant ->specialty = $request->specialty;
        $vacant ->description = $request->description;
        $vacant ->category_id = $request->category_id;
        $vacant ->subcategory_id = $request->subcategory_id;
        $catego = Category::lists('category','id');
        $subcat = Subcategory::where('category_id', $vacant->category_id)->lists('subcategory','id');
        $pais = Country::lists('pais','id');
        $state = Estado::where('pais_id',$vacant->pais_id)->lists('nombre','id');
        $mun = Municipio::where('estado_id', $vacant->state_id)->lists('nombre','id');
        $vacant ->save();

        $vacant ->num_vacan = $request->num_vacan;
        $vacant ->type_contract = $request->type_contract;
        $vacant ->type_schedule = $request->type_schedule;
        $vacant ->type_salary = $request->type_salary;
        $vacant ->type_pay = $request->type_pay;
        $vacant ->public_min_pay = $request->public_min_pay;
        $vacant ->public_max_pay = $request->public_max_pay;
        $vacant ->min_salary = $request->min_salary;
        $vacant ->max_salary = $request->max_salary;
        $vacant ->to_travel = $request->to_travel;
        $vacant ->change_address = $request->change_address;
        
        $vacant ->pais_id = $request->pais_id;
        $vacant ->state_id = $request->state_id;
        $vacant ->mpio_id = $request->mpio_id;
        $vacant ->lat = $request->lat;
        $vacant ->lng = $request->lng;
        $vacant ->final_comment = $request->final_comment;
        
        $vacant ->show_name = $request->show_name;
        $vacant ->show_logo = $request->show_logo;
        $vacant ->show_email = $request->show_email;
        $vacant ->show_phone = $request->show_phone;
       
        $vacant ->num_expiration = $request->num_expiration;

        return view('company.content.vacante-edit', compact('vacant','catego','pais','subcat','state','mun'));


        
    }


//METODO PARA DESACTIVAR VACANTE !!!
    public function deactivate($id)
    {
        $vacant = Vacant::findOrFail($id);
        $vacant-> activo = 'false';
        $vacant->save();
        return redirect()->back();
    }


    //HASTA AQUI LLEGA EL METODO DESACTIVAR

    //METODO PARA ACTIVAR LA VACANTE!!!

  public function reactivate($id)
    {
         $vacant = Vacant::findOrFail($id);
        $vacant-> activo = 'true';
        $vacant->save();
        return redirect()->back();
    }

    //HASTA AQUI LLEGA EL METODO DE ACTIVAR

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */

    //METODO PARA ELIMINAR VACANTE    
        public function destroy(Request $request, $id)
    {

        $vacant = Vacant::findOrFail($id);
        $vacant->delete();
       return redirect()->back();
    }

    //HASTA AQUI LLEGA EL METODO DE ELIMINAR VACANTE

    public function listAspVacant($id)
    {
        //$postion = Postulation::where('vacant_id',$id)->orderBy('created_at', 'DESC')->get();
        $com_id =  Vacant::findOrFail($id);
        if ( currentUser()->company->id == $com_id->company_id)
        {
            $postions = Postulation::
            selectRaw('postulations.*,'
                .'users.id as id_user,users.name,users.a_paterno, users.a_materno, users.email, users.birthdate, users.photo,'
                .'cadre_profiles.title_prof, cadre_profiles.descrip_prof, cadre_profiles.specialty,'
                .'personal_datas.telefono1,personal_datas.telefono2,personal_datas.estado_civil,'
                .'personal_datas.disp_cam_res,personal_datas.disp_viajar,personal_datas.disp_viajar,'
                .'personal_datas.req_salary,municipios.nombre')
                ->join('users', 'postulations.user_id','=', 'users.id')
                ->join('cadre_profiles', 'cadre_profiles.user_id','=', 'users.id')
                ->join('personal_datas', 'personal_datas.user_id','=', 'users.id')
                ->join('municipios', 'personal_datas.mpio_id','=', 'municipios.id')
                ->with('users')
                ->where('vacant_id',$id)
                ->orderBy('postulations.created_at', 'DESC')
                ->paginate(10);

            return view('company.content.listpostforidvacant',compact('postions'));
        }
        return redirect()->back();

        /**
        *
        INNER JOIN users u on p.user_id = u.id
        INNER JOIN cadre_profiles cad on cad.user_id = u.id
        INNER JOIN personal_datas ps on ps.user_id = u.id
        INNER JOIN municipios m on ps.mpio_id = m.id
        WHERE p.vacant_id = 103
         */
    }
}
