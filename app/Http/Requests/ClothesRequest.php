<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClothesRequest extends FormRequest
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
            'image'  => 'required',
            'clothes.name'  => 'required|string|',
            'clothes.type'  => 'required',
            'clothes.thickness'  => 'required',
            'clothes.color'  => 'required',
            'clothes.style'  => 'required',
        ];
    }
}
