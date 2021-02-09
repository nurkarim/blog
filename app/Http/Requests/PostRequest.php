<?php

namespace App\Http\Requests;

use App\Rules\PreventDuplicateRule;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            '_csrf_token'=>['required',new PreventDuplicateRule()]
        ];
    }
}
