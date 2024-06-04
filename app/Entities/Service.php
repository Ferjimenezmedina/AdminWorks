<?php

namespace empleaDos\Entities;

use Carbon\Carbon;
use Auth;
use Storage;

class Service extends Entity
{
    public $table = 'services';

    protected $fillable = ['user_id','service', 'category_id', 'subcategory_id',
                            'description', 'img_service', 'service_type'];

    public function setImgServiceAttribute($value)
    {
        $dir =   "dir".Auth::user()->id;
        if(! empty($value)){
            $this->attributes['img_service'] = Carbon::now()->second.$value->getClientOriginalName();
            $namephoto  = Carbon::now()->second.$value->getClientOriginalName();

            $path = join(DIRECTORY_SEPARATOR, array($dir, $namephoto));

            if(Storage::directories($dir)){
                Storage::disk('local2')->put( $path, \File::get($value));
            }else {
                Storage::disk('local2')->put( $path, \File::get($value));
            }
        }
    }
}
