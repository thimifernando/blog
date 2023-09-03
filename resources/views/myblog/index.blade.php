@extends('layouts.app')
@section('title', 'Blog')


@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              
                <a href="{{ route('myblog.create') }}" class="btn btn-info float-right" type="button">Add New Blog</a>
            </div>
            <form action="{{ url()->current() }}">
 
                <div class="card-footer">
                    <div class="row">
   
                    </div>
                </div>
            </form>
        </div>
        <div class="card">
            <div class="card-header">
                Results
            </div>
            <div class="card-body">
                <table class="table table-light">
                    <thead class="thead-light">

                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blog as $blog)
                        <tr>
                        
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->content }}</td>
                        <td><a href="{{url('storage/'.$blog->img)}}">{{ $blog->title }}</a></td>
                        <td>                                    <a href="{{ route('myblog.show', ['id' => $blog->id]) }}"
                            class="btn btn-info">View</a>
                       <a href="{{ route('myblog.edit', ['id' => $blog->id]) }}"
                           class="btn btn-warning">Edit</a> 
                           <a href="{{ route('myblog.destroy', ['id' => $blog->id]) }}"
                               class="btn btn-danger">Delete</a></td>
                       
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
