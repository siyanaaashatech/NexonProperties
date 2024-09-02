@extends('admin.layouts.master')

<!-- Main content -->
@section('content')
    @include('admin.includes.tables')

    <hr>
    
    <a href="{{ route('admin.blogs.create') }}" style="text-decoration:none;">
        <button type="button" class="btn btn-block btn-success btn-lg" style="width:auto;">
            Add Blog <i class="fas fa-plus-circle"></i>
        </button>
    </a>

    <!-- BEGIN: Alert -->
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-icon d-flex gap-4" role="alert" style="width: 700px;">
                <div class="d-flex gap-4">
                    <div class="alert-icon-aside">
                        <i class="far fa-flag"></i>
                    </div>
                    <div class="alert-icon-content">
                        {{ session('success') }}
                    </div>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
    </div>
    <!-- END: Alert -->

    <hr>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Blogs</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                            aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->author ?? 'N/A' }}</td>
                                        <td>{{ $blog->status ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <div style="display: flex; flex-direction: row; gap: 5px;">
                                                <!-- Edit Button -->
                                                <a href="{{ route('admin.blogs.edit', ['blog' => $blog->id]) }}" class="btn btn-outline-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            
                                                <!-- Delete Button -->
                                                <form action="{{ route('admin.blogs.destroy', ['blog' => $blog->id]) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                            {{-- =====================================
                                MODAL - EDIT
                            ==================================== --}}
                            @foreach ($blogs as $blog)
                                <div class="modal fade" id="edit{{ $blog->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Edit Blog - {{ $blog->title }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <!-- Include form fields for editing -->
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- =====================================
                                MODAL - DELETE
                            ==================================== --}}
                            @foreach ($blogs as $blog)
                                <div class="modal fade" id="delete{{ $blog->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Delete Blog</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Yes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->

    <!-- Page specific script -->
    <script>
        $(function() {
            $.noConflict();
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
