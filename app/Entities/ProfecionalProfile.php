<?php

namespace empleaDos\Entities;

class ProfecionalProfile extends Entity
{
   protected $table = 'cadre_profiles';
   protected $fillable = ['user_id', 'title_prof','specialty','descrip_prof'];


	/**
	  * The attributes excluded from the model's JSON form.
	  *
	  * @var array
	 */
   protected $hidden = [];

   public function user()
   {
   	return $this->belongsTo(User::getClass());
   }
}
