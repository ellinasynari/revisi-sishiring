
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
              <li class="breadcrumb-item active">Input kekosongan Jabatan</li>
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
                <h3 class="card-title">Input Kekosongan Jabatan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url() . 'superadmin/input/save'; ?>" enctype='multipart/form-data' method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="posisi_kosong">Posisi</label>
                    <input type="text" class="form-control" id="posisi_kosong" name="posisi_kosong" placeholder="posisi">
                  </div>
                  <div class="form-group">
                    <label for="departemen_kosong">Departemen</label>
                    <input type="text" class="form-control" id="departemen_kosong" name="departemen_kosong" placeholder="departement">
                  </div>
                  <div class="form-group">
                    <label for="Kuota">Kuota</label>
                    <input type="number" class="form-control" id="kuota" name="kuota" placeholder="Kuota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                            <input type="file" value="<?php echo base_url(); ?>upload/logo.png" name="foto" id="foto" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
         </div>


         <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Data kekosongan Jabatan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Posisi</th>
                    <th>Dept</th>
                    <th>Kuota</th>
                    <!--<th>Gambar</th>-->
                    <th>Action</th>
                  </tr>
                  </thead>
                <tbody>
                <?php $no = 1;
            foreach ($jabatan_kosong as $jk) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $jk->posisi_kosong ?></td>
                        <td><?php echo $jk->departemen_kosong ?></td>
                        <td><?php echo $jk->kuota ?></td>
                        <!--<td>
                            <img src="<?php echo base_url(); ?>upload/<?php echo $jk->foto; ?>" alt="" width="90" height="100">
                        </td>-->
                        <td>
                            <!-- <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button> -->

                            <?php echo anchor('superadmin/input/edit/' . $jk->id, ' <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button>') ?>

                            <?php echo anchor('superadmin/input/hapus/' . $jk->id, '<button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="far fa-trash-alt"></i></button>') ?>


                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>         
                  <tr>
                    <th>No</th>
                    <th>Posisi</th> 
                    <th>Dept</th>
                    <th>Kuota</th>
                <!--<th>Gambar</th>-->
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
