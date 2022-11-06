 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Penilaian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Penilaian</li>
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
              <div class="card-header bg-primary">
                <h3 class="card-title">Data kekosongan Jabatan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Posisi</th>
                    <th>Dept</th>
                    <th>Kuota</th>
                    <th>Action</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $q = $this->db->get('jabatan_kosong');
											$no = 1;
											foreach ($q->result_array() as $jabatan_kosong) : ?>
                  <tr>
                    <td><?= $jabatan_kosong['posisi_kosong']; ?></td>
                    <td><?= $jabatan_kosong['departemen_kosong']; ?></td>
                    <td><?= $jabatan_kosong['kuota']; ?></td>
                    <td>
                      <a href="<?= base_url('/superadmin/penilaian_kandidat')?>">
                        <button class="btn btn-primary"><i class="nav-icon fas fa-eye"></i></button>
                      </a>
                    </td>
                    <td>Buka</td>
                  </tr>
                  <?php endforeach ?>
                  <tfoot>
                  <tr>
                    <th>Posisi</th> 
                    <th>Dept</th>
                    <th>Kuota</th>
                    <th>Action</th>
                    <th>Status</th>
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