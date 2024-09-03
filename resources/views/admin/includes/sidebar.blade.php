<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" aria-label="Toggle Navigation" data-bs-original-title="Toggle Navigation"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="{{ route('admin.index') }}">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="{{ asset('adminassets/assets/img/icons/spot-illustrations/falcon.png') }}" alt=""
                    width="40"><span class="font-sans-serif">Admin</span></div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                {{-- <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-chart-pie fa-w-17" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chart-pie" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z">
                                    </path>
                                </svg>
                                <a href="{{ route('admin.index') }}">
                                    <span class="nav-link-text ps-1">Dashboard</span>
                                </a>
                                
                        </div>
                    </a>

                </li> --}}


                {{-- 

                <li class="nav-item">
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard3" role="button"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-chart-pie fa-w-17" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chart-pie" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z">
                                    </path>
                                </svg><!-- <span class="fas fa-chart-pie"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Dashboard</span></div>
                    </a>
                    <ul class="nav collapse" id="dashboard3">
                        <li class="nav-item"><a class="nav-link active" href="index.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/analytics.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Analytics</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/crm.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CRM</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/e-commerce.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">E
                                        commerce</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/lms.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">LMS</span><span
                                        class="badge rounded-pill ms-2 badge-soft-success">New</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/project-management.html">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Management</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/saas.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">SaaS</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/support-desk.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Support
                                        desk</span><span class="badge rounded-pill ms-2 badge-soft-success">New</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>
 --}}

{{-- Beginning of Site Settings --}}


<li class="nav-item">
    <!-- Top-level link for Metadata -->
    <a class="nav-link {{ Request::is('admin/metadata*') ? 'active' : '' }}"
       href="{{ route('metadata.index') }}">
        <div class="d-flex align-items-center">
            <span class="nav-link-icon"><i class="fas fa-tag"></i></span>
            <span class="nav-link-text ps-1">Metadata</span>
        </div>
    </a>
</li>

 
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">App</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div>


                <li class="nav-item">
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard1" role="button"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-chart-pie fa-w-17" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chart-pie" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z">
                                    </path>
                                </svg><!-- <span class="fas fa-chart-pie"></span> Font Awesome fontawesome.com --></span><span
                                
                
                    <ul class="nav collapse" id="dashboard1">
                        {{-- <ul class="nav collapse show" id="dashboard1"> --}}
                            <li class="nav-item"><a class="nav-link active" href="#">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Index</span>
                                    </div>
                                </a><!-- more inner pages-->
                            </li>

                    </ul>
                </li>

                </li>

                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Settings</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div>

                </li>

                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">User Control</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div>

                    @can('hasPermission', 'view_roles')
                        <a class="nav-link" href="{{ route('admin.roles.index') }}" role="button">
                            <div class="d-flex align-items-center"><span class="nav-link-icon">
                                    <i class="fas fa-sort-alpha-up"></i>
                                    <!-- <span class="fas fa-comments"></span> Font Awesome fontawesome.com --></span><span
                                    class="nav-link-text ps-1">Roles</span></div>
                        </a>
                    @endcan

                    @can('hasPermission', 'view_permissions')
                        <a class="nav-link" href="{{ route('admin.permissions.index') }}" role="button">
                            <div class="d-flex align-items-center"><span class="nav-link-icon">
                                    <i class="fas fa-sort-alpha-up"></i>
                                    <!-- <span class="fas fa-comments"></span> Font Awesome fontawesome.com --></span><span
                                    class="nav-link-text ps-1">Permissions</span></div>
                        </a>
                    @endcan

                    @can('hasPermission', 'view_users')
                        <a class="nav-link" href="{{ route('admin.users.index') }}" role="button">
                            <div class="d-flex align-items-center"><span class="nav-link-icon">
                                    <i class="fas fa-sort-alpha-up"></i>
                                    <!-- <span class="fas fa-comments"></span> Font Awesome fontawesome.com --></span><span
                                    class="nav-link-text ps-1">Users</span></div>
                        </a>
                    @endcan

                </li>

                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">History</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div>

                   

                   
                    {{-- @can('hasPermission', 'view_blogs') --}}
                    <li class="nav-item">
                        <!-- Top-level link for Blogs -->
                        <a class="nav-link {{ Request::is('admin/blogs*') ? 'active' : '' }}"
                           href="{{ route('admin.blogs.index') }}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><i class="fas fa-blog"></i></span>
                                <span class="nav-link-text ps-1">Blogs</span>
                            </div>
                        </a>
                    </li>
                    {{-- @endcan --}}
                    

                    {{-- @can('hasPermission', 'view_testimonials') --}}
                    <li class="nav-item">
                        <!-- Top-level link for Testimonials -->
                        <a class="nav-link {{ Request::is('admin/testimonials*') ? 'active' : '' }}"
                           href="{{ route('testimonials.index') }}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><i class="fas fa-users"></i></span>
                                <span class="nav-link-text ps-1">Testimonials</span>
                            </div>
                        </a>
                    </li>
                    {{-- @endcan --}}

                    <li class="nav-item">
                        <!-- Top-level link for Services -->
                        <a class="nav-link {{ Request::is('admin/services*') ? 'active' : '' }}"
                           href="{{ route('services.index') }}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><i class="fas fa-concierge-bell"></i></span>
                                <span class="nav-link-text ps-1">Services</span>
                            </div>
                        </a>
                    </li>
                    

                </li>
            </ul>
        </div>
    </div>
</nav>

