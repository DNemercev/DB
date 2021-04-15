<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlotsAddRelarionRequest extends FormRequest
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
            'softwareTitle' => 'required|max:255',
            'slotTitle'     => 'required|max:255',

        ];
    }

    public function messages()
    {
        return [
            'slotTitle.required'        => 'Поле slot title обязательно для заполнения',
            'slotTitle.max'             => 'длинна поля Title не должна превышать 255 символов',
            'softwareTitle.required'    => 'Поле software title обязательно для заполнения',
            'softwareTitle.max'         => 'длинна поля Title не должна превышать 255 символов'
        ];
    }
}
