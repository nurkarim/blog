<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\ThemeSetting;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

// OR
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use LaravelLocalization;
use App\CustomClasses\SettingsHelper;
class FrontController extends Controller
{
    public function index()
    {
        SEOMeta::addKeyword('laradevsbd of it programming language, php, laravel 5, jquery, javascript, mysql, git, html, css, MySQL, HTML, CSS, git, AJAX, bootstrap,  jQuery, JavaScript, Designing, Demo, laradevs bd.');
        SEOTools::setTitle('Laradevs bd - Tutorial It Language Site | See Demo Example');
        SEOTools::setDescription('laradevsbd website focuses on all web language and framework tutorial PHP, Laravel, Codeigniter, Nodejs, API, MySQL, AJAX, jQuery, JavaScript, Demo');
        SEOTools::opengraph()->setUrl(env('APP_URL'));
        SEOTools::setCanonical(env('APP_URL'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addImage('https://laradevsbd.com/img/logo.jpg');
        SEOTools::twitter()->setSite(env('APP_URL'));
        SEOTools::twitter()->setImage('https://laradevsbd.com/img/logo.jpg');
        SEOTools::jsonLd()->addImage('https://laradevsbd.com/img/logo.jpg');

        $latestPostTop=Post::query()->with(['category','subcategory','imageGallery','user'])->where('post_type','article')->where('visibility',1)->where('slider',1)->where('language', LaravelLocalization::setLocale() ?? 'en')->latest()->take(10)->get();
        $latestPostTopRight=Post::query()->with(['category','subcategory','imageGallery','user'])->where('post_type','article')->where('visibility',1)->where('language', LaravelLocalization::setLocale() ?? 'en')->latest()->take(4)->get();
        $primarySections=ThemeSetting::query()->with(['category.post.imageGallery','sub_category','ads'])->orderBy('view_order')->get();
        $latestPost=Post::query()->with(['category','subcategory','imageGallery','user'])->where('post_type','article')->where('visibility',1)->where('language', LaravelLocalization::setLocale() ?? 'en')->latest()->take(20)->get();
        return view('_partials.body',compact('latestPostTop','latestPostTopRight','primarySections','latestPost'));
    }

    public function category($slug)
    {

        $category=Category::query()->where('slug',$slug)->first();
        $url=url('/category',$slug);
        SEOMeta::addKeyword($category->meta_keywords);
        SEOTools::setTitle($category->name);
        SEOTools::setDescription($category->meta_description);
        SEOTools::opengraph()->setUrl($url);
        SEOTools::setCanonical($url);
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite(env('APP_URL'));
        $data=Post::query()->with(['category','subcategory','imageGallery','user'])->where('category_id',$category->id)->where('post_type','article')->where('visibility',1)->where('language', LaravelLocalization::setLocale() ?? SettingsHelper::settingHelper('default_language'))->latest()->paginate(30);

        //https://github.com/artesaos/seotools
        return view('layouts.category_post',compact('category','data'));
    }

    public function details($slug)
    {
        $post=Post::query()->with(['category','subcategory','imageGallery','user','comment'])->where('slug',$slug)->firstOrFail();
        $url=url('/story',$slug);
        SEOMeta::addKeyword($post->meta_keywords);
        SEOTools::setTitle($post->title);
        SEOTools::setDescription($post->meta_description);
        SEOTools::opengraph()->setUrl($url);
        SEOTools::setCanonical($url);
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite(env('APP_URL'));
        $latestPost=Post::query()->with(['category','subcategory','imageGallery','user'])->where('id','!=',$post->id)->where('post_type','article')->where('visibility',1)->where('language', LaravelLocalization::setLocale() ?? 'en')->latest()->take(6)->get();

        //https://github.com/artesaos/seotools
        return view('layouts.details',compact('post','latestPost'));
    }

}
