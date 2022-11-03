<div class="card-body">
    <div class="form-group">
        {!!Form::label('vehicle_type_id','vehicle type')!!}
        {!!Form::select('vehicle_type_id',$data['vehicletype'],null,['class'=> 'form-control', 'placeholder' => 'Select vehicle type','id' => 'vehicle_type_id'])!!}
    <div class="form-group">
        {!!Form::label('brand_id','brand id')!!}
        {!!Form::select('brand_id',$data['vehicle'],null,['class'=> 'form-control', 'placeholder' => 'Select brand','id' => 'brand_id'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('title','Title')!!} {!!Form::text ('title',null,['class'=> 'form-control','placeholder'=>'Title'])!!} @error('title')
        <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        {!!Form::label('slug','Slug')!!} {!!Form::text ('slug',null,['class'=> 'form-control','placeholder'=>'Slug'])!!} @error('slug')
        <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        {!!Form::label('specification','specification')!!} {!!Form::text('specification',null,['class'=> 'form-control','placeholder'=>'specification'])!!} @error('specification')
        <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        {!!Form::label('stock','stock')!!} {!!Form::number('stock',null,['class'=> 'form-control','placeholder'=>'stock'])!!} @error('stock')
        <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        {!!Form::label('quantity','Quantity')!!} {!!Form::number('quantity',null,['class'=> 'form-control','placeholder'=>'quantity'])!!} @error('quantity')
        <span class="text-danger">{{$message}}</span> @enderror
    </div>
        <div class="form-group">
            {!!Form::label('price','Price')!!} {!!Form::number('price',null,['class'=> 'form-control','placeholder'=>'price'])!!} @error('price')
            <span class="text-danger">{{$message}}</span> @enderror
        </div>
    <div class="form-group">
        {!!Form::label('meta_title','meta_title')!!} {!!Form::textarea('meta_title',null,['class'=> 'form-control','rows' => 5, 'id' => 'task-textarea','placeholder'=>'meta_title'])!!} @error('specification')
        <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        {!!Form::label('meta_keyword','meta_keyword')!!} {!!Form::textarea('meta_keyword',null,['class'=> 'form-control','rows' => 5,'id' => 'task-textarea2','placeholder'=>'meta_keyword'])!!} @error('meta_keyword')
        <span class="text-danger">{{$message}}</span> @enderror
    </div>
        <div class="form-group">
            {!!Form::label('meta_description','meta_description')!!} {!!Form::textarea('meta_description',null,['class'=> 'form-control','rows' => 5,'id' => 'task-textarea2','placeholder'=>'meta_description'])!!} @error('meta_description')
            <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            {!!Form::label('description','description')!!} {!!Form::textarea('description',null,['class'=> 'form-control','rows' => 5,'id' => 'task-textarea2','placeholder'=>'description'])!!} @error('description')
            <span class="text-danger">{{$message}}</span> @enderror
        </div>
    <div class="form-group">
        {!!Form::label('status','Status')!!} <br>
        <input type="radio" name="status" value="1"> Enable<br>
        <input type="radio" name="status" value="2" checked> Disable<br>
    </div>


</div>
{{--
<div class="card-footer">
    {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!} {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!} <br>
</div> --}}
