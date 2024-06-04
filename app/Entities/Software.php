<?php

namespace empleaDos\Entities;


class Software extends Entity
{
   protected $table = 'softwares';
   protected $fillable = ['user_id', 'software'];

 	public function user()
   {
      return $this->belongsTo(User::getClass());
   }
}
