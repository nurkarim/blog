@extends('back.app')
@section('content')

    {!! Form::open(['url'=>URL::to('posts'),'id'=>'myForm','files'=>true]) !!}

    <?php
    $token = md5(session_id() . time());
    Session::put('_csrf_token',$token);
    ?>
    <input type="hidden" name="_csrf_token" value="<?php echo $token ?>" />

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Articles</h3>
            </div>
            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group clearfix">
                            <label class="control-label">Language
                                <star>*</star>
                            </label>
                            {!! Form::select('language',$languages,\Illuminate\Support\Facades\App::getLocale(),['class'=>'form-control','required','id'=>'language_id','placeholder'=>'']) !!}
                        </div>
                        <div class="form-group clearfix">
                            <label class="control-label">Category
                                <star>*</star>
                            </label>
                            {!! Form::select('category_id',$categories,null,['class'=>'form-control','placeholder'=>'','required','id'=>'category_id']) !!}
                        </div>
                        <div class="form-group clearfix">
                            <label class="control-label">Subcategory
                                <star>*</star>
                            </label>
                            {!! Form::select('sub_category_id',[],null,['class'=>'form-control','required','id'=>'sub_category_id']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pl-2">

                            <div class="row p-l-15">
                                <div class="col-12 col-md-4">
                                    <div class="form-title">
                                        <label for="visibility">Visibility</label>
                                    </div>
                                </div>
                                <div class="col-3 col-md-2">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="visibility" id="visibility_show" checked="" value="1" class="custom-control-input" data-parsley-multiple="visibility">
                                        <span class="custom-control-label">Show</span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-2">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="visibility" id="visibility_hide" value="0" class="custom-control-input" data-parsley-multiple="visibility">
                                        <span class="custom-control-label">Hide</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row p-l-15">
                                <div class="col-8 col-md-4">
                                    <div class="form-title">
                                        <label for="featured_post">Add to featured</label>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" id="featured_post" name="featured" class="custom-control-input" data-parsley-multiple="featured">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row p-l-15">
                                <div class="col-8 col-md-4">
                                    <div class="form-title">
                                        <label for="add_to_breaking">Add to breaking</label>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" id="add_to_breaking" name="breaking" class="custom-control-input" data-parsley-multiple="breaking">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row p-l-15">
                                <div class="col-8 col-md-4">
                                    <div class="form-title">
                                        <label for="add_to_slide">Add to slider</label>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" id="add_to_slide" name="slider" class="custom-control-input" data-parsley-multiple="slider">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row p-l-15">
                                <div class="col-8 col-md-4">
                                    <div class="form-title">
                                        <label for="recommended">Add to recommended</label>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" id="recommended" name="recommended" class="custom-control-input" data-parsley-multiple="recommended">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="row p-l-15">
                                <div class="col-8 col-md-4">
                                    <div class="form-title">
                                        <label for="auth_required">Show only to authenticated users</label>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" id="auth_required" name="auth_required" class="custom-control-input" data-parsley-multiple="auth_required">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Post Details</h3>
            </div>
            <div class="card-body">
                <div class="bg-white p-20 m-b-20">
                    <div class="row">
                       <div class="col-md-6">
                           <div class="col-sm-12">
                               <div class="form-group">
                                   <label for="post_title" class="col-form-label">Title*</label>
                                   <input id="post_title" onkeyup="metaTitleSet()" name="title" value="" type="text" class="form-control" required="">
                               </div>
                           </div>
                           <div class="col-sm-12">
                               <div class="form-group">
                                   <label for="post-slug" class="col-form-label"><b>Slug</b>
                                       (Slug Message)</label>
                                   <input id="post-slug" name="slug" value="" type="text" class="form-control">
                               </div>
                           </div>
                       </div>
                        <div class="col-md-6">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-group text-center">
                                            <img src="{{ url('/') }}/public/default-image/default-100x100.png" id="image_preview" width="200" height="200" alt="image" class="img-responsive img-thumbnail">
                                            <button type="button"  class="btn btn-primary btn-image-modal" data-id="1"  data-toggle="modal" data-target="#media-gallery">Add Image</button>
                                            <input id="image_id" name="image_id" type="hidden" class="form-control">
                                        </div>
                                    </div>
                                </div>

                       </div>
                    </div>
                    <!-- tinemcey start -->
                    <div class="row p-l-15">
                        <div class="col-12">
                            <label for="sub_content" class="col-form-label">Sub Content*</label>
                            <textarea name="sub_content" value="" id="sub_content"
                                      cols="30" rows="5" required></textarea>
                        </div>
                    </div>

                    <div class="row p-l-15">
                        <div class="col-12">
                            <label for="post_content" class="col-form-label">Content*</label>
                            <textarea style="width: 100%" name="details"  id="summernote"
                                      cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <!-- tinemcey end -->
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">SEO Details</h3>
            </div>
            <div class="card-body">
                <div class="row  bg-white p-20 m-b-20">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="meta_title"><b>Title</b> (Meta Tag)</label>
                            <input id="meta_title" class="form-control" value="" name="meta_title">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="post-keywords" class="col-form-label"><b>Keywords</b>
                                (Meta Tag)</label>
                            <input id="post-keywords" name="meta_keywords" value="" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="post_tags" class="col-form-label">Tags</label>

                            <div class="bootstrap-tagsinput"><input type="text" name="tags[]" placeholder="" class="tags"></div>

                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="post_desc">
                                <b>Description</b> (Meta Tag)]
                            </label>
                            <textarea class="form-control" id="meta_description" value="" name="meta_description" rows="3"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row  p-20 m-b-20">

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" id="post_status" name="status" required="">
                                <option value="1">Published</option>
                                <option value="0">Draft</option>
                                <option value="2">Scheduled</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12 divScheduleDate" style="display: none;">
                        <label for="scheduled_date">Schedule Date</label>
                        <div class="input-group">
                            <label class="input-group-text" for="scheduled_date"><i class="fa fa-calendar-alt"></i></label>
                            <input type="date" class="form-control date flatpickr-input" id="scheduled_date" name="scheduled_date">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
        </div>
    <input type="hidden" value="article" name="type">

    {!! Form::close() !!}
@endsection
@section('js')

    @include('back.gallery.index')

    <script src="{{ url('public/back/js') }}/post.js"></script>

    <script>
        bkLib.onDomLoaded(function() {
            nicEditors.editors.push(
                new nicEditor().panelInstance(
                    document.getElementById('summernote')
                )
            );
        });

        $(document).ready(function() {
            $('.tags').tagsinput({
                maxTags: 5,
            });
        });

        $(document).on('change', '#language_id', function () {
            var id = $('#language_id').val();
            const url = '{{ route('ajaxCategory') }}';
            $.ajax({
                type: 'GET',
                async: false,
                url: url,
                data: {'language': id},
                dataType: "json",
                success: function (data) {
                    $("#category_id").empty();
                    $("#category_id").append('<option value="">Select One</option>');
                    $.each(data, function (i, value) {
                        $("#category_id").append('<option value=' + value.id + '>' + value.name + '</option>');
                    });
                },
                error: function (data) {

                }
            });

        });

        $(document).on('change', '#category_id', function () {
            var id = $('#category_id').val();
            const url = '{{ route('ajaxSubCategory') }}';
            $.ajax({
                type: 'GET',
                async: false,
                url: url,
                data: {'category_id': id},
                dataType: "json",
                success: function (data) {
                    $("#sub_category_id").empty();
                    $("#sub_category_id").append('<option value="">Select One</option>');
                    $.each(data, function (i, value) {
                        $("#sub_category_id").append('<option value=' + value.id + '>' + value.name + '</option>');
                    });
                },
                error: function (data) {

                }
            });

        });


    </script>

@endsection
