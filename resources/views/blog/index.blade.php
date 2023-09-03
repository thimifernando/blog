@extends('layouts.app')
@section('title', 'Blog')


@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Search
                <a href="{{ route('blog.create') }}" class="btn btn-info float-right" type="button">Add New Blog</a>
            </div>
            <form action="{{ url()->current() }}">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="title">Title</label>
                            <input class="form-control" type="text" name="title" value="{{ request()->get('title') }}">
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <a href="{{ url()->current() }}" class="btn btn-secondary" type="button">Reset</a>
                            <button class="btn btn-primary float-right" type="submit">Search</button>
                           
                        </div>
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

                        @forelse ($blog as $blog)
                            <tr>



                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->content }}</td>
                                <td><a href="{{url('storage/'.$blog->img)}}">{{ $blog->title }}</a></td>

                               

                                <td>
                                    <a href="{{ route('blog.show', ['id' => $blog->id]) }}" class="btn btn-info">View and Like</a>
                                    {{-- <a href="{{ route('like.store', ['id' => $blog->id]) }}"
                                        class="btn btn-warning">Like</a> --}}
                                    {{-- <a href="{{ route('blog.destroy', ['blog' => $blog->id]) }}"
                                        class="btn btn-danger">Delete</a> --}}
                                </td> 

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    No Data Available
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
