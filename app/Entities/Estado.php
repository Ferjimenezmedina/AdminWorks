<?php

namespace empleaDos\Entities;

use empleaDos\Entities\Company\Vacant;

class Estado extends Entity
{
    protected $table = 'estados';

     public function edoperdata()
 	{
 		return $this->hasMany(PersonalData::getClass());
 	}
	public function municipios()
	{
		return $this->hasMany(Municipio::getClass());
	}
	public function vacant()
	{
		return $this->hasMany(Vacant::getClass());
	}
}
