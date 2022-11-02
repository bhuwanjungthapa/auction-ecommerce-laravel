@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>{{$module}}
                        <a href="{{route($base_route.'index')}}" class="btn btn-info">List</a>
                        <a href="{{route($base_route.'trash')}}" class="btn btn-warning">Trash</a>
                    </h5>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="row">
                        {!!Form::open(['route' => [$base_route.'store'],'method'=>'post'])!!}
                        @include($base_view .'main_form',['button'=>'Save'])
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

