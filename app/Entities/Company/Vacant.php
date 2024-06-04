<?php

namespace empleaDos\Entities\Company;

use Carbon\Carbon;
use empleaDos\Entities\Category;
use empleaDos\Entities\Country;
use empleaDos\Entities\Entity;
use empleaDos\Entities\Estado;
use empleaDos\Entities\Municipio;
use empleaDos\Entities\Subcategory;
use empleaDos\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacant extends Entity
{
    use SoftDeletes;

    protected $table = 'vacants';

    protected $fillable = ['company_id','activo', 'title','specialty','category_id','subcategory_id',
        'num_vacan','description','type_contract','work_time','public_min_pay','public_max_pay','min_salary',
        'max_salary','to_travel','change_address','pais_id','state_id','mpio_id','ciudad','final_comment',
        'show_name','show_logo','show_email','show_phone','date_expiration'];

    protected $guarded = [];
    protected $dates = ['deleted_at', 'date_expiration'];

    public function company()
    {
        return $this->belongsTo(Company::getClass(),'company_id');
    }
    public function benefits()
    {
        return $this->hasMany(Benefit::getClass());
    }
    public function demands()
    {
        return $this->hasMany(Demand::getClass());
    }
    public function languages()
    {
        return $this->hasMany(LanguajesVacant::getClass());
    }

    public function category()
    {
        return $this->belongsTo(Category::getClass(),'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::getClass(),'subcategory_id');
    }
    public function contry()
    {
        return $this->belongsTo(Country::getClass(),'pais_id');
    }
    public function state()
    {
        return $this->belongsTo(Estado::getClass(),'state_id');
    }
    public function mpio()
    {
        return $this->belongsTo(Municipio::getClass(),'mpio_id');
    }
    public function postulations()
    {
        return $this->hasMany(Postulation::getClass());
    }

    public function scopePalabra($query , $palabra)
    {
        //trim para eliminar espacios
        if(trim($palabra) != ""){
            return $query->where('vacants.title' , 'LIKE', "%$palabra%")
                ->orWhere('vacants.description' , 'LIKE', "%$palabra%");
        }
    }
    public function scopePais($query , $pais)
    {
        if(trim($pais) != ""){
            return $query->where('vacants.pais_id' , $pais);
        }
    }
    public function scopeEstados($query , $state_id)
    {
        if(trim($state_id) != ""){
            return $query->where('vacants.state_id' , $state_id);
        }
    }
    public function scopeMunicip($query , $mpio_id)
    {
        if(trim($mpio_id) != ""){
            return $query->where('vacants.mpio_id' , $mpio_id);
        }
    }
    public function scopeCategory($query , $company)
    {
        if(trim($company) != ""){
            return $query->where('vacants.category_id' , $company);
        }
    }
    public function scopeSupcategory($query , $supcompany)
    {
        if(trim($supcompany) != ""){
            return $query->where('vacants.supcategory_id' , $supcompany);
        }
    }
    public function scopeSince($query, $since)
    {
        $sinces = config('options.desde');
        $now =  Carbon::now();
        $hoy =  $now->format('Y-m-d');

        if ($since !='' && isset($sinces[$since])){
            if ($since == '4'){
                $a = $now->subMonth();
                $a = $a->format('Y-m-d');
                $query->whereBetween('vacants.created_at', [$a,$hoy]);
            }elseif ($since == '3'){
                $a = $now->subDays(15);
                $a = $a->format('Y-m-d');
                $query->whereBetween('vacants.created_at', [$a ,$hoy]);
            }elseif ($since == '2'){
                $a = $now->subWeek();
                $a = $a->format('Y-m-d');
                $query->whereBetween('vacants.created_at', [ $a, $hoy ]);
            }elseif ($since == '1'){
                $a = $now->subDay(1);
                $a = $a->format('Y-m-d');
                $b = $now->addDay(1);
                $b = $b->format('Y-m-d');
                $query->whereBetween('vacants.created_at', [$a, $b]);
            }else{
                $a = $now->addDay(1);
                $a = $a->format('Y-m-d');
                $query->whereBetween('vacants.created_at',[$hoy, $a]);
            }
        }
    }
    public function scopeMinsalary($query, $sueldo1, $sueldo2)
    {
        if (is_numeric($sueldo1) && is_numeric($sueldo2)){
            $query->where('vacants.min_salary' ,'>=', $sueldo1)
                    ->where('vacants.max_salary','<=', $sueldo2);
            /*
                    ->orWhere(function ($query1,$sueldo2) {
                        $query1->where('vacants.min_salary', '<=', $sueldo2)
                            ->where('vacants.max_salary', '>=', $sueldo2);
                    });
              */
        }

    }
    public function scopeMaxsalary($query, $sueldo)
    {
        if ($sueldo == ''){
            $query->where('vacant.max_salary' ,'>=', $sueldo);
        }
    }
    /*
     *
     */

}
