<?php

namespace empleaDos\Entities;


class Languages extends Entity
{
    protected $table = 'languages';
    protected $fillable = ['user_id', 'idioma','idioma_nivel'];

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
