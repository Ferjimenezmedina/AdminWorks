<?php

namespace empleaDos\Entities\Company;

use empleaDos\Entities\Entity;

class Company extends Entity
{
    protected $table = 'companies';

    protected $fillable = ['user_id', 'nombre','razon_social','rfc','domicilio','no_exterior',
        'colonia','codigo_postal','telefono','pagina_web','pais_id','state_id','mpio_id'
        ,'ciudad','category_id','tipo_contrata_emp','presentacion'];

    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo('empleaDos\User', 'user_id');
    }
    public function vacants()
    {
        return $this->hasMany(Vacant::getClass());
    }
    public function leaflet()
    {
        return $this->hasMany(Leaflet::getClass());
    }
    public function hasleaflet(Leaflet $leaflet)
    {
        return Leaflet::where(['company_id' => $this->id, 'user_id' => $leaflet->user_id])->count();
    }

    public function selectleaflet(Leaflet $leaflet)
    {
        if($this->hasleaflet($leaflet)) return false;
    }
    public function hasUserLeaflet($id)
    {
        return Leaflet::where(['company_id' => $this->id, 'user_id' => $id])->count();
    }
}
