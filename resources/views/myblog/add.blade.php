@extends('layouts.app')
@section('title', 'Add Blog')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Details
            </div>
            <form action="{{ route('myblog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="title" class="req_fld">Title</label>
                            <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                            @error('title')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="content" class="req_fld">Content</label>
                            <input class="form-control" type="text" name="content" value="{{ old('content') }}"
                                autocomplete="off">
                            @error('content')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="col-md-4 form-group">
                            <label for="img" class="req_fld">Image</label>
                            <input class="form-control" type="file" name="img">
                        @error('img')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror



                        </div>
                    </div>
            
                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            {{-- <a href="{{ route('tutorial.index') }}" class="btn btn-info" type="button">Back</a> --}}
                            <button class="btn btn-secondary" type="reset">Reset</button>
                            <button class="btn btn-primary float-right" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
