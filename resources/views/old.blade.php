<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<head>
@yield('meta')
@include('_partials.header')

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FWNB5ZSHQ7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-FWNB5ZSHQ7');
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

<div id="wrapper" class="wrapper">
    <!-- Header Area Start Here -->
@include('_partials.nav')
<!-- Header Area End Here -->
    <!-- News Feed Area Start Here -->
@include('_partials.headline')
<!-- News Feed Area End Here -->
    <!-- News Info List Area Start Here -->
@include('_partials.timezone')

@yield('content')
<!-- Footer Area Start Here -->
    <footer>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="index.html" class="footer-logo img-fluid">
                            <img src="img/logo.png" alt="logo" class="img-fluid">
                        </a>
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
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="linkedin">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="pinterest">
                                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="rss">
                                    <i class="fa fa-rss" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="vimeo">
                                    <i class="fa fa-vimeo" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <p>© 2017 newsedge Designed by RadiusTheme. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End Here -->
    <!-- Modal Start-->
@include('_partials.modal')
<!-- Modal End-->
    <!-- Offcanvas Menu Start -->
@include('_partials.side_bar')
<!-- Offcanvas Menu End -->
</div>

@include('_partials.footer')
</body>


</html>
