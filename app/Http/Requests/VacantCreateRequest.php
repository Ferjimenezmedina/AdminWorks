<?php

namespace empleaDos\Http\Requests;

use empleaDos\Http\Requests\Request;

class VacantCreateRequest extends Request
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
            'title' => 'required',
            'specialty' => '',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'num_vacan' => 'required',
            'description' => 'required|max:1000',
            'type_contract' => 'required',
            'type_schedule' => 'required',
            'type_salary' => 'required',
            'type_pay' => 'required',
            'public_min_pay' => 'required',
            'public_max_pay' => 'required',
            'min_salary' => 'required_if:public_min_pay,1',
            'max_salary' => 'required_if:public_max_pay,1',
            'to_travel' => 'required',
            'change_address' => 'required',
            'pais_id' => 'required',
            'state_id' => 'required',
            'mpio_id' => 'required',
            'final_comment' => 'max:1000',
        ];
    }
}
