<div class="col-md-12">

    <div class="form-group">
        {!!Form::label('title','Title')!!}
        {!!Form::text ('title',null,['class'=> 'form-control','placeholder'=>'Title','id'=>'title'])!!}
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('slug','Slug')!!}
        {!!Form::text ('slug',null,['class'=> 'form-control','placeholder'=>'slug','id'=>'slug'])!!}
        @error('slug')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


    <div class="form-group">
        {!!Form::label('rank','rank')!!}
        {!!Form::text ('rank',null,['class'=> 'form-control','placeholder'=>'rank'])!!}
        @error('rank')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="image">image</label>
        <input type="file" name="image" class="form-control" id="image" >
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('meta_title','meta_title')!!}
        {!!Form::text ('meta_title',null,['class'=> 'form-control','placeholder'=>'meta_title'])!!}
        @error('meta_title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('meta_keyword','meta_keyword')!!}
        {!!Form::text ('meta_keyword',null,['class'=> 'form-control','placeholder'=>'meta_title'])!!}
        @error('meta_keyword')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('meta_description','meta_description')!!}
        {!!Form::text ('meta_description',null,['class'=> 'form-control','placeholder'=>'meta_description'])!!}
        @error('meta_description')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>



    <div class="form-group">
        {!!Form::label('status','Status')!!} <br>
        {!!Form::radio('status','1',null)!!}Active
        {!!Form::radio('status','0',true)!!}Deactive
        @error('status')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

</div>
<div class="card-footer">
    {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
</div>

