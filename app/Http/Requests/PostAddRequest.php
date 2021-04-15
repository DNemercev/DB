<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostAddRequest extends FormRequest
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
            'title'         => 'required|max:191',
            'description'   => 'required',
            'slug'          => 'required|max"191',
            'content'       => 'required',
            'image'         => 'required',                      // добавить в форму возможность добалять картинку и полсе проверить image
            'website'       => 'required|url'
        ];
    }


    public function messages()
    {
        return [
            'title.required'        => 'поле title обязательно для заполнения',
            'slug.required'         => 'поле slug обязательно для заполнения',
            'description.required'  => 'поле description обязательно для заполнения',
            'content.required'      => 'поле content обязательно для заполнения',
            'website.required'      => 'поле website обязательно для заполнения',
            'image.required'        => 'поле image обязательно для заполнения',
            'title.max'             => 'Максимальный размер поля title 191 символов',
            'slug.max'              => 'Максимальный размер поля slug 191 символ',
            'website.url'           => 'website поле для ссылки'
        ];
    }
}
