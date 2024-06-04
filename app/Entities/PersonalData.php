<?php

namespace empleaDos\Entities;

use Illuminate\Database\Eloquent\Model;

class PersonalData extends Entity
{
   	protected $tabla = 'personal_datas';
   	protected $fillable = [
   	      "user_id",
            "estado_civil",
            "curp",
            "rfc",
            "pais_id",
            "state_id",
            "mpio_id",
            "calle",
            "no_ext",
            "no_int",
            "colonia" ,
            "codigo_postal",
            "tipo_tel1",
            "telefono1",
            "tipo_tel2",
            "telefono2",
            "licencia",
            "tipo_licencia",
            "disp_veiculo",
            "discapacidad",
            "disp_viajar",
            "disp_cam_res",
      ];

    	public function user()
    	{
    		return $this->belongsTo(User::getClass());
    	}
        public function pais()
        {
            return $this->belongsTo(Country::getClass());
        }
        public function edo()
        {
            return $this->belongsTo(Estado::getClass(), 'state_id');
        }
        public function municipio()
        {
            return $this->belongsTo(Municipio::getClass(),"mpio_id");
        }
}

