<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="p:domain_verify" content="f9af85b662cce44b54e98146f7d73d11">
    <meta name="google-site-verification" content="sx_2q7hM5RYz2ENt7N7R7G_8bRblRvHxA7nENHaId9o"/>
    <meta name="yandex-verification" content="1abb94c99b444464"/>
    <link href="https://www.laradevsbd.com" rel="canonical"/>
    {!! SEO::generate() !!}
    <meta content="https://github.com/nurkarim" property="article:publisher">
    <meta content="https://github.com/nurkarim" property="article:author">
    <meta content="Nur Karim" name="author">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ url('public/img/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@include('_partials.header')
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WW5LSWZDX1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-WW5LSWZDX1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PDDHLCP');</script>
    <!-- End Google Tag Manager -->
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5890317501545816"
            crossorigin="anonymous"></script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDDHLCP"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="wrapper">
    <!-- Header Area Start Here -->
    <header>
        <div id="header-layout2" class="header-style7">

{{--                        @include('_partials.timezone')--}}
            <div class="main-menu-area bg-body border-bottom box-shadow" id="sticker">
                <div class="container">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-lg-2 col-md-2 d-none d-lg-block">
                            <div class="logo-area">
                                <a href="/" class="img-fluid">
                                    <img src="{{ url('public/img/logo-new.png') }}" alt="laradevsbd.com" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 d-none d-lg-block position-static min-height-none">
                            <div class="ne-main-menu">
                                @include('_partials.nav')
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 text-right position-static">
                            <div class="header-action-item on-mobile-fixed">
                                <ul>
                                    <li>
                                        <form id="top-search-form" class="header-search-dark">
                                            <input type="text" class="search-input" placeholder="Search...." required=""
                                                   style="display: none;">
                                            <button class="search-button">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </li>
                                    <li class="d-none d-sm-block d-md-block d-lg-none">
                                        <button type="button" class="login-btn" data-toggle="modal"
                                                data-target="#myModal">
                                            <i class="fa fa-user" aria-hidden="true"></i>Sign in
                                        </button>
                                    </li>
                                    <li>
                                        <div id="side-menu-trigger" class="offcanvas-menu-btn offcanvas-btn-repoint">
                                            <a href="#" class="menu-bar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
                                            <a href="#" class="menu-times close">
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer id="footer">
        <div class="footer-top container-fluid">
            <div class="row mx-0">
                <div class="col-12 col-md-6 col-xl-4 col-sm-4"><h3>Subscribe to the Email Newsletter</h3>
                    <div id="mc_embed_signup" class="signup-mailchip">
                        <form
                            action=""
                            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                            class="validate" target="_blank" novalidate="">
                            <div id="mc_embed_signup_scroll" class="float-start">
                                <div class="input-group"><input class="form-control" type="email" name="EMAIL"
                                                                id="mce-EMAIL"
                                                                placeholder="Enter Your Email Address...." required="">
                                    <span class="input-group-btn"><button
                                            type="submit"  class="btn btn-success" name="subscribe"
                                            id="mc-embedded-subscribe"><i class="fa fa-paper-plane"></i></button></span></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 col-sm-4"><h3>Follow Laravel News on</h3>
                    <div class="social-buttons">
                        <a href="https://github.com/nurkarim" class="single-social-btn">
                            <i class="fa fa-github"></i> Github</a></div>
                </div>
                <div class="col-12 col-md-12 col-xl-4 col-sm-4">
                    <div class="footer-logo"><img src="{{ url('public/img/footer_logo.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom container-fluid">
            <div class="footer-menus">
                <ul>
                    <li><a href="/" class="menu-link">Home</a></li>
                    <li><a href="#" class="menu-link">List Of Categories</a>
                    </li>
                    <li><a href="{{ route('page','privacy-policy') }}" class="menu-link">Privacy & Policy</a></li>
                    <li><a href="#" class="menu-link">Disclaimer</a></li>
                    <li><a href="{{ route('page','terms-conditions') }}" class="menu-link">Terms & Condition</a></li>
                    <li><a href="#" class="menu-link">Contact US</a></li>
                    <li><a href="#" class="menu-link">About US</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Footer Area End Here -->
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="title-login-form">Login</div>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                        <form>
                            <label>Username or email address *</label>
                            <input type="text" placeholder="Name or E-mail"/>
                            <label>Password *</label>
                            <input type="password" placeholder="Password"/>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox" type="checkbox" checked>
                                <label for="checkbox">Remember Me</label>
                            </div>
                            <button type="submit" value="Login">Login</button>
                            <button class="form-cancel" type="submit" value="">Cancel</button>
                            <label class="lost-password">
                                <a href="#">Lost your password?</a>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->
    <!-- Offcanvas Menu Start -->
    <div id="offcanvas-body-wrapper" class="offcanvas-body-wrapper">
        <div id="offcanvas-nav-close" class="offcanvas-nav-close offcanvas-menu-btn">
            <a href="#" class="menu-times re-point">
                <span></span>
                <span></span>
            </a>
        </div>
        <div class="offcanvas-main-body">
            <ul id="accordion" class="offcanvas-nav panel-group">
                {{--                <li class="panel panel-default">--}}
                {{--                    <div class="panel-heading">--}}
                {{--                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">--}}
                {{--                            <i class="fa fa-file-text" aria-hidden="true"></i>Post Pages</a>--}}
                {{--                    </div>--}}
                {{--                    <div aria-expanded="false" id="collapseTwo" role="tabpanel" class="panel-collapse collapse">--}}
                {{--                        <div class="panel-body">--}}
                {{--                            <ul class="offcanvas-sub-nav">--}}
                {{--                                <li>--}}
                {{--                                    <a href="#">Post Style 1</a>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                @foreach(\App\Models\Category::query()->withCount('categorypost')->where('status',1)->get() as $category)
                    <li>
                        <a href="{{ url('category') }}/{{ $category->slug }}">
                            <i class="fa fa-circle-o" aria-hidden="true"></i>{{ $category->name }}
                            ({{ $category->categorypost_count }})</a>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->
</div>
@include('_partials.footer')

</body>

</html>
