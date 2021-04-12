<section class="bg-accent border-bottom add-top-margin">
    <div class="container">
        <div class="row no-gutters d-flex align-items-center">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="topic-box topic-box-margin">Latest Post</div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-6">
                <div class="feeding-text-dark">
                    <ol id="sample" class="ticker">
                        @inject('customHelper', \App\CustomClasses\SettingsHelper)
                        @foreach($customHelper->headline() as $headline)
                        <li>
                            <a href="{{ url('story',$headline->slug) }}">{{ $headline->title }}</a>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
