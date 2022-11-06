<!-- Modal Input -->
<div id="modalInput" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="<?= site_url('superadmin/promosi/save') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kandidat Promosi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mb-3">

                  <div class="form-group">
                  <label for="id_jabatan_kosong">Posisi</label>
                    <select class="form-control" id="id_jabatan_kosong" name="id_jabatan_kosong">
                    <option value="" disabled selected>Pilih Posisi</option>
                    <?php foreach($jabatan_kosong as $jk):?>
                    <option value="<?= $jk->id?>">
                    <?= $jk->posisi_kosong?> - <?= $jk->departemen_kosong?>
                    </option>
                    <?php  endforeach;?>
                  </select>
                  </div>
                  <div class="form-group">
                  <label for="id_karyawan">Kandidat</label>
                  <select class="form-control" id="id_karyawan" name="id_karyawan">
                    <option value="" disabled selected>Pilih Kandidat</option>
                    <?php foreach($karyawan as $k):?>
                      <option value="<?= $k->id?>"><?= $k->nama?> - <?= $k->posisi?> (<?= $k->departemen?>)</option>
                      <?php  endforeach;?>
                    </select>
                  </div>


                <input type="hidden" name="nilai_kreatif" value="">
                <input type="hidden" name="nilai_kerjasama" value="">
                <input type="hidden" name="nilai_kemampuan_bekerja" value="">
                <input type="hidden" name="nilai_kepemimpinan" value="">
                <input type="hidden" name="nilai_norma" value="">


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
         </div>

               
        </div>
    </div>
</div>