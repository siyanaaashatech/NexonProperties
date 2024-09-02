@extends('admin.layouts.master')

@section('content')
    @include('admin.includes.forms')

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Edit Blog</h1> <!-- Changed 'Add Blog' to 'Edit Blog' -->
        </div>
        <!-- /.card-header -->

        <!-- form start -->
        <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('admin.blogs.update', ['blog' => $blog->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Add the PUT method to handle the update request -->
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $blog->title) }}" placeholder="Blog Title" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control summernote" id="description" required>{{ old('description', $blog->description) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control" id="author" value="{{ old('author', $blog->author) }}" placeholder="Author Name">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control-file" id="image">
                    @if($blog->image)
                        <p>Current Image: <img src="{{ asset('images/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" style="max-width: 100px;"></p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="1" {{ old('status', $blog->status) == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status', $blog->status) == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Blog</button> <!-- Changed button text to 'Update Blog' -->
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            // Initialize Summernote
            $('.summernote').summernote({
                height: 200,
                callbacks: {
                    onImageUpload: function(files) {
                        for (let i = 0; i < files.length; i++) {
                            uploadImage(files[i]);
                        }
                    }
                }
            });

            function uploadImage(file) {
                let data = new FormData();
                data.append("file", file);
                $.ajax({
                    url: "{{ route('admin.uploadImage') }}", // Replace with your upload route
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(response) {
                        $('.summernote').summernote('insertImage', response.url);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }

            $('#quickForm').validate({
                rules: {
                    title: {
                        required: true,
                    },
                    description: {
                        required: true,
                    },
                    image: {
                        required: false, // Image is not required for updating
                    },
                    status: {
                        required: true,
                    }
                },
                messages: {
                    title: {
                        required: "Please provide a blog title",
                    },
                    description: {
                        required: "Please provide a description",
                    },
                    image: {
                        required: "Please upload an image",
                    },
                    status: {
                        required: "Please select a status",
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection
