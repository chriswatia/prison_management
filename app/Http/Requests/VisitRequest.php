<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitRequest extends FormRequest
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
        $rules = [
            'inmate_id' => 'required',
            'visitor_name' => 'required',
            'visitor_phone' => 'required',
            'visitor_relation' => 'required'
        ];

        return $rules;
    
    }
}
