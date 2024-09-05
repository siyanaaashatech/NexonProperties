@extends('admin.layouts.master')

@section('content')
<h1>Edit Property</h1>
<form action="{{ route('property.update', $property->id) }}" method="POST" enctype="multipart/form-data" id="propertyForm">
    @csrf
    @method('PUT')
    <input type="hidden" name="cropData" id="cropData">
    <input type="hidden" name="main_image_cropped" id="croppedImage">

    <!-- Title -->
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $property->title }}" required>
    </div>

    <!-- Description -->
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $property->description }}</textarea>
    </div>

    <!-- Category -->
    <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-control" id="category_id" name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $property->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->title }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Sub Category -->
    <div class="mb-3">
        <label for="sub_category_id" class="form-label">Sub Category</label>
        <select class="form-control" id="sub_category_id" name="sub_category_id" required>
            @foreach($subCategories as $subCategory)
                <option value="{{ $subCategory->id }}" {{ $property->sub_category_id == $subCategory->id ? 'selected' : '' }}>
                    {{ $subCategory->title }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Street -->
    <div class="mb-3">
        <label for="street" class="form-label">Street</label>
        <input type="text" class="form-control" id="street" name="street" value="{{ $property->street }}" required>
    </div>

    <!-- Suburb -->
    <div class="mb-3">
        <label for="suburb" class="form-label">Suburb</label>
        <input type="text" class="form-control" id="suburb" name="suburb" value="{{ $property->suburb }}" required>
    </div>

    <!-- State -->
    <div class="mb-3">
        <label for="state" class="form-label">State</label>
        <input type="text" class="form-control" id="state" name="state" value="{{ $property->state }}" required>
    </div>

    <!-- Post Code -->
    <div class="mb-3">
        <label for="post_code" class="form-label">Post Code</label>
        <input type="text" class="form-control" id="post_code" name="post_code" value="{{ $property->post_code }}" required>
    </div>

    <!-- Country -->
    <div class="mb-3">
        <label for="country" class="form-label">Country</label>
        <input type="text" class="form-control" id="country" name="country" value="{{ $property->country }}">
    </div>

    <!-- Price -->
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $property->price }}" required>
    </div>

    <!-- Price Type -->
    <div class="mb-3">
        <label for="price_type" class="form-label">Price Type</label>
        <select class="form-control" id="price_type" name="price_type" required>
            <option value="fixed" {{ $property->price_type == 'fixed' ? 'selected' : '' }}>Fixed</option>
            <option value="negotiable" {{ $property->price_type == 'negotiable' ? 'selected' : '' }}>Negotiable</option>
            <option value="on_request" {{ $property->price_type == 'on_request' ? 'selected' : '' }}>On Request</option>
        </select>
    </div>

    <!-- Bedrooms -->
    <div class="mb-3">
        <label for="bedrooms" class="form-label">Bedrooms</label>
        <input type="number" class="form-control" id="bedrooms" name="bedrooms" value="{{ $property->bedrooms }}" required>
    </div>

    <!-- Bathrooms -->
    <div class="mb-3">
        <label for="bathrooms" class="form-label">Bathrooms</label>
        <input type="number" class="form-control" id="bathrooms" name="bathrooms" value="{{ $property->bathrooms }}" required>
    </div>

    <!-- Area -->
    <div class="mb-3">
        <label for="area" class="form-label">Area (sq ft)</label>
        <input type="number" class="form-control" id="area" name="area" value="{{ $property->area }}" required>
    </div>

    <!-- Status -->
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="1" {{ $property->status ? 'selected' : '' }}>Active</option>
            <option value="0" {{ !$property->status ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>

    <!-- Availability Status -->
    <div class="form-group mb-3">
        <label for="availability_status">Availability Status</label>
        <select name="availability_status" id="availability_status" class="form-control" required>
            <option value="available" {{ $property->availability_status == 'available' ? 'selected' : '' }}>Available</option>
            <option value="sold" {{ $property->availability_status == 'sold' ? 'selected' : '' }}>Sold</option>
            <option value="rental" {{ $property->availability_status == 'rental' ? 'selected' : '' }}>Rental</option>
        </select>
    </div>

    <!-- Rental Period -->
    <div class="form-group mb-3">
        <label for="rental_period">Rental Period</label>
        <input type="text" name="rental_period" id="rental_period" class="form-control" value="{{ $property->rental_period }}">
    </div>

    <!-- Main Image -->
    <div class="mb-3">
        <label for="main_image" class="form-label">Main Image</label>
        <input type="file" class="form-control" id="main_image" name="main_image">
        @if($property->main_image)
            <img src="{{ asset('storage/' . $property->main_image) }}" id="existing-main-image" alt="Main Image" class="img-thumbnail mt-2" style="width: 150px;">
        @endif
    </div>

    <!-- Cropped Main Image Preview -->
    <div class="form-group mb-3" id="cropped-preview-container" style="display: none;">
        <label>Cropped Main Image Preview:</label>
        <img id="cropped-image-preview" style="max-width: 150px; max-height: 200px; display: block;">
    </div>

    <!-- Other Images -->
    <div class="form-group mb-3">
        <label for="other_images">Other Images</label>
        <input type="file" id="other_images" class="form-control" name="other_images[]" multiple>
        <div id="other-images-preview-container" style="display: flex; flex-wrap: wrap;">
            @if($property->other_images)
                @foreach(json_decode($property->other_images) as $image)
                    <div class="position-relative">
                        <img src="{{ asset('storage/' . $image) }}" alt="Other Image" class="img-thumbnail mt-2" style="width: 100px; margin-right: 10px;">
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Keywords -->
    <div class="form-group mb-3">
        <label for="keywords">Keywords</label>
        <input type="text" name="keywords" id="keywords" class="form-control" value="{{ old('keywords', $property->metadata->meta_keywords) }}">
    </div>

    <button type="submit" class="btn btn-primary">Update Property</button>
    <a href="{{ route('property.index') }}" class="btn btn-secondary">Cancel</a>
</form>

<!-- Modal for Image Cropping -->
<div class="modal fade" id="cropModal" tabindex="-1" aria-labelledby="cropModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cropModalLabel">Crop Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="image-preview" style="width: 100%; height: auto; display: none;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="saveCrop" class="btn btn-primary">Save Crop</button>
            </div>
        </div>
    </div>
</div>

<!-- Include Cropper.js -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

<script>
    let cropper;
    let currentFile;

    // Main image input change event
    document.getElementById('main_image').addEventListener('change', function (e) {
        const files = e.target.files;
        if (files && files.length > 0) {
            currentFile = files[0];
            const url = URL.createObjectURL(currentFile);
            const imagePreview = document.getElementById('image-preview');
            imagePreview.src = url;
            imagePreview.style.display = 'block';

            // Show the crop modal
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

    // Save cropped image data and update hidden input fields
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

                // Set cropped image preview
                const croppedImagePreview = document.getElementById('cropped-image-preview');
                croppedImagePreview.src = reader.result;
                document.getElementById('cropped-preview-container').style.display = 'block';
            };

            // Close modal after saving crop
            const cropModal = bootstrap.Modal.getInstance(document.getElementById('cropModal'));
            cropModal.hide();
        }, 'image/png');
    });

    // Preview for other images
    document.getElementById('other_images').addEventListener('change', function (e) {
        const files = e.target.files;
        const previewContainer = document.getElementById('other-images-preview-container');
        previewContainer.innerHTML = ''; // Clear previous previews
        document.getElementById('other-images-preview-container').style.display = 'block';

        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function (event) {
                const img = document.createElement('img');
                img.src = event.target.result;
                img.style.maxWidth = '100px';
                img.style.margin = '5px';
                img.style.border = '1px solid #ccc';
                img.style.padding = '2px';
                previewContainer.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    });
</script>
@endsection
