@extends('layouts.backend')
@section('title',$module.'Create')
@section('head',$module)
@section('css')
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
 </style>


@endsection
@section('content')

    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Brands</h5>
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

<!-- /.content -->
@endsection

@section('js')

@endsection
