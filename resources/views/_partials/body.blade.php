@extends('index')
@section('content')
    @include('_partials.headline')
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
                                <a class="img-opacity-hover" href="{{ url('story',$post->slug) }}">
                                    <img style="height: 80px;width: 116px;" src="@if(isset($post->imageGallery)) {{ url('public') }}/{{$post->imageGallery->small_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" alt="{{ $post->title }}" class="img-fluid">
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
                                        <a title="{{ $post->title }}" href="{{ url('story',$post->slug) }}">{{ \Illuminate\Support\Str::limit($post->title,43) }}</a>
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
    @php
        $sectionCollection=collect($primarySections);
$sections=$sectionCollection->where('type',1)->where('label','top')->all();
$i=1;
    @endphp

    @if(count($sections)>0)

    <section class="section-space-bottom-less30">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 mb-30">
                    <div class="item-box-light-md">

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
                                        <?php
                                        $arrayID = 0;
                                        ?>
                                        @foreach($primarySection->category->subCategoriesBody as $sub_catPost)
                                            <div class="row {{ $sub_catPost->slug }}">
                                                @foreach($sub_catPost->post as $key=>$catPost)
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="img-overlay-70 img-scale-animate mb-30">
                                                        <a href="{{ url('story',$catPost->slug) }}">
                                                            <img src="@if(isset($catPost->imageGallery)) {{ url('public') }}/{{$catPost->imageGallery->big_image_three}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" alt="news" class="img-fluid width-100">
                                                        </a>
                                                        <div class="mask-content-lg">
                                                            <div class="topic-box-sm color-cinnabar mb-20">{{ $sub_catPost->name }}</div>
                                                            <div class="post-date-light">
                                                                <ul>
                                                                    <li>
                                                                        <span>by</span>
                                                                        <a href="#">{{ @$catPost->user->name }}</a>
                                                                    </li>
                                                                    <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>{{ date('M d, Y',strtotime($catPost->updated_at)) }}</li>
                                                                </ul>
                                                            </div>
                                                            <h2 class="title-medium-light size-lg">
                                                                <a href="{{ url('story',$catPost->slug) }}">{{ $catPost->title }}</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                    @if($key==0)
                                                        <?php
                                                        $arrayID = $catPost->id;
                                                        ?>
                                                        @break
                                                    @endif
                                                @endforeach
                                                <div class="col-md-6 col-sm-12">
                                                    @foreach($sub_catPost->post()->where('id','!=',$arrayID)->get() as $catPost)
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
                                                                </span>{{ date('M d, Y',strtotime($catPost->updated_at)) }}
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
                                                        </span>{{ date('M d, Y',strtotime($catPost->updated_at)) }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h3 class="title-medium-light">
                                                        <a href="{{ url('story',$catPost->slug) }}">{{ $catPost->title }}</a>
                                                    </h3>
                                                </div>
                                                <img
                                                    data-original="@if(isset($catPost->imageGallery)) {{ url('public') }}/{{$catPost->imageGallery->medium_image_three}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
                                                    alt="{{ $catPost->title }}" class="img-fluid width-100">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="ne-sidebar sidebar-break-lg col-xl-4 col-lg-12">
                    <div class="sidebar-box item-box-light-md">
                        <div class="topic-border color-cinnabar mb-30">
                            <div class="topic-box-lg color-cinnabar">Stay Connected</div>
                        </div>
                        <ul class="stay-connected-color overflow-hidden">
                            <li class="facebook">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <p>Fans</p>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>

                                    <p>Followers</p>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>

                                    <p>Fans</p>
                                </a>
                            </li>
                            <li class="rss">
                                <a href="#">
                                    <i class="fa fa-rss" aria-hidden="true"></i>

                                    <p>Subscriber</p>
                                </a>
                            </li>
                        </ul>
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
                </div>
            </div>

        </div>
    </section>
@endif
    @php
        $j=1;
            $sectionCollection=collect($primarySections);
            $sections=$sectionCollection->where('type',1)->where('label','center')->all();
    @endphp
    @if(count($sections)>0)
    <section class="section-space-bottom-less30">
        <div class="container mt-10">

                <div class="item-box-light-md-less10">
                    <div class="row">

                @foreach($sections as $centerSection)
<?php
                            $j++
?>
                    <div class="col-lg-4 col-md-12">
                        <div class="topic-border @if($j%2==0) color-cinnabar @else color-apple @endif mb-30 width-100">
                            <div class="topic-box-lg @if($j%2==0) color-cinnabar @else color-apple @endif">
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
                                    data-original="@if(isset($scatPost->imageGallery)) {{ url('public') }}/{{$scatPost->imageGallery->medium_image_three}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
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
                                        data-original="@if(isset($scatPost1->imageGallery)) {{ url('public') }}/{{$scatPost1->imageGallery->small_image}}  @else {{ url('public/default-image/default-100x100.png') }} @endif"
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
            </div>
<div class="item-box-light-md-less10 mt-10">

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

        </div>
    </section>
@endif
    <section class="bg-accent section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 mb-30">
                    <div class="ie-full-width" style="background: transparent">
                        <div class="topic-border color-cinnabar mb-30">
                            <div class="topic-box-lg color-cinnabar">Latest POST</div>
                        </div>
                        <div class="row">
                            @foreach($latestPost as $post)
                            <div class="col-lg-12 col-md-6 col-sm-12 ">
                                <div class="media media-none--md mb-30  bg-white">
                                    <div class="position-relative width-40">
                                        <a href="{{ url('story',$post->slug) }}" class="img-opacity-hover">
                                            <img src="@if(isset($post->imageGallery)) {{ url('public') }}/{{$post->imageGallery->medium_image_three}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" alt="{{ $post->title }}" class="img-fluid">
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
                                        <img src="@if(isset($featured->imageGallery)) {{ url('public') }}/{{$featured->imageGallery->thumbnail}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" alt="news" class="img-fluid">
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


                </div>
            </div>
        </div>
    </section>
@endsection
