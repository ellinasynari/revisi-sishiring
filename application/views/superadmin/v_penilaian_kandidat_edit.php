
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
              <li class="breadcrumb-item active">Penilaian Kandidat Promosi</li>
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

        <h6 class="card-header"><strong>Penilaian Kandidat Promosi</strong></h6>
        <div class="card-body">
            <form action="<?php echo base_url("superadmin/penilaian_kandidat/proses_edit/$promosi->id")?>" id="data" method="post" enctype='multipart/form-data'>

                <input type="hidden" name="id" value="<?php echo $promosi->id ?>">
                <input type="hidden" name="id_jabatan_kosong" value="<?php echo $promosi->id_jabatan_kosong ?>">
                <input type="hidden" name="id_karyawan" value="<?php echo $promosi->id_karyawan ?>">
                <input type="hidden" name="jadwal" value="<?php echo $promosi->jadwal ?>">
                <input type="hidden" name="status" value="<?php echo $promosi->status ?>">



    <table class="table table-striped">
      <thead>
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
            <input class="form-group" type="number" name="nilai_kreatif" id="txt1"  onkeyup="sum();" value="<?php echo $promosi->nilai_kreatif ?>">
          </td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Kerjasama</td>
          <td>
          <input class="form-group" type="number" step="any" name="nilai_kerjasama" id="txt2"  onkeyup="sum();" value="<?php echo $promosi->nilai_kerjasama ?>">
          </td>
        </tr>
        <tr>
          <td>3.</td>
          <td>Kemampuan Bekerja Sendiri</td>
          <td>
          <input class="form-group" type="number" step="any" name="nilai_kemampuan_bekerja" id="txt3"  onkeyup="sum();" value="<?php echo $promosi->nilai_kemampuan_bekerja ?>">
          </td>
        </tr>
        <tr>
          <td>4.</td>
          <td>Kepemimpinan</td>
          <td>
          <input class="form-group" type="number" step="any" name="nilai_kepemimpinan" id="txt4"  onkeyup="sum();" value="<?php echo $promosi->nilai_kepemimpinan ?>">
          </td>
        </tr>
      </tbody>
    </table>

<div class="total text-right">
      <!-- total dari field diatas secara otomatis -->

      <h4>Total : </h4>
      <input class="form-group" type="number" name="nilai_norma" id="txt5" onkeyup="sum();"  value="<?php echo $promosi->nilai_norma ?>" >
      <!-- nilai norma hasil dari total -->

      <h5>Norma Penilaian : </h5>
      <input class="form-group" type="text" name="grade" id="grade"  value="<?php echo $promosi->grade ?>">
    </div>
</div>



        <div class="card-footer text-center">
            <a href="<?php echo base_url('superadmin/penilaian_kandidat'); ?>" class="btn btn-danger btn-sm"><i class=" fas fa-arrow-left"  ></i> Kembali</a>
            <button type="submit" name="ubah" class="btn btn-primary btn-sm" ><i class="fas fa-save"></i> Save</button>
        </div>
        <div>
        <!--<input type="text" id="txt1"  onkeyup="sum();" />
<input type="text" id="txt2"  onkeyup="sum();" />
<input type="text" id="txt3" />-->
        </form>
    </div>



</div>

</div>
<!-- End of Main Content -->
</section>
    <!-- /.content -->
  </div>

 
<script type="text/javascript">

function sum() {
  var txtFirstNumberValue = document.getElementById('txt1').value;
  var txtSecondNumberValue = document.getElementById('txt2').value;
  var txtThirdNumberValue = document.getElementById('txt3').value;
  var txtFourthNumberValue = document.getElementById('txt4').value;
  var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue) + parseInt(txtThirdNumberValue) + parseInt(txtFourthNumberValue);
  result = document.getElementById('txt5').value = result;
  if(result >= 350 && result <= 400) {
    document.getElementById('grade').value = 'A';
  } else if(result >= 300 && result < 350) {
    document.getElementById('grade').value = 'B'
  } else if(result >= 250 && result < 300) {
    document.getElementById('grade').value = 'C'
  } else if(result >= 200 && result < 250) {
    document.getElementById('grade').value = 'D'
  } else if(result >= 150 && result < 200) {
    document.getElementById('grade').value = 'E'
  } else if(result >= 100 && result < 150) {
    document.getElementById('grade').value = 'F'
  }

}

</script>
