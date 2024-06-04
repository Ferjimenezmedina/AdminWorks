<?php

namespace empleaDos\Entities\Company;

use empleaDos\Entities\Entity;
class LanguajesVacant extends Entity
{
    protected $table = 'languajes_vacants';

    protected $fillable = ['vacant_id','idioma','idioma_nivel'];

    public function vacant()
    {
        return $this->belongsTo(Vacant::getClass());
    }
}
