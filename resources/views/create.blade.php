@extends('layouts.master')

@section('content')

<div class="main-content mt-4 d-flex justify-content-center">
    <div class="card border-0" style="max-width: 600px; width: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <div class="card-header d-flex justify-content-between align-items-center text-white" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <h3 class="mb-0">Create Post</h3>
            <a class="btn btn-outline-light btn-sm" href="{{ route('posts.index') }}">Back</a>
        </div>
        <div class="card-body p-4">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <label for="image" class="form-label font-weight-bold">Image</label>
                    <input type="file" id="image" name="image" class="form-control" style="border-radius: 5px;">
                </div>
                <div class="form-group mb-4">
                    <label for="title" class="form-label font-weight-bold">Title</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Enter post title" style="border-radius: 5px;">
                </div>
                <div class="form-group mb-4">
                    <label for="description" class="form-label font-weight-bold">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="5" placeholder="Enter post description" style="border-radius: 5px;"></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success px-4" style="border-radius: 20px;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
