<?php

namespace empleaDos\Entities;


class CadreProfile extends Entity
{
    protected $table = 'cadre_profiles';
    protected $fillable = ['user_id', 'title_prof','specialty','descrip_prof'];

    protected $hidden = [];

    public function user()
    {
      return $this->belongsTo(User::getClass(), 'user_id');
    }
}
