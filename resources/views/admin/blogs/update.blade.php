@extends('admin.layouts.master')

@section('content')
    @include('admin.includes.forms')

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Edit Blog</h1>
        </div>

        <!-- Blog update form -->
        <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('admin.blogs.update', ['blog' => $blog->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <!-- Title -->
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $blog->title) }}" placeholder="Blog Title" required>
                </div>

                <!-- Description -->
                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control summernote" id="description" required>{{ old('description', $blog->description) }}</textarea>
                </div>

                <!-- Keywords -->
                <div class="form-group mb-3">
                    <label for="keywords">Keywords</label>
                    <textarea name="keywords" id="keywords" class="form-control">{{ old('keywords', $blog->keywords) }}</textarea>
                </div>

                <!-- Author -->
                <div class="form-group mb-3">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control" id="author" value="{{ old('author', $blog->author) }}" placeholder="Author Name">
                </div>

                <!-- Image Upload with Cropper.js -->
                <div class="form-group mb-3">
                    <label for="image">Image</label>
                    <input type="file" id="image" class="form-control">
                    @if($blog->image)
                        <p>Current Image: <img src="{{ asset('images/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" style="max-width: 100px;"></p>
                    @endif
                </div>

                <!-- Crop Data Hidden Field -->
                <input type="hidden" name="cropData" id="cropData">

                <!-- Hidden input to simulate array submission -->
                <input type="hidden" name="image[]" id="croppedImage">

                <!-- Cropped Image Preview -->
                <div class="form-group mb-3" id="cropped-preview-container" style="display: none;">
                    <label>Cropped Image Preview:</label>
                    <img id="cropped-image-preview" style="max-width: 100%; max-height: 200%; display: block;">
                </div>

                <!-- Status -->
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <div class="form-check">
                        <input type="radio" name="status" id="status_active" value="1" class="form-check-input" 
                               {{ old('status', $blog->status) == '1' ? 'checked' : '' }} required>
                        <label for="status_active" class="form-check-label">Active</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="status" id="status_inactive" value="0" class="form-check-input" 
                               {{ old('status', $blog->status) == '0' ? 'checked' : '' }} required>
                        <label for="status_inactive" class="form-check-label">Inactive</label>
                    </div>
                </div>

                

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Blog</button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>

    <!-- Include Cropper.js -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

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
                    url: "{{ route('admin.uploadImage') }}", 
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
                    title: { required: true },
                    description: { required: true },
                    image: { required: false },
                    status: { required: true }
                },
                messages: {
                    title: { required: "Please provide a blog title" },
                    description: { required: "Please provide a description" },
                    status: { required: "Please select a status" }
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

            let cropper;
            let currentFile;

            document.getElementById('image').addEventListener('change', function (e) {
                const files = e.target.files;
                if (files && files.length > 0) {
                    currentFile = files[0];
                    const url = URL.createObjectURL(currentFile);
                    const imagePreview = document.getElementById('image-preview');
                    imagePreview.src = url;
                    imagePreview.style.display = 'block';

                    const cropModal = new bootstrap.Modal(document.getElementById('cropModal'));
                    cropModal.show();

                    if (cropper) {
                        cropper.destroy();
                    }
                    cropper = new Cropper(imagePreview, {
                        aspectRatio: 16 / 9,
                        viewMode: 1,
                    });
                }
            });

            document.getElementById('saveCrop').addEventListener('click', function () {
                if (!cropper) return;

                const cropData = cropper.getData();
                document.getElementById('cropData').value = JSON.stringify({
                    width: Math.round(cropData.width),
                    height: Math.round(cropData.height),
                    x: Math.round(cropData.x),
                    y: Math.round(cropData.y)
                });

                cropper.getCroppedCanvas().toBlob((blob) => {
                    const reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function () {
                        document.getElementById('croppedImage').value = reader.result;

                        const croppedImagePreview = document.getElementById('cropped-image-preview');
                        croppedImagePreview.src = reader.result;
                        document.getElementById('cropped-preview-container').style.display = 'block';
                    };

                    const cropModal = bootstrap.Modal.getInstance(document.getElementById('cropModal'));
                    cropModal.hide();
                }, 'image/png');
            });
        });
    </script>
@endsection
