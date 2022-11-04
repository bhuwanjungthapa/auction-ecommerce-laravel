<div class="col-md-12">

    <div class="form-group">
        {!!Form::label('vehicle_type_id ','Vehicle Type')!!}
        {!!Form::select ('vehicle_type_id',$data['vehicletypes'],null,['class'=> 'form-control'])!!}
        @error('vehicle_type_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('brand_id ','Brand Type')!!}
        {!!Form::select ('brand_id',$data['brands'],null,['class'=> 'form-control'])!!}
        @error('brand_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('title','Title')!!}
        {!!Form::text ('title',null,['class'=> 'form-control','placeholder'=>'Title','id'=>'title'])!!}
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
        {!!Form::label('specification','Specification')!!}
        {!!Form::text ('specification',null,['class'=> 'form-control','placeholder'=>'specification Keyword'])!!}
        @error('specification')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('stock','stock')!!}
        {!!Form::number('stock',null,['class'=> 'form-control','placeholder'=>'stock'])!!}
        @error('stock')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('quantity','quantity')!!}
        {!!Form::number ('quantity',null,['class'=> 'form-control','placeholder'=>'quantity'])!!}
        @error('quantity')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('price','price')!!}
        {!!Form::number ('price',null,['class'=> 'form-control','placeholder'=>'price'])!!}
        @error('price')
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
        {!!Form::label('description','Description')!!}
        {!!Form::text ('description',null,['class'=> 'form-control','placeholder'=>'Description'])!!}
        @error('description')
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

    <div class="form-group">
        @include($base_view . 'includes.image')
    </div>

</div>
<div class="card-footer">
    {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
</div>
