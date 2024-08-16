@extends('layouts.master')

@section('content')

<div class="main-content mt-4">
    <div class="card border-0 shadow-lg" style="border-radius: 15px;">
        <div class="card-header d-flex justify-content-between align-items-center text-white py-3 px-4" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); border-top-left-radius: 15px; border-top-right-radius: 15px;">
            <h3 class="mb-0">Post Details</h3>
            <a href="{{ route('posts.index') }}" class="btn btn-light btn-sm">Back to Posts</a>
        </div>
        <div class="card-body px-4 py-4">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset($post->image) }}" alt="Post Image" class="img-fluid rounded shadow-sm" style="width: 100%; height: auto;">
                </div>
                <div class="col-md-8">
                    <table class="table table-borderless mt-3 mt-md-0">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $post->id }}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $post->title }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $post->description }}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $post->category_id }}</td>
                            </tr>
                            <tr>
                                <th>Publish Date</th>
                                <td>{{ $post->created_at->format('F j, Y') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
