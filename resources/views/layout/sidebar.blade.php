        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <p class="brand-link" style="opacity: .9"> Diskominfotik Lampung</p>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                {{-- user-panel mt-3 pb-3 mb-3 d-flex --}}
                <div class="brand-link">
                    <div class="image">
                        <img src="{{ asset('lte')}}/dist/img/diskominfotik.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Fajar Saputra</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Inventaris Kantor
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./aset" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Aset</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./kategoriaset" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Kategori Aset</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./lokasiaset" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lokasi Aset</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>