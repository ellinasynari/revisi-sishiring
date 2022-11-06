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
              <li class="breadcrumb-item active">Jadwal Interview Kandidat</li>
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
            <h3 class="card-title">Jadwal Interview Kandidat</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->    

        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Karyawan</h3>
              </div>
              <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>No</th> 
                    <th>Posisi</th>
                    <th>Departemen</th>
                    <th>Nama Kandidat</th>
                    <th>Jabatan Sebelumnya</th>
                    <th>Jadwal</th>
                    <!--<th>Action</th>-->
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $this->db->select('posisi_kosong,departemen_kosong, nama, posisi, jadwal, promosi.id');
                  $this->db->join('jabatan_kosong', 'jabatan_kosong.id = promosi.id_jabatan_kosong');
                  $this->db->join('karyawan','karyawan.id = promosi.id_karyawan');
                  $this->db->where('status', 'On Process');
                $this->db->where('karyawan.alpha = ', '0');

                  $q = $this->db->get('promosi');
											$no = 1;
											foreach ($q->result_array() as $promosi) : ?>
                  <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $promosi['posisi_kosong']; ?></td>
                        <td><?= $promosi['departemen_kosong']; ?></td>
                        <td><?= $promosi['nama']; ?></td>
                        <td><?= $promosi['posisi']; ?></td>
                        <td><b><?= $promosi['jadwal']; ?></b></td>

                        <!--<td>
                        <?php // echo anchor('superadmin/promosi/delete/'. $promosi['id'],'<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                        </td>-->
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>       

                  <tr>
                    <th>No</th> 
                    <th>Posisi</th>
                    <th>Departemen</th>
                    <th>Nama</th>
                    <th>Jabatan Sebelumnya</th>
                    <th>Jadwa</th>
                    <!--<th>Action</th>-->
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

=
