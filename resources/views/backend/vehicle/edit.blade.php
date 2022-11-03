@extends('layouts.backend')
 @section('title',$module.'Create')
 @section('head',$module)
 @section('css')
 <style>
 input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
  </style>
}

 @endsection
 @section('content')

     <div class="col-xl-12 col-md-12">
         <div class="card table-card">
             <div class="card-header">
                 <h1>{{$module}}
                     <a href="{{route($base_route.'create')}}" class="btn btn-info">Create</a>
                     <a href="{{route($base_route.'index')}}" class="btn btn-info">List</a>
                     <a href="{{route($base_route.'trash')}}" class="btn btn-info">Trash</a>
                 </h1>
             </div>
             <div class="col-xl-12 col-md-12">
                 <div class="row">
                     {!!Form::model($data['record'],['route' => [$base_route.'update',$data['record']->id],'method'=>'post'])!!}
                     {!!Form::hidden('_method','PUT')!!}
                     @include($base_view .'main_form',['button'=>'Update'])
                     {{Form::close()}}

                 </div>
             </div>
         </div>
     </div>

<!-- /.content -->
@endsection
@section('js')
@endsection
