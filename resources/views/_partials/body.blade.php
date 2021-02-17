@extends('index')
@section('title')
    Online learing programimmng language- see demo in laradevsbd.com
    @endsection
@section('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="google-site-verification" content="sx_2q7hM5RYz2ENt7N7R7G_8bRblRvHxA7nENHaId9o" />
    <meta name="yandex-verification" content="1abb94c99b444464" />
    <link rel="shortcut icon" type="image/png" href="">
    <meta name="p:domain_verify" content="f9af85b662cce44b54e98146f7d73d11">
    <meta name="description" content="laradevsbd website focuses on all web language and framework tutorial PHP, Laravel, Codeigniter, Nodejs, API, MySQL, AJAX, jQuery, JavaScript, Demo">
    <meta name="keywords" content="laradevsbd of it programming language, php, laravel 5, jquery, javascript, mysql, git, html, css, MySQL, HTML, CSS, git, AJAX, bootstrap,  jQuery, JavaScript, Designing, Demo, laradevs bd.">
    <meta name="twitter:image" content="https://www.laradevsbd.com/upload/laradevsbd.png">
    <link rel="canonical" href="https://www.laradevsbd.com">
    <meta property="og:description" content="laradevsbd website focuses on all web language and framework tutorial PHP, Laravel, Codeigniter, Nodejs, API, MySQL, AJAX, jQuery, JavaScript, Demo">
    <meta property="og:title" content="Laradevs bd - Tutorial It Language Site | See Demo Example">
    <meta property="og:url" content="https://www.laradevsbd.com">
    <meta property="og:image:url" content="https://www.laradevsbd.com/upload/laradevsbd.png">

    <meta content="https://www.facebook.com/rezban.khan" property="article:publisher">
    <meta content="https://www.facebook.com/rezban.khan" property="article:author">
    <meta content="Nur Karim" name="author">
    <meta name="twitter:title" content="Laradevs bd - Tutorial It Language Site | See Demo Example">
    <meta name="twitter:site" content="https://www.laradevsbd.com">
    <meta name="twitter:description" content="laradevsbd website focuses on all web language and framework tutorial PHP, Laravel, Codeigniter, Nodejs, API, MySQL, AJAX, jQuery, JavaScript, Demo">
@endsection
@section('content')
<!-- News Info List Area End Here -->
<!-- News Slider Area Start Here -->
<section class="bg-accent section-space-less2">
    <div class="container">
        <div class="row tab-space1">
            <div class="col-lg-6 col-md-12">
                <div class="img-overlay-70 img-scale-animate mb-2">
                    <img data-original="{{ asset('public/img/news/news1.jpg') }}" alt="news" class="img-fluid width-100">
                    <div class="mask-content-lg">
                        <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>by</span>
                                    <a href="single-news-1.html">Mark Willy</a>
                                </li>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                            </ul>
                        </div>
                        <h1 class="title-medium-light">
                            <a href="single-news-1.html">If Obama Had Governed Like This in 2017 He'd Be the Transformational.</a>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row tab-space1">
                    <div class="col-12">
                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-sm">
                                <div class="topic-box-sm color-azure-radiance mb-10">Sports</div>
                                <h2 class="title-medium-light">
                                    <a href="single-news-2.html">Magnificent Image Of The New Hoover Dam Bridge Taking Shape</a>
                                </h2>
                            </div>
                            <img data-original="{{ asset('public/img/news/news2.jpg') }}" alt="news" class="img-fluid width-100">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-sm">
                                <div class="topic-box-sm color-apple mb-10">Fashion</div>
                                <h3 class="title-medium-light">
                                    <a href="single-news-3.html">Magnificent Image shaper dam bridge taking </a>
                                </h3>
                            </div>
                            <img data-original="{{ asset('public/img/news/news3.jpg') }}" alt="news" class="img-fluid width-100">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-sm">
                                <div class="topic-box-sm color-razzmatazz mb-10">Music</div>
                                <h3 class="title-medium-light">
                                    <a href="single-news-1.html">The New hoover dam bridge Magnificen Imag.</a>
                                </h3>
                            </div>
                            <img data-original="{{ asset('public/img/news/news4.jpg') }}" alt="news" class="img-fluid width-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Slider Area End Here -->
<!-- Top Story Area Start Here -->
<section class="bg-body section-space-default">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="mb-20-r ne-isotope">
                    <div class="topic-border color-cinnabar mb-30">
                        <div class="topic-box-lg color-cinnabar">Top Stories</div>
                        <div class="isotope-classes-tab isotop-btn">
                            <a href="#" data-filter=".politics" class="current">Politics</a>
                            <a href="#" data-filter=".fashion">Fashion</a>
                            <a href="#" data-filter=".travel">Travel</a>
                            <a href="#" data-filter=".gadget">Gadget</a>
                        </div>
                        <div class="more-info-link">
                            <a href="post-style-1.html">More
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="featuredContainer">
                        <div class="row politics">
                            <div class="col-md-6 col-sm-12">
                                <div class="img-overlay-70 img-scale-animate mb-30">
                                    <a href="single-news-1.html">
                                        <img data-original="{{ asset('public/img/news/news5.jpg') }}" alt="news" class="img-fluid width-100">
                                    </a>
                                    <div class="mask-content-lg">
                                        <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        <div class="post-date-light">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Adams</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>March 22, 2017</li>
                                            </ul>
                                        </div>
                                        <h2 class="title-medium-light size-lg">
                                            <a href="single-news-1.html">Government launches are inquiry into tainted ...</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img data-original="{{ asset('public/img/news/news6.jpg') }}" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>February 10, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-2.html">
                                        <img data-original="{{ asset('public/img/news/news7.jpg') }}" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>January 10, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-3.html">UAE athlete dies after inden London training ground.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-3.html">
                                        <img data-original="{{ asset('public/img/news/news8.jpg') }}" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>December 15, 2016</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-1.html">Blog post look better they are with a featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img data-original="{{ asset('public/img/news/news9.jpg') }}" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>November 23, 2016</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a featured.</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row fashion">
                            <div class="col-md-6 col-sm-12">
                                <div class="img-overlay-70 img-scale-animate mb-30">
                                    <a href="single-news-1.html">
                                        <img data-original="{{ asset('public/img/news/news46.jpg') }}" alt="news" class="img-fluid width-100">
                                    </a>
                                    <div class="mask-content-lg">
                                        <div class="topic-box-sm color-azure-radiance mb-20">Fashion</div>
                                        <div class="post-date-light">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Adams</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>March 22, 2017</li>
                                            </ul>
                                        </div>
                                        <h2 class="title-medium-light size-lg">
                                            <a href="single-news-1.html">Government launches are inquiry into tainted ...</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news6.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>February 10, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-2.html">
                                        <img src="img/news/news7.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>January 10, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-3.html">UAE athlete dies after inden London training ground.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-3.html">
                                        <img src="img/news/news8.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>December 15, 2016</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-1.html">Blog post look better they are with a featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news9.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>November 23, 2016</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a featured.</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row travel">
                            <div class="col-md-6 col-sm-12">
                                <div class="img-overlay-70 img-scale-animate mb-30">
                                    <a href="single-news-1.html">
                                        <img src="img/news/news48.jpg" alt="news" class="img-fluid width-100">
                                    </a>
                                    <div class="mask-content-lg">
                                        <div class="topic-box-sm color-web-orange mb-20">Gadget</div>
                                        <div class="post-date-light">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Adams</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>March 22, 2017</li>
                                            </ul>
                                        </div>
                                        <h2 class="title-medium-light size-lg">
                                            <a href="single-news-1.html">Government launches are inquiry into tainted ...</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news6.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>February 10, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-2.html">
                                        <img src="img/news/news7.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>January 10, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-3.html">UAE athlete dies after inden London training ground.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-3.html">
                                        <img src="img/news/news8.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>December 15, 2016</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-1.html">Blog post look better they are with a featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news9.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>November 23, 2016</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a featured.</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gadget">
                            <div class="col-md-6 col-sm-12">
                                <div class="img-overlay-70 img-scale-animate mb-30">
                                    <a href="single-news-1.html">
                                        <img src="img/news/news49.jpg" alt="news" class="img-fluid width-100">
                                    </a>
                                    <div class="mask-content-lg">
                                        <div class="topic-box-sm color-web-orange mb-20">Gadget</div>
                                        <div class="post-date-light">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Adams</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>March 22, 2017</li>
                                            </ul>
                                        </div>
                                        <h2 class="title-medium-light size-lg">
                                            <a href="single-news-1.html">Government launches are inquiry into tainted ...</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news6.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>February 10, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-2.html">
                                        <img src="img/news/news7.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>January 10, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-3.html">UAE athlete dies after inden London training ground.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-3.html">
                                        <img src="img/news/news8.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>December 15, 2016</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-1.html">Blog post look better they are with a featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news9.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>November 23, 2016</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a featured.</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tab-space1 mb-25">
                    <div class="col-12">
                        <div class="topic-border color-apple mb-30 width-100">
                            <div class="topic-box-lg color-apple">Life Style</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-xs">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-light">
                                    <a href="single-news-3.html">Rosie Huntington Whitel Habits Career Art </a>
                                </h3>
                            </div>
                            <img src="img/news/news10.jpg" alt="news" class="img-fluid width-100">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-xs">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-light">
                                    <a href="single-news-3.html">Smart packs parking beeps sensor </a>
                                </h3>
                            </div>
                            <img src="img/news/news11.jpg" alt="news" class="img-fluid width-100">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-xs">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-light">
                                    <a href="single-news-3.html">Budget issues force the our to be cancelled </a>
                                </h3>
                            </div>
                            <img src="img/news/news12.jpg" alt="news" class="img-fluid width-100">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-xs">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-light">
                                    <a href="single-news-3.html">Here What’s in Battlefield $80 Deluxe Edition </a>
                                </h3>
                            </div>
                            <img src="img/news/news13.jpg" alt="news" class="img-fluid width-100">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-xs">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-light">
                                    <a href="single-news-3.html">Rosie Huntington Whitel Habits Career Art </a>
                                </h3>
                            </div>
                            <img src="img/news/news14.jpg" alt="news" class="img-fluid width-100">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-xs">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-light">
                                    <a href="single-news-3.html">Rosie Huntington Whitel Habits Career Art </a>
                                </h3>
                            </div>
                            <img src="img/news/news15.jpg" alt="news" class="img-fluid width-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-30">
                        <div class="topic-box-lg color-cod-gray">Stay Connected</div>
                    </div>
                    <ul class="stay-connected overflow-hidden">
                        <li class="facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <div class="connection-quantity">50.2 k</div>
                            <p>Fans</p>
                        </li>
                        <li class="twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <div class="connection-quantity">10.3 k</div>
                            <p>Followers</p>
                        </li>
                        <li class="linkedin">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                            <div class="connection-quantity">25.4 k</div>
                            <p>Fans</p>
                        </li>
                        <li class="rss">
                            <i class="fa fa-rss" aria-hidden="true"></i>
                            <div class="connection-quantity">20.8 k</div>
                            <p>Subscriber</p>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-box">
                    <div class="ne-banner-layout1 text-center">
                        <a href="#">
                            <img src="img/banner/banner3.jpg" alt="ad" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="sidebar-box">
                    <div class="topic-border color-scampi mb-5">
                        <div class="topic-box-lg color-scampi">Recent News</div>
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
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="mt-25">
                                <a href="single-news-2.html" class="img-opacity-hover">
                                    <img src="img/news/news43.jpg" alt="ad" class="img-fluid mb-10 width-100">
                                </a>
                                <h3 class="title-medium-dark size-md mb-none">
                                    <a href="single-news-2.html">Brings air of distinction to Delafield tist.</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="mt-25">
                                <a href="single-news-3.html" class="img-opacity-hover">
                                    <img src="img/news/news44.jpg" alt="ad" class="img-fluid mb-10 width-100">
                                </a>
                                <h3 class="title-medium-dark size-md mb-none">
                                    <a href="single-news-3.html">Haunts of the Hea Lans capes of Lynn Zirman Career.</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="mt-25">
                                <a href="single-news-1.html" class="img-opacity-hover">
                                    <img src="img/news/news45.jpg" alt="ad" class="img-fluid mb-10 width-100">
                                </a>
                                <h3 class="title-medium-dark size-md mb-none">
                                    <a href="single-news-1.html">Rosie Huntington Whitl Habits Career Art.Rosie Habits.</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="ne-banner-layout1 mt-20-r text-center">
                    <a href="#">
                        <img src="img/banner/banner2.jpg" alt="ad" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Top Story Area End Here -->
<!-- Video Area Start Here -->
<section class="bg-accent section-space-less4">
    <div class="container">
        <div class="row tab-space2">
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="img-overlay-70">
                    <div class="mask-content-sm">
                        <div class="topic-box-sm color-pomegranate mb-20">Fitness</div>
                        <h3 class="title-medium-light">
                            <a href="single-news-3.html">Gym Fitness area coverded they Governed this in 2017</a>
                        </h3>
                    </div>
                    <div class="text-center">
                        <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                            <img src="img/banner/play.png" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <img src="img/news/news16.jpg" alt="news" class="img-fluid width-100">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="img-overlay-70">
                    <div class="mask-content-sm">
                        <div class="topic-box-sm color-persian-green mb-20">Business</div>
                        <h3 class="title-medium-light">
                            <a href="single-news-3.html">Patricia Urquiola transparent furney Italia with iridescent</a>
                        </h3>
                    </div>
                    <div class="text-center">
                        <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                            <img src="img/banner/play.png" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <img src="img/news/news17.jpg" alt="news" class="img-fluid width-100">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="img-overlay-70">
                    <div class="mask-content-sm">
                        <div class="topic-box-sm color-web-orange mb-20">Food</div>
                        <h3 class="title-medium-light">
                            <a href="single-news-3.html">Denton Corker Marshall the myste biennale pavilion</a>
                        </h3>
                    </div>
                    <div class="text-center">
                        <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                            <img src="img/banner/play.png" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <img src="img/news/news18.jpg" alt="news" class="img-fluid width-100">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Area End Here -->
<!-- Latest News Area Start Here -->
<section class="bg-body section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="topic-border color-cutty-sark mb-30 width-100">
                    <div class="topic-box-lg color-cutty-sark">Tech World</div>
                </div>
                <div class="img-overlay-70 img-scale-animate mb-30">
                    <div class="mask-content-sm">
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>by</span>
                                    <a href="single-news-1.html">Adams</a>
                                </li>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>May 30, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-light">
                            <a href="single-news-3.html">Oppo Find 7 is the world need first phone that can take</a>
                        </h3>
                    </div>
                    <img src="img/news/news19.jpg" alt="news" class="img-fluid width-100">
                </div>
                <div class="media mb-30">
                    <a class="img-opacity-hover" href="single-news-3.html">
                        <img src="img/news/news20.jpg" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body">
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-md mb-none">
                            <a href="single-news-3.html">Dogs Can Be Monito road with Hi Tech Program</a>
                        </h3>
                    </div>
                </div>
                <div class="media mb-30">
                    <a class="img-opacity-hover" href="single-news-2.html">
                        <img src="img/news/news21.jpg" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body">
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-md mb-none">
                            <a href="single-news-2.html">Microsoft Subsumes Open nside Mothership</a>
                        </h3>
                    </div>
                </div>
                <div class="media mb-30">
                    <a class="img-opacity-hover" href="single-news-1.html">
                        <img src="img/news/news22.jpg" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body">
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-md mb-none">
                            <a href="single-news-1.html">Dogs Can Be Monito road with Hi Tech Program.</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="topic-border color-pomegranate mb-30 width-100">
                    <div class="topic-box-lg color-pomegranate">Health &amp; Fitness</div>
                </div>
                <div class="img-overlay-70 img-scale-animate mb-30">
                    <div class="mask-content-sm">
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>by</span>
                                    <a href="single-news-1.html">Adams</a>
                                </li>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>March 22, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-light">
                            <a href="single-news-3.html">Oppo Find 7 is the world need first phone that can take</a>
                        </h3>
                    </div>
                    <img src="img/news/news23.jpg" alt="news" class="img-fluid width-100">
                </div>
                <div class="media mb-30">
                    <a class="img-opacity-hover" href="single-news-1.html">
                        <img src="img/news/news24.jpg" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body">
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-md mb-none">
                            <a href="single-news-1.html">Dogs Can Be Monito road with Hi Tech Program</a>
                        </h3>
                    </div>
                </div>
                <div class="media mb-30">
                    <a class="img-opacity-hover" href="single-news-2.html">
                        <img src="img/news/news25.jpg" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body">
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-md mb-none">
                            <a href="single-news-2.html">Microsoft Subsumes Open nside Mothership</a>
                        </h3>
                    </div>
                </div>
                <div class="media mb-30">
                    <a class="img-opacity-hover" href="single-news-3.html">
                        <img src="img/news/news26.jpg" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body">
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-md mb-none">
                            <a href="single-news-3.html">Dogs Can Be Monito road with Hi Tech Program.</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="topic-border color-web-orange mb-30 width-100">
                    <div class="topic-box-lg color-web-orange">Tech World</div>
                </div>
                <div class="img-overlay-70 img-scale-animate mb-30">
                    <div class="mask-content-sm">
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>by</span>
                                    <a href="single-news-1.html">Adams</a>
                                </li>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>April 16, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-light">
                            <a href="single-news-3.html">SpringFest One Fashion Show at the University of Michigan</a>
                        </h3>
                    </div>
                    <img src="img/news/news27.jpg" alt="news" class="img-fluid width-100">
                </div>
                <div class="media mb-30">
                    <a class="img-opacity-hover" href="single-news-1.html">
                        <img src="img/news/news28.jpg" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body">
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-md mb-none">
                            <a href="single-news-1.html">Dogs Can Be Monito road with Hi Tech Program</a>
                        </h3>
                    </div>
                </div>
                <div class="media mb-30">
                    <a class="img-opacity-hover" href="single-news-2.html">
                        <img src="img/news/news29.jpg" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body">
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-md mb-none">
                            <a href="single-news-2.html">Microsoft Subsumes Open nside Mothership</a>
                        </h3>
                    </div>
                </div>
                <div class="media mb-30">
                    <a class="img-opacity-hover" href="single-news-3.html">
                        <img src="img/news/news30.jpg" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body">
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-md mb-none">
                            <a href="single-news-3.html">Dogs Can Be Monito road with Hi Tech Program.</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="ne-banner-layout1 mb-50 mt-20-r text-center">
                    <a href="#">
                        <img src="img/banner/banner2.jpg" alt="ad" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
        <div class="ne-isotope">
            <div class="row">
                <div class="col-12">
                    <div class="topic-border color-azure-radiance mb-30">
                        <div class="topic-box-lg color-azure-radiance">Sports</div>
                        <div class="isotope-classes-tab isotop-btn">
                            <a href="#" data-filter=".tenies" class="current">Tenies</a>
                            <a href="#" data-filter=".cricket">Cricket</a>
                            <a href="#" data-filter=".football">Football</a>
                            <a href="#" data-filter=".cycling">Cycling</a>
                        </div>
                        <div class="more-info-link">
                            <a href="post-style-1.html">More
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featuredContainer">
                <div class="row tenies">
                    <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12">
                        <div class="img-overlay-70 img-scale-animate mb-30">
                            <img src="img/news/news31.jpg" alt="news" class="img-fluid width-100">
                            <div class="topic-box-top-lg">
                                <div class="topic-box-sm color-cod-gray mb-20">Tenis</div>
                            </div>
                            <div class="mask-content-lg">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                            <span>by</span>
                                            <a href="single-news-1.html">Adams</a>
                                        </li>
                                        <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>May 30, 2017</li>
                                    </ul>
                                </div>
                                <h2 class="title-medium-light size-lg">
                                    <a href="single-news-1.html">10 Best Water Parks In Theya World you Have to...</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-5 col-md-6 col-sm-12">
                        <div class="row keep-items-4-md">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news32.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Ragbe</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>January 17, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-2.html">Brooke Shields Casts a New Dress Model</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news33.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Boxing</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-2.html">Brooke Shields Casts a New Dress Model</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-3.html">
                                        <img src="img/news/news34.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Diving</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>March 06, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-3.html">Music Evolution, the Most Advanced Audio Mixer</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news35.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Cycling</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>May 17, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-1.html">Hexagon is the new circle but we need to know in 2017</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-2.html">
                                        <img src="img/news/news36.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Riding</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>August 22, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-2.html">Keep a long-haul flight from ruining mood health...</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-3.html">
                                        <img src="img/news/news37.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Cycling</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>December 30, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-3.html">Keep a long-haul flight from ruining mood health...</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cricket">
                    <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12">
                        <div class="img-overlay-70 img-scale-animate mb-30">
                            <img src="img/news/news51.jpg" alt="news" class="img-fluid width-100">
                            <div class="topic-box-top-lg">
                                <div class="topic-box-sm color-cod-gray mb-20">Cricket</div>
                            </div>
                            <div class="mask-content-lg">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                            <span>by</span>
                                            <a href="single-news-1.html">Adams</a>
                                        </li>
                                        <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>May 30, 2017</li>
                                    </ul>
                                </div>
                                <h2 class="title-medium-light size-lg">
                                    <a href="single-news-1.html">10 Best Water Parks In Theya World you Have to...</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-5 col-md-6 col-sm-12">
                        <div class="row keep-items-4-md">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news32.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Ragbe</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>January 17, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-2.html">Brooke Shields Casts a New Dress Model</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news33.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Boxing</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-2.html">Brooke Shields Casts a New Dress Model</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-3.html">
                                        <img src="img/news/news34.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Diving</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>March 06, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-3.html">Music Evolution, the Most Advanced Audio Mixer</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news35.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Cycling</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>May 17, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-1.html">Hexagon is the new circle but we need to know in 2017</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-2.html">
                                        <img src="img/news/news36.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Riding</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>August 22, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-2.html">Keep a long-haul flight from ruining mood health...</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-3.html">
                                        <img src="img/news/news37.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Cycling</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>December 30, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-3.html">Keep a long-haul flight from ruining mood health...</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row football">
                    <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12">
                        <div class="img-overlay-70 img-scale-animate mb-30">
                            <img src="img/news/news50.jpg" alt="news" class="img-fluid width-100">
                            <div class="topic-box-top-lg">
                                <div class="topic-box-sm color-cod-gray mb-20">Football</div>
                            </div>
                            <div class="mask-content-lg">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                            <span>by</span>
                                            <a href="single-news-1.html">Adams</a>
                                        </li>
                                        <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>May 30, 2017</li>
                                    </ul>
                                </div>
                                <h2 class="title-medium-light size-lg">
                                    <a href="single-news-1.html">10 Best Water Parks In Theya World you Have to...</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-5 col-md-6 col-sm-12">
                        <div class="row keep-items-4-md">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news32.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Ragbe</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>January 17, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-2.html">Brooke Shields Casts a New Dress Model</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news33.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Boxing</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-2.html">Brooke Shields Casts a New Dress Model</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-3.html">
                                        <img src="img/news/news34.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Diving</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>March 06, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-3.html">Music Evolution, the Most Advanced Audio Mixer</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news35.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Cycling</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>May 17, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-1.html">Hexagon is the new circle but we need to know in 2017</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-2.html">
                                        <img src="img/news/news36.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Riding</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>August 22, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-2.html">Keep a long-haul flight from ruining mood health...</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-3.html">
                                        <img src="img/news/news37.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Cycling</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>December 30, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-3.html">Keep a long-haul flight from ruining mood health...</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cycling">
                    <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12">
                        <div class="img-overlay-70 img-scale-animate mb-30">
                            <img src="img/news/news52.jpg" alt="news" class="img-fluid width-100">
                            <div class="topic-box-top-lg">
                                <div class="topic-box-sm color-cod-gray mb-20">Cycling</div>
                            </div>
                            <div class="mask-content-lg">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                            <span>by</span>
                                            <a href="single-news-1.html">Adams</a>
                                        </li>
                                        <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>May 30, 2017</li>
                                    </ul>
                                </div>
                                <h2 class="title-medium-light size-lg">
                                    <a href="single-news-1.html">10 Best Water Parks In Theya World you Have to...</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-5 col-md-6 col-sm-12">
                        <div class="row keep-items-4-md">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news32.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Ragbe</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>January 17, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-2.html">Brooke Shields Casts a New Dress Model</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news33.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Boxing</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-2.html">Brooke Shields Casts a New Dress Model</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-3.html">
                                        <img src="img/news/news34.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Diving</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>March 06, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-3.html">Music Evolution, the Most Advanced Audio Mixer</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-1.html">
                                        <img src="img/news/news35.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Cycling</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>May 17, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-1.html">Hexagon is the new circle but we need to know in 2017</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-2.html">
                                        <img src="img/news/news36.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Riding</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>August 22, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-2.html">Keep a long-haul flight from ruining mood health...</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="mb-25 position-relative">
                                    <a class="img-opacity-hover" href="single-news-3.html">
                                        <img src="img/news/news37.jpg" alt="news" class="img-fluid width-100 mb-15">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Cycling</div>
                                    </div>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>December 30, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark size-md">
                                        <a href="single-news-3.html">Keep a long-haul flight from ruining mood health...</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest News Area End Here -->
<!-- More News Area Start Here -->
<section class="bg-accent section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="ne-isotope">
                    <div class="topic-border color-scampi mb-30">
                        <div class="topic-box-lg color-scampi">More News</div>
                        <div class="isotope-classes-tab isotop-btn">
                            <a href="#" data-filter=".politics" class="current">Politics</a>
                            <a href="#" data-filter=".fashion">Fashion</a>
                            <a href="#" data-filter=".health">Health &amp; Fitness</a>
                            <a href="#" data-filter=".travel">Travel</a>
                            <a href="#" data-filter=".gadget">Gadget</a>
                        </div>
                        <div class="more-info-link">
                            <a href="post-style-1.html">More
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="featuredContainer">
                        <div class="row politics">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-2.html" class="img-opacity-hover">
                                            <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-web-orange mb-20">Food</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-2.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-3.html" class="img-opacity-hover">
                                            <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-azure-radiance mb-20">Sports</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-3.html">A taste of what we like this week at CookA like this current week</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-apple mb-20">Life Style</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row fashion">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-2.html" class="img-opacity-hover">
                                            <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-web-orange mb-20">Food</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-2.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-3.html" class="img-opacity-hover">
                                            <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-azure-radiance mb-20">Sports</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-3.html">A taste of what we like this week at CookA like this current week</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-apple mb-20">Life Style</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row health">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-3.html" class="img-opacity-hover">
                                            <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-azure-radiance mb-20">Sports</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-3.html">A taste of what we like this week at CookA like this current week</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-apple mb-20">Life Style</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-2.html" class="img-opacity-hover">
                                            <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-web-orange mb-20">Food</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-2.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row travel">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-3.html" class="img-opacity-hover">
                                            <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-azure-radiance mb-20">Sports</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-3.html">A taste of what we like this week at CookA like this current week</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-2.html" class="img-opacity-hover">
                                            <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-web-orange mb-20">Food</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-2.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-apple mb-20">Life Style</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gadget">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-apple mb-20">Life Style</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-2.html" class="img-opacity-hover">
                                            <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-web-orange mb-20">Food</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-2.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-3.html" class="img-opacity-hover">
                                            <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-azure-radiance mb-20">Sports</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-3.html">A taste of what we like this week at CookA like this current week</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                <div class="sidebar-box">
                    <div class="ne-banner-layout1 text-center">
                        <a href="#">
                            <img src="img/banner/banner6.jpg" alt="ad" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-30">
                        <div class="topic-box-lg color-cod-gray">Newsletter</div>
                    </div>
                    <div class="newsletter-area bg-primary">
                        <h2 class="title-medium-light size-xl">Subscribe to our mailing list to get the new updates!</h2>
                        <img src="img/banner/newsletter.png" alt="newsletter" class="img-fluid mb-40">
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
<!-- More News Area End Here -->
<!-- Category Area Start Here -->
<section class="bg-body section-space-less2">
    <div class="container">
        <div class="row tab-space1">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="img/category/ctg1.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs">Music</div>
                        <h3 class="title-regular-light size-lg">
                            <a href="post-style-1.html">Microsoft and Autodesk help industrial designers…</a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>March 22, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="img/category/ctg2.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs">Education</div>
                        <h3 class="title-regular-light size-lg">
                            <a href="post-style-2.html">Apple’s new AirPods are feature rich but fugly</a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>April 20, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="img/category/ctg3.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs">Travel</div>
                        <h3 class="title-regular-light size-lg">
                            <a href="post-style-3.html">All People Gather Strategic Supplies of Vegetables</a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>May 03, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="img/category/ctg4.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs">Sprts</div>
                        <h3 class="title-regular-light size-lg">
                            <a href="post-style-4.html">The Whole World is Expecting the Best iPhone Ever Created</a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>July 09, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="img/category/ctg5.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs">Food</div>
                        <h3 class="title-regular-light size-lg">
                            <a href="post-style-1.html">Gym Fitness area coverded Governed this in 2017</a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>October 28, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="img/category/ctg6.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs">Education</div>
                        <h3 class="title-regular-light size-lg">
                            <a href="post-style-2.html">What To Avoid When Planning Your Honeymoon</a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>December 19, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category Area End Here -->
@endsection
