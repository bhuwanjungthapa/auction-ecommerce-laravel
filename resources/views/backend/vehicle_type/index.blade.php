@extends('layouts.backend')
@section('title',$module.'List')
@section('head',$module)
@section('content')

    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h1>{{$module}}</h1>
                <div class="form-selectgroup form-selectgroup-pills" style="font-size: 15px">
                    <a href="{{route($base_route.'create')}}" style="font-size: 18px;margin-top: -10px;margin-left: 8px;text-decoration: none" class="form-selectgroup-label">Create</a>
                    <a href="{{route($base_route.'trash')}}" style="font-size: 18px;margin-top: -10px;margin-left: 8px;text-decoration: none" class="form-selectgroup-label">Trash</a>
                </div>
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
                                        <th>Vehicle Title</th>
                                        <th>Slug</th>
                                        <th>Rank</th>
                                        <th>Image</th>
                                        <th>Meta Title</th>
                                        <th>Meta Keyword</th>
                                        <th>Meta Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['records'] as $record)
                                        <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$record->title}}</td>
                                        <td>{{$record->slug}}</td>
                                        <td>{{$record->rank}}</td>
                                        <td>{{$record->image}}</td>
                                        <td>{{$record->meta_title}}</td>
                                        <td>{{$record->meta_keyword}}</td>
                                        <td>{{$record->meta_description}}</td>

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
