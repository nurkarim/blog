@extends('index')
@section('content')


    <section class="bg-body-section section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mb-30">
                    <div class="news-details-layout1">
                        <div class="position-relative mb-30">
                            <img
                                src="@if(isset($post->imageGallery)) {{ url('public') }}/{{$post->imageGallery->original_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                                alt="{{ $post->slug }}" class="img-fluid">
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
                                    <i class="fa fa-calendar"
                                       aria-hidden="true"></i>{{ date('M d, Y',strtotime($post->updated_at)) }}</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-eye" aria-hidden="true"></i>{{ $post->total_view }}</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-comments" aria-hidden="true"></i>{{ $post->total_comment }}</a>
                            </li>
                            <li>
                                <div class="fb-share-button"
                                     data-href="https://laradevsbd.com/story/{{ $post->slug }}"
                                     data-layout="button_count">
                                </div>
                            </li>
                        </ul>
                        <p>{!! $post->content !!}</p>
                        <ul class="blog-tags item-inline">
                            <li>Tags</li>
                            <li>
                                <a href="#">#Laravel</a>
                            </li>
                            <li>
                                <a href="#">#Laravel7</a>
                            </li>
                            <li>
                                <a href="#">#Laravel8</a>
                            </li>
                            <li>
                                <a href="#">#PHP</a>
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
                                        <i class="fa fa-youtube" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="linkedin">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{--                        <div class="row no-gutters divider blog-post-slider">--}}
                        {{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">--}}
                        {{--                                <a href="#" class="prev-article">--}}
                        {{--                                    <i class="fa fa-angle-left" aria-hidden="true"></i>Previous article</a>--}}
                        {{--                                <h3 class="title-medium-dark pr-50">Wonderful Outdoors Experience: Eagle Spotting in Alaska</h3>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">--}}
                        {{--                                <a href="#" class="next-article">Next article--}}
                        {{--                                    <i class="fa fa-angle-right" aria-hidden="true"></i>--}}
                        {{--                                </a>--}}
                        {{--                                <h3 class="title-medium-dark pl-50">The only thing that overcomes hard luck is hard work</h3>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="author-info p-35-r mb-50 border-all">
                            <div class="media media-none-xs">
                                <div class="media-body pt-10 media-margin30">
                                    <h3 class="size-lg mb-5">{{ $post->user->name }}</h3>
                                    <div class="post-by mb-5">{{ @$post->user->userMeta->designation }}</div>
                                    <p class="mb-15">
                                        {{ nl2br(@$post->user->userMeta->meta_details) }}
                                    </p>
                                    <ul class="author-social-style2 item-inline">
                                        <li>
                                            <a href="{{ @$post->user->userMeta->fb_link }}" title="facebook">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ @$post->user->userMeta->twitter_link }}" title="twitter">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ @$post->user->userMeta->youtube_link }}" title="google-plus">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ @$post->user->userMeta->linkin_link }}" title="linkedin">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="comments-area">
                            <h2 class="title-semibold-dark size-xl border-bottom mb-40 pb-20">{{ $post->comment->count() }}
                                Comments</h2>
                            <ul>
                                @foreach($post->comment as $comment)
                                    <li>
                                        <div class="media media-none-xs">
                                            <div class="media-body comments-content media-margin30">
                                                <h3 class="title-semibold-dark">
                                                    <a href="#">{{ $comment->user->name }} ,
                                                        <span> {{ date('M d, Y',strtotime($comment->created_at)) }}</span>
                                                    </a>
                                                </h3>
                                                <p>{{ nl2br($comment->comment) }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    @if($comment->commentReply->count()>0)
                                        @foreach($comment->commentReply as $reply)
                                            <li>
                                                <div class="media media-none-xs">
                                                    <div class="media-body comments-content media-margin30">
                                                        <h3 class="title-semibold-dark">
                                                            <a href="#">{{ $reply->user->name }} ,
                                                                <span> {{ date('M d, Y',strtotime($reply->created_at)) }}</span>
                                                            </a>
                                                        </h3>
                                                        <p>{{ nl2br($comment->comment) }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                @endforeach
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
                                            <textarea placeholder="Message*" class="textarea form-control"
                                                      id="form-message" rows="8" cols="20"></textarea>
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
                                <img src="https://media.sproutsocial.com/uploads/2018/05/Facebook-Ad-Examples.png"
                                     alt="ad" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">Related Post</div>
                        </div>
                        <div class="d-inline-block">
                            @foreach($latestPost as $featured)
                                <div class="media mb30-list bg-body">
                                    <a class="img-opacity-hover" href="{{ url('story',$featured->slug) }}">
                                        <img
                                            src="@if(isset($featured->imageGallery)) {{ url('public') }}/{{$featured->imageGallery->thumbnail}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                                            alt="{{ $featured->slug }}" class="img-fluid">
                                    </a>
                                    <div class="media-body media-padding15">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>{{ date('M d, Y',strtotime($post->updated_at)) }}</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark mb-none">
                                            <a href="{{ url('story',$featured->slug) }}">{{ $featured->title }}</a>
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
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">Featured Post</div>
                        </div>
                        <div class="d-inline-block">
                            @foreach($latestPost->where('featured',1) as $featured)
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
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-25">
                            <div class="topic-box-lg color-cod-gray">Tags</div>
                        </div>
                        <ul class="sidebar-tags">
                            <li>
                                <a href="#">Laravel7</a>
                            </li>
                            <li>
                                <a href="#">Laravel8</a>
                            </li>
                            <li>
                                <a href="#">PHP</a>
                            </li>
                            <li>
                                <a href="#">Jquery</a>
                            </li>
                            <li>
                                <a href="#">Bootstrap</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
