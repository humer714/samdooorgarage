<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                {{-- <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                </span> --}}
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700">
                        <span class="font-size-xl text-primary">Admin Panel</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->


        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a href="{{ route('dashboard') }}"><i class="si si-cup"></i><span
                            class="sidebar-mini-hide">Dashboard</span></a>
                </li>


                {{--  services --}}
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="{{ route('services.index') }}"><i
                            class="fa fa-users"></i><span class="sidebar-mini-hide">Services</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('services.index') }}">All Services</a>

                        </li>

                    </ul>
                </li>
                {{--  end  services --}}

                {{-- projects --}}
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="{{ route('projects.create') }}"><i
                            class="fa fa-th-list"></i><span class="sidebar-mini-hide">Projects</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('projects.index') }}">All Projects</a>
                        </li>
                    </ul>
                </li>
                {{-- End projects --}}
                {{-- Cities --}}
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="{{ route('city.index') }}"><i
                            class="fa fa-picture-o"></i><span class="sidebar-mini-hide">City</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('city.index') }}">All Cities</a>
                        </li>

                    </ul>
                </li>
                {{-- End Cities --}}

                {{--  Blogs --}}
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="{{ route('blog.index') }}"><i
                            class="fa fa-picture-o"></i><span class="sidebar-mini-hide">Blogs</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('blog.index') }}">All Blogs</a>
                        </li>

                    </ul>
                </li>
                {{--  Blogs end --}}
                {{--  Contact Us  --}}
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="{{ route('contact.index') }}"><i
                            class="fa fa-picture-o"></i><span class="sidebar-mini-hide">Contact Us</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('contact.index') }}">Contact Us Forms</a>
                        </li>

                    </ul>
                </li>
                {{--  Contact Us end --}}
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>
