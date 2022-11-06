
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
              <li class="breadcrumb-item active">Edit Data kekosongan Jabatan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
 
    
    
    <!-- Main content -->
    <section class="content">
<div class="container-fluid">
    <div class="card">

        <h6 class="card-header"><strong>Edit Data kekosongan Jabatan</strong></h6>
        <div class="card-body">
            <form action="<?php echo base_url("superadmin/input/proses_edit/$jabatan_kosong->id")?>" id="data" method="post" enctype='multipart/form-data'>

                <input type="hidden" name="id" value="<?php echo $jabatan_kosong->id ?>">
                <!--<input type="hidden" name="foto_lama" value="<?php echo $jabatan_kosong->foto ?>">-->

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="posisi_kosong">Posisi</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="posisi_kosong" id="posisi_kosong" class="form-control" placeholder="Masukkan Posisi" value="<?php echo $jabatan_kosong->posisi_kosong ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="departemen_kosong">Departemen</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="departemen_kosong" id="departemen_kosong" class="form-control" value="<?php echo $jabatan_kosong->departemen_kosong ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="kuota">Kuota</label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" name="kuota" id="kuota" class="form-control" value="<?php echo $jabatan_kosong->kuota ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="foto">Ganti Gambar</label><br>
                        </div>
                        <div class="col-md-7">
                            <img src="<?php echo base_url(); ?>upload/<?php echo $jabatan_kosong->foto;?>" alt="" width="110" height="120" class="mb-3">
                            <input class="form-control" type="file" name="foto" />
                            <input class="form-control-file" type="hidden" name="old_image" value="<?php echo $jabatan_kosong->foto; ?>" />
                        </div>
                </div>
  

        </div>
        <div class="card-footer text-center">
            <a href="<?php echo base_url('superadmin/input'); ?>" class="btn btn-danger btn-sm"><i class=" fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" name="ubah" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Update</button>
        </div>

        </form>
    </div>



</div>

</div>
<!-- End of Main Content -->
</section>
    <!-- /.content -->
  </div>
