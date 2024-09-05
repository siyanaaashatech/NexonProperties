@extends('admin.layouts.master')

@section('content')
    @include('admin.includes.forms')
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">{{ $page_title }}</h1>
            <a href="{{ route('favicons.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Add Favicon
            </a>

           
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
        </div>
    </div>


    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                
                <th>Apple Touch Icon</th>
                <th>Favicon ICO</th>
                <th>Favicon 16x16</th>
                <th>Favicon 32x32</th>
                <th>Site Manifest</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($icons as $icon)
                <tr data-widget="expandable-table" aria-expanded="false">
                <tr>
                    
                    <td><img src="{{ asset('uploads/favicon/' . $icon->appletouch_icon) }}"
                            style="width: 150px; height:150px"></td>
                    <td><img src="{{ asset('uploads/favicon/' . $icon->favicon_ico) }}" style="width: 150px; height:150px">
                    </td>
                    <td><img src="{{ asset('uploads/favicon/' . $icon->favicon_sixteen) }}"
                            style="width: 150px; height:150px"></td>
                            <td>
                                @if ($icon->favicon_thirtyTwo)
                                    <img src="{{ asset('uploads/favicon/' . $icon->favicon_thirtytwo) }}" style="width: 150px; height:150px">
                                @else
                                    <span>No Favicon 32x32 Found</span>
                                @endif
                            </td>
                            <td>
                                @if ($icon->site_manifest)
                                    <!-- Fetch and display the content of the manifest file -->
                                    @php
                                        // Read the manifest file's content
                                        $manifestContent = file_get_contents(public_path('uploads/favicon/file/' . $icon->site_manifest));
                                    @endphp
                            
                                    <!-- Display the manifest content in a <pre> tag -->
                                    <pre style="width: 300px; height: 300px; overflow: auto; border: 1px solid #ccc; padding: 10px; white-space: pre-wrap;">{{ $manifestContent }}</pre>
                                    
                                    <!-- Button to download the site manifest -->
                                    <a href="{{ asset('uploads/favicon/file/' . $icon->site_manifest) }}" download class="btn btn-primary btn-sm mt-2">Download Site Manifest</a>
                                @else
                                    <span>No Site Manifest Found</span>
                                @endif
                            </td>
                            
                            
                    {{-- <td>
                        <button type="button" class="btn-warning button-size" data-bs-toggle="modal"
                            data-bs-target="#edit{{ $icon->id }}">Update</button>
                    </td> --}}
                    <td>
                        <div style="display: flex; flex-direction:row;">
                            <a href="{{ route('favicons.edit', $icon->id) }}" class="btn btn-warning btn-sm"
                                style="margin-right: 5px;"><i class="fas fa-edit"></i>
                                Edit</a>

                        </div>
                    </td>
                </tr>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- update --}}
    {{-- @foreach ($icons as $icon)
        <div class="modal fade" id="edit{{ $icon->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <a href="{{ url('admin/favicon/edit/' . $icon->id) }}" class="btn btn-primary">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}

    <script>
        var myModal = document.getElementById('myModal');
        var myInput = document.getElementById('myInput');

        if (myModal) {
            myModal.addEventListener('shown.bs.modal', function() {
                myInput.focus();
            });
        }
    </script>
@endsection
