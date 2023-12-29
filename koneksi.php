<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "ajr_barber";
    $koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    
    if(!$koneksi){
    die ("Koneksi database gagal: ".mysqli_connect_errno().
    " - ".mysqli_connect_error());
    }
 
 
?>