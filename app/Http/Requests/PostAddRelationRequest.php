<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostAddRelationRequest extends FormRequest
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
            'postTitle'     => 'required|max:255',
            'softwareTitle' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'postTitle.required'        => 'Поле post title обязательно для заполнения',
            'posttTitle.max'            => 'длинна поля Title не должна превышать 255 символов',
            'softwareTitle.required'    => 'Поле software title обязательно для заполнения',
            'softwareTitle.max'         => 'длинна поля Title не должна превышать 255 символов',
        ];
    }
}
