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

    // Validation for add user,supervisor forms
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



}
