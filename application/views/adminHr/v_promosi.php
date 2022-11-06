 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Promosi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Promosi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row (main content) -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Karyawan</h3>
              </div>
              <div class="card-header">
              <a href="<?= base_url('admin_hr/promosi/promosi_kandidat')?>">
                        <button class="btn btn-warning"><i class="nav-icon fas fa-eye"> Lihat Kandidat Lolos</i></button>
                      </a>
</div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Dept</th>
                    <th>Posisi</th>
                    <th>Hadir</th>
                    <th>Sakit</th>
                    <th>Izin</th>
                    <th>Alpha</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($karyawan_list as $key => $karyawan) { ?>
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td><?= $karyawan['id_karyawan'] ?></td>
                    <td><?= $karyawan['nama'] ?></td>
                    <td><?= $karyawan['departemen'] ?></td>
                    <td><?= $karyawan['posisi'] ?></td>
                    <td><?= $karyawan['sakit'] ?></td>
                    <td><?= $karyawan['izin'] ?></td>
                    <td><?= $karyawan['hadir'] ?></td>
                    <td><?= $karyawan['alpha'] ?></td>
                    <td>
                      <?php  echo anchor('superadmin/upload/delete/'.$karyawan['id'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?> 
                      <a data-toggle="modal" data-target="#modalInput" class="btn btn-success">
                          <i class="fas fa-file-export"></i> Tambah Data Kandidat Promosi
                      </a>
                  </td>
                  </tr>
                  <?php } ?> 
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Dept</th>
                    <th>Posisi</th>
                    <th>Hadir</th>
                    <th>Sakit</th>
                    <th>Izin</th>
                    <th>Alpha</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                                   
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- Load Modal Views -->
<?php 
    $this->load->view('superadmin/template/modal-pengajuan');
?>
