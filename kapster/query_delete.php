<?php
include '../koneksi.php';
 
$kode_outlet   = $_GET['kode_outlet'];
$query="DELETE from kapster where kode_outlet='KO-001'";
mysqli_query($koneksi, $query);
echo "<script>alert('Data Berhasil di Hapus');window.location='index.php'</script>";
?>