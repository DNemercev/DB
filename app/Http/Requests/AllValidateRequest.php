<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AllValidateRequest extends FormRequest
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
        return  [
            'slots_title'       => 'required|max:255',
            'slots_slug'        => 'required|max:191',
            'slots_category_id' => 'required|integer',
            'slots_image'       => 'required',
            'slots_software_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'ZARABOTAY',
            'body.required' => 'A message is required',
        ];
    }
}
