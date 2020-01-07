<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
        <div class="bg-gradient">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('homeController/index/') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-shopping-cart text-orange"></i>
                </div>
                <div class="sidebar-brand-text mx-3 text-orange"><label class="text-danger">Shop</label>Media</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if (isset($dashboard)) echo 'active' ?>">
                <a class="nav-link" href="<?= base_url('homeController/index/') ?>">
                    <i class="fas fa-fw fa-tachometer-alt text-orange"></i>
                    <span class="text-orange">Dashboard</span>
                </a>
            </li>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading text-danger">
            Data Tables
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item <?php if (isset($user)) echo 'active' ?>">
            <a class="nav-link collapsed text-orange" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-user text-orange"></i>
                <span>User<span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="py-2 collapse-inner rounded border-right-orange">
                    <h6 class="collapse-header text-orange">Components:</h6>
                    <a class="collapse-item text-orange" href="<?= base_url('userController/') ?>">User</a>
                    <a class="collapse-item text-orange" href="<?= base_url('userController/dataAdmin') ?>">Admin</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item <?php if (isset($toko)) echo 'active' ?>">
            <a class="nav-link text-orange" href="<?= base_url('tokoController/') ?>">
                <i class="fas fa-fw fa-store text-orange"></i>
                <span>Toko</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading text-danger">
            Data Transaction
        </div>

        <!-- Nav Item - Tables -->
        <li class="nav-item <?php if (isset($transaksi)) echo 'active' ?>">
            <a class="nav-link text-orange" href="<?= base_url('transaksiController/') ?>">
                <i class="fas fa-fw fa-table text-orange"></i>
                <span>Transaksi</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0 gradient1" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-gradient topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars text-orange"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Pengguna</span>
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/default.png') ?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="<?= base_url('tokoController/dataKategori/') ?>">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Data Kategori
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-danger"><?= $titleContent ?></h1>
                </div>