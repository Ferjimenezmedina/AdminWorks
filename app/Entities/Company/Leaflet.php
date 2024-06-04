<?php

namespace empleaDos\Entities\Company;

use Carbon\Carbon;
use empleaDos\Entities\Entity;
use empleaDos\User;

class Leaflet extends Entity
{
    protected $table = 'leaflets';

    protected $fillable = ['company_id','user_id'];

    public function company()
    {
        return $this->belongsTo(Company::getClass(),'company_id');
    }
    public function users()
    {
        return $this->belongsTo('empleaDos\User', 'user_id');
    }
    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->a_paterno.' '.$this->a_materno;
    }
    public function getBirthdateAttribute()
    {
        return Carbon::parse($this->attributes['birthdate']);
    }



}
