        <h3><i class="fa fa-angle-right"></i> List Siswa</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table" style="padding: 15px;">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="myDataTables">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>C6</th>
                    <th>C7</th>
                    <th>C8</th>
                    <th>C9</th>
                    <th>C10</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
          <?php
          $sql = "SELECT * FROM tabel_siswa";
          $result = mysqli_query($koneksi, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
          ?>
                  <tr class="gradeX">
                    <td><?=$row['nama']?></td>
                    <td><?=$row['PekerjaanAyah']?></td>
                    <td><?=$row['PekerjaanIbu']?></td>
                    <td><?=$row['PenghasilanAyah']?></td>
                    <td><?=$row['PenghasilanIbu']?></td>
                    <td><?=$row['JumlahTanggungan']?></td>
                    <td><?=$row['JumlahTanggunganYangSekolah']?></td>
                    <td><?=$row['NilaiRapot']?></td>
                    <td><?=$row['PemegangKKS']?></td>
                    <td><?=$row['TempatTinggal']?></td>
                    <td><?=$row['JenisRumah']?></td>

                    <td class="hidden-phone">
                        <a href="index.php?module=update_siswa&id_siswa=<?=$row['id_siswa']?>"><button type="button" class="btn btn-warning"><i class="fa fa-cog"></i> Update</button></a>
                        <a href="index.php?module=hapus_siswa&id_siswa=<?=$row['id_siswa']?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button></a>
                    </td>
                  </tr>
          <?php
              }
          ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->