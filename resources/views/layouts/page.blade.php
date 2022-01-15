@extends('index')
@section('content')
    <section class="bg-body-section section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mb-30">
                    <div class="news-details-layout1">
                     {!! $page->description !!}
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection

