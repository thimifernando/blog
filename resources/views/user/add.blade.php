@extends('layouts.app')
@section('title', 'Registration')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Details
            </div>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="name" class="req_fld">First Name</label>
                            <input class="form-control" type="text" name="fname" value="{{ old('fname') }}">
                            @error('fname')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="name" class="req_fld">Last Name</label>
                            <input class="form-control" type="text" name="lname" value="{{ old('lname') }}">
                            @error('name')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="email" class="req_fld">Email</label>
                            <input class="form-control" type="text" name="email" value="{{ old('email') }}"
                                autocomplete="off">
                            @error('email')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="password" class="req_fld">Password</label>
                            <input class="form-control" type="password" name="password" value="{{ old('password') }}">
                            @error('password')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror


                        </div>
                        <div class="col-md-4 form-group">
                            <label for="password_confirmation" class="req_fld">Confirm Password</label>
                            <input class="form-control" type="password" name="password_confirmation">

                        </div>

                        <div class="col-md-4 form-group">
                            <label for="date" class="req_fld">Birthday</label>
                            <input class="form-control" type="date" name="birthday">
                            @error('birthday')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>



                        <div class="col-md-4 form-group">
                            <label for="phone" class="req_fld">Mobile</label>
                            <input class="form-control" type="number" name="phone">
                            @error('phone')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>






                    </div>
                    <div class="row">



                            {{-- @dump($errors) --}}

                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            {{-- <a href="{{ route('employee.index') }}" class="btn btn-info" type="button">Back</a> --}}
                            {{-- <button class="btn btn-secondary" type="reset">Reset</button> --}}
                            <button class="btn btn-primary float-right" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
