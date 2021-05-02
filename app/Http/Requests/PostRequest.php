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
            'category_id'   =>'required',
            'title'         =>'required|string|min:5|unique:posts',
            'slug'          =>'nullable|min:2|unique:posts|regex:/^\S*$/u',
            'details'       =>'required|min:10',
            'sub_category_id'=>'required',
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'Category',
            'details'     => 'Post description',
            'sub_category_id'=> 'Sub Category',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->slug),
        ]);
    }
}
