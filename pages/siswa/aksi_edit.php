<?php
// mengambil data koneksi
include '../../lib/koneksi.php';
// mengambil data dari form sebelumnya
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$PkrnAyah = $_POST['PekerjaanAyah'];
$PkrnIbu = $_POST['PekerjaanIbu'];
$PhslAyah = $_POST['PenghasilanAyah'];
$PhslIbu = $_POST['PenghasilanIbu'];
$JmlhTangn = $_POST['JumlahTanggungan'];
$JmlhTangnYgSklh = $_POST['JumlahTanggunganYangSekolah'];
$Nilai = $_POST['NilaiRapot'];
$KKS = $_POST['PemegangKKS'];
$TmptTngl = $_POST['TempatTinggal'];
$JnsRmh = $_POST['JenisRumah'];


// Pekerjaan Ayah
if ($PkrnAyah == 'PNS') {
	$nPkrnAyah = 1;
}else if ($PkrnAyah == 'PekerjaSwasta'){
	$nPkrnAyah = 2;
}else if ($PkrnAyah == 'Wiraswasta'){
	$nPkrnAyah = 3;
}else if ($PkrnAyah == 'Buruh'){
	$nPkrnAyah = 4;
}else if ($PkrnAyah == 'Tidak'){
	$nPkrnAyah = 5;
}else{
	$nPkrnAyah = 5;
}

// Pekerjaan Ibu
if ($PkrnIbu == 'PNS') {
	$nPkrnIbu = 1;
}else if ($PkrnIbu == 'PekerjaSwasta'){
	$nPkrnIbu = 2;
}else if ($PkrnIbu == 'Wiraswasta'){
	$nPkrnIbu = 3;
}else if ($PkrnIbu == 'Buruh'){
	$nPkrnIbu = 4;
}else if ($PkrnIbu == 'Tidak'){
	$nPkrnIbu = 5;
}else{
	$nPkrnIbu = 5;
}

// Penghasilan Ayah
if ($PhslAyah == '2jt>=1,5jt') {
	$nPhslAyah = 1;
}else if ($PhslAyah == '1,5jt>=1jt'){
	$nPhslAyah = 2;
}else if ($PhslAyah == '1jt>=500k'){
	$nPhslAyah = 3;
}else if ($PhslAyah == '500k>=200k'){
	$nPhslAyah = 4;
}else{
	$nPhslAyah = 5;
}

// Penghasilan Ibu
if ($PhslIbu == '2jt>=1,5jt') {
	$nPhslIbu = 1;
}else if ($PhslIbu == '1,5jt>=1jt'){
	$nPhslIbu = 2;
}else if ($PhslIbu == '1jt>=500k'){
	$nPhslIbu = 3;
}else if ($PhslIbu == '500k>=200k'){
	$nPhslIbu = 4;
}else{
	$nPhslIbu = 5;
}

// Jumlah Tanggungan
if ($JmlhTangn == '5') {
	$nJmlhTangn = 5;
}else if ($JmlhTangn == '4'){
	$nJmlhTangn = 4;
}else if ($JmlhTangn == '3'){
	$nJmlhTangn = 3;
}else if ($JmlhTangn == '2'){
	$nJmlhTangn = 2;
}else{
	$nJmlhTangn = 1;
}

// Jumlah Tanggungan Yang Sekolah
if ($JmlhTangnYgSklh == '5') {
	$nJmlhTangnYgSklh = 5;
}else if ($JmlhTangnYgSklh == '4'){
	$nJmlhTangnYgSklh = 4;
}else if ($JmlhTangnYgSklh == '3'){
	$nJmlhTangnYgSklh = 3;
}else if ($JmlhTangnYgSklh == '2'){
	$nJmlhTangnYgSklh = 2;
}else{
	$nJmlhTangnYgSklh = 1;
}

// Nilai Rapor
if ($Nilai == '100>=90') {
	$nNilai = 5;
}else if ($Nilai == '90>=80'){
	$nNilai = 4;
}else if ($Nilai == '80>=70'){
	$nNilai = 3;
}else if ($Nilai == '70>=60'){
	$nNilai = 2;
}else{
	$nNilai = 1;
}

