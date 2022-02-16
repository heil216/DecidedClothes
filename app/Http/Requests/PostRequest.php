<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.nickname' => 'required|max:10',
            'post.likestyle' => 'required',
            'post.intro' => 'required|max:100',
        ];
    }
}