<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Post;
use App\ThemeSetting;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use LaravelLocalization;
use App\CustomClasses\SettingsHelper;


class FrontController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Laravel Blog website & artisan helper');
        SEOTools::setDescription('LaradevsBD focuses on all web language and framework tutorial PHP, Laravel, API, MySQL, AJAX, jQuery, JavaScript, Demo,artisan,helper,blog');
        SEOMeta::addKeyword('programming language, php, laravel, jquery, javascript, mysql, git, html, css, MySQL, laradevsbd.com,artisan,helper,blog,laravel auth,laravel api,laravel payment getaway,stripe,paypal,bkash,nogod,ssl,laravel barcode');
        SEOTools::opengraph()->setUrl('https://laradevsbd.com');
//        SEOTools::setCanonical('https://www.laradevsbd.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addImage('https://laradevsbd.com/public/img/logo-new.png');
        SEOTools::twitter()->setSite('https://laradevsbd.com');
        SEOTools::twitter()->setImage('https://laradevsbd.com/public/img/logo-new.png');
        SEOTools::jsonLd()->addImage('https://laradevsbd.com/public/img/logo-new.png');
        $currentPage = request()->get('page',1);
        $latestPost=cache()->remember('latest-post'.$currentPage,60*60*24,function (){
            return Post::query()->with(['category','subcategory','imageGallery','user'])->where('post_type','article')->where('visibility',1)->where('language', LaravelLocalization::setLocale() ?? 'en')->latest()->paginate(30);
        });
//        $latestPostTop=Post::query()->with(['category','subcategory','imageGallery','user'])->where('post_type','article')->where('visibility',1)->where('slider',1)->where('language', LaravelLocalization::setLocale() ?? 'en')->latest()->take(10)->get();
        $latestPostTopRight=Post::query()->with(['category','subcategory','imageGallery','user'])->where('post_type','article')->where('visibility',1)->where('language', LaravelLocalization::setLocale() ?? 'en')->latest()->inRandomOrder()->take(1)->get();
//        $primarySections=ThemeSetting::query()->with(['category.post.imageGallery','sub_category','ads'])->orderBy('view_order')->get();
//        $latestPost=Post::query()->with(['category','subcategory','imageGallery','user'])->where('post_type','article')->where('visibility',1)->where('language', LaravelLocalization::setLocale() ?? 'en')->latest()->take(20)->get();
        return view('_partials.body',compact('latestPostTopRight','latestPost'));
    }

    public function category($slug)
    {

        $category=Category::query()->where('slug',$slug)->first();
        $url=url('/category',$slug);
        SEOMeta::addKeyword($category->meta_keywords.' laravel auth,laravel api,laravel payment getaway,stripe,paypal,bkash,nogod,ssl,laravel barcode');
        SEOTools::setTitle($category->name);
        SEOTools::setDescription($category->meta_description);
        SEOTools::opengraph()->setUrl($url);
//        SEOTools::setCanonical($url);
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite($url);
        $data=Post::query()->with(['category','subcategory','imageGallery','user'])->where('category_id',$category->id)->where('post_type','article')->where('visibility',1)->where('language', LaravelLocalization::setLocale() ?? SettingsHelper::settingHelper('default_language'))->latest()->paginate(30);

        //https://github.com/artesaos/seotools
        return view('layouts.category_post',compact('category','data'));
    }



    public function details($slug)
    {
        $post=Post::query()->with(['category','subcategory','imageGallery','user','comment'])->where('slug',$slug)->firstOrFail();
        $url=url('story').'/'.$slug;
        if(isset($post->imageGallery)){
            $image=url('public').'/'.$post->imageGallery->og_image;
        }else{
            $image=url('public/default-image/default-100x100.png');
        }

//        SEOTools::setCanonical($url);
        SEOTools::setTitle($post->title);
        SEOTools::setDescription($post->meta_description??$post->sub_content);
        SEOMeta::addKeyword($post->meta_keywords.' laravel,laravel 8,laravel 7,php,javascript,jquery,ajax,laravel auth,laravel api,laravel payment getaway,stripe,paypal,bkash,nogod,ssl,laravel barcode');
        SEOTools::opengraph()->setUrl($url);
        SEOTools::opengraph()->setSiteName('laradevsbd.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addImage($image);
        SEOTools::twitter()->setSite($url);
        $latestPost=Post::query()->with(['category','subcategory','imageGallery','user'])->where('id','!=',$post->id)->where('post_type','article')->where('visibility',1)->where('language', LaravelLocalization::setLocale() ?? 'en')->latest()->take(20)->get();
        $post->update(
           [ 'total_view'=>$post->total_view+1]
        );
        //https://github.com/artesaos/seotools
        return view('layouts.details',compact('post','latestPost'));
    }

    public function page($slug)
    {
        $page=Page::query()->where('slug',$slug)->firstOrFail();
        return view('layouts.page',compact('page'));
    }

}
