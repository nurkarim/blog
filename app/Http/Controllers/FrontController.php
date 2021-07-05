<?php

namespace App\Http\Controllers;

use App\Post;
use App\ThemeSetting;
use Illuminate\Http\Request;
use LaravelLocalization;
use App\CustomClasses\SettingsHelper;
class FrontController extends Controller
{
    public function index()
    {

        $latestPostTop=Post::query()->with(['category','subcategory','languageName','imageGallery'])->where('post_type','article')->where('visibility',1)->where('slider',1)->where('language', LaravelLocalization::setLocale() ?? SettingsHelper::settingHelper('default_language'))->latest()->take(10)->get();
        $latestPostTopRight=Post::query()->with(['category','subcategory','languageName','imageGallery'])->where('post_type','article')->where('visibility',1)->where('language', LaravelLocalization::setLocale() ?? SettingsHelper::settingHelper('default_language'))->latest()->take(4)->get();
        $primarySections=ThemeSetting::query()->with(['category.post.imageGallery'])->orderBy('view_order')->get();
        $latestPost=Post::query()->with(['category','subcategory','languageName','imageGallery'])->where('post_type','article')->where('visibility',1)->where('language', LaravelLocalization::setLocale() ?? SettingsHelper::settingHelper('default_language'))->latest()->take(20)->get();
        return view('_partials.body',compact('latestPostTop','latestPostTopRight','primarySections','latestPost'));
    }

}
