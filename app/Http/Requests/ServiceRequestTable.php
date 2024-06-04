<?php

namespace empleaDos\Http\Requests;

use empleaDos\Http\Requests\Request;

class ServiceRequestTable extends Request
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
            'service'           => 'required',
            'category_id'       => 'required',
            'img_service'       => '',
            'subcategory_id'    => 'required',
            'description'       => 'required',
        ];
    }
}
