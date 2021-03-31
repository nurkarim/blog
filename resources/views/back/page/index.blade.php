@extends('back.app')
@section('content')
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Page List</h3>
                <div class="float-right">
                    <a href="{{ route('pages.create') }}"   class="btn btn-primary btn-addon">Add New</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="display table table-bordered table-striped" style="width: 100%; cellspacing: 0;">
                        <thead class="table-warning">
                        <tr>
                            <th>#</th>
                            <th>Language</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Visibility</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                        ?>
                        @foreach($data as $value)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $value->language }}</td>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->slug }}</td>
                                <td>
                                    @if ( $value->visibility==1)
                                        <i class="fas fa-eye"></i>
                                    @else
                                        <i class="fas fa-eye-slash "></i>
                                    @endif
                                </td>

                                <td>{{ $value->created_at }}</td>
                                <td>
                                    <a href="{{route('pages.edit',$value->id)}}"  class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    {!! Form::open(['url' => ['pages', $value->id],'method'=>'DELETE','style'=>'display:inline;']) !!}
                                    <button onclick="return confirm('Are you sure you want to delete this?');" type="submit"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button>
                                    {!! Form::close() !!}
                                </td>
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

@endsection
