<?php

namespace empleaDos\Entities;


class Ofimatic extends Entity
{
   protected $table = 'ofimatics';
   protected $fillable = ['user_id', 'ofimatica'];

 	public function user()
   {
      return $this->belongsTo(User::getClass());
   }  
}
