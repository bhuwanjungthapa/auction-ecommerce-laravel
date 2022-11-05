<div class="col-md-10">
    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group mb-3 row">
                    <label class="form-label col-3 col-form-label">Select</label>
                    <div class="col">
                        <select class="form-select">
                            <option>Option 1</option>
                            <option>Option 2</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-3 row">
                    <label class="form-label col-3 col-form-label">Select</label>
                    <div class="col">
                        <select class="form-select">
                            <option>Option 1</option>
                        </select>
                    </div>
                </div>


                <div class="form-group mb-3 row">
                    {!!Form::label('title','Title',['class'=>"form-label col-3 col-form-label"])!!}
                    <div class="col">
                        {!!Form::text ('title',null,['class'=> 'form-control','placeholder'=>'title','id'=>'title'])!!}
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3 row">
                    {!!Form::label('slug','Slug',['class'=>"form-label col-3 col-form-label"])!!}
                    <div class="col">
                        {!!Form::text ('slug',null,['class'=> 'form-control','placeholder'=>'slug','id'=>'slug'])!!}
                        @error('slug')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3 row">
                    {!!Form::label('rank','Rank',['class'=>"form-label col-3 col-form-label"])!!}
                    <div class="col">
                        {!!Form::text ('rank',null,['class'=> 'form-control','placeholder'=>'Rank'])!!}
                        @error('rank')
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

                <div class="form-footer">
                    {!!Form::submit($button .' '.$module,['class'=>'btn btn-success'])!!}
                    {!!Form::reset('Clear'.' '.$module,['class'=>'btn btn-danger'])!!}
                </div>
            </form>
        </div>
    </div>
</div>









