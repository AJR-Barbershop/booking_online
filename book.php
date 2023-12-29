<?php
include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT max(kode_booking) as kodeMax FROM booking");
    $data = mysqli_fetch_array($query);
    $kodebooking = $data['kodeMax'];
    $urutan = (int) substr($kodebooking, 3, 3);
    $urutan++;
    $huruf = "KB-";
    $kodebooking = $huruf . sprintf("%03s", $urutan);
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
                                    <li><a class="menu-item" href="#">List Antrian</a>
                                        <ul>
                                            <li><a class="menu-item" href="outlet_madureso.php">Outlet Madureso</a></li>
                                            <li><a class="menu-item" href="outlet_soetomo.php">Outlet Dr. Soetomo</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="book.php"><h3>Pesan Sekarang</h3></a></li>
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
                            <h1>Booking</h1>
                            <div class="de-separator"></div>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-bottom"></div>
            </section>
            <!-- section close -->

           
            <section id="section-form" class="no-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <form name="contactForm" action="query_book.php"' class="form-border" method="post">
                                <div class="row">
                                    <input type="text" class="form-control" name="kode_booking" value="<?php echo $kodebooking ?>" readonly required="required" hidden>
                                    <div class="col-lg-12">
                                        <h4>- Pilih Tanggal -</h4>
                                        <input type="date" name="tanggal" class="form-control" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4>- Pilih Outlet -</h4>
                                        <select class="form-control" name="nama_outlet" required>
                                            <option selected disabled>- Pilih Outlet -</option>
                                            <option value="Madureso">Madureso</option>
                                            <option value="Dr. Soetomo">Dr. Soetomo</option>
                                        </select>
                                    </div>
                                </div>
                                

                                <div class="spacer-single"></div>

                                <div class="row">
                                    <h4>- Data Diri -</h4>

                                    <div class="col-lg-12">
                                        <div id='name_error' class='error'>Tolong Masukan Nama Anda</div>
                                        <div class="mb25">
                                            <input type='text' name='customer' id='name' class="form-control" placeholder="Nama" required>
                                        </div>

                                        <div id='phone_error' class='error'>Tolong Masukan Nomor Whatsapp Anda</div>
                                        <div class="mb25">
                                            <input type='text' name='wa' id='phone' class="form-control" placeholder="Nomor Whatsapp" required>
                                        </div>
                                        <div id='message_error' class='error'>Tolong Masukan Keterangan</div>
                                        <div class="mb25">
                                            <input type='text' name='keterangan' id='message_error' class="form-control" placeholder="Keterangan">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt20">
                                        <button type="submit" class="btn btn-block btn-primary">
                                            - B O O K I N G -
                                        </button>
                                    </div>
                                </div>
                                
                            </form>

                            <div id="success_message" class='success'>
                                Your message has been sent successfully. Refresh this page if you want to send more messages.
                            </div>
                            <div id="error_message" class='error'>
                                Sorry there was an error sending your form.
                            </div>

                        </div>

                    </div>
                </div>
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