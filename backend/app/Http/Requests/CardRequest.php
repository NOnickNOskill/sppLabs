<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
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
            case 'DELETE':
                break;
            case 'POST':
                $rules = [
                    'user_id' => 'bail|integer|required',
                    'title' => 'bail|string|required|min:3|max:50',
                    'description' => 'bail|string|required|min:10|max:250',
                    'estimation' => 'bail|date|required',
                ];
                break;
            case 'PUT':
                $rules = [
                    'title' => 'bail|string|nullable|min:3|max:50',
                    'description' => 'bail|string|nullable|min:10|max:250',
                    'estimation' => 'bail|date|nullable',
                ];
                break;
        }
        return $rules;
    }
}
