<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $rules = [];

        switch ($this->method()) {
            case 'GET':
                break;
            case 'POST':
                $rules = [
                    'name' => 'bail|string|required|min:3|max:20',
                    'email' => 'bail|required|email|max:255|unique:users,email',
                    'password' => 'bail|required|min:6|string|max:255',
                ];
                break;
        }
        return $rules;
    }
}
