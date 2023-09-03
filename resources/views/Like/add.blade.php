@extends('layouts.app')
@section('title', 'Add Blog')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Details
            </div>
            <form action="{{ route('like.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="status" class="req_fld">status</label>
                            <select id="status" class="form-control" name="status">
                                <option>Please Select</option>
                                <option value="Like" {{ old('status') == 'Like' ? 'selected' : '' }}>Like</option>
                                <option value="UnLike" {{ old('status') == 'UnLike' ? 'selected' : '' }}>UnLike</option>
                            </select>
                            @error('status')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



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
