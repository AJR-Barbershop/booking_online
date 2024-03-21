<?php
include '../koneksi.php';
 
$kode_outlet    = $_POST['kode_outlet'];
$nama_pegawai    = $_POST['nama_pegawai'];

$query="INSERT INTO kapster SET  kode_outlet='$kode_outlet', nama_pegawai='$nama_pegawai'";
mysqli_query($koneksi, $query);

echo "<script>alert('Data Berhasil di Tambah');window.location='index.php'</script>";

?>