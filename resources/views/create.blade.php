@extends('layouts.master')

@section('content')

<div class="main-content mt-4 d-flex justify-content-center">
    <div class="card border-0" style="max-width: 600px; width: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <div class="card-header d-flex justify-content-between align-items-center text-white" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <h3 class="mb-0">Create Post</h3>
            <a class="btn btn-outline-light btn-sm" href="{{ route('posts.index') }}">Back</a>
        </div>

        <div class="card-body p-4">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <label for="image" class="form-label font-weight-bold">Image</label>
                    <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" style="border-radius: 5px;">
                    @error('image')
                        <div class="text-danger mt-2" style="font-size: 0.875rem;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="title" class="form-label font-weight-bold">Title</label>
                    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter post title" style="border-radius: 5px;">
                    @error('title')
                        <div class="text-danger mt-2" style="font-size: 0.875rem;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="category_id" class="form-label font-weight-bold">Category</label>
                    <div class="input-group">
                        <select id="category_id" name="category_id" class="form-control @error('category_id') is-invalid @enderror" style="border-radius: 5px; padding-left: 10px; appearance: none; background-color: #f4f5f7; border: 1px solid #ced4da;">
                            <option value="" disabled selected>Select</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-append" style="position: relative;">
                            <span class="input-group-text" style="border: none; background: none; position: absolute; right: 10px; top: 50%; transform: translateY(-50%); pointer-events: none;">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                    </div>
                    @error('category_id')
                        <div class="text-danger mt-2" style="font-size: 0.875rem;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="description" class="form-label font-weight-bold">Description</label>
                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="Enter post description" style="border-radius: 5px;"></textarea>
                    @error('description')
                        <div class="text-danger mt-2" style="font-size: 0.875rem;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success px-4" style="border-radius: 20px;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
