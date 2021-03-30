@extends('back.app')
@section('content')
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Page List</h3>
                <div class="float-right">
                    <button type="button"    class="btn btn-primary btn-addon">Add New</button>
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
                                <th>{{ $item->language }}</th>
                                <th>{{ $item->title }}</th>
                                <th>
                                    <button type="button"   data-toggle="modal" data-target="#modal" onclick="loadModal('{{route('menu-items.edit',$item->id)}}')"  class="btn btn-info btn-xs"><i class="fa fa-edit"></i></button>
                                    {!! Form::open(['url' => ['menu-items', $item->id],'method'=>'DELETE','style'=>'display:inline;']) !!}
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

@endsection
