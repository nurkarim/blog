@extends('back.app')
@section('content')
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Add  Sections</h3>
                <div class="float-right">
                    <a href="{{ route("themeSettings.index") }}" class="btn btn-primary btn-addon">Back</a>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['url'=>URL::to('themeSettings'),'id'=>'myForm','files'=>true]) !!}
                <div class="row">
                    <div class="form-group clearfix col-md-6">
                        <label class="control-label">Label
                            <star>*</star>
                        </label>
                        {!! Form::select('label',['top'=>'Top','center'=>'Center','bottom'=>'Bottom'],null,['class'=>'form-control','required','onchange'=>'return changePosition(this.value)']) !!}
                    </div>
                    <div class="form-group clearfix col-md-6">
                        <label class="control-label">Type
                            <star>*</star>
                        </label>
                        {!! Form::select('type',['1'=>'category','2'=>'video'],null,['class'=>'form-control','required','onchange'=>'return changeTypeC(this.value)']) !!}
                    </div>
                    <div class="form-group clearfix col-md-6 cat">
                        <label class="control-label">Category
                        </label>
                        {!! Form::select('category_id',$categories,null,['class'=>'form-control','id'=>'category_id']) !!}
                    </div>

                    <div class="form-group clearfix col-md-6 scat">
                        <label class="control-label">Sub Category
                        </label>
                        {!! Form::select('sub_category_id',[],null,['class'=>'form-control','id'=>'sub_category_id']) !!}
                    </div>

                    <div class="form-group clearfix col-md-6">
                        <label class="control-label">View Order
                            <star>*</star>
                        </label>
                        <input class="form-control"  name="view_order" type="number" required="true" />
                    </div>

                    <div class="form-group clearfix col-md-6">
                        <label class="control-label">show ads?
                            <star>*</star>
                        </label>
                        {!! Form::select('show_ads',[0=>'No',1=>'Yes'],null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group clearfix col-md-6 cat">
                        <label class="control-label">Select Ads
                        </label>
                        {!! Form::select('ad_id',$ads,null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group clearfix col-md-6">
                        <label class="control-label">Status
                            <star>*</star>
                        </label>
                        {!! Form::select('status',[1=>'Active',0=>'Inactive'],null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group" id="section-style">
                        <div class="col-12 col-md-12">
                            <div class="form-title">
                                <label for="section_style">Section Style</label>
                            </div>
                        </div>
                        <div class="row p-l-15">
                            <div class="col-12 col-md-4">
                                <div class="section_section_style">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="section_style" id="section_section_style_1" value="style_1" checked="" class="custom-control-input" data-parsley-multiple="section_style">
                                        <span class="custom-control-label"></span>
                                    </label>
                                    <img src="{{ url('/') }}/public/default-image/Section/Section_1.png" alt="" class="img-responsive cat-block-img">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="section_section_style">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="section_style" id="section_section_style_2" value="style_2" class="custom-control-input" data-parsley-multiple="section_style">
                                        <span class="custom-control-label"></span>
                                    </label>
                                    <img src="{{ url('/') }}/public/default-image/Section/Section_2.png" alt="" class="img-responsive cat-block-img">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="section_section_style">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="section_style" id="section_section_style_3" value="style_3" class="custom-control-input" data-parsley-multiple="section_style">
                                        <span class="custom-control-label"></span>
                                    </label>
                                    <img src="{{ url('/') }}/public/default-image/Section/Section_3.png" alt="" class="img-responsive cat-block-img">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="section_section_style">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="section_style" id="section_section_style_4" value="style_4" class="custom-control-input" data-parsley-multiple="section_style">
                                        <span class="custom-control-label"></span>
                                    </label>
                                    <img src="{{ url('/') }}/public/default-image/Section/Section_4.png" alt="" class="img-responsive cat-block-img">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="section_section_style">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="section_style" id="section_section_style_5" value="style_5" class="custom-control-input" data-parsley-multiple="section_style">
                                        <span class="custom-control-label"></span>
                                    </label>
                                    <img src="{{ url('/') }}/public/default-image/Section/Section_5.png" alt="" class="img-responsive cat-block-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right">
                            <button class="btn btn-success">Save</button>
                            <button class="btn btn-black" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $(".scat").hide();
        function changePosition(value) {
            if (value=="top"){
                $(".scat").hide();
            }else if (value=="bottom"){
                $(".scat").hide();
            }else{
                $(".scat").show();
            }
        }

        function changeTypeC(value) {
            if (value=="2"){
                $(".cat").hide();

            }else{

                $(".cat").show();
            }
        }

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
