<?php
  $session = session();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PerpustakaanAVA | Dashboard</title>
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
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= site_url('home/index')?>" class="nav-link">Home</a>
      </li>
    </ul>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= site_url('about')?>" class="nav-link">About</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url('home/index')?>" class="brand-link">
      <img src="/img/logo.jpg" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">PerpustakaanAVA</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/ava.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo session()->get('username');?></a>
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
             <?php if(session()->get('role')==0): ?>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('home/index')?>" class="nav-link">
                <i class="nav-icon fa fa-home"></i>
                <p>Home</p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-list"></i>
                  <p>
                    Daftar Buku
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= site_url('fiksi/index')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fiksi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('edukasi/index')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Edukasi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('biografi/index')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Biografi</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-list"></i>
                  <p>
                    Daftar Pinjaman
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= site_url('transaksifik/index')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fiksi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('transaksiedu/index')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Edukasi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('transaksibio/index')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Biografi</p>
                    </a>
                  </li>
                </ul>
              </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-plus"></i>
                    <p>
                      Tambah Buku
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?= site_url('fiksi/create')?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fiksi</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?= site_url('edukasi/create')?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edukasi</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?= site_url('biografi/create')?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Biografi</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
              <a href="<?= site_url('user/index')?>" class="nav-link">
                <i class="nav-icon fa fa-list"></i>
                <p>Daftar User</p>
              </a>
            </li>
                  </ul>
                </li>
                </ul>
              </li>
          <?php else: ?>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-list"></i>
                  <p>
                    Daftar Buku
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= site_url('fiksiu/index')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fiksi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('edukasiu/index')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Edukasi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('biografiu/index')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Biografi</p>
                    </a>
                  </li>
                  </ul>
              </li>

                  <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-list"></i>
                  <p>
                    Kembalikan Buku
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= site_url('pengembalianfik/index')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fiksi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('pengembalianedu')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Edukasi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('pengembalianbio/index')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Biografi</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
              <a href="<?= site_url('user/index')?>" class="nav-link">
                <i class="nav-icon fa fa-list"></i>
                <p>Daftar User</p>
              </a>
            </li>
                  





                  <?php endif ?>
          <li class="nav-item">
            <a href="<?= site_url('auth/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
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
    <strong>Copyright &copy; 2020 <a href="#">PerpustakaanAVA</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
<?= $this->renderSection('script') ?>
</body>
</html>