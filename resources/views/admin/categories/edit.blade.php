@extends('admin.layouts.master')

@section('content')
<h1>Edit Category</h1>
<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}" required>
    </div>

    <div class="form-group mb-3">
        <label for="meta_title">Meta Title</label>
        <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title', $category->metadata->meta_title) }}" required>
    </div>

    <div class="form-group mb-3">
        <label for="meta_description">Meta Description</label>
        <textarea name="meta_description" id="meta_description" class="form-control" rows="3">{{ old('meta_description', $category->metadata->meta_description) }}</textarea>
    </div>

    <div class="form-group mb-3">
        <label for="meta_keywords">Meta Keywords</label>
        <textarea name="meta_keywords" id="meta_keywords" class="form-control" rows="3">{{ old('meta_keywords', $category->metadata->meta_keywords) }}</textarea>
    </div>

    <div class="form-group mb-3">
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $category->metadata->slug) }}">
    </div>

    <button type="submit" class="btn btn-primary">Update Category</button>
</form>
@endsection
