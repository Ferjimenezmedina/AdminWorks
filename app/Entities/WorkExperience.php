<?php

namespace empleaDos\Entities;

class WorkExperience extends Entity
{
   protected $table = 'work_experiences';
   protected $fillable = ['user_id', 'empresa_exp','puesto_exp','descrip_exp','to_date',
   								'mo_ini_exp','y_ini_exp','mo_fin_exp','y_fin_exp','referencia', 
   								'puesto','tel_experien'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   protected $hidden = [];

   public function usuario()
   {
   	return $this->belongsTo(User::getClass());
   }
}
