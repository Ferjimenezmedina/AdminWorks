<?php

namespace empleaDos\Entities;


class Municipio extends Entity
{
    protected $table = 'municipios';

    public function mpioperdata()
 	{
 		return $this->hasMany(PersonalData::getClass());
 	}
	public function state()
	{
		return $this->belongsTo(Estado::getClass(),'state_id');
	}
	public function vacant()
	{
		return $this->hasMany(Vacant::getClass());
	}
}
