@extends('layouts.app')
@section('title', 'Edit Profile')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Details
        </div>
        <form action="{{ route('user.update', ['user' => $use->id]) }}" method="POST">
            @csrf
           
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="fname" class="req_fld">First Name</label>
                        <input class="form-control" type="text" name="fname" value="{{old('fname', $use->fname)}} "
                            autocomplete="off">
                            @error('fname')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror

                    </div>
   

                    <div class="col-md-4 form-group">
                        <label for="lname" class="req_fld">Last Name</label>
                        <input class="form-control" type="text" name="lname" value="{{old('lname', $use->lname)}} "
                            autocomplete="off">
                            @error('name')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror


                    </div>
                    <div class="col-md-4 form-group">
                        <label for="email" class="req_fld">Email</label>
                        <input class="form-control" type="text" name="email"
                            value="{{old('email', $use->email)}} ">
                            @error('email')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror

                    </div>
                </div>
                <div class="row">


                    <div class="col-md-4 form-group">
                        <label for="birthday">Birthday</label>
                        <input class="form-control" type="date" name="birthday" value="{{old('birthday', $use->birthday)}}"
                            autocomplete="off">
                            @error('birthday')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror

                       
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="phone" class="req_fld">Contact Number</label>
                        <input class="form-control" type="text" name="phone"
                            value="{{old('phone', $use->phone)}}">
                            @error('phone')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror


                    </div>
                    

                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        {{-- <a href="{{ route('employee.index') }}" class="btn btn-info" type="button">Back</a>
                        <button class="btn btn-secondary" type="reset">Reset</button> --}}
                        <button class="btn btn-warning float-right" type="submit">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection