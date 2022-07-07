<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url('Admin') ?>" class="brand-link">
    <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SIWIPOK</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?php

          if ($this->session->has_userdata('USERNAME')) {
            echo $this->session->userdata('USERNAME');
          }
          ?></a>
      </div>
    </div>


    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url('Admin') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <!-- <i class="right fas fa-angle-left"></i> -->
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('wisata') ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Tempat Wisata
            </p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="<?php echo base_url('wisata/datawisata') ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Data Pengguna
            </p>
          </a>
        </li> -->
        <li class="nav-item">
          <a href="<?php echo base_url('Komentar') ?>" class="nav-link">
            <i class="nav-icon far fa-comments""></i>
            <p>
              Komentar
            </p>
          </a>
        </li>
        <li class=" nav-item">
              <a href="<?php echo base_url('datapengguna/') ?>" class="nav-link">
                <i class="nav-icon fas fa-user-circle"></i>
                <p>
                  User
                </p>
              </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('Kelompok') ?>" class="nav-link">
            <i class="nav-icon fa fa-users"></i>
            <p>
              Kelompok
              <!-- <i class="fas fa-angle-left right"></i> -->
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>