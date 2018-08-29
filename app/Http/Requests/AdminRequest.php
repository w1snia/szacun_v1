<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'username' => 'required|max:50',
            'password' => 'required|max:50',
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'department' => 'max:50',
            'email' => 'max:50',
        ];
    }


//    public function messages()
//    {
//        return [
//
//            'username.required' => 'Pole login jest wymagane!',
//            'password.required' => 'Pole hasło jest wymagane!',
//            'name.required' => 'Pole imię jest wymagane!',
//            'surname.required' => 'Pole nazwisko jest wymagane!',
//            'department.required' => 'Pole dział jest wymagane!'
//
//        ]
//    }


}
