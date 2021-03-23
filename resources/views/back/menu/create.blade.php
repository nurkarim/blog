<script type="text/javascript">
    $(".modal-title").text("Add Menu");
    $(".modal-dialog").addClass('modal-lg');
</script>
<div class="row">
    <div class="col-md-12 row">
        {!! Form::open(['url'=>URL::to('menu-items'),'id'=>'myForm','files'=>true]) !!}
        <div class="row">
        <div class="form-group clearfix col-md-6">
            <label class="control-label">Type
                <star>*</star>
            </label>
            {!! Form::select('source',['category'=>'category','page'=>'page'],null,['class'=>'form-control','required','onchange'=>'return changeTypeC(this.value)']) !!}
        </div>
        <div class="form-group clearfix col-md-6 cat">
            <label class="control-label">Category
            </label>
            {!! Form::select('category_id',$categories,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group clearfix col-md-6 page" style="display: none">
            <label class="control-label">Page
            </label>
            {!! Form::select('page_id',$pages,null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group clearfix col-md-6">
            <label class="control-label">View Order
                <star>*</star>
            </label>
            <input class="form-control"  name="view_order" type="number" required="true" />
        </div>

        <div class="form-group clearfix col-md-6">
            <label class="control-label">is dropdown menu?
                <star>*</star>
            </label>
            {!! Form::select('is_dropdown',[0=>'No',1=>'Yes'],null,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group clearfix col-md-6">
            <label class="control-label">Open in new teb
                <star>*</star>
            </label>
            {!! Form::select('new_tab',[0=>'No',1=>'Yes'],null,['class'=>'form-control','required']) !!}
        </div>

        <div class="form-group clearfix col-md-6">
            <label class="control-label">Status
                <star>*</star>
            </label>
            {!! Form::select('status',[1=>'Active',0=>'Inactive'],null,['class'=>'form-control','required']) !!}
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

