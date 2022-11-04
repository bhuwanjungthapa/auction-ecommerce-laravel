<div class="col-md-12">
    <div class="form-group">
        {!!Form::label('title','Vehicle Title')!!}
        {!!Form::text ('title',null,['class'=> 'form-control','placeholder'=>'Vehicle Title','id'=>'title'])!!}
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('slug','Slug')!!}
        {!!Form::text ('slug',null,['class'=> 'form-control','placeholder'=>'Slug','id'=>'slug'])!!}
        @error('slug')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('rank','Rank')!!}
        {!!Form::number ('rank',null,['class'=> 'form-control','placeholder'=>'Rank'])!!}
        @error('rank')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('meta_title','Meta Title')!!}
        {!!Form::text ('meta_title',null,['class'=> 'form-control','placeholder'=>'Meta Title'])!!}
        @error('meta_title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('meta_keyword','Meta Keyword')!!}
        {!!Form::text ('meta_keyword',null,['class'=> 'form-control','placeholder'=>'Meta Keyword'])!!}
        @error('meta_keyword')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('meta_description','Meta Description')!!}
        {!!Form::text ('meta_description',null,['class'=> 'form-control','placeholder'=>'Meta Description'])!!}
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
