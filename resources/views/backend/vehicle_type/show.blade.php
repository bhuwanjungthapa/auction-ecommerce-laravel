@extends('layouts.backend') @section('title',$module.'Details') @section('head',$module) @section('content')

<div class="col-xl-12 col-md-12">
    <div class="card table-card">
        <div class="card-header">
            <h5>{{$module}}</h5>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Vehicle Title</th>
                                    <td>{{$data['record']->title}}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th>
                                    <td>{{$data['record']->slug}}</td>
                                </tr>
                                <tr>
                                    <th>Rank</th>
                                    <td>{{$data['record']->rank}}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td>{{$data['record']->image}}</td>
                                </tr>
                                <tr>
                                    <th>Meta Title</th>
                                    <td>{{$data['record']->meta_title}}</td>
                                </tr>
                                <tr>
                                    <th>Meta Keyword</th>
                                    <td>{{$data['record']->meta_keyword}}</td>
                                </tr>
                                <tr>
                                    <th>Meta Description</th>
                                    <td>{{$data['record']->meta_description}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data['record']->status}}</td>
                                </tr>
                                <tr>
                                    <th>Created By</th>
                                    <td>{{$data['record']->createdBy->name}}</td>
                                </tr>
                                <tr>
                                    <th>Updated By</th>
                                    <td>
                                        @if(!empty($data['record']->updated_by))
                                        {{$data['record']->updatedBy->name}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{$data['record']->created_at}}</td>
                                </tr>
                            </table>
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>

<!-- /.content -->
@endsection @section('js') @endsection
