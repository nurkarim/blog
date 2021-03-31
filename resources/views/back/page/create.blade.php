@extends('back.app')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Content</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['url'=>URL::to('pages'),'id'=>'myForm','files'=>true]) !!}

                <?php
                $token = md5(session_id() . time());
                Session::put('_csrf_token',$token);
                ?>
                <input type="hidden" name="_csrf_token" value="<?php echo $token ?>" />

                <div class="row clearfix">

                    <div class="col-8">
                        <div class="p-20 m-b-20">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="page-title" class="col-form-label">{{ __('title') }}*</label>
                                    <input id="page-title" onkeyup="metaTitleSet()" value="{{ old('title') }}" name="title"
                                           type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="page-slug" class="col-form-label"><b>{{ __('slug') }}</b>
                                        ({{ __('slug_message') }})</label>
                                    <input id="page-slug" name="slug" value="{{ old('slug') }}" type="text"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="language" class="col-form-label">{{ __('language') }}*</label>
                                    <select class="form-control" name="language" id="language">
                                        @foreach ($languages as  $lang)
                                            <option
                                                @if(\App\CustomClasses\SettingsHelper::settingHelper('default_language')==$lang->code) Selected
                                                @endif value="{{$lang->code}}">{{$lang->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="page_type" class="col-form-label">{{ __('page_type') }}*</label>
                                    <select name="page_type" id="page_type" class="form-control">
                                        <option value="1">{{__('default')}}</option>
                                        <option value="2">{{__('contact_us')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12" id="description">
                                <div class="form-group">
                                    <label for="content" class="col-form-label">{{ __('description') }}</label>
                                    <textarea name="description" id="content" class="form-control"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-4">
                        <div class="add-new-page  bg-white p-20 m-b-20">
                            <div class="block-header">
                                <div class="form-group">
                                    <h4 class="border-bottom">{{ __('page_layout') }}</h4>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="template" class="col-form-label">{{ __('template') }}*</label>
                                    <select name="template" id="template" class="form-control">
                                        <option value="1">{{__('without_sidebar')}}</option>
                                        <option value="2">{{__('with_right_sidebar')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="template" class="col-form-label">{{ __('feature_image') }}</label>
                                <div class="form-group text-center">
                                    <img src="{{static_asset('default-image/default-100x100.png') }} " id="image_preview" width="200"
                                         height="200" alt="image" class="img-responsive img-thumbnail">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <button type="button" id="btn_image_modal" class="btn btn-primary btn-image-modal"
                                            data-id="1" data-toggle="modal"
                                            data-target=".image-modal-lg">{{ __('add_image') }}</button>
                                    <input id="image_id" name="image_id" type="hidden" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="add-new-page  bg-white p-20 m-b-20">

                            <div class="block-header">
                                <div class="form-group">
                                    <h4 class="border-bottom">{{ __('visibility') }}*</h4>
                                </div>
                            </div>
                            <div class="row p-l-15">
                                <div class="col-12 col-md-4">
                                    <div class="form-title">
                                        <label for="visibility">{{ __('visibility') }}</label>
                                    </div>
                                </div>
                                <div class="col-3 col-md-2">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="visibility" id="visibility_show" value="1" checked
                                               class="custom-control-input">
                                        <span class="custom-control-label">{{ __('show') }}</span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-2">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="visibility" id="visibility_hide" value="0"
                                               class="custom-control-input">
                                        <span class="custom-control-label">{{ __('hide') }}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row p-l-15">
                                <div class="col-12 col-md-4">
                                    <div class="form-title">
                                        <label for="show_for_register">{{ __('show_only_to_registered_users') }}</label>
                                    </div>
                                </div>
                                <div class="col-3 col-md-2">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="show_for_register" id="show_only_registerd_user_enable"
                                               checked value="1" class="custom-control-input">
                                        <span class="custom-control-label">{{ __('yes') }}</span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-2">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="show_for_register" id="show_only_registerd_user_desable"
                                               value="0" class="custom-control-input">
                                        <span class="custom-control-label">{{ __('no') }}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row p-l-15">
                                <div class="col-12 col-md-4">
                                    <div class="form-title">
                                        <label for="show_title">{{ __('show_title') }}</label>
                                    </div>
                                </div>
                                <div class="col-3 col-md-2">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="show_title" id="show_title_enable" checked value="1"
                                               class="custom-control-input">
                                        <span class="custom-control-label">{{ __('yes') }}</span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-2">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="show_title" id="show_title_desable" value="0"
                                               class="custom-control-input">
                                        <span class="custom-control-label">{{ __('no') }}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row p-l-15">
                                <div class="col-12 col-md-4">
                                    <div class="form-title">
                                        <label for="breadcrumb">{{ __('show_breadcrumb') }}</label>
                                    </div>
                                </div>
                                <div class="col-3 col-md-2">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="show_breadcrumb" id="show_breadcumb_enable" checked
                                               value="1" class="custom-control-input">
                                        <span class="custom-control-label">{{ __('yes') }}</span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-2">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="show_breadcrumb" id="show_breadcumb_desable" value="0"
                                               class="custom-control-input">
                                        <span class="custom-control-label">{{ __('no') }}</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="add-new-page  bg-white p-20 m-b-20">
                            <div class="block-header">
                                <div class="form-group">
                                    <h4 class="border-bottom">{{ __('seo') }}</h4>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title-meta" class="col-form-label"><b>{{ __('title') }}</b>
                                        ({{ __('meta_tag') }})</label>
                                    <input id="title-meta" name="meta_title" value="{{ old('meta_title') }}" type="text"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="page-meta" class="col-form-label"><b>{{ __('description') }}</b>
                                        ({{ __('meta_tag') }})</label>
                                    <input id="page-meta" name="meta_description" value="{{ old('meta_description') }}"
                                           type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="page-keywords" class="col-form-label"><b>{{ __('keywords') }}</b>
                                        ({{ __('meta_tag') }})</label>
                                    <input id="page-keywords" name="meta_keywords" value="{{ old('meta_keywords') }}"
                                           type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group form-float form-group-sm">
                                        <button type="submit" class="btn btn-primary float-right m-t-20"><i
                                                class="mdi mdi-plus"></i> {{ __('add_page') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
@section('js')

    @include('back.gallery.index')

    <script>
        $('#content').summernote();
        function metaTitleSet() {
            var keyValue = document.getElementById("page-title").value;
            document.getElementById("title-meta").value = keyValue;
        }
    </script>

@endsection
