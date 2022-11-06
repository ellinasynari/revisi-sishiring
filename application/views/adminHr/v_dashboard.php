 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Admin HR</li>
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
        $this->db->select('posisi_kosong, departemen_kosong, foto');
        $q = $this->db->get('jabatan_kosong');
				foreach ($q->result_array() as $jabatan_kosong) : ?>
        <!-- /.row (main content) -->
        <div class="callout callout-info">
          <div class="row">
              <div class="col-4">
                <h5>Posisi : <?= $jabatan_kosong['posisi_kosong']; ?></h5>
                <p>Jabatan : <?= $jabatan_kosong['departemen_kosong']; ?></p>
              </div>
              <div class="col-8">
              <img src="<?php echo base_url(); ?>upload/<?php echo $jabatan_kosong['foto'];?>" alt="" width="310" height="320" class="mb-3">
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