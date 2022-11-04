<div class="card-body">
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
        {!!Form::number ('stock',null,['class'=> 'form-control','placeholder'=>'stock'])!!}
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
        {!!Form::label('status','Status')!!} <br>
        {!!Form::radio('status','1',null)!!}Active
        {!!Form::radio('status','0',true)!!}Deactive
        @error('status')
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
</div>

