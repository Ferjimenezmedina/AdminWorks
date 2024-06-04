<?php

namespace empleaDos;

use empleaDos\Entities\Company\Postulation;
use empleaDos\Entities\Company\Vacant;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;
use Auth;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'a_paterno','a_materno','genero','birthdate','email', 'password', 'photo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token','type', 'registration_token'];
    /**
    *
    *
    */
    

    public function perdatas()
    {
        return $this->hasMany('empleaDos\Entities\PersonalData');
    }
    public function acadatas()
    {
        return $this->hasMany('empleaDos\Entities\AcademicData');
    }
    public function acadatexts()
    {
        return $this->hasMany('empleaDos\Entities\AcaDatExt');
    }
    public function cadres()
    {
        return $this->hasMany('empleaDos\Entities\CadreProfile');
    }

    public function langs()
    {
        return $this->hasMany('empleaDos\Entities\Languages');
    }
    public function subasig()
    {
        return $this->belongsToMany('empleaDos\Entities\Subcategory','asig_categos','user_id','subcategory_id');
    }
    public function ofis()
    {
        return $this->hasMany('empleaDos\Entities\Ofimatic');
    }
    public function softs()
    {
        return $this->hasMany('empleaDos\Entities\Software');
    }

    public function abils()
    {
        return $this->hasMany('empleaDos\Entities\Ability');
    }
    public function expes()
    {
        return $this->hasMany('empleaDos\Entities\WorkExperience');
    }
    public function archs()
    {
        return $this->hasMany('empleaDos\Entities\CvArchive');
    }
    public function company()
    {
        return $this->hasOne('empleaDos\Entities\Company\Company');
    }
    public function postulate()
    {
        return $this->hasMany('empleaDos\Entities\Company\Leaflet');
    }


    public function postulations()
    {
        return $this->hasMany('empleaDos\Entities\Company\Postulation');
    }
    public function postuted()
    {
        return $this->belongsToMany('empleaDos\Entities\Company\Vacant', 'postulations')->withTimestamps();
    }
    public function hasPostulate(Vacant $vacant)
    {
        // return $this->postuled->where(['user_id' => $this->id, 'vacant_id' => $vacant->id])->count();
        return Postulation::where(['user_id' => $this->id, 'vacant_id' => $vacant->id])->count();
    }
    public function postulado(Vacant $vacant)
    {
        if ($this->hasPostulate($vacant)) return false;

        $this->postuted()->attach($vacant);
        return true;
    }
    public function unpostulado(Vacant $vacant)
    {
        $this->postuted()->detach($vacant);
    }

    public function setPasswordAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['password'] = bcrypt($value);
        }
    }
    public function setPhotoAttribute($value)
    {
        $dir =  'dir'.Auth::user()->id;
        if(! empty($value)){
            $this->attributes['photo'] = Carbon::now()->second.$value->getClientOriginalName();
            $namephoto  = Carbon::now()->second.$value->getClientOriginalName();

            if(\Storage::directories($dir)){
                \Storage::disk('local2')->put($dir."//".$namephoto, \File::get($value));
            }else {
                \Storage::disk('local2')->put($dir . "//" . $namephoto, \File::get($value));
            }
        }
    }
    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->a_paterno.' '.$this->a_materno;
    }
    public function getBirthdateAttribute()
    {
        return Carbon::parse($this->attributes['birthdate']);
    }

}
