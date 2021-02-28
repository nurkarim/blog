@extends('back.app')
@section('content')
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Articles</h3>
                <div class="float-right">
                    <a href="{{ route('posts.create') }}"  class="btn btn-primary btn-addon">Add New</a>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="display table" style="width: 100%; cellspacing: 0;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Language</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Post Type</th>
                            <th>Post By</th>
                            <th>Visibility</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=0;  ?>
                        @foreach($data as $value)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$value->language}}</td>
                                <td>{{@$value->category->name}}</td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->slug}}</td>
                                <td>@if($value->status==0) Disable @else Enable @endif</td>
                                <td>{{$value->updated_at}}</td>
                                <td>
                                    <button type="button"   data-toggle="modal" data-target="#modal" onclick="loadModal('{{route('subcategories.edit',$value->id)}}')"  class="btn btn-info btn-xs"><i class="fa fa-edit"></i></button>
                                    {!! Form::open(['url' => ['subcategories', $value->id],'method'=>'DELETE','style'=>'display:inline;']) !!}
                                    <button onclick="return deleteConfirm()" type="submit"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')


@endsection
