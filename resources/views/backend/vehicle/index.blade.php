@extends('layouts.backend')
@section('title',$module.'List')
@section('head',$module)
@section('content')

    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>{{$module}}
                    <a href="{{route($base_route.'create')}}" class="btn btn-info">Create</a>
                    <a href="{{route($base_route.'trash')}}" class="btn btn-info">Trash</a>
                </h5>
            </div>
            @if(session('success'))
                <p style="background: green; padding:10px">{{session('success')}}</p>

            @endif
            @if(session('error'))
                <p style="background: red">{{session('error')}}</p>
            @endif
            <div class="col-xl-12 col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>title</th>
                                        <th>vehicle_type_id</th>
                                        <th>brand_id</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['records'] as $record)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$record->id}}</td>
                                            <td>{{$record->title}}</td>
                                            <td>{{$record->vehicle_type_id}}</td>
                                            <td>{{$record->brand_id}}</td>

                                            <td>
                                                @include('backend.status',['status'=>$record->status])
                                            </td>

                                            <td>
                                                <a href="{{route($base_route.'show',$record->id)}}" class="btn btn-primary">ViewDetails</a>
                                                <a href="{{route($base_route.'edit',$record->id)}}"class="btn btn-warning">Edit</a>
                                                <form action="{{route($base_route.'destroy',$record->id)}}" method="post" style="display:inline-block">
                                                    @method("delete")
                                                    @csrf
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- /.content -->
@endsection
@section('js')
@endsection
