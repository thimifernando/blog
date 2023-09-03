@extends('layouts.app')
@section('title', 'Student')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Details
        </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="title" class="req_fld">Title</label>
                        <input class="form-control" type="text" disabled value="{{$blog->title}}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="content" class="req_fld">content</label>
                        <input class="form-control" type="text" disabled value="{{$blog->content}}" autocomplete="off">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="img" class="req_fld">Image</label>
                        <input class="form-control" type="text" disabled value="{{$blog->img}}">
                    </div>


            <a href="{{ route('like.create') }}" class="btn btn-warning float-right" type="button">Like</a>
 
                </div>
            </div>
    </div>
                        
     
    </div>
</div>
@endsection