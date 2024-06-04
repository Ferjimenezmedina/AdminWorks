<?php

namespace empleaDos\Entities;


class Ability extends Entity
{
	protected $table = 'abilities';
   protected $fillable = ['user_id', 'ability','nivel','year_exp'];
   protected $hidden = [];
   
   public function usuario()
   {
    	return $this->belongsTo(User::getClass());
   }

}
