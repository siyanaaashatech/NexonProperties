@extends('admin.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Add Testimonial</h1>
        </div>
        <!-- /.card-header -->

        <!-- form start -->
        <form method="POST" action="{{ route('testimonials.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Testimonial Title" required>
                </div>

                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" name="designation" class="form-control" id="designation" placeholder="Designation (optional)">
                </div>

                <div class="form-group">
                    <label for="review">Review</label>
                    <textarea name="review" class="form-control" id="review" rows="4" placeholder="Testimonial Review" required></textarea>
                </div>

                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="number" name="rating" class="form-control" id="rating" min="1" max="5" placeholder="Rating (1-5)" required>
                </div>

               <div class="form-group mb-3">
                            <label for="status">Status</label>
                                <div class="form-check">
                                            <input type="radio" name="status" id="status_active" value="1" class="form-check-input" {{ old('status') == '1' ? 'checked' : '' }} required>
                                            <label for="status_active" class="form-check-label">Active</label>
    </div>
    <div class="form-check">
        <input type="radio" name="status" id="status_inactive" value="0" class="form-check-input" {{ old('status') == '0' ? 'checked' : '' }} required>
        <label for="status_inactive" class="form-check-label">Inactive</label>
    </div>
</div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create Testimonial</button>
            </div>
        </form>
    </div>
@endsection
