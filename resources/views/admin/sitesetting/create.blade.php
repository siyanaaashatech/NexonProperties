<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
    <style>
        /* Add some styles to make your preview look better */
        #image-preview {
            max-width: 100%;
            max-height: 400px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Create New Site Setting</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="toast align-items-center text-white bg-success border-0 position-fixed bottom-0 end-0 p-3"
                            role="alert" aria-live="assertive" aria-atomic="true" id="toastMessage">
                            <div class="d-flex">
                                <div class="toast-body">
                                    {{ session('success') }}
                                </div>
                                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Site Settings creation form -->
                    <form action="{{ route('sitesettings.store') }}" method="POST" enctype="multipart/form-data" id="siteSettingsForm">
                        @csrf

                        <!-- Other form fields remain the same... -->

                        <!-- Image Upload with Cropper.js -->
                        <div class="form-group mb-3">
                            <label for="main_logo">Main Logo</label>
                            <input type="file" name="main_logo" id="main_logo" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="side_logo">Side Logo</label>
                            <input type="file" name="side_logo" id="side_logo" class="form-control">
                        </div>

                        <!-- Crop Data Hidden Field -->
                        <input type="hidden" name="cropData" id="cropData">
                        
                        <!-- Hidden input to simulate array submission -->
                        <input type="hidden" name="image[]" id="croppedImage"> 

                        <!-- Cropped Image Preview -->
                        <div class="form-group mb-3" id="cropped-preview-container" style="display: none;">
                            <img id="image-preview" src="#" alt="Cropped Image Preview">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Site Setting</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include the Cropper.js script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script>
    document.getElementById('main_logo').addEventListener('change', function (event) {
        let imageFile = event.target.files[0];
        if (imageFile) {
            let reader = new FileReader();
            reader.onload = function (e) {
                let image = document.createElement('img');
                image.id = 'image-to-crop';
                image.src = e.target.result;
                document.getElementById('cropped-preview-container').style.display = 'block';
                document.getElementById('cropped-preview-container').appendChild(image);

                // Initialize Cropper
                let cropper = new Cropper(image, {
                    aspectRatio: 1,
                    viewMode: 1,
                    preview: '.img-preview',
                    ready: function () {
                        console.log('Cropper Ready');
                    }
                });

                // On Cropper Data Export
                document.getElementById('siteSettingsForm').addEventListener('submit', function () {
                    let croppedCanvas = cropper.getCroppedCanvas();
                    document.getElementById('image-preview').src = croppedCanvas.toDataURL();
                    document.getElementById('croppedImage').value = croppedCanvas.toDataURL('image/webp');
                });
            };
            reader.readAsDataURL(imageFile);
        }
    });
</script>

@endsection
</body>
</html>
