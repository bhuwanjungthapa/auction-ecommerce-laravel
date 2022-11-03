 @extends('layouts.backend')
 @section('title',$module.'Create')
 @section('head',$module)

 @section('content')

     <div class="col-xl-12 col-md-12">
         <div class="card table-card">
             <div class="card-header">
                 <h1>{{$module}}</h1>
                 <a href="{{route($base_route.'index')}}" class="btn btn-info">List</a>
                 <a href="{{route($base_route.'trash')}}" class="btn btn-info">Trash</a>
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


