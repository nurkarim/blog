<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="p:domain_verify" content="f9af85b662cce44b54e98146f7d73d11">
    <meta name="google-site-verification" content="sx_2q7hM5RYz2ENt7N7R7G_8bRblRvHxA7nENHaId9o"/>
    <meta name="yandex-verification" content="1abb94c99b444464"/>
    <link rel="shortcut icon" type="image/png" href="{{ url('public/img/favicon.png') }}">
    {!! SEO::generate() !!}
    <meta content="https://github.com/nurkarim" property="article:publisher">
    <meta content="https://github.com/nurkarim" property="article:author">
    <meta content="Nur Karim" name="author">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
@include('_partials.header')
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WW5LSWZDX1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-WW5LSWZDX1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PDDHLCP');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDDHLCP"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="wrapper">
    <!-- Header Area Start Here -->
    <header>
        <div id="header-layout2" class="header-style7">
            @include('_partials.timezone')
            <div class="main-menu-area bg-body border-bottom box-shadow" id="sticker">
                <div class="container">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-lg-2 col-md-2 d-none d-lg-block">
                            <div class="logo-area">
                                <a href="/" class="img-fluid">
                                    <img src="{{ asset('public/img/logo.png') }}" alt="laradevsbd.com" class="img-fluid">
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
                                            <input type="text" class="search-input" placeholder="Search...." required="" style="display: none;">
                                            <button class="search-button">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </li>
                                    <li class="d-none d-sm-block d-md-block d-lg-none">
                                        <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
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

    <footer>

        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <ul class="footer-social">
                            <li>
                                <a href="#" title="facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="google-plus">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="linkedin">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>



                        </ul>

                    </div>
                </div>
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
                            <input type="text" placeholder="Name or E-mail" />
                            <label>Password *</label>
                            <input type="password" placeholder="Password" />
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
                        <i class="fa fa-circle-o" aria-hidden="true"></i>{{ $category->name }} ({{ $category->categorypost_count }})</a>
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
