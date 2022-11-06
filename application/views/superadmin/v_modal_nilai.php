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

                  <div class="form-group">
                <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                  <input type="hidden" name="id_promosi" value="">
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Aspek Penilaian</th>
                      <th>Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>1.</td>
                      <td>Kreatif</td>
                      <td>
                        <input class="form-group" type="number" name="nilai_kreatif" id="nilai_kreatif">
                      </td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Kreatif</td>
                      <td>
                        <input class="form-group" type="number" name="nilai_kreatif" id="nilai_kreatif">
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Kerjasama</td>
                      <td>
                        <input class="form-group"type="number" name="nilai_kerjasama" id="nilai_kerjasama">
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Kemampuan Bekerja Sendiri</td>
                      <td>   
                        <input class="form-group"type="number" name="nilai_kemampuan_bekerja" id="nilai_kemampuan_bekerja">
                      </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Kepemimpinan</td>
                      <td>
                         <input class="form-group" type="number" name="nilai_kepemimpinan" id="nilai_kepemimpinan">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <div class="total text-right">
                  <!-- total diambil dari field diatas -->
                  <h4>Total : ___</h4>
                  <span>Nilai Norma </span><input type="number" class="form-group" name="nilai_norma" id="nilai_norma">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary"><a href="<?= site_url('superadmin/penilaian_kandidat/add') ?>">Save changes</a></button>
            </div>
          </div>
          <!-- /.modal-content -->
          </form>
         </div>

               
        </div>
    </div>
</div>