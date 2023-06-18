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

// sql
$sql = "INSERT INTO tabel_siswa (nama, jenis_kelamin, alamat, PekerjaanAyah, PekerjaanIbu, PenghasilanAyah, PenghasilanIbu, JumlahTanggungan, JumlahTanggunganYangSekolah, NilaiRapot, PemegangKKS, TempatTinggal, JenisRumah)	
VALUES ('$nama', '$jenis_kelamin', '$nalamat','$nPkrnAyah','$nPkrnIbu','$nPhslAyah','$nPhslIbu','$nJmlhTangn','$nJmlhTangnYgSklh', '$nNilai', '$nKKS','$nTmptTngl','$nJnsRmh')";

if ($koneksi->query($sql) === TRUE) {
	//mengambil id siswa terkahir yang baru saja dimasukan
	$sqlIdakhir = "SELECT id_siswa FROM tabel_siswa ORDER BY id_siswa DESC limit 5";
          $resultIdakhir = mysqli_query($koneksi, $sqlIdakhir);
              $hasil = mysqli_fetch_assoc($resultIdakhir);
              	$id_siswa = $hasil['id_siswa'];
              	
              	//insert data to table nilai.
              	$sPkrnAyah = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('1', '$id_siswa', '$nPkrnAyah')";
				$koneksi->query($sPkrnAyah);

				$sPkrnIbu = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('2', '$id_siswa', '$nPkrnIbu')";
				$koneksi->query($sPkrnIbu);

				$sPhslAyah = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('3', '$id_siswa', '$nPhslAyah')";
				$koneksi->query($sPhslAyah);

				$sPhslIbu = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('4', '$id_siswa', '$nPhslIbu')";
				$koneksi->query($sPhslIbu);

				$sJmlhTangn = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('5', '$id_siswa', '$nJmlhTangn')";
				$koneksi->query($sJmlhTangn);

				$sJmlhTangnYgSklh = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('6', '$id_siswa', '$nJmlhTangn')";
				$koneksi->query($sJmlhTangnYgSklh);

				$sNilai = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('7', '$id_siswa', '$nNilai')";
				$koneksi->query($sNilai);

				$sKKS = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('8', '$id_siswa', '$nKKS')";
				$koneksi->query($sKKS);

				$sTmptTngl = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('9', '$id_siswa', '$nTmptTngl')";
				$koneksi->query($sTmptTngl);

				$sJnsRmh = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('10', '$id_siswa', '$nJnsRmh')";
				$koneksi->query($sJnsRmh);

				echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_siswa';</script>";
}

// eksekusi sql

// if ($koneksi->query($sql) === TRUE) {
//     echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_kriteria';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $koneksi->error;
// }

?>