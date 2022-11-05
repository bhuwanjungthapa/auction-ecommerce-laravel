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
                <h1>{{$module}}</h1>
                <div class="form-selectgroup form-selectgroup-pills" style="font-size: 15px">
                    <a href="{{route($base_route.'index')}}" style="font-size: 18px;margin-top: -10px;margin-left: 8px;text-decoration: none" class="form-selectgroup-label">List</a>
                    <a href="{{route($base_route.'trash')}}" style="font-size: 18px;margin-top: -10px;margin-left: 8px;text-decoration: none" class="form-selectgroup-label">Trash</a>
                </div>
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
    <script>

        $("#title").keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("#slug").val(Text);

        });
    </script>
@endsection
