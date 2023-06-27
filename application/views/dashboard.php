<?php

$konek = mysqli_connect("localhost", "root", "", "absensi");
$users = mysqli_query($konek, "SELECT id_user FROM users");
$jum_user = mysqli_num_rows($users);
$masuk = mysqli_query($konek, "SELECT id_user FROM absensi WHERE keterangan = 'Masuk' AND tgl = CURDATE()");
$jum_masuk = mysqli_num_rows($masuk);
$divisi = mysqli_query($konek, "SELECT id_divisi FROM divisi");
$jum_divisi = mysqli_num_rows($divisi);
$admin = mysqli_query($konek, "SELECT id_user FROM users WHERE level = 'Admin'");
$jum_admin = mysqli_num_rows($admin);
$karyawan = mysqli_query($konek, "SELECT id_user FROM users WHERE level = 'Karyawan'");
$jum_karyawan = mysqli_num_rows($karyawan);
$absen = $jum_user - $jum_masuk - $jum_admin;
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>
                <?php
                echo $jum_karyawan; ?>
              </h3>
              <p>Jumlah Pegawai</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>
                <?php
                echo $jum_divisi; ?>
              </h3>

              <p>Jumlah Divisi</p>
            </div>
            <div class="icon">
              <i class="fas fa-house-user"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>
                <?php
                echo $jum_masuk; ?>
              </h3>

              <p>Jumlah Pegawai Hadir</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-check"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>
                <?php
                echo $absen; ?>
              </h3>

              <p>Jumlah Pegawai Tidak Hadir</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-slash"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <section class="col-lg-12">
        <div class="card-footer bg-transparent">
          <div class="row" id="ayam">
            <div class="col-4 text-center">
              <div id="sparkline-1"></div>
              <div class="text-white">Visitors</div>
            </div>
            <!-- ./col -->
            <div class="col-4 text-center">
              <div id="sparkline-2"></div>
              <div class="text-white">Online</div>
            </div>
            <!-- ./col -->
            <div class="col-4 text-center">
              <div id="sparkline-3"></div>
              <div class="text-white">Sales</div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div>

        <div class="row d-flex">

          <!-- Calendar -->
          <div class="card bg-gradient-success col-lg-6">
            <div class="card-header border-0">

              <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Kalender
              </h3>
              <!-- tools card -->
              <div class="card-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-bars"></i></button>
                  <div class="dropdown-menu float-right" role="menu">
                    <a href="#" class="dropdown-item">Add new event</a>
                    <a href="#" class="dropdown-item">Clear events</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">View calendar</a>
                  </div>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- /.Grafik Pei -->
          <div class="card card-danger col-lg-6 ">
            <div class="card-header">
              <h3 class="card-title">Grafik Absen Hari ini</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                    class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="myChart"
                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </section>
      <!-- right col -->
    </div><!-- /.container-fluid -->
  </section>
</div>

<script>
  $(document).ready(function () {
    $("#ayam").hide();
  })
</script>




<script>
  // Data for the pie chart

  var data = {
    labels: ["Masuk", "Absen"],
    datasets: [
      {
        data: [<?php

        echo $jum_masuk; ?>, <?php

          echo $absen; ?>],
        backgroundColor: ["	#7CFC00", "#FF0000"],
        hoverBackgroundColor: ["	#7CFC00", "#FF0000"],
      },
    ],
  };

  // Create the pie chart
  var ctx = document.getElementById("myChart").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "pie",
    data: data,
  });
</script>