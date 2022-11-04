<div class="card-body">
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
</div>

