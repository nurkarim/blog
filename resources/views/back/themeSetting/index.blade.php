@extends('back.app')
@section('content')
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Theme Sections</h3>
                <div class="float-right">
                    <a href="{{ route("themeSettings.create") }}" class="btn btn-primary btn-addon">Add New</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="display table" style="width: 100%; cellspacing: 0;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Title</th>
                            <th>View Order</th>
                            <th>Section Style</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                        ?>
                        @foreach($data as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <th>@if($item->type==1) Category @else Video @endif</th>
                                <th>{{ @$item->category->name }}</th>
                                <th>{{ $item->view_order }}</th>
                                <th>{{ $item->section_style }}</th>
                                <th>
                                    Status:@if($item->status==1) <label class="badge badge-success">Active</label> @else <label class="badge badge-danger">Inactive</label> @endif
                                    <br>
                                    Show Ads:@if($item->show_ads==1) <label class="badge badge-success">Yes</label> @else <label class="badge badge-danger">No</label> @endif

                                </th>
                                <th>
                                    <button type="button"   data-toggle="modal" data-target="#modal" onclick="loadModal('{{route('themeSettings.edit',$item->id)}}')"  class="btn btn-info btn-xs"><i class="fa fa-edit"></i></button>
                                    {!! Form::open(['url' => ['themeSettings', $item->id],'method'=>'DELETE','style'=>'display:inline;']) !!}
                                    <button onclick="return confirm('Are you sure you want to delete this?');" type="submit"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </th>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        function changeTypeC(value) {
            if (value=="page"){
                $(".cat").hide();
                $(".page").show();
            }else{
                $(".page").hide();
                $(".cat").show();
            }
        }
    </script>
@endsection
