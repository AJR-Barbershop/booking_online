<?php
    $respon    ="refresh";
    $waktu    =15;
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>AJR - Barbershop Website</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="AJR - Barbershop Website" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >

    <meta http-equiv="<?=$respon?>" content="<?=$waktu?>"/>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb" >
    <link href="css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="css/style.css" rel="stylesheet" type="text/css" >
    <link href="css/coloring.css" rel="stylesheet" type="text/css" >
    <link id="colors" href="css/colors/scheme-02.css" rel="stylesheet" type="text/css" >
</head>

<body class="dark-scheme">
    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="transparent">            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                        <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.html">
                                            <img class="logo-main" src="images/logo-simple.png" alt="" >
                                            <img class="logo-mobile" src="images/logo-simple1.png" alt="" >
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu" class="s2">
                                    <li><a class="menu-item" href="index.php">Home</a></li>
                                    <li><a class="menu-item" href="gallery.php">Gallery</a></li>
                                    <li><a class="menu-item" href="pricing.php">Daftar Harga</a></li>
                                    <li><a class="menu-item" href="#">Tentang</a>
                                        <ul>
                                            <li><a class="menu-item" href="about.php">About Us</a></li>
                                            <li><a class="menu-item" href="team.php">Kapster</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="#"><h3>List Antrian</h3></a>
                                        <ul>
                                            <li><a class="menu-item" href="outlet_madureso.php">Outlet Madureso</a></li>
                                            <li><a class="menu-item" href="outlet_soetomo.php">Outlet Dr. Soetomo</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="book.php">Pesan Sekarang</a></li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="jarallax">
                <img src="images/background/6.jpg" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h1>List Antrian</h1>
                            <div class="de-separator"></div>
                            <a class="btn-main" href="book.php">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-bottom"></div>
            </section>
            <!-- section close -->

            <section class="jarallax no-top">
                <div class="de-gradient-edge-top"></div>
                <img src="images/background/1.jpg" class="jarallax-img" alt="">
                <div class="container relative z1000 text-center">
                    <div class="row gx-5">
                        <div class="col-lg-12" style="margin-top: 40px;">
                            <h4 class="wow fadeIn">Outlet Dr. Soetomo</h4>
                            <div class="de-separator"></div>
                            <h5 style="line-height: 40px;">Kapster Ready</h5>
                            <?php
                            include 'koneksi.php';
                                    $hasil = mysqli_query($koneksi, "SELECT * FROM kapster WHERE `kode_outlet`='KO-002'");
                                    while($data = mysqli_fetch_array($hasil)){
                                ?>
                                    <h5 style="font-size:15px; line-height: 15px;"><?= $data['nama_pegawai'] ?> / <?= $data['keterangan'] ?></h5>
                            <?php 
                            } ?>
                            <table class="table text-white" style="font-size:10px">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>NO</b></th>
                                        <th><b>CUSTOMER</b></th>
                                        <th class=""><b>STATUS</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include 'koneksi.php';
                                    $no = 1;
                                    $hasil = mysqli_query($koneksi, "SELECT * FROM booking WHERE `nama_outlet`='Dr. Soetomo' AND `tanggal`= CURDATE()");
                                    while($data = mysqli_fetch_array($hasil)){
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td class=""><?= $data['customer'] ?></td>
                                    <?php
                                            if($data['status'] == 'ANTRIAN'){
                                                echo '<td class="text-center"><span class="text-info"><b>ANTRIAN</b></span></td>';
                                            } else if($data['status'] == 'PROSES'){
                                                echo '<td class="text-center"><span class="text-danger"><b>PROSES</b></td>';
                                            } else if($data['status'] == 'SELESAI'){
                                                echo '<td class="text-center"><span class="text-success"><b>SELESAI</b></td>';
                                            } 
                                        ?>
                                </tr>
                                <?php 
                                $no++;
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-bottom"></div>
            </section>
            
            
            
        </div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row g-4">
                    
                    <div class="col-lg-4 text-lg-start text-center">
                        <div class="social-icons">
                            <a href="https://www.instagram.com/ajrhaircuts/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                            <a href="https://m.facebook.com/andjarg/" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="https://maps.app.goo.gl/AcrahnA212gva6X27" target="_blank"><i class="fa fa-map-pin fa-lg"></i></a>
                            <a href="https://maps.app.goo.gl/UfWCypmJqW7X3Rnt8" target="_blank"><i class="fa fa-map-pin fa-lg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-center text-center">
                        <img src="images/logo-ajr2.png" class="" alt="">
                    </div>
                    <div class="col-lg-4 text-lg-end text-center">
                        Copyright 2023 - AJR by Rifan_HRD
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script src="form.js"></script>
</body>

</html>