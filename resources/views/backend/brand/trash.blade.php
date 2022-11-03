@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h1>{{$module}}
                        <a href="{{route($base_route.'create')}}" class="btn btn-info">Create</a>
                        <a href="{{route($base_route.'index')}}" class="btn btn-info">List</a>
                    </h1>
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
                                            <th>Title</th>
                                            <th>vehicle_id</th>
                                            <th>start_date</th>

                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data['records'] as $record)
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$record->id}}</td>
                                                <td>{{$record->title}}</td>
                                                <td>{{$record->vehicle_id}}</td>
                                                <td>{{$record->start_date}}</td>

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
    </div>
@endsection
