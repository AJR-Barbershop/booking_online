<?php
    include '../koneksi.php';

    $kode_booking   = $_POST['kode_booking'];
    $nama_pegawai   = $_POST['nama_pegawai'];
    $status         = $_POST['status'];
    $nama_paket         = $_POST['nama_paket'];
    $tambahan         = $_POST['tambahan'];

    $query  = "UPDATE booking SET nama_pegawai = '$nama_pegawai', status = '$status',nama_paket = '$nama_paket', tambahan = '$tambahan' WHERE kode_booking = '$kode_booking'";
    mysqli_query($koneksi, $query);
    echo "<script>alert('Data Berhasil di Update');window.location='index.php'</script>";
?>