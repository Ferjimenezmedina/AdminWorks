<?php

namespace empleaDos\Entities\Company;

use Carbon\Carbon;
use empleaDos\Entities\Entity;
use empleaDos\User;

class Postulation extends Entity
{
    protected $table = 'postulations';

    public function vacant()
    {
        return $this->belongsTo(Vacant::getClass(),'vacant_id');
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
