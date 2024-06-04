<?php

namespace empleaDos\Entities;

use Illuminate\Database\Eloquent\Model;

class AcaDatExt extends Model
{
   protected $table = 'aca_dat_exts';

   protected $fillable = ['user_id', 'type_acex','acaext_tit'];


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
