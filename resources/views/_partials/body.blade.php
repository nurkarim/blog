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

    <section class="bg-accent section-space-less2">
        <div class="container">
            <div class="row tab-space1">

                <div class="col-lg-6 col-md-12">
                    <div class="img-overlay-70 img-scale-animate mb-2">
                        <img
                            data-original="@if(isset($latestPostTop->imageGallery)) {{ url('public') }}/{{$latestPostTop->imageGallery->big_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                            alt="news" class="img-fluid width-100">
                        <div class="mask-content-lg">
                            <div class="topic-box-sm color-cinnabar mb-20">{{ @$latestPostTop->category->name }}</div>
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>by</span>
                                        <a href="#">{{ @$latestPostTop->user->name }}</a>
                                    </li>
                                    <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>{{ date('M d, Y',strtotime($latestPostTop->updated_at)) }}</li>
                                </ul>
                            </div>
                            <h1 class="title-medium-light">
                                <a href="{{ url('story',$latestPostTop->slug) }}">{{ $latestPostTop->title }}</a>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row tab-space1">
                        @foreach($latestPostTopRight as $post)
                            <div class="col-sm-6 col-12">
                                <div class="img-overlay-70 img-scale-animate mb-2">
                                    <div class="mask-content-sm">
                                        <div class="topic-box-sm color-apple mb-10">{{ @$post->category->name }}</div>
                                        <h3 class="title-medium-light">
                                            <a href="{{ url('story',$post->slug) }}">{{ $post->title }}</a>
                                        </h3>
                                    </div>
                                    <img
                                        data-original="@if(isset($post->imageGallery)) {{ url('public') }}/{{$post->imageGallery->thumbnail}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                                        alt="{{ $post->title }}" class="img-fluid width-100">
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-body section-space-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    @php
                        $sectionCollection=collect($primarySections);
        $sections=$sectionCollection->where('type',1)->where('label','top')->all();
        $i=1;
                    @endphp
                    @foreach($sections as $primarySection)
                        <?php
                        $i++;
                        ?>
                        @if($primarySection->section_style=='style_2')
                            <div class="mb-20-r ne-isotope">
                                <div class="topic-border @if($i%2==0) color-cinnabar @else color-apple @endif   mb-30">
                                    <div class="topic-box-lg color-cinnabar">{{ $primarySection->category->name }}</div>
                                    <div class="isotope-classes-tab isotop-btn">
                                        @if(isset($primarySection->category->subCategoriesBody))
                                            @foreach($primarySection->category->subCategoriesBody as $key=>$subcategory)
                                                <a href="#"
                                                   data-filter=".{{ $subcategory->slug }}"
                                                   @if($key==0) class="current" @endif>{{ $subcategory->name }}</a>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="more-info-link">
                                        <a href="{{ url('category',$primarySection->category->slug) }}">More
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="featuredContainer">
                                    @foreach($primarySection->category->subCategoriesBody as $sub_catPost)
                                        <div class="row {{ $sub_catPost->slug }}">
                                            <div class="col-md-12 col-sm-12">
                                                @foreach($sub_catPost->post as $catPost)
                                                    <div class="media mb-30">
                                                        <a class="width38-lg width40-md img-opacity-hover"
                                                           href="{{ url('story',$catPost->slug) }}">
                                                            <img
                                                                data-original="@if(isset($catPost->imageGallery)) {{ url('public') }}/{{$catPost->imageGallery->small_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                                                                alt="{{ $catPost->title }}" class="img-fluid">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="post-date-dark">
                                                                <ul>
                                                                    <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>{{ date('M d, Y',strtotime($latestPostTop->updated_at)) }}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <h3 class="title-medium-dark size-md mb-none">
                                                                <a href="{{ url('story',$catPost->slug) }}">{{ $catPost->title }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @if($primarySection->show_ads==1)
                                <div class="row">
                                    <div class="col-12">
                                        <div class="ne-banner-layout1 mt-20-r text-center">
                                            @if($primarySection->ads->ad_type=='code')
                                                {!! $primarySection->ads->ad_code !!}
                                            @elseif($primarySection->ads->ad_type=='image')
                                                <a href="{{ $primarySection->ads->ad_url }}" target="_blank">
                                                    <img
                                                        data-original="@if(isset($primarySection->ads)) {{ url('public') }}/{{$primarySection->ads->ad_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                                                        alt="ad" class="img-fluid">
                                                </a>
                                            @elseif($primarySection->ads->ad_type=='text')
                                                {!! $primarySection->ads->ad_text !!}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @elseif($primarySection->section_style=='style_4')
                            <div class="row tab-space1 mb-25">
                                <div class="col-12">
                                    <div class="topic-border color-apple mb-30 width-100">
                                        <div
                                            class="topic-box-lg @if($i%2==0) color-cinnabar @else color-apple @endif ">{{ $primarySection->category->name }}</div>
                                    </div>
                                </div>
                                @foreach($primarySection->category->post as $catPost)
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="img-overlay-70 img-scale-animate mb-2">
                                            <div class="mask-content-xs">
                                                <div class="post-date-light">
                                                    <ul>
                                                        <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>{{ date('M d, Y',strtotime($latestPostTop->updated_at)) }}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h3 class="title-medium-light">
                                                    <a href="{{ url('story',$catPost->slug) }}">{{ $catPost->title }}</a>
                                                </h3>
                                            </div>
                                            <img
                                                data-original="@if(isset($catPost->imageGallery)) {{ url('public') }}/{{$catPost->imageGallery->small_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                                                alt="{{ $catPost->title }}" class="img-fluid width-100">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="ne-sidebar sidebar-break-md col-lg-3 col-md-12">
                    {{--                <div class="sidebar-box">--}}
                    {{--                    <div class="topic-border color-cod-gray mb-30">--}}
                    {{--                        <div class="topic-box-lg color-cod-gray">Stay Connected</div>--}}
                    {{--                    </div>--}}
                    {{--                    <ul class="stay-connected overflow-hidden">--}}
                    {{--                        <li class="facebook">--}}
                    {{--                            <i class="fa fa-facebook" aria-hidden="true"></i>--}}
                    {{--                            <div class="connection-quantity">50.2 k</div>--}}
                    {{--                            <p>Fans</p>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="twitter">--}}
                    {{--                            <i class="fa fa-twitter" aria-hidden="true"></i>--}}
                    {{--                            <div class="connection-quantity">10.3 k</div>--}}
                    {{--                            <p>Followers</p>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="linkedin">--}}
                    {{--                            <i class="fa fa-linkedin" aria-hidden="true"></i>--}}
                    {{--                            <div class="connection-quantity">25.4 k</div>--}}
                    {{--                            <p>Fans</p>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="rss">--}}
                    {{--                            <i class="fa fa-rss" aria-hidden="true"></i>--}}
                    {{--                            <div class="connection-quantity">20.8 k</div>--}}
                    {{--                            <p>Subscriber</p>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                    {{--                </div>--}}
                    <div class="sidebar-box">
                        <div class="ne-banner-layout1 text-center">
                            <a href="#">
                                <img src="img/banner/banner3.jpg" alt="ad" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="topic-border color-scampi mb-5">
                            <div class="topic-box-lg color-scampi">Recent Post</div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="mt-25">
                                    <a href="single-news-1.html" class="img-opacity-hover">
                                        <img src="img/news/news42.jpg" alt="ad" class="img-fluid mb-10 width-100">
                                    </a>
                                    <h3 class="title-medium-dark size-md mb-none">
                                        <a href="single-news-1.html">Rosie Huntington Whitl Habits Career Art Rosie.</a>
                                    </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="bg-body section-space-less30">
        <div class="container">
            <div class="row">
                @php
                    $sectionCollection=collect($primarySections);
                    $sections=$sectionCollection->where('type',1)->where('label','center')->all();
                @endphp
                @foreach($sections as $centerSection)

                    <div class="col-lg-4 col-md-12">
                        <div class="topic-border color-cutty-sark mb-30 width-100">
                            <div class="topic-box-lg color-cutty-sark">
                                @if(isset($centerSection->sub_category))
                                    {{ @$centerSection->sub_category->name }}
                                @else
                                    {{ @$centerSection->category->name }}
                                @endif
                            </div>
                        </div>
                        <?php
                        $arrayID = 0;
                        ?>
                        @foreach($centerSection->sub_category->post as $key=>$scatPost)

                            <div class="img-overlay-70 img-scale-animate mb-30">
                                <div class="mask-content-sm">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>by</span>
                                                <a href="#">{{ $scatPost->user->name }}</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>{{ date('M d, Y',strtotime($scatPost->updated_at)) }}</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-light">
                                        <a href="{{ url('story',$scatPost->slug) }}">{{ $scatPost->title }}</a>
                                    </h3>
                                </div>
                                <img
                                    data-original="@if(isset($scatPost->imageGallery)) {{ url('public') }}/{{$scatPost->imageGallery->small_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                                    alt="{{ $scatPost->title }}" class="img-fluid width-100">
                            </div>
                            @if($key==0)
                                <?php
                                $arrayID = $scatPost->id;
                                ?>
                                @break
                            @endif
                        @endforeach
                        @foreach($centerSection->sub_category->post()->where('id','!=',$arrayID)->get() as $key=>$scatPost1)
                            <div class="media mb-30">
                                <a class="img-opacity-hover" href="{{ url('story',$scatPost1->slug) }}l">
                                    <img
                                        data-original="@if(isset($scatPost1->imageGallery)) {{ url('public') }}/{{$scatPost1->imageGallery->thumbnail}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                                        alt="{{ $scatPost1->title }}" class="img-fluid">
                                </a>
                                <div class="media-body">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>{{ date('M d, Y',strtotime($scatPost1->updated_at)) }}</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md mb-none">
                                        <a href="{{ url('story',$scatPost1->slug) }}">{{ $scatPost1->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    @if($centerSection->show_ads==1)
                        <div class="row">
                            <div class="col-12">
                                <div class="ne-banner-layout1 mt-20-r text-center">
                                    @if($centerSection->ads->ad_type=='code')
                                        {!! $centerSection->ads->ad_code !!}
                                    @elseif($centerSection->ads->ad_type=='image')
                                        <a href="{{ $centerSection->ads->ad_url }}" target="_blank">
                                            <img
                                                data-original="@if(isset($centerSection->ads)) {{ url('public') }}/{{$centerSection->ads->ad_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                                                alt="ad" class="img-fluid">
                                        </a>
                                    @elseif($centerSection->ads->ad_type=='text')
                                        {!! $centerSection->ads->ad_text !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
            @php
                $sectionCollection=collect($primarySections);
$sections=$sectionCollection->where('type',1)->where('label','bottom')->all();
$i=1;
            @endphp
            <div class="ne-isotope">
                @foreach($sections as $primarySection)
                    <?php
                    $i++;
                    ?>
                    @if($primarySection->section_style=='style_3')
                        <div class="row">
                            <div class="col-12">
                                <div class="topic-border @if($i%2==0) color-cinnabar @else color-apple @endif mb-30">
                                    <div
                                        class="topic-box-lg @if($i%2==0) color-cinnabar @else color-apple @endif">{{ $primarySection->category->name }}</div>
                                    <div class="isotope-classes-tab isotop-btn">
                                        @if(isset($primarySection->category->subCategoriesBody))
                                            @foreach($primarySection->category->subCategoriesBody as $key=>$subcategory)
                                                <a href="#"
                                                   data-filter=".{{ $subcategory->slug }}"
                                                   @if($key==0) class="current" @endif>{{ $subcategory->name }}</a>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="more-info-link">
                                        <a href="{{ url('category',$primarySection->category->slug) }}">More
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="featuredContainer">
                            @foreach($primarySection->category->subCategoriesBody as $sub_catPost)
                                <div class="row  {{ $sub_catPost->slug }}">
                                    @foreach($sub_catPost->post as $key=>$scatPost)
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                            <div class="mb-25 position-relative">
                                                <a class="img-opacity-hover" href="{{ url('story',$scatPost->slug) }}">
                                                    <img
                                                        data-original="@if(isset($scatPost->imageGallery)) {{ url('public') }}/{{$scatPost->imageGallery->medium_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                                                        alt="{{ $scatPost->title }}" class="img-fluid width-100 mb-15">
                                                </a>
                                                <div class="topic-box-top-xs">
                                                    <div
                                                        class="topic-box-sm color-cod-gray mb-20">{{ $scatPost->subcategory->name }}</div>
                                                </div>
                                                <div class="post-date-dark">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>{{ date('M d, Y',strtotime($scatPost->updated_at)) }}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h3 class="title-medium-dark size-md">
                                                    <a href="{{ url('story',$scatPost->slug) }}">{{ $scatPost->title }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-accent section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ne-isotope">
                        <div class="topic-border color-scampi mb-30">
                            <div class="topic-box-lg color-scampi">Latest</div>
                        </div>
                        <div class="featuredContainer">
                            <div class="row">
                                @foreach($latestPost as $post)
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="{{ url('story',$post->slug) }}" class="img-opacity-hover">
                                                <img data-original="@if(isset($post->imageGallery)) {{ url('public') }}/{{$post->imageGallery->medium_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                                                     alt="{{ $post->title }}" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cinnabar mb-20">{{ $post->category->name }}</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>by</span>
                                                        <a href="#">{{ $post->user->name }}</a>
                                                    </li>
                                                    <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>{{ date('M d, Y',strtotime($post->updated_at)) }}
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="{{ url('story',$post->slug) }}">{{ $post->title }}</a>
                                            </h3>
{{--                                            <p>Separated they live in Bookmarksgrove right at the coast of the--}}
{{--                                                Semantics,--}}
{{--                                                a large ocean. A small river named Duden flows by their place and--}}
{{--                                                ...--}}
{{--                                            </p>--}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
{{--                    <div class="sidebar-box">--}}
{{--                        <div class="ne-banner-layout1 text-center">--}}
{{--                            <a href="#">--}}
{{--                                <img src="img/banner/banner6.jpg" alt="ad" class="img-fluid">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">Newsletter</div>
                        </div>
                        <div class="newsletter-area bg-primary">
                            <h2 class="title-medium-light size-xl">Subscribe to our mailing list to get the new
                                updates!</h2>
{{--                            <img src="img/banner/newsletter.png" alt="newsletter" class="img-fluid mb-40">--}}
                            <p>Subscribe our newsletter to stay updated every moment</p>
                            <div class="input-group stylish-input-group">
                                <input type="text" placeholder="Enter your mail" class="form-control">
                                <span class="input-group-addon">
                                            <button type="submit">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </button>
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
