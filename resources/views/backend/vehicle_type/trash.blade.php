@extends('layouts.backend') @section('title',$module.'List') @section('head',$module) @section('content')

<div class="col-xl-12 col-md-12">
    <div class="card table-card">
        <div class="card-header">
            <h1>{{$module}}</h1>
            <div class="form-selectgroup form-selectgroup-pills" style="font-size: 15px">
                <a href="{{route($base_route.'create')}}" style="font-size: 18px;margin-top: -10px;margin-left: 8px;text-decoration: none" class="form-selectgroup-label">Create</a>
                <a href="{{route($base_route.'index')}}" style="font-size: 18px;margin-top: -10px;margin-left: 8px;text-decoration: none" class="form-selectgroup-label">List</a>
            </div>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
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
                                        <td>{{$record->status}}</td>
                                        <td>
                                            <form action="{{route($base_route.'restore',$record->id)}}" method="post" style="display:inline-block">
                                                @csrf
                                                <input type="submit" class="btn btn-primary" value="Restore">
                                            </form>
                                            <form action="{{route($base_route.'force_delete',$record->id)}}" method="post" style="display:inline-block">
                                                @method("delete") @csrf
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
@endsection @section('js') @endsection
