<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlotsAddRequest extends FormRequest
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
            'title'         => 'required|max:255',
            'slug'          => 'required|max:191',
            'categoryId'    => 'required|integer',
            'status'        => 'required|boolean',
            'image'         => 'required',
            'softwareId'    => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'поле title обязательно для заполнения',
            'slug.required'         => 'поле slug обязательно для заполнения',
            'categoryId.required'   => 'поле category id обязательно для заполнения',
            'status.required'       => 'поле status обязательно для заполнения',
            'softwareId.required'   => 'поле softwareId обязательно для заполнения',
            'image.required'        => 'поле image обязательно для заполнения',
            'title.max'             => 'Максимальный размер поля title 255 символов',
            'slug.max'              => 'Максимальный размер поля slug 191 символ',
            'categoryId.integer'    => 'Category id должно быть числом',
            'status.boolean'        => 'Значение Status 1 или 0',
            'softwareId.integer'    => 'Software id должно быть числом'
        ];
    }
}
