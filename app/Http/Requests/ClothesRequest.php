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
            'clothes.brand_name'  => 'required|string|',
            'clothes.type'  => 'required',
            'clothes.season_type'  => 'required',
            'clothes.color'  => 'required',
            'clothes.style'  => 'required',
            'clothes.category'  => 'required',
        ];
    }
}
