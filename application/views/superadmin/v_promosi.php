<?php
  error_reporting(0);
?>
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
              <li class="breadcrumb-item active">Data Kandidat Promosi</li>
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
            <h3 class="card-title">Data Kandidat Promosi</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
    <!-- Header -->
    <div class="content-header">

        <!-- Modal Button -->
        <!-- <a data-toggle="modal" data-target="#modalInput" class="btn btn-sm btn-success">
            <i class="fas fa-file-export"></i> Tambah Data Kandidat Promosi
        </a> -->



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
                    <th>Posisi</th>
                    <th>Departemen</th>
                    <th>Nama Kandidat</th>
                    <th>Jabatan Sebelumnya</th>
                    <th>Jadwal</th>
                    <th>Action</th>
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
                        <td><?= $promosi['jadwal']; ?></td>

                        <td>
                            <?php echo anchor('superadmin/promosi/delete/'. $promosi['id'],'<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                            <a data-toggle="modal" data-target="#modalSet" class="btn btn-success">
                              <i class="fas fa-calendar"></i> Set Tanggal
                            </a>
                          </td>
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
    $this->load->view('superadmin/template/modal-set-tgl');
    // $this->load->view('superadmin/template/modal-input-promosi');
?>

