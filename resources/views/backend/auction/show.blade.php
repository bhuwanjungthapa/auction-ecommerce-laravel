@extends('layouts.backend')

@section('content')
    <div class="container">
        <<div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>{{$module}}
                        <a href="{{route($base_route.'create')}}" class="btn btn-info">Create</a>
                        <a href="{{route($base_route.'index')}}" class="btn btn-info">List</a>
                        <a href="{{route($base_route.'edit',$data['record']->id)}}"class="btn btn-warning">Edit</a>
                        <a href="{{route($base_route.'trash')}}" class="btn btn-warning">Trash</a>
                    </h5>
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
                                            <th>Titlw</th>
                                            <td>{{$data['record']->title}}</td>
                                        </tr>

                                        <tr>
                                            <th>status</th>
                                            <td>{{$data['record']->status}}</td>
                                        </tr>

                                        <tr>
                                            <th>vehicle_id</th>
                                            <td>{{$data['record']->vehicle_id}}</td>
                                        </tr>

                                        <tr>
                                            <th>start_date</th>
                                            <td>{{$data['record']->start_date}}</td>
                                        </tr>

                                        <tr>
                                            <th>start_time</th>
                                            <td>{{$data['record']->start_time}}</td>
                                        </tr>

                                        <tr>
                                            <th>end_date</th>
                                            <td>{{$data['record']->end_date}}</td>
                                        </tr>

                                        <tr>
                                            <th>end_time</th>
                                            <td>{{$data['record']->end_time}}</td>
                                        </tr>

                                        <tr>
                                            <th>base_price</th>
                                            <td>{{$data['record']->base_price}}</td>
                                        </tr>

                                        <tr>
                                            <th>Created At</th>
                                            <td>{{$data['record'] ->created_at}}</td>

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
