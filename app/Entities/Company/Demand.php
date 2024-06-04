<?php

namespace empleaDos\Entities\Company;

use empleaDos\Entities\Entity;

class Demand extends Entity
{
    protected $table = 'demands';

    protected $fillable = ['vacant_id','demand'];

    public function vacant()
    {
        return $this->belongsTo(Vacant::getClass());
    }
}
