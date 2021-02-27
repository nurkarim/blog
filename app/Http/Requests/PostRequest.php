<?php

namespace App\Http\Requests;

use App\Rules\PreventDuplicateRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
class PostRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            '_csrf_token'   =>['required',new PreventDuplicateRule()],
            'category_id'   =>['required|min:1|numeric|exists:categories'],
            'title'         =>['required|string|min:5'],
            'slug'          =>'nullable|min:2|unique:posts|regex:/^\S*$/u',
            'content'       =>['required|min:10'],
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'Category',
            'content'     => 'Post description',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->slug),
        ]);
    }
}
