@extends('index')
@section('content')
    <section class="breadcrumbs-area">
        <div class="container">
            <div class="breadcrumbs-content">
                <h1>{{ $category->name }}</h1>
            </div>
        </div>
    </section>

    <section class="bg-body-section section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        @foreach($data as $post)
                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                            <div class="media media-none--lg mb-30 bg-white">
                                <div class="position-relative width-40">
                                    <a href="{{ url('story',$post->slug) }}" class="img-opacity-hover img-overlay-70">
                                        <img src="@if(isset($post->imageGallery)) {{ url('public') }}/{{$post->imageGallery->medium_image_three}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" alt="{{ $post->title }}" class="img-fluid">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">{{ @$post->category->name }}</div>
                                    </div>
                                </div>

                                <div class="media-body p-mb-none-child media-margin30">
                                    <h3 class="title-semibold-dark size-lg mb-15 mt-2">
                                        <a href="{{ url('story',$post->slug) }}">{{ $post->title }}</a> </h3>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <a href="/">Post By {{ $post->user->name }}</a>
                                            </li>
                                            <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>{{ date('M d, Y',strtotime($post->updated_at)) }}</li>
                                        </ul>
                                    </div>

                                    <p>
                                        <?php
                                        $stringem=$post->sub_content;
                                        $a=array("\r\n", "\n", "\r");
                                        $replace='';
                                        $abouten=str_replace($a, $replace, $stringem);
                                        if (strlen($abouten) > 100){
                                            $str = substr($abouten, 0, 200) . '...';
                                        }else{
                                            $str = substr($abouten, 0, 100) . '...';
                                        }

                                        print  '<span style="">'.$str.'</span>';
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="row mt-20-r mb-30">
                        <div class="col-sm-12 col-12">
                            {{ $data->links() }}
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
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>

                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>

                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>

                                </a>
                            </li>
                            <li class="rss">
                                <a href="#">
                                    <i class="fa fa-rss" aria-hidden="true"></i>

                                </a>
                            </li>
                        </ul>
                    </div>
{{--                    <div class="sidebar-box">--}}
{{--                        <div class="ne-banner-layout1 text-center">--}}
{{--                            <a href="#">--}}
{{--                                <img src="img/banner/banner3.jpg" alt="ad" class="img-fluid">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">Newsletter</div>
                        </div>
                        <div class="newsletter-area bg-white widget-newsletter">
                            <h2 class="title-medium-light size-xl pl-30 pr-30 text-dark">Subscribe to our mailing list
                                to get the new updates!</h2>
                            <i class="fa fa-envelope-o  icon"></i>
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
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-25">
                            <div class="topic-box-lg color-cod-gray">Tags</div>
                        </div>
                        <ul class="sidebar-tags">
                            <li>
                                <a href="#">Laravel</a>
                            </li>
                            <li>
                                <a href="#">PHP</a>
                            </li>
                            <li>
                                <a href="#">Laravel 8</a>
                            </li>
                            <li>
                                <a href="#">Laravel 7</a>
                            </li>
                            <li><a href="#">MySql</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
