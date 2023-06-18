<?php
$sql = "DELETE FROM tabel_kriteria WHERE id_kriteria='$_GET[id_kriteria]'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location = 'index.php?module=list_kriteria';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>