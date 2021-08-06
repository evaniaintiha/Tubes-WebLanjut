<?php
$session = session();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPPK | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    @page {
      margin-top: 30px;
      margin-bottom: 30px;
    }
    @media print {
       .btn,
       .footer,
       footer {
        display: none;
       }
    }
  </style>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

  <!-- jQuery -->
  <script src="/assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="/assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="/assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="/assets/plugins/moment/moment.min.js"></script>
  <script src="/assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="/assets/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/assets/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/assets/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/assets/dist/js/demo.js"></script>

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

  <?= $this->renderSection('script') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links  -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= site_url('home/index') ?>" class="nav-link">Home</a>
        </li>
      </ul>
      <?php if (session()->get('role') == 0) : ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= site_url('kategori/index') ?>" class="nav-link">Kategori</a>
      </li>
      <?php endif ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= site_url('about') ?>" class="nav-link">About</a>
      </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= site_url('home/index') ?>" class="brand-link">
        <img src="/img/lambang.png" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">SIPPK BAPPEDA</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/img/ava.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo session()->get('username'); ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  Menu
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <?php if (session()->get('role') == 0) : ?>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= site_url('home/index') ?>" class="nav-link">
                      <i class="nav-icon fa fa-home"></i>
                      <p>Home</p>
                    </a>
                  </li>

                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-plus"></i>
                      <p>
                        Tambah Data
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="<?= site_url('alatangkutan/create') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alat Angkutan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('alatkantor/create') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alat Kantor & Rumah Tangga</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('alatstudio/create') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alat Studio, Komunikasi, Pemancar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('komputer/create') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Komputer</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('tanah/create') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Gedung dan Bangunan</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-list"></i>
                      <p>
                        Laporan
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="<?= site_url('alatangkutan/index') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alat Angkutan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('alatkantor/index') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alat Kantor & Rumah Tangga</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('alatstudio/index') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alat Studio, Komunikasi, Pemancar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('komputer/index') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Komputer</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('tanah/index') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Gedung dan Bangunan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('keseluruhan/index') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Rekapitulasi</p>
                        </a>
                      </li>
                    </ul>
                     <li class="nav-item">
              <a href="<?= site_url('user/index') ?>" class="nav-link">
                <i class="fa fa-user fa-stack-1 nav-icon"></i>
                <p>User </p>
              </a>
            </li>
                  </li>
                </ul>
              <?php endif ?>
              <?php if (session()->get('role') == 1) : ?>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= site_url('home/index') ?>" class="nav-link">
                      <i class="nav-icon fa fa-home"></i>
                      <p>Home</p>
                    </a>
                  </li>

                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-list"></i>
                      <p>
                        Laporan
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="<?= site_url('alatangkutan/index') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alat Angkutan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('alatkantor/index') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alat Kantor & Rumah Tangga</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('alatstudio/index') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alat Studio, Komunikasi, Pemancar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('komputer/index') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Komputer</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('tanah/index') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Gedung dan Bangunan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('keseluruhan/index') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Rekapitulasi</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              <?php endif ?>

            <li class="nav-item">
              <a href="<?= site_url('auth/logout') ?>" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <?= $this->renderSection('content') ?>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="https://www.instagram.com/evaniaintiha">Evania Intiha</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version 1.0</b>
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
</body>

</html>