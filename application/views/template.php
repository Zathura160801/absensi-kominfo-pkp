<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ABSENSI DISKOMINFO PKP</title>
  <link rel="icon" href="<?= base_url('assets/img/logoweb.png') ?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/fontawesome-free/css/all.min.css') ?>">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet"
    href="<?= base_url('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/jqvmap/jqvmap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/adminlte.min.css') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/daterangepicker/daterangepicker.css') ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/summernote/summernote-bs4.css') ?>">
  <!-- DataTables -->
  <link rel="stylesheet"
    href="<?= base_url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet"
    href="<?= base_url('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet"
    href="<?= base_url('assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-lightblue navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->

      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-white-primary elevation-4">
        <!-- Brand Logo -->
        <div class="d-flex align-items-center justify-content-between">
          <div class="mt-1 pl-2">
            <a href="<?= base_url('assets/img/logo-kominfo.png') ?>" class="d-flex align-items-center">
              <img src="<?= base_url('assets/img/logo-kominfo.png') ?>" width="225" height="100" alt="">
            </a>
          </div>
        </div>
        <!-- <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Kominfo</span>
    </a> -->

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel pb-2 mb-1 d-flex">
            <div class="image">
              <?php if (!empty($this->session->userdata('foto'))) { ?>
                <img src="<?php echo base_url('assets/img/profil/' . $this->session->userdata('foto')); ?>"
                  class="img-circle elevation-2 " alt="User" />
              <?php } ?>

            </div>
            <div class="info">
              <?php echo $this->session->userdata('nama'); ?> <i class="fas fa-circle text-success fa-xs"></i>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="<?= base_url() ?>/" <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('user') ?>/" <?= $this->uri->segment(1) == 'user' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-user-tie"></i>
                  <p>
                    Profile
                  </p>
                </a>
              </li>
              <?php if (is_level('Admin')): ?>
                <li class="nav-item">
                  <a href="<?= base_url('jam') ?>/" <?= $this->uri->segment(1) == 'jam' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                    <i class="nav-icon far fa-clock"></i>
                    <p>
                      Jam Kerja
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('divisi') ?>/" <?= $this->uri->segment(1) == 'divisi' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                    <i class="nav-icon fas fa-house-user"></i>
                    <p>
                      Divisi
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('karyawan') ?>/" <?= $this->uri->segment(1) == 'karyawan' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Karyawan
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('absensi') ?>/" <?= $this->uri->segment(1) == 'absensi' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                    <i class="nav-icon fas fa-calendar-check"></i>
                    <p>
                      Absensi
                    </p>
                  </a>
                </li>
              <?php else: ?>
                <li class="nav-item">
                  <a href="<?= base_url('absensi/check_absen') ?>/" <?= $this->uri->segment(2) == 'check_absen' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                    <i class="nav-icon fas fa-calendar-check"></i>
                    <p>
                      Absen
                    </p>
                    <?php if ($this->session->absen_warning == 'true'): ?>
                      <p class="float-right ml-auto notification p-0 badge badge-danger"><i
                          class="bi bi-exclamation-circle-fill text-danger"></i></p>
                    <?php endif; ?>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('absensi/detail_absensi') ?>/" <?= $this->uri->segment(2) == 'detail_absensi' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                    <i class="nav-icon fas fa-clipboard-list"></i>
                    <p>
                      Absensi Ku
                    </p>
                  </a>
                </li>
              <?php endif; ?>
              <li class="nav-item">
                <a href="<?= base_url('dashboard/logout') ?>" class="nav-link">
                  <i class="nav-icon ml-2 bi bi-box-arrow-right"></i>
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

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url('assets/admin/plugins/jquery/jquery.min.js') ?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url('assets/admin/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- ChartJS -->
  <script src="<?= base_url('assets/admin/plugins/chart.js/Chart.min.js') ?>"></script>
  <!-- Sparkline -->
  <script src="<?= base_url('assets/admin/plugins/sparklines/sparkline.js') ?>"></script>
  <!-- JQVMap -->
  <script src="<?= base_url('assets/admin/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
  <script src="<?= base_url('assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url('assets/admin/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url('assets/admin/plugins/moment/moment.min.js') ?>"></script>
  <script src="<?= base_url('assets/admin/plugins/daterangepicker/daterangepicker.js') ?>"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script
    src="<?= base_url('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
  <!-- Summernote -->
  <script src="<?= base_url('assets/admin/plugins/summernote/summernote-bs4.min.js') ?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/admin/dist/js/adminlte.js') ?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url('assets/admin/dist/js/pages/dashboard.js') ?>"></script>
  <!-- datatable -->
  <script src="<?= base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
  <script src="<?= base_url('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/admin/dist/js/demo.js') ?>"></script>
  </script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>