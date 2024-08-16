@extends('layouts.master')

@section('content')

<div class="main-content mt-4">

    <div class="card border-0" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <div class="card-header d-flex justify-content-between align-items-center text-white" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <h3 class="mb-0">Trashed Post</h3>
            <div>
                <a class="btn btn-light btn-sm" href="{{ route('posts.create') }}" style="border-radius: 20px; padding: 5px 15px; margin-right: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s, color 0.3s;">Create</a>
                <a class="btn btn-warning btn-sm" href="{{ route('posts.index') }}" style="border-radius: 20px; padding: 5px 15px; margin-right: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s, color 0.3s;">All Posts</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 10%">Image</th>
                        <th scope="col" style="width: 20%">Title</th>
                        <th scope="col" style="width: 30%">Description</th>
                        <th scope="col" style="width: 10%">Category</th>
                        <th scope="col" style="width: 10%">Publish Date</th>
                        <th scope="col" style="width: 20%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td><img src="{{ asset($post->image) }}" alt="Post Image" class="img-thumbnail" width="100"></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->category_id }}</td>
                        <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                        <td>
                            <div class='d-flex'>
                                <a href="{{ route('post.restore', $post->id) }}" class="btn btn-success btn-sm me-2">Restore</a>
                                {{-- <a href="#" class="btn btn-danger btn-sm">Delete</a> --}}
                                <form action="{{ route('posts.forceDelete', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