// KPS
if ($KKS == 'ya') {
	$nKKS = 5;
}else{
	$nKKS = 1;
}

// Tempat Tinggal
if ($TmptTngl == 'sendiri') {
	$nTmptTngl = 1;
}elseif($TmptTngl == 'kontrak') {
	$nTmptTngl = 3;
}else{
	$nTmptTngl = 5;
}

// Jenis Rumah
if ($JnsRmh == 'Permanem') {
	$nJnsRmh = 1;
}else{
	$nJnsRmh = 5;
}

 // echo $nKPS."<br>";
 // echo $nPKH."<br>";
 // echo $nStatus."<br>";
 // echo $nEkonomi."<br>";
 // echo $penghasilan."<br>";


	//mengambil id siswa terkahir yang baru saja dimasukan
              	
              	// insert data to table nilai.
              	$sPkrnAyah ="UPDATE tabel_nilai SET nilai = '$nPkrnAyah' WHERE id_kriteria='1' AND id_siswa = '$id_siswa'; ";
				$koneksi->query($sPkrnAyah);

				$sPkrnIbu ="UPDATE tabel_nilai SET nilai = '$nPkrnIbu' WHERE id_kriteria='2' AND id_siswa = '$id_siswa'; ";
				$koneksi->query($sPkrnIbu);

				$sPhslAyah ="UPDATE tabel_nilai SET nilai = '$nPhslAyah' WHERE id_kriteria='3' AND id_siswa = '$id_siswa'; ";
				$koneksi->query($sPhslAyah);

				$sPhslIbu ="UPDATE tabel_nilai SET nilai = '$nPhslIbu' WHERE id_kriteria='4' AND id_siswa = '$id_siswa'; ";
				$koneksi->query($sPhslIbu);

				$sJmlhTangn ="UPDATE tabel_nilai SET nilai = '$nJmlhTangn' WHERE id_kriteria='5' AND id_siswa = '$id_siswa'; ";
                $koneksi->query($sJmlhTangn);
                
				$sJmlhTangnYgSklh ="UPDATE tabel_nilai SET nilai = '$nJmlhTangnYgSklh' WHERE id_kriteria='6' AND id_siswa = '$id_siswa'; ";
				$koneksi->query($sJmlhTangnYgSklh);

				$sNilai ="UPDATE tabel_nilai SET nilai = '$nNilai' WHERE id_kriteria='7' AND id_siswa = '$id_siswa'; ";
				$koneksi->query($sNilai);

				$sKKS ="UPDATE tabel_nilai SET nilai = '$nKKS' WHERE id_kriteria='8' AND id_siswa = '$id_siswa'; ";
				$koneksi->query($sKKS);

				$sTmptTngl ="UPDATE tabel_nilai SET nilai = '$nTmptTngl' WHERE id_kriteria='9' AND id_siswa = '$id_siswa'; ";
				$koneksi->query($sTmptTngl);

				$sJnsRmh ="UPDATE tabel_nilai SET nilai = '$nJnsRmh' WHERE id_kriteria='10' AND id_siswa = '$id_siswa'; ";
                $koneksi->query($sJnsRmh);

                $sqlSiswa = "UPDATE tabel_siswa SET nama= '$nama', jenis_kelamin='$jenis_kelamin',alamat='$alamat',PekerjaanAyah='$PkrnAyah',PekerjaanIbu='$PkrnIbu',
                            PenghasilanAyah='$PhslAyah',PenghasilanIbu='$PhslIbu',JumlahTanggungan='$JmlhTangn',JumlahTanggunganYangSekolah='$JmlhTangnYgSklh',PemegangKKS='$KKS',
                            TempatTinggal='$TmptTngl',JenisRumah='$JnsRmh' WHERE id_siswa = '$id_siswa' ";
                $koneksi->query($sqlSiswa);

				echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_siswa';</script>";


// eksekusi sql

// if ($koneksi->query($sql) === TRUE) {
//     echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_kriteria';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $koneksi->error;
// }

?>