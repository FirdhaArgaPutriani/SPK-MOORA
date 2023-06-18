<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Data Diri</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">Keterangan</a>
  </li>
</ul>

<?php
$id_siswa = $_GET['id_siswa'];
$sql = "SELECT * FROM tabel_siswa WHERE id_siswa = $id_siswa";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form class="form-horizontal style-form" method="POST" action="pages/siswa/aksi_edit.php?id_siswa=<?= $id_siswa ?>">
  <!-- Tab panes -->
  <div class="tab-content" style="background-color: white;padding: 20px;">
    <div id="home" class="tab-pane active">
      <h3>Data Diri</h3>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nama </label>
        <div class="col-sm-10">
          <input type="text" class="form-control round-form" name="nama" value="<?= $row['nama'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <?php
              if ($row['jenis_kelamin'] == 'L') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='jenis_kelamin' value='L' checked> Laki - Laki";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='jenis_kelamin' value='L' > Laki - Laki";
              }
              ?>

            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <?php
              if ($row['jenis_kelamin'] == 'P') {
                echo "<input type='radio' class='form-check-input' id='radio2' name='jenis_kelamin' value='P' checked> Perempuan";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio2' name='jenis_kelamin' value='P' > Perempuan";
              }
              ?>
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Alamat </label>
        <div class="col-sm-10">
          <textarea class="form-control" rows="5" id="comment" name="alamat"><?= $row['alamat'] ?></textarea>
        </div>
      </div>
    </div>
    <div id="menu1" class=" tab-pane fade">
      <h3>Keterangan</h3>

      <!-- Pekerjaan Ayah -->
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Pekerjaan Ayah </label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <?php
              if ($row['PekerjaanAyah'] == 'PNS') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='PekerjaanAyah' value='PNS' checked> PNS &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='PekerjaanAyah' value='PNS'> PNS &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio2">
              <?php
              if ($row['PekerjaanAyah'] == 'PekerjaSwasta') {
                echo "<input type='radio' class='form-check-input' id='radio2' name='PekerjaanAyah' value='PekerjaSwasta' checked> Pekerja Swasta &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio2' name='PekerjaanAyah' value='PekerjaSwasta'> Pekerja Swasta &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio3">
              <?php
              if ($row['PekerjaanAyah'] == 'Wiraswasta') {
                echo "<input type='radio' class='form-check-input' id='radio3' name='PekerjaanAyah' value='Wiraswasta' checked> Wiraswasta &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio3' name='PekerjaanAyah' value='Wiraswasta'> Wiraswasta &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio4">
              <?php
              if ($row['PekerjaanAyah'] == 'Buruh') {
                echo "<input type='radio' class='form-check-input' id='radio4' name='PekerjaanAyah' value='Buruh' checked> Buruh &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio4' name='PekerjaanAyah' value='Buruh'> Buruh &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio5">
              <?php
              if ($row['PekerjaanAyah'] == 'TidakBekerja') {
                echo "<input type='radio' class='form-check-input' id='radio5' name='PekerjaanAyah' value='TidakBekerja' checked> Tidak Bekerja &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio5' name='PekerjaanAyah' value='TidakBekerja'> Tidak Bekerja &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio6">
              <?php
              if ($row['PekerjaanAyah'] == 'Mngl') {
                echo "<input type='radio' class='form-check-input' id='radio6' name='PekerjaanAyah' value='Mngl' checked> Meninggal &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio6' name='PekerjaanAyah' value='Mngl'> Meninggal &nbsp;&nbsp";
              }
              ?>
            </label>
          </div>
        </div>
      </div>

      <!-- Pekerjaan Ibu -->
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Pekerjaan Ibu </label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <?php
              if ($row['PekerjaanIbu'] == 'PNS') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='PekerjaanIbu' value='PNS' checked> PNS &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='PekerjaanIbu' value='PNS'> PNS &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio2">
              <?php
              if ($row['PekerjaanIbu'] == 'PekerjaSwasta') {
                echo "<input type='radio' class='form-check-input' id='radio2' name='PekerjaanIbu' value='PekerjaSwasta' checked> Pekerja Swasta &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio2' name='PekerjaanIbu' value='PekerjaSwasta'> Pekerja Swasta &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio3">
              <?php
              if ($row['PekerjaanIbu'] == 'Wiraswasta') {
                echo "<input type='radio' class='form-check-input' id='radio3' name='PekerjaanIbu' value='Wiraswasta' checked> Wiraswasta &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio3' name='PekerjaanIbu' value='Wiraswasta'> Wiraswasta &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio4">
              <?php
              if ($row['PekerjaanIbu'] == 'Buruh') {
                echo "<input type='radio' class='form-check-input' id='radio4' name='PekerjaanIbu' value='Buruh' checked> Buruh &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio4' name='PekerjaanIbu' value='Buruh'> Buruh &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio5">
              <?php
              if ($row['PekerjaanIbu'] == 'TidakBekerja') {
                echo "<input type='radio' class='form-check-input' id='radio5' name='PekerjaanIbu' value='TidakBekerja' checked> Tidak Bekerja &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio5' name='PekerjaanIbu' value='TidakBekerja'> Tidak Bekerja &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio6">
              <?php
              if ($row['PekerjaanIbu'] == 'Mngl') {
                echo "<input type='radio' class='form-check-input' id='radio6' name='PekerjaanIbu' value='Mngl' checked> Meninggal &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio6' name='PekerjaanIbu' value='Mngl'> Meninggal &nbsp;&nbsp";
              }
              ?>
            </label>
          </div>
        </div>
      </div>

      <!-- Penghasilan Ayah Perbulan -->
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Penghasilan Ayah Per Bulan: </label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <?php
              if ($row['PenghasilanAyah'] == '2jt>=1,5jt') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='PenghasilanAyah' value='2jt>=1,5jt' checked> 2.000.000 >= 1.500.000 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='PenghasilanAyah' value='2jt>=1,5jt'> 2.000.000 >= 1.500.000 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio2">
              <?php
              if ($row['PenghasilanAyah'] == '1,5jt>=1jt') {
                echo "<input type='radio' class='form-check-input' id='radio2' name='PenghasilanAyah' value='1,5jt>=1jt' checked> 1.500.000 >= 1.000.000 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio2' name='PenghasilanAyah' value='1,5jt>=1jt'> 1.500.000 >= 1.000.000 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio3">
              <?php
              if ($row['PenghasilanAyah'] == '1jt>=500k') {
                echo "<input type='radio' class='form-check-input' id='radio3' name='PenghasilanAyah' value='1jt>=500k' checked> 1.000.000 >= 500.000 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio3' name='PenghasilanAyah' value='1jt>=500k'> 1.000.000 >= 500.000 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio4">
              <?php
              if ($row['PenghasilanAyah'] == '500k>=200k') {
                echo "<input type='radio' class='form-check-input' id='radio4' name='PenghasilanAyah' value='500k>=200k' checked> 500.000 >= 200.000 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio4' name='PenghasilanAyah' value='500k>=200k'> 500.000 >= 200.000 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio5">
              <?php
              if ($row['PenghasilanAyah'] == 'TidakBerpenghasilan') {
                echo "<input type='radio' class='form-check-input' id='radio5' name='PenghasilanAyah' value='TidakBerpenghasilan' checked> Tidak Berpenghasilan &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio5' name='PenghasilanAyah' value='TidakBerpenghasilan'> Tidak Berpenghasilan &nbsp;&nbsp";
              }
              ?>
            </label>
          </div>
        </div>
      </div>

      <!-- Penghasilan Ibu Perbulan -->
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Penghasilan Ibu Per Bulan: </label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <?php
              if ($row['PenghasilanIbu'] == '2jt>=1,5jt') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='PenghasilanIbu' value='2jt>=1,5jt' checked> 2.000.000 >= 1.500.000 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='PenghasilanIbu' value='2jt>=1,5jt'> 2.000.000 >= 1.500.000 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio2">
              <?php
              if ($row['PenghasilanIbu'] == '1,5jt>=1jt') {
                echo "<input type='radio' class='form-check-input' id='radio2' name='PenghasilanIbu' value='1,5jt>=1jt' checked> 1.500.000 >= 1.000.000 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio2' name='PenghasilanIbu' value='1,5jt>=1jt'> 1.500.000 >= 1.000.000 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio3">
              <?php
              if ($row['PenghasilanIbu'] == '1jt>=500k') {
                echo "<input type='radio' class='form-check-input' id='radio3' name='PenghasilanIbu' value='1jt>=500k' checked> 1.000.000 >= 500.000 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio3' name='PenghasilanIbu' value='1jt>=500k'> 1.000.000 >= 500.000 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio4">
              <?php
              if ($row['PenghasilanIbu'] == '500k>=200k') {
                echo "<input type='radio' class='form-check-input' id='radio4' name='PenghasilanIbu' value='500k>=200k' checked> 500.000 >= 200.000 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio4' name='PenghasilanIbu' value='500k>=200k'> 500.000 >= 200.000 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio5">
              <?php
              if ($row['PenghasilanIbu'] == 'TidakBerpenghasilan') {
                echo "<input type='radio' class='form-check-input' id='radio5' name='PenghasilanIbu' value='TidakBerpenghasilan' checked> Tidak Berpenghasilan &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio5' name='PenghasilanIbu' value='TidakBerpenghasilan'> Tidak Berpenghasilan &nbsp;&nbsp";
              }
              ?>
            </label>
          </div>
        </div>
      </div>

      <!-- Tanggungan -->
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Jumlah Tanggungan: </label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <?php
              if ($row['JumlahTanggungan'] == '5') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='JumlahTanggungan' value='5' checked> 2.000.000 >= 1.500.000 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='JumlahTanggungan' value='5'> 2.000.000 >= 1.500.000 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio2">
              <?php
              if ($row['JumlahTanggungan'] == '4') {
                echo "<input type='radio' class='form-check-input' id='radio2' name='JumlahTanggungan' value='4' checked> 4 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio2' name='JumlahTanggungan' value='4'> 4 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio3">
              <?php
              if ($row['JumlahTanggungan'] == '3') {
                echo "<input type='radio' class='form-check-input' id='radio3' name='JumlahTanggungan' value='3' checked> 3 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio3' name='JumlahTanggungan' value='3'> 3 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio4">
              <?php
              if ($row['JumlahTanggungan'] == '2') {
                echo "<input type='radio' class='form-check-input' id='radio4' name='JumlahTanggungan' value='2' checked> 2 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio4' name='JumlahTanggungan' value='2k'> 2 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio5">
              <?php
              if ($row['JumlahTanggungan'] == '1') {
                echo "<input type='radio' class='form-check-input' id='radio5' name='JumlahTanggungan' value='1' checked> 1 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio5' name='JumlahTanggungan' value='1'> 1 &nbsp;&nbsp";
              }
              ?>
            </label>
          </div>
        </div>
      </div>

      <!-- Tanggungan Sekolah -->
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Jumlah Tanggungan Yang Sekolah: </label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <?php
              if ($row['JumlahTanggunganYangSekolah'] == '5') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='JumlahTanggunganYangSekolah' value='5' checked> 5 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='JumlahTanggunganYangSekolah' value='5'> 5 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio2">
              <?php
              if ($row['JumlahTanggunganYangSekolah'] == '4') {
                echo "<input type='radio' class='form-check-input' id='radio2' name='JumlahTanggunganYangSekolah' value='4' checked> 4 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio2' name='JumlahTanggunganYangSekolah' value='4'> 4 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio3">
              <?php
              if ($row['JumlahTanggunganYangSekolah'] == '3') {
                echo "<input type='radio' class='form-check-input' id='radio3' name='JumlahTanggunganYangSekolah' value='3' checked> 3 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio3' name='JumlahTanggunganYangSekolah' value='3'> 3 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio4">
              <?php
              if ($row['JumlahTanggunganYangSekolah'] == '2') {
                echo "<input type='radio' class='form-check-input' id='radio4' name='JumlahTanggunganYangSekolah' value='2' checked> 2 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio4' name='JumlahTanggunganYangSekolah' value='2'> 2 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio5">
              <?php
              if ($row['JumlahTanggunganYangSekolah'] == '1') {
                echo "<input type='radio' class='form-check-input' id='radio5' name='JumlahTanggunganYangSekolah' value='1' checked> 1 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio5' name='JumlahTanggunganYangSekolah' value='1'> 1 &nbsp;&nbsp";
              }
              ?>
            </label>
          </div>
        </div>
      </div>

      <!-- Nilai Raport -->
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nilai Rapot: </label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <?php
              if ($row['NilaiRapot'] == '100>=90') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='NilaiRapot' value='100>=90' checked> 100 >= 90 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='NilaiRapot' value='100>=90'> 100 >= 90 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio2">
              <?php
              if ($row['NilaiRapot'] == '90>=80') {
                echo "<input type='radio' class='form-check-input' id='radio2' name='NilaiRapot' value='90>=80' checked> 90 >= 80 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio2' name='NilaiRapot' value='90>=80'> 90 >= 80 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio3">
              <?php
              if ($row['NilaiRapot'] == '80>=70') {
                echo "<input type='radio' class='form-check-input' id='radio3' name='NilaiRapot' value='80>=70' checked> 80 >= 70 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio3' name='NilaiRapot' value='80>=70'> 80 >= 70 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio4">
              <?php
              if ($row['NilaiRapot'] == '70>=60') {
                echo "<input type='radio' class='form-check-input' id='radio4' name='NilaiRapot' value='70>=60' checked> 70 >= 60 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio4' name='NilaiRapot' value='70>=60'> 70 >= 60 &nbsp;&nbsp";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio5">
              <?php
              if ($row['NilaiRapot'] == '60>=50') {
                echo "<input type='radio' class='form-check-input' id='radio5' name='NilaiRapot' value='60>=50' checked> 60 >= 50 &nbsp;&nbsp";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio5' name='NilaiRapot' value='60>=50'> 60 >= 50 &nbsp;&nbsp";
              }
              ?>
            </label>
          </div>
        </div>
      </div>

      <!-- Penerima KKS -->
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Penerima KKS: </label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <?php
              if ($row['PemegangKKS'] == 'ya') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='PemegangKKS' value='ya' checked> Ya";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='PemegangKKS' value='ya'> Ya";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio2">
              <?php
              if ($row['PemegangKKS'] == 'tidak') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='PemegangKKS' value='tidak' checked> Tidak";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='PemegangKKS' value='tidak'> Tidak";
              }
              ?>
            </label>
          </div>
        </div>
      </div>

      <!-- Tempat Tinggal -->
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Tempat Tinggal: </label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <?php
              if ($row['TempatTinggal'] == 'sendiri') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='TempatTinggal' value='sendiri' checked> Milik Sendiri";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='TempatTinggal' value='sendiri'> Milik Sendiri";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio2">
              <?php
              if ($row['TempatTinggal'] == 'kontrak') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='TempatTinggal' value='kontrak' checked> Kontrak";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='TempatTinggal' value='kontrak'> Kontrak";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio2">
              <?php
              if ($row['TempatTinggal'] == 'numpang') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='TempatTinggal' value='numpang' checked> Menumpang";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='TempatTinggal' value='numpang'> Menumpang";
              }
              ?>
            </label>
          </div>
        </div>
      </div>

      <!-- Jenis Rumah -->
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Jenis Rumah : </label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <?php
              if ($row['JenisRumah'] == 'Permanem') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='JenisRumah' value='Permanem' checked> Permanem";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='JenisRumah' value='Permanem'> Permanem";
              }
              ?>
            </label>
            <label class="form-check-label" for="radio2">
              <?php
              if ($row['JenisRumah'] == 'SemiPermanen') {
                echo "<input type='radio' class='form-check-input' id='radio1' name='JenisRumah' value='SemiPermanen' checked> Semi Permanen";
              } else {
                echo "<input type='radio' class='form-check-input' id='radio1' name='JenisRumah' value='SemiPermanen'> Semi Permanen";
              }
              ?>
            </label>
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-12" style="text-align: center;">
          <button type="submit" class="btn btn-theme03">Masukan</button>
          <button type="reset" class="btn btn-theme04">Reset</button>
        </div>
      </div>

    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>

</form>