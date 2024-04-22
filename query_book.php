<?php
include 'koneksi.php';
 
$kode_booking    = $_POST['kode_booking'];
$tanggal    = $_POST['tanggal'];
$nama_outlet    = $_POST['nama_outlet'];
$customer       = $_POST['customer'];
$wa       = $_POST['wa'];
$keterangan       = $_POST['keterangan'];
$status       = $_POST['status'];

$query="INSERT INTO booking SET  kode_booking='$kode_booking',customer='$customer',nama_outlet='$nama_outlet',tanggal='$tanggal',wa='$wa',keterangan='$keterangan',status='ANTRIAN'";
mysqli_query($koneksi, $query);

echo "<script>alert('Data Anda telah masuk antrian. Terimkasih sudah menjadi pelanggan setia AJR haircuts');window.location='book.php'</script>";

?>