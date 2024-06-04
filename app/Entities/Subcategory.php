<?php

namespace empleaDos\Entities;

use empleaDos\Entities\Company\Vacant;
use empleaDos\User;

class Subcategory extends Entity
{
   protected $table = 'subcategories';
   public function category()
   {
    	return $this->belongsTo(Category::getClass());
   }
   public function users()
   {
    	return $this->belongsToMany(User::getClass());
   }
   public function asig()
   {
    	return $this->hasMany(AsigCatego::getClass(),'asig_categos');
   }
   public function vacants()
   {
      return $this->hasMany(Vacant::getClass());
   }
}
