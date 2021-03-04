<?php
namespace App\CustomClasses;

use App\Models\Setting;
use Illuminate\Support\Facades\Config;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SettingsHelper
{

    public static function settingHelper($title = "")
    {
        if (LaravelLocalization::setLocale() == "") {
            $default = Setting::where('title', 'default_language')->first();
            $lang = $default->value;
        } else {
            $lang = LaravelLocalization::setLocale();
        }

        $data = Setting::where('title', $title)->where('lang', $lang)->first();
        return @$data->value;
    }

}
