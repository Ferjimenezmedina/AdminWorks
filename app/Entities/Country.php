<?php

namespace empleaDos\Entities;


use empleaDos\Entities\Company\Vacant;

class Country extends Entity
{
    protected $table = 'paises';

   public function paisperdata()
 	{
 		return $this->hasMany(PersonalData::getClass());
 	}
	public function vacantes()
	{
		return $this->hasMany(Vacant::getClass());
	}
}
