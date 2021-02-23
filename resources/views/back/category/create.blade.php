<script type="text/javascript">
    $(".modal-title").text("New");
    $(".modal-dialog").addClass('modal-md');
</script>
<div class="row">
    <div class="col-md-12">
        {!! Form::open(['url'=>URL::to('categories'),'id'=>'myForm','files'=>true]) !!}
        <div class="form-group clearfix">
            <label class="control-label">Language
                <star>*</star>
            </label>
            {!! Form::select('language',$languages,null,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group clearfix">
            <label class="control-label">Name
                <star>*</star>
            </label>
            <input class="form-control"  name="name" type="text" required="true" placeholder="Start typing here"/>
        </div>

        <div class="form-group clearfix">
            <label class="control-label">Slug
            </label>
            <input class="form-control"  name="slug" type="text"  placeholder=""/>
        </div>
        <div class="form-group clearfix">
            <label class="control-label">Meta description

            </label>
            <input class="form-control"  name="meta_description" type="text"  placeholder=""/>
        </div>

        <div class="form-group clearfix">
            <label class="control-label">Meta keywords
            </label>
            <input class="form-control"  name="meta_keywords" type="text"  placeholder=""/>
        </div>
        <div class="form-group clearfix">
            <label class="control-label">Order
            </label>
            <input class="form-control"  name="order" type="number"  placeholder=""/>
        </div>

        <div class="form-group clearfix">
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
        {!! Form::close() !!}

    </div>
</div>
