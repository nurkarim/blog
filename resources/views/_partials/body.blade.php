@extends('index')
@section('content')
{{--    @include('_partials.headline')--}}
    <section class="section-space-bottom bg-white">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-8 col-lg-12">
                    <div class="special-heading" style="padding-top: 20px"><h2><span>Why</span> Laradevsbd</h2></div>
                    <h4 class="site-description">Laradevsbd provide a collection of tutorials about PHP, Laravel Framework, Codeigniter Framework, Mysql Database, Bootstrap Front-end Framework, Jquery, Node JS, Ajax Example, APIs, CURL Example, Composer Packages Example, AngularJS etc. You will find the best example an article about PHP Language.</h4>

                </div>
                <div class="col-xl-4 col-lg-12 text-center" style="padding-top: 20px">
                            @foreach($latestPostTopRight as $post)

                                    <a class="" href="{{ url('story',$post->slug) }}">
                                        <img  src="@if(isset($post->imageGallery)) {{ url('public') }}/{{$post->imageGallery->big_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" alt="{{ $post->slug }}" class="img-fluid left_right_section_img1">
                                    </a>
                        <h1 class="entry-title">
                            <a title="{{ $post->title }}" href="{{ url('story',$post->slug) }}">{{ \Illuminate\Support\Str::limit($post->title,43) }}</a>
                        </h1>
                        <small class="td-module-date">{{ date('M d, Y',strtotime($post->created_at)) }}</small>
                            @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-accent section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 mb-30">
                    <div class="ie-full-width ie-full-custom">
                        <div class="topic-border color-cinnabar mb-30">
                            <div class="topic-box-lg color-cinnabar">Latest POST</div>
                        </div>
                        <div class="row">
                            @foreach($latestPost as $post)
                                <div class="col-lg-12 col-md-6 col-sm-12 ">
                                    <div class="media media-none--md mb-30  bg-white">
                                        <div class="position-relative width-40">
                                            <a href="{{ url('story',$post->slug) }}" class="img-opacity-hover">
                                                <img src="@if(isset($post->imageGallery)) {{ url('public') }}/{{$post->imageGallery->big_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" alt="{{ $post->slug }}" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cod-gray mb-20">{{ @$post->category->name }}</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <h3 class="title-semibold-dark size-lg mb-5" style="margin-top: 10px">
                                                <a href="{{ url('story',$post->slug) }}">{{ $post->title }}</a>
                                            </h3>
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <a href="/">Post By {{ $post->user->name }}</a>
                                                    </li>
                                                    <li><span><i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>{{ date('M d, Y',strtotime($post->created_at)) }}</li>
                                                </ul>
                                            </div>

                                            <p class="dsc">
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
                        {{ $latestPost->links() }}
                    </div>
                </div>
                <div class="ne-sidebar sidebar-break-lg col-xl-4 col-lg-12">

                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">Recommended Post</div>
                        </div>
                        <div class="d-inline-block">
                            @foreach($latestPost->where('recommended',1) as $featured)
                                <div class="media mb30-list bg-body ">
                                    <a class="img-opacity-hover" href="{{ url('story',$featured->slug) }}">
                                        <img src="@if(isset($featured->imageGallery)) {{ url('public') }}/{{$featured->imageGallery->thumbnail}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" alt="{{ $featured->slug }}" class="img-fluid">
                                    </a>
                                    <div class="media-body media-padding15">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>{{ date('M d, Y',strtotime($featured->updated_at)) }}</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark mb-none">
                                            <a href="{{ url('story',$featured->slug) }}">{{ $featured->title }}</a>
                                        </h3>
                                    </div>
                                </div>
                            @endforeach

                            <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=nurkarim7720f-20&marketplace=amazon&amp;region=US&placement=B07BDHJJTH&asins=B07BDHJJTH&linkId=bec305d7bce434eca2ac973bb3996756&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                            </iframe>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
