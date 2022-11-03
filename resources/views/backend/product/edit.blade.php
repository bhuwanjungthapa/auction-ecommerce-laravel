@extends('layouts.backend') @section('title',$module.'Create') @section('content')
<!-- Content Header (Page header) -->
@include('backend.includes.breadcumb')


<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> {{$module}}
                <a href="{{route($base_route.'index')}}" class="btn btn-info">List</a>

            </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
            </div>
        </div>
        {!!Form::model($data['record'],['route' => [$base_route.'store'],'method'=>'post'])!!}
        @include($base_view .'main_form',['button'=>'Update'])
       {{Form::close()}}
        

        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection @section('js')
<script>
    $("#title").keyup(function() {
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
        $("#slug").val(Text);
    });
</script>
@endsection