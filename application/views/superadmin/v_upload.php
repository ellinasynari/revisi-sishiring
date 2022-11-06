 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Upload Files</li>
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
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Upload Files</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
    <!-- Header -->
    <div class="content-header">

        <!-- Import Button -->
        <a data-toggle="modal" data-target="#modalImport" class="btn btn-sm btn-success">
            <i class="fas fa-file-import"></i> Import
        </a>

        <!-- Export Button 
        <a data-toggle="modal" data-target="#modalExport" class="btn btn-sm btn-primary float-right">
            <i class="fas fa-download"></i> Export
        </a>-->

    </div>

        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data karyawan</h3>
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
                    <td><?php  echo anchor('superadmin/upload/delete/'.$karyawan['id'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
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
    //$this->load->view('superadmin/template/modal-export-excel'); 
    $this->load->view('superadmin/template/modal-import-excel');

?>

