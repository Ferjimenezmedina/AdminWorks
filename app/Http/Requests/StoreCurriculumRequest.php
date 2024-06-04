<?php

namespace empleaDos\Http\Requests;

use empleaDos\Http\Requests\Request;


class StoreCurriculumRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"              => "required",
            "a_paterno"         => "required",
            "a_materno"         => "required",
            "birthdate"         => "required|date",
            "genero"            => "required",
            "estado_civil"      => "",
            "curp"              => "",
            "pais_id"           => "",
            "state_id"          => "",
            "mpio_id"           => "",
            "calle"             => "",
            "no_ext"            => "",
            "colonia"           => "",
            "codigo_postal"     => "",
            "telefono1"         => "",
            "tipo_tel1"         => "",
            "licencia"          => "",
            "disp_veiculo"      => "",
            "discapacidad"      => "",
            "disp_viajar"       => "",
            "disp_cam_res"      => "",
            "max_studio"        => "",
            "institucion"       => "",
            "title_study"       => "",
            "title_prof"        => "",
            "specialty"         => "",
            "descrip_prof"      => "|min:0|max:500",
            "situcacion_ac"     => "" ,
            "puesto_des"        => "",
            "req_salary"        => "",
            "salary_type"       => "",
            "des_salary"        => "",
            "salary_type_des"   => "",
          
        ];
    }
            
}
