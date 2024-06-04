<?php

namespace empleaDos\Entities;


class Myimg extends Entity
{
    protected $table = 'myimgs';
    protected $fillable = ['user_id', 'img','url'];
/*
    public function setMyimgAttribute($value)
    {
        $dir =  'dir'.Auth::user()->id;
        if(! empty($value)){
            $this->attributes['myimg'] = Carbon::now()->second.$value->getClientOriginalName();
            $namephoto  = Carbon::now()->second.$value->getClientOriginalName();

            if(\Storage::directories($dir)){
                \Storage::disk('local2')->put($dir."\\".$namephoto, \File::get($value));
            }else {
                \Storage::disk('local2')->put($dir . "\\" . $namephoto, \File::get($value));
            }
        }
    }
*/
}
