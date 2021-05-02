@extends('index')
@section('title')
    Online learing programimmng language- see demo in laradevsbd.com
@endsection
@section('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="google-site-verification" content="sx_2q7hM5RYz2ENt7N7R7G_8bRblRvHxA7nENHaId9o"/>
    <meta name="yandex-verification" content="1abb94c99b444464"/>
    <link rel="shortcut icon" type="image/png" href="">
    <meta name="p:domain_verify" content="f9af85b662cce44b54e98146f7d73d11">
    <meta name="description"
          content="laradevsbd website focuses on all web language and framework tutorial PHP, Laravel, Codeigniter, Nodejs, API, MySQL, AJAX, jQuery, JavaScript, Demo">
    <meta name="keywords"
          content="laradevsbd of it programming language, php, laravel 5, jquery, javascript, mysql, git, html, css, MySQL, HTML, CSS, git, AJAX, bootstrap,  jQuery, JavaScript, Designing, Demo, laradevs bd.">
    <meta name="twitter:image" content="https://www.laradevsbd.com/upload/laradevsbd.png">
    <link rel="canonical" href="https://www.laradevsbd.com">
    <meta property="og:description"
          content="laradevsbd website focuses on all web language and framework tutorial PHP, Laravel, Codeigniter, Nodejs, API, MySQL, AJAX, jQuery, JavaScript, Demo">
    <meta property="og:title" content="Laradevs bd - Tutorial It Language Site | See Demo Example">
    <meta property="og:url" content="https://www.laradevsbd.com">
    <meta property="og:image:url" content="https://www.laradevsbd.com/upload/laradevsbd.png">

    <meta content="https://www.facebook.com/rezban.khan" property="article:publisher">
    <meta content="https://www.facebook.com/rezban.khan" property="article:author">
    <meta content="Nur Karim" name="author">
    <meta name="twitter:title" content="Laradevs bd - Tutorial It Language Site | See Demo Example">
    <meta name="twitter:site" content="https://www.laradevsbd.com">
    <meta name="twitter:description"
          content="laradevsbd website focuses on all web language and framework tutorial PHP, Laravel, Codeigniter, Nodejs, API, MySQL, AJAX, jQuery, JavaScript, Demo">
@endsection
@section('content')
    <section class="section-space-bottom">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-8 col-lg-12">
                    <div class="main-slider1 img-overlay-slider">
                        <div class="bend niceties preview-1">
                            <div id="ensign-nivoslider-3" class="slides">
                                @foreach($latestPostTop as $slider)
                                <img src="@if(isset($slider->imageGallery)) {{ url('public') }}/{{$slider->imageGallery->big_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" alt="slider" title="#slider-direction-{{ $slider->id }}" />
                                @endforeach
                            </div>
                            @foreach($latestPostTop as $slider)
                            <div id="slider-direction-{{ $slider->id }}" class="t-cn slider-direction">
                                <div class="slider-content s-tb slide-1">
                                    <div class="title-container s-tb-c">
                                        <div class="text-left pl-50 pl20-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">{{ @$slider->category->name }}</div>
                                            <div class="post-date-light d-none d-sm-block">
                                                <ul>
                                                    <li>
                                                        <span>by</span>
                                                        <a href="#">{{ @$slider->user->name }}</a>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>{{ date('M d, Y',strtotime($slider->updated_at)) }}</li>
                                                </ul>
                                            </div>
                                            <div class="slider-title"> <a href="{{ url('story',$slider->slug) }}" class="text-white">{{ $slider->title }}</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="item-box-light-md-less30 ie-full-width">
                        <div class="row">
                            @foreach($latestPostTopRight as $post)
                            <div class="media mb-30 col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <a class="img-opacity-hover" href="single-news-1.html">
                                    <img src="@if(isset($post->imageGallery)) {{ url('public') }}/{{$post->imageGallery->small_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" alt="{{ $post->title }}" class="img-fluid">
                                </a>
                                <div class="media-body media-padding5">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>{{ date('M d, Y',strtotime($slider->updated_at)) }}</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md mb-none">
                                        <a title="{{ $post->title }}" href="{{ url('story',$post->slug) }}">{{ \Illuminate\Support\Str::limit($post->title,46) }}</a>
                                    </h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
