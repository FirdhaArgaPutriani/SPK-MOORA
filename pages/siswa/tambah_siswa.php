<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Data Diri</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Kelengkapan</a>
    </li>
  </ul>
<form class="form-horizontal style-form" method="POST" action="pages/siswa/aksi_tambah.php">
  <!-- Tab panes -->
  <div class="tab-content" style="background-color: white;padding: 20px;">
    <div id="home" class="tab-pane active">
      <h3>Data Diri</h3>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama </label>
          <div class="col-sm-10">
            <input type="text" class="form-control round-form" name="nama">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="jenis_kelamin" value="L"> Laki - Laki
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="jenis_kelamin" value="P"> Perempuan
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Alamat </label>
          <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="comment" name="alamat"></textarea>
          </div>
        </div>      
    </div>
    <div id="menu1" class=" tab-pane fade">
      <h3>Kelengkapan</h3>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Pekerjaan Ayah </label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="PekerjaanAyah" value="PNS"> PNS &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="PekerjaanAyah" value="PekerjaSwasta"> Pekerja Swasta &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio3">
                <input type="radio" class="form-check-input" id="radio3" name="PekerjaanAyah" value="Wiraswasta"> Wiraswasta &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio4">
                <input type="radio" class="form-check-input" id="radio4" name="PekerjaanAyah" value="Buruh"> Buruh &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio5">
                <input type="radio" class="form-check-input" id="radio5" name="PekerjaanAyah" value="TidakBekerja"> Tidak Bekerja &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio6">
                <input type="radio" class="form-check-input" id="radio6" name="PekerjaanAyah" value="Mngl"> Meninggal
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Pekerjaan Ibu</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="PekerjaanIbu" value="PNS"> PNS &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="PekerjaanIbu" value="PekerjaSwasta"> Pekerja Swasta &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio3">
                <input type="radio" class="form-check-input" id="radio3" name="PekerjaanIbu" value="Wiraswasta"> Wiraswasta &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio4">
                <input type="radio" class="form-check-input" id="radio4" name="PekerjaanIbu" value="Buruh"> Buruh &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio5">
                <input type="radio" class="form-check-input" id="radio5" name="PekerjaanIbu" value="TidakBekerja"> Tidak Bekerja &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio6">
                <input type="radio" class="form-check-input" id="radio6" name="PekerjaanIbu" value="Mngl"> Meninggal
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Penghasilan Ayah Per Bulan: </label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="PenghasilanAyah" value="2jt>=1,5jt"> 2.000.000 >= 1.500.000 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="PenghasilanAyah" value="1,5jt>=1jt"> 1.500.000 >= 1.000.000 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio3">
                <input type="radio" class="form-check-input" id="radio3" name="PenghasilanAyah" value="1jt>=500k"> 1.000.000 >= 500.000 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio4">
                <input type="radio" class="form-check-input" id="radio4" name="PenghasilanAyah" value="500k>=200k"> 500.000 >= 200.000 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio5">
                <input type="radio" class="form-check-input" id="radio5" name="PenghasilanAyah" value="TidakBerpenghasilan"> Tidak Berpenghasilan
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Penghasilan Ibu Per Bulan</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="PenghasilanIbu" value="2jt>=1,5jt"> 2.000.000 >= 1.500.000 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="PenghasilanIbu" value="1,5jt>=1jt"> 1.500.000 >= 1.000.000 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio3">
                <input type="radio" class="form-check-input" id="radio3" name="PenghasilanIbu" value="1jt>=500k"> 1.000.000 >= 500.000 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio4">
                <input type="radio" class="form-check-input" id="radio4" name="PenghasilanIbu" value="500k>=200k"> 500.000 >= 200.000 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio5">
                <input type="radio" class="form-check-input" id="radio5" name="PenghasilanIbu" value="TidakBerpenghasilan"> Tidak Berpenghasilan
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Jumlah Tanggungan</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="JumlahTanggungan" value="5"> 5 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="JumlahTanggungan" value="4"> 4 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio3">
                <input type="radio" class="form-check-input" id="radio3" name="JumlahTanggungan" value="3"> 3 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio4">
                <input type="radio" class="form-check-input" id="radio4" name="JumlahTanggungan" value="2"> 2 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio5">
                <input type="radio" class="form-check-input" id="radio5" name="JumlahTanggungan" value="1"> 1
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Jumlah Tanggungan Yang Bersekolah</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="JumlahTanggunganYangSekolah" value="5"> 5 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="JumlahTanggunganYangSekolah" value="4"> 4 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio3">
                <input type="radio" class="form-check-input" id="radio3" name="JumlahTanggunganYangSekolah" value="3"> 3 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio4">
                <input type="radio" class="form-check-input" id="radio4" name="JumlahTanggunganYangSekolah" value="2"> 2 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio5">
                <input type="radio" class="form-check-input" id="radio5" name="JumlahTanggunganYangSekolah" value="1"> 1
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nilai Rapor</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="NilaiRapot" value="100>=90"> 100 >= 90 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="NilaiRapot" value="90>=80"> 90 >= 80 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio3">
                <input type="radio" class="form-check-input" id="radio3" name="NilaiRapot" value="80>=70"> 80 >= 70 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio4">
                <input type="radio" class="form-check-input" id="radio4" name="NilaiRapot" value="70>=60"> 70 >= 60 &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio4">
                <input type="radio" class="form-check-input" id="radio4" name="NilaiRapot" value="60>=50"> 60 >= 50 
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Penerima KKS</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="PemegangKKS" value="ya"> Ya &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="PemegangKKS" value="tidak"> Tidak
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tempat Tinggal </label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="TempatTinggal" value="sendiri"> Milik Sendiri &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="TempatTinggal" value="kontrak"> Kontrak &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio3">
                <input type="radio" class="form-check-input" id="radio3" name="TempatTinggal" value="numpang"> Numpang
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Jenis Rumah</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="JenisRumah" value="Permanem"> Permanem &nbsp;&nbsp;
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="JenisRumah" value="SemiPermanen"> Semi Permanen &nbsp;&nbsp;
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12" style="text-align: center;">
            <button type="submit" class="btn btn-theme03">Masukan</a></button> &nbsp;&nbsp;
            <button type="reset" class="btn btn-theme04">Reset</button>
          </div>
        </div>
      
    </div>
  </div>

  </form>