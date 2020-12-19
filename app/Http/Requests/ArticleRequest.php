<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class ArticleRequest extends FormRequest
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
            'title:ar'=>[
                'required',
                'max:50',
            ],
            'title:en'=>[
                'required',
                'max:50',
            ],
            'content:ar' => 'required:articles|min:200',
            'content:en' => 'required:articles|min:200',
            'tags' => 'required',
            'image' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png',
        ];
    }
}
