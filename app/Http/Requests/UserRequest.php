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
        return [
            'question.eye' => 'required',
            'question.hair' => 'required',
            'question.skin' => 'required',
            'question.burn' => 'required',
            'question.rip' => 'required',
            'question.goodrip' => 'required',
            'question.badrip' => 'required',
            'question.accesary' => 'required',
            'question.basic' => 'required',
            'question.complimented' => 'required',
            'question.firstimpression' => 'required',
            'likestyle' => 'required',
            'introduction' => 'required|string|max150',
            
        ];
    }
}
