@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h1>{{$module}}</h1>
                    <div class="form-selectgroup form-selectgroup-pills" style="font-size: 15px">
                        <a href="{{route($base_route.'create')}}" style="font-size: 18px;margin-top: -10px;margin-left: 8px;text-decoration: none" class="form-selectgroup-label">Create</a>
                        <a href="{{route($base_route.'index')}}" style="font-size: 18px;margin-top: -10px;margin-left: 8px;text-decoration: none" class="form-selectgroup-label">List</a>
                        <a href="{{route($base_route.'edit',$data['record']->id)}}" style="font-size: 18px;margin-top: -10px;margin-left: 8px;text-decoration: none" class="form-selectgroup-label">Edit</a>
                        <a href="{{route($base_route.'trash')}}" style="font-size: 18px;margin-top: -10px;margin-left: 8px;text-decoration: none" class="form-selectgroup-label">Trash</a>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card-body table-border-style">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>ID</th>
                                            <td>{{$data['record']->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td>{{$data['record']->title}}</td>
                                        </tr>

                                        <tr>
                                            <th>slug</th>
                                            <td>{{$data['record']->slug}}</td>
                                        </tr>

                                        <tr>
                                            <th>rank</th>
                                            <td>{{$data['record']->rank}}</td>
                                        </tr>

                                        <tr>
                                            <th>Status</th>
                                            <td>{{$data['record']->status}}</td>
                                        </tr>

                                        <tr>
                                            <th>image</th>
                                            <td>{{$data['record']->image}}</td>
                                        </tr>

                                        <tr>
                                            <th>meta_title</th>
                                            <td>{{$data['record']->meta_title}}</td>
                                        </tr>

                                        <tr>
                                            <th>meta_keyword</th>
                                            <td>{{$data['record']->meta_keyword}}</td>
                                        </tr>

                                        <tr>
                                            <th>meta_description</th>
                                            <td>{{$data['record']->meta_description}}</td>
                                        </tr>

                                        <tr>
                                            <th>Created At</th>
                                            <td>{{$data['record'] ->created_at}}</td>

                                        </tr>

                                        <tr>
                                            <th>Updated At</th>
                                            <td>{{$data['record'] ->updated_at}}</td>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
