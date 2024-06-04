<?php

namespace empleaDos\Entities;


class AcademicData extends Entity
{
   protected $table = 'academic_datas';
   protected $fillable = [
            "user_id" ,
            "max_studio",
            "institucion",
            "title_study",
            "ac_estudia",
            "mes_start",
            "year_start",
            "mes_fin",
            "year_fin",
   ];
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
