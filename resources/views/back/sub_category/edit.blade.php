<script type="text/javascript">
    $(".modal-title").text("Edit");
    $(".modal-dialog").addClass('modal-md');
</script>
<div class="row">
    <div class="col-md-12">
        {!! Form::model($subCategory,['url'=>['subcategories',$subCategory->id],'id'=>'myForm','method'=>'PUT','files'=>true]) !!}
        <input type="hidden" name="sub_category_id" value="{{ $subCategory->id }}">
        <div class="row">
            <div class="form-group clearfix col-md-6">
                <label class="control-label">Language
                    <star>*</star>
                </label>
                {!! Form::select('language',$languages,null,['class'=>'form-control','required','id'=>'language_id','placeholder'=>'']) !!}
            </div>
            <div class="form-group clearfix col-md-6">
                <label class="control-label">Category
                    <star>*</star>
                </label>
                {!! Form::select('category_id',$categories,null,['class'=>'form-control','required','id'=>'category_id']) !!}
            </div>
            <div class="form-group clearfix col-md-6">
                <label class="control-label">Name
                    <star>*</star>
                </label>
                <input class="form-control" value="{{ $subCategory->name }}"  name="name" type="text" required="true" placeholder=""/>
            </div>

            <div class="form-group clearfix col-md-6">
                <label class="control-label">Slug
                </label>
                <input class="form-control" value="{{ $subCategory->slug }}" name="slug" type="text"  placeholder=""/>
            </div>
            <div class="form-group clearfix col-md-6">
                <label class="control-label">Meta description

                </label>
                <input class="form-control" value="{{ $subCategory->meta_description }}"  name="meta_description" type="text"  placeholder=""/>
            </div>

            <div class="form-group clearfix col-md-6">
                <label class="control-label">Meta keywords
                </label>
                <input class="form-control" value="{{ $subCategory->meta_keywords }}"  name="meta_keywords" type="text"  placeholder=""/>
            </div>
            <div class="form-group clearfix col-md-6">
                <label class="control-label">Order
                </label>
                <input class="form-control" value="{{ $subCategory->view_order }}"  name="order" type="number"  placeholder=""/>
            </div>

            <div class="form-group clearfix col-md-6">
                <label class="control-label">Status
                    <star>*</star>
                </label>
                {!! Form::select('status',[0=>'Disable',1=>'Enable'],null,['class'=>'form-control','required']) !!}
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
