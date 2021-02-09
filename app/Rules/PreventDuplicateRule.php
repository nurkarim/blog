<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Session;

class PreventDuplicateRule implements Rule
{

    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        if ($value != Session::get('_csrf_token'))
        {
            return false;
        }
        $token = md5(session_id() . time());
        Session::put('_csrf_token', $token);
        return true;

    }

    public function message()
    {
        return 'The request are duplicate';
    }
}
