<?php
namespace App\CustomClasses;

use App\Models\MenuItems;
use App\Models\Setting;
use App\Post;
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

    public static function menus()
    {
        return MenuItems::query()->with('category.subCategory')->where('status',1)->orderBy('view_order')->get();
    }

    public function headline()
    {
        return Post::query()->where('breaking',1)->orderBy('breaking_order')->take(10)->get();
    }
}
