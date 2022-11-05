@extends('layouts.backend')
@section('title',$module.'Create')
@section('head',$module)

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
                    {!!Form::open(['route' => [$base_route.'store'],'method'=>'post','files'=>true])!!}
                    @include($base_view .'main_form',['button'=>'Save'])
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->
@endsection
@section('js')
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $("#title").keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
            $("#slug").val(Text);
        });
    </script>

    <script>
        var image_wrapper = $("#image_wrapper"); //Fields wrapper
        var add_button_image = $("#addMoreImage"); //Add button ID
        var x = 1;
        $(add_button_image).click(function (e) { //on add input button click
            e.preventDefault();
            var max_fields = 5; //maximum input boxes allowed
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                //add new row
                $("#image_wrapper tr:last").after(
                    '<tr>'+
                    '   <td> {!!  Form::file('image_file[]', null,['class' => 'form-control'])!!}'+
                    '   </td>'+
                    '   <td><input type="text" name="image_title[]" class="form-control" placeholder="Enter image_title Value"/></td>'+
                    '   <td>'+
                    '       <a class="btn btn-block btn-warning sa-warning remove_row"><i class="fa fa-trash"></i></a>'+
                    '   </td>'+
                    '</tr>'
                );
            }else{
                alert('Maximum Image Limit is 5');
            }
        });
        $(image_wrapper).on("click", ".remove_row", function (e) {
            e.preventDefault();
            $(this).parents("tr").remove();
            x--;
        });
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#task-textarea2'))
            .catch(error => {
                console.error(error);
            });

    </script>


@endsection
