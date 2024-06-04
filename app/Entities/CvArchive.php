<?php

namespace empleaDos\Entities;


use Carbon\Carbon;
use Auth;

class CvArchive extends Entity
{
    protected $table = 'cv_archives';

    protected $fillable = ['user_id','name','name_old','type',];

    public function user()
    {
        return $this->belongsTo(User::getClass());
    }
    /**
     * @param $value
     */
    public function setCvfileAttribute($value)
    {
        $dir =  'dir'.Auth::user()->id;
        if(! empty($value)){
            $this->attributes['cvfile'] = Carbon::now()->second.$value->getClientOriginalName();
            $namepdf  = Carbon::now()->second.$value->getClientOriginalName();

            if(\Storage::directories($dir)){
                \Storage::disk('local2')->put($dir."//".$namepdf, \File::get($value));
            }else{
                \Storage::disk('local2')->put($dir."//".$namepdf, \File::get($value));
            }

        }
    }
}
