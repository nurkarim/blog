@extends('back.app')
@section('content')
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Categories</h3>
                <div class="float-right">
                    <button type="button" data-toggle="modal" data-target="#modal" onclick="loadModal('{{ route("categories.create") }}')"  class="btn btn-primary btn-addon">Add New</button>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="display table" style="width: 100%; cellspacing: 0;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Language</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Last modified</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=0;  ?>
                        @foreach($categories as $data)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->slug}}</td>
                                <td>@if($data->status==0) Disable @else Enable @endif</td>
                                <td>{{$data->updated_at}}</td>
                                <td>
                                    <button type="button"   data-toggle="modal" data-target="#modal" onclick="loadModal('{{route('categories.edit',$data->id)}}')"  class="btn btn-info btn-xs"><i class="fa fa-edit"></i></button>
                                    {!! Form::open(['url' => ['categories', $data->id],'method'=>'DELETE','style'=>'display:inline;']) !!}
                                    <button onclick="return deleteConfirm()" type="submit"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')


@endsection
