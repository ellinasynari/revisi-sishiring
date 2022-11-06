 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Informasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Informasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <?php
        $this->db->select('promosi.id, jadwal, karyawan.id_karyawan, nama, departemen_kosong, posisi_kosong, departemen, posisi, status');
        $this->db->join('jabatan_kosong', 'jabatan_kosong.id = promosi.id_jabatan_kosong');
        $this->db->join('karyawan','karyawan.id = promosi.id_karyawan');
        $this->db->order_by('status','asc');
        $this->db->where('karyawan.alpha = ', '0');

        $q = $this->db->get('promosi');
				foreach ($q->result_array() as $promosi) : ?>
        <!-- /.row (main content) -->
        <div class="callout callout-info">
          <div class="row">
              <div class="col-6">
                <h5><?= $promosi['nama']; ?> - <?= $promosi['posisi_kosong']; ?> (<?= $promosi['departemen_kosong']; ?>)</h5>
                <p>Status : <?= $promosi['status']; ?></p>
              </div>
              <div class="col-6">
                <p class="text-right"><?= $promosi['jadwal']; ?></p>
              </div>
          </div>             
        </div>  
        <?php endforeach ?>
        <!--<div class="callout callout-info">
          <div class="row">
              <div class="col-6">
                <h5> yeni</h5>
                <p>Interview : 08:00 09/09/2022</p>
              </div>
              <div class="col-6">
                <p class="text-right">13:00 09/09/2022</p>
              </div>
          </div>-->             
        </div>  
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>