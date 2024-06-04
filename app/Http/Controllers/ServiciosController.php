<?php

namespace empleaDos\Http\Controllers;

use empleaDos\Entities\Myimg;
use empleaDos\Entities\Service;
use empleaDos\Entities\Subcategory;
use empleaDos\Http\Requests\ServiceRequestTable;
use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use empleaDos\Entities\Category;
use Auth;
use Session;

class ServiciosController extends Controller
{
    public function __construct()
    {
        
        $this->usid = Auth::user()->id;
        $this->usrol = Auth::user()->type;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
            
    {
        $services =  Service::where('user_id', $this->usid)->orderBy('id', 'DESC')->get();
        if ($this->usrol == 'company'){
            return view('company.services.admin', compact('services'));
        }
        return view('aspirantes.services.admin', compact('services'));
        
        // ese codigo estaba asi o lo moviste, nadamas movi lo de user pero mira aqui tengo un respaldo que dejaste de ahi me baso
        /*$services =  Service::where('user_id', $this->usid)->orderBy('id', 'DESC')->get();
        if ($this->usrol == 'company'){
            return view('company.services.admin', compact('services'));
        }
        services =  Service::where('user_id', $this->usid)->orderBy('id', 'DESC')->get();
        if ($this->usrol == 'user'){
        return view('aspirantes.services.admin', compact('services'));
        */
    }

    public function adminView()
            
    {
        $services =  Service::where('user_id', $this->usid)->orderBy('id', 'DESC')->get();
        if ($this->usrol == 'user'){
            return view('aspirantes.services.admin', compact('services'));
        }
        return view('company.services.admin', compact('services'));
   
        // ese codigo estaba asi o lo moviste, nadamas movi lo de user pero mira aqui tengo un respaldo que dejaste de ahi me baso
        /*$services =  Service::where('user_id', $this->usid)->orderBy('id', 'DESC')->get();
        if ($this->usrol == 'company'){
            return view('company.services.admin', compact('services'));
        }
        services =  Service::where('user_id', $this->usid)->orderBy('id', 'DESC')->get();
        if ($this->usrol == 'user'){
        return view('aspirantes.services.admin', compact('services'));
        */
    }
    

     public function list2()
    {
        $services = service::where('type', 'Y')->orderBy('id', 'ASC')->paginate();
        return view('aspirantes.services.list', compact('services'));
    }

     public function list3()
    {
        $services = service::where('type', 'Y')->orderBy('id', 'ASC')->paginate();
        return view('company.services.list', compact('services'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
            
    {
        $imags = Myimg::where('user_id',$this->usid)->paginate(6);
        $catego = Category::lists('category','id');
        if ($this->usrol == 'company'){
            return view('company.services.create',compact('catego','imags'));
        }
        
        return view('aspirantes.services.create', compact('catego','imags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ServiceRequestTable $request)
    {
        
        $service = new Service;
        $service->user_id           = $this->usid;
        $service->service           = $request->service;
        $service->category_id       = $request->category_id;
        $service->subcategory_id    = $request->subcategory_id;
        $service->description       = $request->description;
        $service->img_service       = $request->img_service;
        $service->service_type      = $request->service_type;
        $service->save();

        Session::flash('message', '¡Tu Servicio ha sido creado correctamente!');
        Session::flash('message','¡Tu Servicio ha sido creado correctamente!');
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        
        $services = Service::where('id',$id)->get();
        if ($this->usrol == 'company'){
            return view('company.services.show',compact('services'));
        }
        return view('aspirantes.services.show', compact('services'));

    }

     public function show2($id)
    {
        $services = Service::where('id',$id)->get();
        if ($this->usrol == 'user'){
           return view('aspirantes.services.show', compact('services'));
        }
        return view('company.services.show', compact('services'));
       }

    
    public function showajax($id)
    {

        $services = Service::find($id);
        return response()->json(
            $services->toArray()
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $imags = Myimg::where('user_id',$this->usid)->paginate(6);
        $services = Service::findOrFail($id);
        $catego = Category::lists('category','id');
        $subcat = Subcategory::lists('subcategory','id');

        if ($this->usrol == 'company'){
            return view('company.services.edit',compact('services','catego','subcat','imags'));
        }
        return view('aspirantes.services.edit', compact('services','catego','subcat','imags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ServiceRequestTable $request, $id)
    {
         if ($validator->fails()) {
            return redirect()->route('upcurriculum.create')
                ->withErrors($validator)
                ->withInput();
        }
        $service = Service::find($id);
        $dir =  'dir'.$this->usid;
        if (! empty($request['img_service'])) {
            $oldimage = $service->img_service;
            if (! empty($oldimage)) {
                if (\Storage::disk('local2')->exists($dir."//".$oldimage)) {
                    \Storage::disk('local2')->delete($dir."//".$oldimage);
                }
            }
        }
        $service->user_id           = $this->usid;
        $service->service           = $request->service;
        $service->category_id       = $request->category_id;
        $service->subcategory_id    = $request->subcategory_id;
        $service->description       = $request->description;
        $service->img_service       = $request->img_service;
        $service->service_type      = $request->service_type;
        $service->save();

        Session::flash('message', '¡Tu Servicio ha sido actualizado correctamente!');
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
      public function destroy($id)
    {
        $servi = Service::findOrFail($id);
        $dir =  'dir'.Auth::user()->id;

        $oldarchivo = $servi->img_service;
        if (! empty($oldarchivo)) {
            if (\Storage::disk('local2')->exists($dir."//".$oldarchivo)) {
                \Storage::disk('local2')->delete($dir."//".$oldarchivo);
            }
        }
        $servi->delete();
        return response()->json([
            'message' => 'Done'
        ]);

    }
}
