<?php

namespace empleaDos\Entities\Company;

use empleaDos\Entities\Entity;

class Benefit extends Entity
{
    protected $table = 'benefits';

    protected $fillable = ['vacant_id','benefit'];

    public function vacant()
    {
        return $this->belongsTo(Vacant::getClass());
    }
}
