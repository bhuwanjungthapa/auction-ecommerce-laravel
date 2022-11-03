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
                 <h5>{{$module}}</h5>
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
