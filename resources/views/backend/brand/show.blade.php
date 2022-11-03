@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h1>{{$module}}
                        <a href="{{route($base_route.'create')}}" class="btn btn-info">Create</a>
                        <a href="{{route($base_route.'index')}}" class="btn btn-info">List</a>
                        <a href="{{route($base_route.'edit',$data['record']->id)}}"class="btn btn-warning">Edit</a>
                        <a href="{{route($base_route.'trash')}}" class="btn btn-warning">Trash</a>
                    </h1>
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
