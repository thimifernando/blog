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

 
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('myblog.index') }}" class="btn btn-info" type="button">Back</a>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                        <input type="hidden" name="id" value="{{$blog->id}}">
                        <input type="hidden" name="id" value="{{$blog->id}}">
                        @if ($blog->status)
                        <input type="hidden" name="status" value="Like">
                        <button class="btn btn-danger float-right" type="submit">Like</button>
  
                        @endif
                    </div>
                </div>
     
    </div>
</div>
@endsection