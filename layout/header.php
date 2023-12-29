<?php
    include '../koneksi.php';
    session_start();
    $role = $_SESSION['role'];
    $role = $_SESSION['nama_pegawai'];
?>

<!doctype html>
<html lang="en" class="no-focus">
    <head>
    <title>AJR - Barbershop Website</title>
    <link rel="icon" href="../images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="AJR - Barbershop Website" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="../assets/css/codebase.css">

        <link rel="stylesheet" href="../assets/js/plugins/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="../assets/js/plugins/simplemde/simplemde.min.css">

        <link rel="stylesheet" href="../assets/js/plugins/datatables/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="../assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="../assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="../assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="../assets/js/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="../assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
        <link rel="stylesheet" href="../assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
        <link rel="stylesheet" href="../assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="../assets/js/plugins/dropzonejs/dist/dropzone.css">
        <link rel="stylesheet" href="../assets/js/plugins/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" href="../assets/js/plugins/fullcalendar/fullcalendar.min.css">


    </head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-fullrow">
            <nav id="sidebar">
                <div class="sidebar-content">
                    <div class="content-header content-header-fullrow px-15">
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <div class="content-header-item">
                                
                            </div>
                        </div>
                    </div>
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="#">
                                <img class="img-avatar" src="../images/logo-simple.png" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <p class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase"><?= ucfirst($_SESSION['nama_pegawai']) ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-side content-side-full">
                        <ul class="nav-main nav-link">
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'dashboard')) ? 'active' : '' ?>" href="../dashboard/index.php"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>
                            

                            <li class="nav-main-heading">
                                <span class="text-white"><b>Data Booking</b></span>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'data_madureso')) ? 'active' : '' ?>" href="../data_madureso/index.php"><i class="fa fa-home"></i><span class="sidebar-mini-hide">Data Madureso</span></a>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'data_soetomo')) ? 'active' : '' ?>" href="../data_soetomo/index.php"><i class="fa fa-home"></i><span class="sidebar-mini-hide">Data Dr. Soetomo</span></a>
                            </li>

                            <li class="nav-main-heading">
                                <span class="text-white"><b>Laporan</b></span>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'laporan')) ? 'active' : '' ?>" href="../laporan/laporan_booking.php"><i class="fa fa-file-text-o"></i><span class="sidebar-mini-hide">Laporan Booking</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <header id="page-header">
                <div class="content-header">
                    <div class="content-header-section">
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </div>
                    <div class="content-header-section">
                        <div class="btn-group" role="group">
                            <a type="button" class="btn btn-rounded btn-dual-secondary" href="../query_logout.php">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block"><?= ucfirst($_SESSION['nama_pegawai']) ?></span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </header>