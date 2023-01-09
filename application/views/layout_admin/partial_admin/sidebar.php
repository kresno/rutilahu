  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url('assets/img/logo_garut.png'); ?>"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Rutilahu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Admin A</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin/dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Rutilahu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/create_rumah'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/transaksi_all'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/transaksi_pending'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Belum Tervalidasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Pengaturan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/pengaturan_kecamatan'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/pengaturan_desa'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Desa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/pengaturan_jenis_rutilahu'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Rutilahu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/pengaturan_kerusakan'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Kerusakan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/pengaturan_dokumen'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dokumen</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/laporan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>