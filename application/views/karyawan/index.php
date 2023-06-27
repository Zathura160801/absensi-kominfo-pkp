<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
                <div class="container-fluid">
                    <div id="alert">
                        <?php if(@$this->session->response): ?>
                            <div class="alert alert-<?= $this->session->response['status'] == 'error' ? 'danger' : $this->session->response['status'] ?> alert-dismissable fade show" role="alert">
                                <button class="close" aria-dismissable="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <p><?= $this->session->response['message'] ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
  </div>
<section class="content">
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-block">
                <h4 class="card-title float-left">Data Karyawan</h4>
                <div class="d-inline ml-auto float-right">
                    <a href="<?= base_url('karyawan/create') ?>" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i> Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="example2">
                        <thead>
                            <th>No</th>
                            <th width="30%">Karyawan</th>
                            <th>Kontak</th>
                            <th>Aksi</th>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <?php foreach($karyawan as $i => $k): ?>
                                <tr>
                                    <td><?= $i+1 ?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-4 pr-1">
                                                <img src="<?= base_url('assets/img/profil/' . $k->foto) ?>" alt="Img Profil" class="img-thumbnail rounded-circle w-100">
                                            </div>
                                            <div class="col-8 pl-1 mt-3">
                                                <span class="font-weight-bold"><?= $k->nama ?></span> <br>
                                                <span class="text-muted">Div. <?= $k->nama_divisi ?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <address>
                                            Email: <?= $k->email ?> <br>
                                            Telp: <?= $k->telp ?>
                                        </address>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('karyawan/edit/' . $k->id_user) ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?= base_url('karyawan/destroy/' . $k->id_user) ?>" data-toggle="modal" data-target="#modal-danger" class="btn btn-danger btn-sm btn-delete ml-2" ><i class="fa fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-danger">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Danger Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Yakin Ingin Menghapus Data Ini ?&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <a class="btn btn-danger btn-sm btn-delete ml-2 btn-outline-light" data-dismiss="modal">Close</a>
              <a href="<?= base_url('karyawan/destroy/' . $k->id_user) ?>" class="btn btn-danger btn-sm btn-delete ml-2 btn-outline-light">Save Change</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
    </div> 
</div>
</section>
</div>
