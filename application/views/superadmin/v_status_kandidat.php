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
                    <!--<th>ID</th>-->
                    <th>Nama</th>
                    <th>Dept</th>
                    <th>Posisi</th>
                    <th>Dept Sekarang</th>
                    <th>Posisi Sekarang</th>
                    <th>Norma</th>
                    <!--<th>Status</th>-->
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $this->db->select('promosi.id, nilai_norma, grade, karyawan.id_karyawan, nama, departemen_kosong, posisi_kosong, departemen, posisi, status');
                  $this->db->join('jabatan_kosong', 'jabatan_kosong.id = promosi.id_jabatan_kosong');
                  $this->db->join('karyawan','karyawan.id = promosi.id_karyawan');
                  $this->db->where('status', 'On Process');
                  $this->db->order_by('nilai_norma', 'desc');


                  $q = $this->db->get('promosi');
											//$no = 1;
											foreach ($q->result_array() as $promosi) : ?>
                  <tr>
                    <!--<td><?= $promosi['id_karyawan']; ?></td>-->
                    <td><?= $promosi['nama']; ?></td>
                    <td><?= $promosi['departemen_kosong']; ?></td>
                    <td><?= $promosi['posisi_kosong']; ?></td>
                    <td><?= $promosi['departemen']; ?></td>
                    <td><?= $promosi['posisi']; ?></td>
                    <td><?= $promosi['grade']; ?></td>

                    <!--<td><?= $promosi['status']; ?></td>-->

                    <td> 
							<div class=col-md-8 >

							<?php 						
								$data['promosi'] = $this->MPromosi->tampil_by_id($promosi['id']);
								foreach ($data as $tab):
							?>
							<form action="<?php echo base_url("superadmin/penilaian_kandidat/proses_ubah_status/$tab->id")?>" method="post" enctype="multipart/form-data" >
							<input type="hidden" name="id" value="<?php echo $tab->id ?>">
                            <input type="hidden" name="id_jabatan_kosong" value="<?php echo $tab->id_jabatan_kosong ?>">
                            <input type="hidden" name="id_karyawan" value="<?php echo $tab->id_karyawan ?>">
                            <input type="hidden" name="jadwal" value="<?php echo $tab->jadwal ?>">
                            <input type="hidden" name="status" value="<?php echo $tab->status ?>">
                            <input type="hidden" name="nilai_kreatif" value="<?php echo $tab->nilai_kreatif ?>">
                            <input type="hidden" name="nilai_kerjasama" value="<?php echo $tab->nilai_kerjasama ?>">
                            <input type="hidden" name="nilai_kemampuan_bekerja" value="<?php echo $tab->nilai_kemampuan_bekerja ?>">
                            <input type="hidden" name="nilai_kepemimpinan" value="<?php echo $tab->nilai_kepemimpinan ?>">
                            <input type="hidden" name="nilai_norma" value="<?php echo $tab->nilai_norma ?>">
                            <input type="hidden" name="grade" value="<?php echo $tab->grade ?>">

							
							<label class="status">On Process
                            <input type="checkbox" onclick="onlyOne(this)" value="On Process" name="status">
							</label>
							<label class="status"> Lolos
                            <input type="checkbox" onclick="onlyOne(this)" value="Lolos" name="status">
                            </label>
                            <label class="status"> Gagal
                            <input type="checkbox" onclick="onlyOne(this)" value="Gagal" name="status">
                            </label>
                            </div>
                        
                        </td>
                        <td>    <button type="submit" class="btn btn-primary"  >Simpan</button> 
                        </td>        
                        </form>
						
						<?php endforeach; ?>
                </td>
                  </tr>
<?php endforeach ?>
                  <tfoot>
                  <tr>
                    <!--<th>ID</th>-->
                    <th>Nama</th>
                    <th>Dept</th>
                    <th>Posisi</th>
                    <th>Dept Sekarang</th>
                    <th>Posisi Sekarang</th>
                    <th>Norma</th>
                    <!--<th>Status</th>-->
                    <th>Status</th>
                    <th>Action</th>
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

<script type="text/javascript">
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('status')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
</script>