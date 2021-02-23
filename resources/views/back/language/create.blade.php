<script type="text/javascript">
    $(".modal-title").text("New");
    $(".modal-dialog").addClass('modal-md');
</script>
<div class="row">
    <div class="col-md-12">
        {!! Form::open(['url'=>URL::to('languages'),'id'=>'myForm','files'=>true]) !!}
        <div class="form-group clearfix">
            <label class="control-label">Icon
                <star>*</star>
            </label>
            {!! Form::select('icon_class',$flagIcons,null,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group clearfix">
            <label class="control-label">Name
                <star>*</star>
            </label>
            <input class="form-control" maxlength="50" name="name" type="text" required="true" placeholder="Start typing here"/>
        </div>

        <div class="form-group clearfix">
            <label class="control-label">Code
                <star>*</star>
            </label>
            <input class="form-control" maxlength="10" name="code" type="text" required="true" placeholder="Start typing here"/>
        </div>
        <div class="form-group clearfix">
            <label class="control-label">Script
                <star>*</star>
            </label>
            <input class="form-control"  name="script" type="text" required="true" placeholder=""/>
        </div>
        <div class="form-group clearfix">
            <label class="control-label">Native
                <star>*</star>
            </label>
            <input class="form-control"  name="native" type="text" required="true" placeholder=""/>
        </div>
        <div class="form-group clearfix">
            <label class="control-label">Regional
                <star>*</star>
            </label>
            <input class="form-control"  name="regional" type="text" required="true" placeholder=""/>
        </div>
        <div class="form-group clearfix">
            <label class="control-label">Text Direction
                <star>*</star>
            </label>
            {!! Form::select('text_direction',['ltr'=>'LTR','rtl'=>'RTL'],null,['class'=>'form-control','required']) !!}
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
