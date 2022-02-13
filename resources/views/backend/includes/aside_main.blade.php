<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link text-center">
        {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">Furniture Land</span>
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <h2 class="nav-title">Menu</h2>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}

                        <i class="nav-icon fa fa-home" aria-hidden="true"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <p>
                            Site Management
                        </p>
                    </a>
                </li>


                {{-- about us --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            About Us
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">

                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">

                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">

                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- slider management --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Slider Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">

                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">

                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">

                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Product management --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Product Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">

                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">

                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">

                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Blog management --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-bold" aria-hidden="true"></i>
                        <p>
                            Blog Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">

                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">

                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">

                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- User management --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p>
                            User Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">

                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">

                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">

                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- master setup --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <p>
                            Master Setup
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('siteSetting')}}" class="nav-link">
                                <p>Site Setting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <p>Mail Configuration</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">
                                <p>Social Site Setup</p>
                            </a>
                        </li>
                    </ul>
                </li>


                {{-- system setup --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <p>
                            System Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">
                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>

    </div>

</aside>
