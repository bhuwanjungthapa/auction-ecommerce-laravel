@extends('layouts.backend') @section('title',$module.'Create') @section('content')
<!-- Content Header (Page header) -->
@include('backend.includes.breadcumb')

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    
        
    <div class="card-body">
        <div class="card">
             {!!Form::open(['route' => [$base_route.'store'],'method'=>'post','files'=>true])!!}
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">Create Product

              <a href="{{route($base_route.'index')}}" class="btn btn-info">List</a>

              </h3>
              
              <ul class="nav nav-pills ml-auto p-2">
                <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Basic Info</a></li>
                <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Meta Info</a></li>
                <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Image</a></li>
                <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Attributes</a></li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">        
                    @include($base_view . 'includes.basic_info')
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    @include($base_view . 'includes.meta')
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    @include($base_view . 'includes.image')
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4">
                    @include($base_view . 'includes.attribute')
                </div>
                  <!-- /.tab-pane -->
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Save Product</button>
            </div>
            {{Form::close()}}
        
       

</section>
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
    var attribute_wrapper = $("#attribute_wrapper"); //Fields wrapper
    var add_button_attribute = $("#addMoreAttribute"); //Add button ID
    var y = 1;
    $(add_button_attribute).click(function (e) { //on add input button click
        e.preventDefault();
        var max_fields = 5; //maximum input boxes allowed
        if (y < max_fields) { //max input box allowed
            y++; //text box increment
            //add new row
            $("#attribute_wrapper tr:last").after(
                '<tr>'+
                '   <td>{!! Form::select('option_id[]',$data['options'],null,['class' => 'form-control','placeholder' => "Select Attribute"]) !!}'+
                '   </td>'+
                '   <td><input type="text" name="option_value[]" class="form-control" placeholder="Enter Option Value"/></td>'+
                '   <td>'+
                '       <a class="btn btn-block btn-warning sa-warning remove_row"><i class="fa fa-trash"></i></a>'+
                '   </td>'+
                '</tr>'
            );
        }else{
            alert('Maximum Attribute Limit is 5');
        }
    });
    //remove row
    $(attribute_wrapper).on("click", ".remove_row", function (e) {
        e.preventDefault();
        $(this).parents("tr").remove();
        y--;
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        
    });
    $('#categories_id').change(function()
    {
        var catid = $(this).val();
        $.ajax({
            method: "POST",
            url: "{{route('backend.category.get_subcategory')}}",
            data:{'id':catid},
            success:function (resp){
                console.log(resp);
               $('#subcategories_id').html(resp);
            }
        });
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

