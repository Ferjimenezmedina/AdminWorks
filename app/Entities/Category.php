<?php

namespace empleaDos\Entities;

use empleaDos\Entities\Company\Vacant;

class Category extends Entity
{
    protected $table = 'categories';

   public function asignados()
   {
    	return $this->hasMany(AsigCatego::getClass(),'asig_categos');
   }

    public function vacants()
    {
        return $this->hasMany(Vacant::getClass());
    }
}
