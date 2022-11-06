 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Kandidat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/superadmin/dashboard')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('/superadmin/penilaian')?>">Penilaian Kandidat </a></li>
              <li class="breadcrumb-item active">Daftar Kandidat </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main content -->
   
        <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Data Kandidat</h3>
              </div>
              <div class="content-header">

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
                    <th>Dept Sekarang</th>
                    <th>Posisi Sekarang</th>
                    <th>Action</th>
                    <th>Nilai Norma</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $this->db->select('promosi.id, nilai_norma, grade, karyawan.id_karyawan, nama, departemen_kosong, posisi_kosong, departemen, posisi, status');
                  $this->db->join('jabatan_kosong', 'jabatan_kosong.id = promosi.id_jabatan_kosong');
                  $this->db->join('karyawan','karyawan.id = promosi.id_karyawan');
                  //$this->db->order_by('nilai_norma', 'desc');
                  $this->db->where('status', 'On Process');
                  $this->db->where('karyawan.alpha = ', '0');

                  $this->db->order_by('grade', 'asc');

                  $q = $this->db->get('promosi');
				  $no = 1;
				  foreach ($q->result_array() as $promosi) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $promosi['id_karyawan']; ?></td>
                    <td><?= $promosi['nama']; ?></td>
                    <td><?= $promosi['departemen_kosong']; ?></td>
                    <td><?= $promosi['posisi_kosong']; ?></td>
                    <td><?= $promosi['departemen']; ?></td>
                    <td><?= $promosi['posisi']; ?></td>
                    <td>
                      <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-input"><i class="nav-icon fas fa-pencil-alt"></i> Input Nilai</button>
                      -->
                      <?php echo anchor('superadmin/penilaian_kandidat/edit/' . $promosi['id'], ' <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="nav-icon fas fa-pen"></i> Penilaian</button>') ?>
                      <?php echo anchor('superadmin/penilaian_kandidat/ubah_status/' . $promosi['id'], ' <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="van-icon fas fa-pen"></i> Status</button>') ?>

                    </td>
                    <td><?= $promosi['grade']; ?></td>
                    <td><?= $promosi['status']; ?></td>
                  </tr>
<?php endforeach ?>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Dept</th>
                    <th>Posisi</th>
                    <th>Dept Sekarang</th>
                    <th>Posisi Sekarang</th>
                    <th>Action</th>
                    <th>Nilai Norma</th>
                    <th>Status</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
        </div>
        <!-- /.row (main content) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

