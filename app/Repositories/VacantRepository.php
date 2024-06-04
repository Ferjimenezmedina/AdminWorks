<?php

namespace empleaDos\Repositories;


use empleaDos\Entities\Company\Vacant;
use empleaDos\User;

class VacantRepository extends BaseRepository
{
    public function getModel()
    {
        return new Vacant();
    }

    public function vacantBuilder()
    {
        return currentUser()->company->vacants();
    }

    public function vacantNew(User $auth, $request = Array(), $expira)
    {
        return $auth->company->vacants()->create([
            'title' => $request->get('title'),
            'specialty' => $request->get('specialty'),
            'category_id' => $request->get('category_id'),
            'subcategory_id' => $request->get('subcategory_id'),
            'num_vacan' => $request->get('num_vacan'),
            'description' => $request->get('description'),
            'activo' => 'false',
            'num_expiration' => $request->get('num_expiration'),
            'date_expiration' => $expira,
        ]);
    }

    public function vacContract(User $auth, $request = Array(), $id)
    {
        $var = $auth->company->vacants()->findOrFail($id);
        $var->type_contract =  $request->get('type_contract');
        $var->type_schedule = $request->get('type_schedule');
        $var->type_salary = $request->get('type_salary');
        $var->type_pay = $request->get('type_pay');
        $var->public_min_pay = $request->get('public_min_pay');
        $var->public_max_pay = $request->get('public_max_pay');
        $var->min_salary = $request->get('min_salary');
        $var->max_salary = $request->get('max_salary');
        $var->to_travel = $request->get('to_travel');
        $var->change_address = $request->get('change_address');
        $var->pais_id = $request->get('pais_id');
        $var->state_id = $request->get('state_id');
        $var->mpio_id = $request->get('mpio_id');
        $var->lat = $request->get('lat');
        $var->lng = $request->get('lng');
        $var->final_comment = $request->get('final_comment');
        $var->save();

        return $var;
    }

    public function vacEnd(User $auth, $request = Array(), $id, $expira)
    {
        $var = $auth->company->vacants()->findOrFail($id);
        $var->show_name = $request->get('show_name');
        $var->show_logo = $request->get('show_logo');
        $var->show_email = $request->get('show_email');
        $var->show_phone = $request->get('show_phone');
        $var->num_expiration = $request->get('num_expiration');
        $var->date_expiration = $expira;
        $var->save();

        return $var;
    }

    public function selectVacantAdmin()
    {
        $value = $this->vacantBuilder()->where('activo', 'true')->orderBy('created_at','DESC')->get();
        return $value;
    }

   

    public function desactiveVacant($id)
    {
        $vacant = Vacant::findOrFail($id);
        $vacant-> activo = 'false';
        $vacant->save();
    }

    public function activeVacant($id)
    {
        $vacant = Vacant::findOrFail($id);
        $vacant-> activo = 'true';
        $vacant->save();
    }

    public function selectVacantAdminInactive()
    {
        return $this->vacantBuilder()->where('activo', 'false')->orderBy('created_at','DESC')->get();
    }
    public function selectVacantSearch()
    {
        $query = Vacant::selectRaw('vacants.*,'
            .'companies.nombre as name_com, categories.category, subcategories.subcategory,'
            .'paises.pais ,estados.nombre as states,municipios.nombre as munpio, users.photo')
            ->join('companies', 'vacants.company_id','=', 'companies.id')
            ->join('categories', 'vacants.category_id','=', 'categories.id')
            ->join('subcategories', 'vacants.subcategory_id','=', 'subcategories.id')
            ->join('paises', 'vacants.pais_id','=', 'paises.id')
            ->join('estados', 'vacants.state_id','=', 'estados.id')
            ->join('municipios', 'vacants.mpio_id','=', 'municipios.id')
            ->join('users', 'companies.user_id','=', 'users.id');

        return $query;
    }

}