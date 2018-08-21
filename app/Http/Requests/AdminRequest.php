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
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'department' => 'required|max:255',
            'email' => 'required|max:255',
        ];
    }
}
