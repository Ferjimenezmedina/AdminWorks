<?php

namespace empleaDos\Http\Requests;

use empleaDos\Http\Requests\Request;

class CompanyRequestTable extends Request
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
            'user_id'   => 'required|unique:companies',
            'razon_social'   => 'required',
            'rfc'   => 'required|max:20',
            'domicilio'   => 'required',
            'no_exterior'   => 'required',
            'colonia'   => 'required',
            'codigo_postal'   => 'required',
            'pais_id'   => 'required',
            'state_id'   => 'required',
            'mpio_id'   => 'required',
            'ciudad'   => 'required',
            'category_id'   => 'required',
            'tipo_contrata_emp'   => 'required',
        ];
    }
}
