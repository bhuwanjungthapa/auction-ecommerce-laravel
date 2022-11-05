<div class="col-md-8" style="margin-left: 20px">

    <div class="form-group mb-3 row">
        {!!Form::label('vehicle_type_id','Vehicle Type',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::select ('vehicle_type_id',$data['vehicletypes'],null,['class'=> 'form-control'])!!}
            @error('vehicle_type_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>


    <div class="form-group mb-3 row">
        {!!Form::label('brand_id ','Brand Type',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::select ('brand_id',$data['brands'],null,['class'=> 'form-control'])!!}
            @error('brand_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        {!!Form::label('title','Title',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::text ('title',null,['class'=> 'form-control','placeholder'=>'Title','id'=>'title'])!!}
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group mb-3 row">
        {!!Form::label('slug','Slug',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::text ('slug',null,['class'=> 'form-control','placeholder'=>'Slug','id'=>'slug'])!!}
            @error('slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group mb-3 row">
        {!!Form::label('specification','Specification',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::text ('specification',null,['class'=> 'form-control','placeholder'=>'specification Keyword'])!!}
            @error('specification')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group mb-3 row">
        {!!Form::label('stock','stock',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::number('stock',null,['class'=> 'form-control','placeholder'=>'stock'])!!}
            @error('stock')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group mb-3 row">
        {!!Form::label('quantity','quantity',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::number ('quantity',null,['class'=> 'form-control','placeholder'=>'quantity'])!!}
            @error('quantity')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group mb-3 row">
        {!!Form::label('price','price',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::number ('price',null,['class'=> 'form-control','placeholder'=>'price'])!!}
            @error('price')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group mb-3 row">
        {!!Form::label('meta_title','Meta Title',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::text ('meta_title',null,['class'=> 'form-control','placeholder'=>'Meta Title'])!!}
            @error('meta_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        {!!Form::label('meta_keyword','Meta Keyword',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::text ('meta_keyword',null,['class'=> 'form-control','placeholder'=>'Meta Keyword'])!!}
            @error('meta_keyword')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        {!!Form::label('meta_description','Meta Description',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::text ('meta_description',null,['class'=> 'form-control','placeholder'=>'Meta Description'])!!}
            @error('meta_description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group mb-3 row">
        {!!Form::label('description','Description',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::text ('description',null,['class'=> 'form-control','placeholder'=>'Description'])!!}
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group mb-3 row">
        {!!Form::label('status','Status',['class'=>"form-label col-3 col-form-label"])!!}
        <div class="col">
            {!!Form::radio('status','1',null)!!}Active
            <div class="col">
                {!!Form::radio('status','0',true)!!}Deactive
            </div>
            @error('status')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        @include($base_view . 'includes.image')
    </div>

</div>
<div class="form-group">
    {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
</div>
