@extends('back.app')
@section('content')
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Scheduled Post</h3>
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
                            <th>Image</th>
                            <th>Language</th>
                            <th>Category</th>
                            <th>Post</th>
                            <th>Post Type</th>
                            <th>Post By</th>
                            <th>Visibility</th>
                            <th>View</th>
                            <th>Comment</th>
                            <th>Scheduled At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=0;  ?>
                        @foreach($data as $value)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>
                                    <div class="post-image">
                                        <img src="@if(isset($value->imageGallery)) {{ url('public') }}/{{$value->imageGallery->thumbnail}}  @else {{ url('public/default-image/default-100x100.png') }} @endif" width="200" height="200" alt="image" class="img-responsive img-thumbnail">
                                    </div>
                                </td>
                                <td>
                                    {{ @$value->languageName->name }}
                                </td>
                                <td>{{ @$value->category->name }}</td>
                                <td>   {{ $value->title }}</td>
                                <td>{{ $value->post_type }}</td>
                                <td>{{ @$value->user->name }}</td>
                                <td>
                                    @if($value->status==1) <label class="badge badge-success">Active</label> @else <label class="badge badge-danger">Inactive</label> @endif <br>
                                    @if($value->visibility==0) <i class="fa fa-lock"></i> @else <i class="fa fa-eye"></i> @endif
                                </td>
                                <td class="text-center">{{ $value->total_view }}</td>
                                <td class="text-center">{{ $value->total_comment }}</td>
                                <td>{{ $value->scheduled_date }}</td>
                                <td>
                                    @if($value->post_type=='video')
                                        <a href="{{route('video.postEdit',$value->id)}}"    class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                                    @else
                                        <a href="{{route('posts.edit',$value->id)}}"    class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                                    @endif
                                    {!! Form::open(['url' => ['posts', $value->id],'method'=>'DELETE','style'=>'display:inline;']) !!}
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
