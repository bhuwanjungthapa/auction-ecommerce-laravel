<div class="col-md-12">

    <div class="form-group">
        {!!Form::label('vehicles_id','Select Vehicle')!!}
        {!!Form::select ('vehicles_id',$data['vehicles'],null,['class'=> 'form-control'])!!}
        @error('vehicle_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('title','Name')!!}
        {!!Form::text ('title',null,['class'=> 'form-control','placeholder'=>'Name'])!!}
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!!Form::label('slug','Slug')!!}
        {!!Form::text ('slug',null,['class'=> 'form-control','placeholder'=>'Slug'])!!}
        @error('slug')
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
        {!!Form::label('start_date','Start date')!!}
        {!!Form::date ('start_date',\Carbon\Carbon::now())!!}
        @error('start_date')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


    <div class="form-group">
        {!!Form::label('start_time','Start time')!!}
        {!! Form::time('field_name', \Carbon\Carbon::now()->format('h:i'), ['class'=>'form-control']) !!}
        @error('start_time')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


    <div class="form-group">
    {!!Form::label('end_date','End date')!!}
    {!!Form::date ('end_date',\Carbon\Carbon::now())!!}
    @error('end_date')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>


    <div class="form-group">
        {!!Form::label('end_time','end time')!!}
        {!! Form::time('end_time', \Carbon\Carbon::now()->format('h:i'), ['class'=>'form-control']) !!}
        @error('end_time')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


<div class="form-group">
    {!!Form::label('base_price','Base Price')!!}
    {!!Form::number ('base_price',null,['class'=> 'form-control','placeholder'=>'base_price'])!!}
    @error('base_price')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>


</div>
    <div class="card-footer">
        {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
        {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
    </div>

@section('js')
    <script>
        $('#title').keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $('#slug').val(Text);
        });
    </script>
@endsection
