@extends('index')
@section('content')
    <section class="breadcrumbs-area">
        <div class="container">
            <div class="breadcrumbs-content">
                <h1>{{ @$post->category->name }}</h1>
                <ul>
                    <li>
                        <a href="/">Home</a> -</li>
                    <li>{{ $post->title }}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-body section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mb-30">
                    <div class="news-details-layout1">
                        <div class="position-relative mb-30">
                            <img src="@if(isset($post->imageGallery)) {{ url('public') }}/{{$post->imageGallery->big_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" alt="news-details" class="img-fluid">
                            <div class="topic-box-top-sm">
                                <div class="topic-box-sm color-cinnabar mb-20">{{ @$post->category->name }}</div>
                            </div>
                        </div>
                        <h2 class="title-semibold-dark size-c30">{{ $post->title }}</h2>
                        <ul class="post-info-dark mb-30">
                            <li>
                                <a href="#">
                                    <span>Post By</span> {{ $post->user->name }}</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M d, Y',strtotime($post->updated_at)) }}</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-eye" aria-hidden="true"></i>{{ $post->total_view }}</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-comments" aria-hidden="true"></i>{{ $post->total_comment }}</a>
                            </li>
                        </ul>
                        <p>{!! $post->content !!}</p>
                        <ul class="blog-tags item-inline">
                            <li>Tags</li>
                            <li>
                                <a href="#">#Business</a>
                            </li>
                            <li>
                                <a href="#">#Magazine</a>
                            </li>
                            <li>
                                <a href="#">#Lifestyle</a>
                            </li>
                        </ul>
                        <div class="post-share-area mb-40 item-shadow-1">
                            <p>You can share this post!</p>
                            <ul class="social-default item-inline">
                                <li>
                                    <a href="#" class="facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="google">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="rss">
                                        <i class="fa fa-rss" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="row no-gutters divider blog-post-slider">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <a href="#" class="prev-article">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>Previous article</a>
                                <h3 class="title-medium-dark pr-50">Wonderful Outdoors Experience: Eagle Spotting in Alaska</h3>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                                <a href="#" class="next-article">Next article
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                                <h3 class="title-medium-dark pl-50">The only thing that overcomes hard luck is hard work</h3>
                            </div>
                        </div>
                        <div class="author-info p-35-r mb-50 border-all">
                            <div class="media media-none-xs">
                                <img src="img/author.jpg" alt="author" class="img-fluid rounded-circle">
                                <div class="media-body pt-10 media-margin30">
                                    <h3 class="size-lg mb-5">Mark Willy</h3>
                                    <div class="post-by mb-5">By Admin</div>
                                    <p class="mb-15">Dorem Ipsum is simply dummy text of the printing and typesetting industr been
                                        the industry's standard dummy text ever since.</p>
                                    <ul class="author-social-style2 item-inline">
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="comments-area">
                            <h2 class="title-semibold-dark size-xl border-bottom mb-40 pb-20">03 Comments</h2>
                            <ul>
                                <li>
                                    <div class="media media-none-xs">
                                        <img src="img/blog1.jpg" class="img-fluid rounded-circle" alt="comments">
                                        <div class="media-body comments-content media-margin30">
                                            <h3 class="title-semibold-dark">
                                                <a href="#">Nitiya ,
                                                    <span> August 29, 2017</span>
                                                </a>
                                            </h3>
                                            <p>Borem Ipsum is simply dummy text of the printing and typesetting industry
                                                Lorem Ipsum has been the industry's standard dummy text.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media media-none-xs">
                                        <img src="img/blog2.jpg" class="img-fluid rounded-circle" alt="comments">
                                        <div class="media-body comments-content media-margin30">
                                            <h3 class="title-semibold-dark">
                                                <a href="#">Fahim ,
                                                    <span> August 29, 2017</span>
                                                </a>
                                            </h3>
                                            <p>Borem Ipsum is simply dummy text of the printing and typesetting industry
                                                Lorem Ipsum has been the industry's standard dummy text.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="leave-comments">
                            <h2 class="title-semibold-dark size-xl mb-40">Leave Comments</h2>
                            <form id="leave-comments">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <input placeholder="Name*" class="form-control" type="text">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <input placeholder="Email*" class="form-control" type="email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <input placeholder="Web Address" class="form-control" type="text">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea placeholder="Message*" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-none">
                                            <button type="submit" class="btn-ftg-ptp-45">Post Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                                <div class="connection-quantity"></div>
                                <p>Fans</p>
                            </li>
                            <li class="twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <div class="connection-quantity"></div>
                                <p>Followers</p>
                            </li>
                            <li class="linkedin">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                <div class="connection-quantity"></div>
                                <p>Fans</p>
                            </li>
                            <li class="rss">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                                <div class="connection-quantity"></div>
                                <p>Subscriber</p>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <div class="ne-banner-layout1 text-center">
                            <a href="#">
                                <img src="https://media.sproutsocial.com/uploads/2018/05/Facebook-Ad-Examples.png" alt="ad" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-5">
                            <div class="topic-box-lg color-cod-gray">Recent Post</div>
                        </div>
                        <div class="row">
                            @foreach($latestPost as $lpost)
                            <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                                <div class="mt-25 position-relative">
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">{{ @$post->category->name }}</div>
                                    </div>
                                    <a href="{{ url('story',$lpost->slug) }}" class="mb-10 display-block img-opacity-hover">
                                        <img src="@if(isset($lpost->imageGallery)) {{ url('public') }}/{{$lpost->imageGallery->medium_image_three}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" alt="ad" class="img-fluid m-auto width-100">
                                    </a>
                                    <h3 class="title-medium-dark size-md mb-none">
                                        <a href="{{ url('story',$lpost->slug) }}">{{ $lpost->title }}</a>
                                    </h3>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">Newsletter</div>
                        </div>
                        <div class="newsletter-area bg-primary">
                            <h2 class="title-medium-light size-xl pl-30 pr-30">Subscribe to our mailing list to get the new updates!</h2>
                            <img src="img/banner/newsletter.png" alt="newsletter" class="img-fluid m-auto mb-15">
                            <p>Subscribe our newsletter to stay updated</p>
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
                                <a href="#">Apple</a>
                            </li>
                            <li>
                                <a href="#">Business</a>
                            </li>
                            <li>
                                <a href="#">Architecture</a>
                            </li>
                            <li>
                                <a href="#">Gadgets</a>
                            </li>
                            <li>
                                <a href="#">Software</a>
                            </li>
                            <li>
                                <a href="#">Microsoft</a>
                            </li>
                            <li>
                                <a href="#">Robotic</a>
                            </li>
                            <li>
                                <a href="#">Technology</a>
                            </li>
                            <li>
                                <a href="#">Others</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">Most Reviews</div>
                        </div>
                        <div class="position-relative mb30-list bg-body">
                            <div class="topic-box-top-xs">
                                <div class="topic-box-sm color-cod-gray mb-20">Apple</div>
                            </div>
                            <div class="media">
                                <a class="img-opacity-hover" href="single-news-1.html">
                                    <img src="img/news/news117.jpg" alt="news" class="img-fluid">
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
                                    <h3 class="title-medium-dark mb-none">
                                        <a href="single-news-2.html">Can Be Monit roade year with Program.</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mb30-list bg-body">
                            <div class="topic-box-top-xs">
                                <div class="topic-box-sm color-cod-gray mb-20">Gadgets</div>
                            </div>
                            <div class="media">
                                <a class="img-opacity-hover" href="single-news-2.html">
                                    <img src="img/news/news118.jpg" alt="news" class="img-fluid">
                                </a>
                                <div class="media-body">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>June 06, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark mb-none">
                                        <a href="single-news-3.html">Can Be Monit roade year with Program.</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mb30-list bg-body">
                            <div class="topic-box-top-xs">
                                <div class="topic-box-sm color-cod-gray mb-20">Software</div>
                            </div>
                            <div class="media">
                                <a class="img-opacity-hover" href="single-news-3.html">
                                    <img src="img/news/news119.jpg" alt="news" class="img-fluid">
                                </a>
                                <div class="media-body">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>August 22, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark mb-none">
                                        <a href="single-news-1.html">Can Be Monit roade year with Program.</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mb30-list bg-body">
                            <div class="topic-box-top-xs">
                                <div class="topic-box-sm color-cod-gray mb-20">Tech</div>
                            </div>
                            <div class="media">
                                <a class="img-opacity-hover" href="single-news-1.html">
                                    <img src="img/news/news120.jpg" alt="news" class="img-fluid">
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
                                    <h3 class="title-medium-dark mb-none">
                                        <a href="single-news-2.html">Can Be Monit roade year with Program.</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mb30-list bg-body">
                            <div class="topic-box-top-xs">
                                <div class="topic-box-sm color-cod-gray mb-20">Ipad</div>
                            </div>
                            <div class="media">
                                <a class="img-opacity-hover" href="single-news-1.html">
                                    <img src="img/news/news121.jpg" alt="news" class="img-fluid">
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
                                    <h3 class="title-medium-dark mb-none">
                                        <a href="single-news-2.html">Can Be Monit roade year with Program.</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
