
<div class="card-body">
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

</div>
