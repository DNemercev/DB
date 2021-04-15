<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoftwareAddRequest extends FormRequest
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
    //$validateData = $this->request->validate([
    //            'title'         => 'required|max:191',
    //            'description'   => 'required',
    //            'slug'          => 'required|max:191'
    //        ]);
    public function rules()
    {
        return  [
            'title'         => 'required|max:191',
            'slug'          => 'required|max:191',
            'description'    => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'title обязательно для заполнения',
            'slug.required'         => 'поле slug обязательно для заполнения',
            'description.required'   => 'поле description обязательно для заполнения',
            'title.max'             => 'Максимальный размер поля title 191 символов',
            'slug.max'              => 'Максимальный размер поля slug 191 символ',
        ];
    }
}
