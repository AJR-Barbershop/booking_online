<?php include '../layout/header.php'; ?>

<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">PAKET HEMAT / <?= date('M') ?></h3>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center"><b>No</b></th>
                                    <th class="text-center"><b>Kapster</b></th>
                                    <th class="text-center"><b>Jumlah</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $hasil = mysqli_query($koneksi, "SELECT `nama_pegawai`, COUNT( `nama_paket` ) AS total FROM booking 
                                    WHERE MONTH(`tanggal`)=MONTH(CURRENT_DATE) AND `nama_paket`='PAKET HEMAT'
                                    GROUP BY `nama_pegawai`");
                                    while($data = mysqli_fetch_array($hasil)){
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td class=""><?= $data['nama_pegawai'] ?></td>
                                    <td class="text-center"><?= $data['total'] ?></td>
                                </tr>
                                <?php 
                                $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">REGULAR / <?= date('M') ?></h3>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center"><b>No</b></th>
                                    <th class="text-center"><b>Kapster</b></th>
                                    <th class="text-center"><b>Jumlah</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $hasil = mysqli_query($koneksi, "SELECT `nama_pegawai`, COUNT( `nama_paket` ) AS total FROM booking 
                                    WHERE MONTH(`tanggal`)=MONTH(CURRENT_DATE) AND `nama_paket`='REGULAR'
                                    GROUP BY `nama_pegawai`");
                                    while($data = mysqli_fetch_array($hasil)){
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td class=""><?= $data['nama_pegawai'] ?></td>
                                    <td class="text-center"><?= $data['total'] ?></td>
                                </tr>
                                <?php 
                                $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">SPECIAL CUT / <?= date('M') ?></h3>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center"><b>No</b></th>
                                    <th class="text-center"><b>Kapster</b></th>
                                    <th class="text-center"><b>Jumlah</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $hasil = mysqli_query($koneksi, "SELECT `nama_pegawai`, COUNT( `nama_paket` ) AS total FROM booking 
                                    WHERE MONTH(`tanggal`)=MONTH(CURRENT_DATE) AND `nama_paket`='SPECIAL CUT'
                                    GROUP BY `nama_pegawai`");
                                    while($data = mysqli_fetch_array($hasil)){
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td class=""><?= $data['nama_pegawai'] ?></td>
                                    <td class="text-center"><?= $data['total'] ?></td>
                                </tr>
                                <?php 
                                $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">PAKET HEMAT / <?= date('D M Y') ?></h3>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center"><b>No</b></th>
                                    <th class="text-center"><b>Kapster</b></th>
                                    <th class="text-center"><b>Jumlah</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $hasil = mysqli_query($koneksi, "SELECT `nama_pegawai`, COUNT( `nama_paket` ) AS total FROM booking 
                                    WHERE `tanggal`= CURDATE() AND `nama_paket`='PAKET HEMAT'
                                    GROUP BY `nama_pegawai`");
                                    while($data = mysqli_fetch_array($hasil)){
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td class=""><?= $data['nama_pegawai'] ?></td>
                                    <td class="text-center"><?= $data['total'] ?></td>
                                </tr>
                                <?php 
                                $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">REGULAR / <?= date('D M Y') ?></h3>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center"><b>No</b></th>
                                    <th class="text-center"><b>Kapster</b></th>
                                    <th class="text-center"><b>Jumlah</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $hasil = mysqli_query($koneksi, "SELECT `nama_pegawai`, COUNT( `nama_paket` ) AS total FROM booking 
                                    WHERE `tanggal`= CURDATE() AND `nama_paket`='REGULAR'
                                    GROUP BY `nama_pegawai`");
                                    while($data = mysqli_fetch_array($hasil)){
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td class=""><?= $data['nama_pegawai'] ?></td>
                                    <td class="text-center"><?= $data['total'] ?></td>
                                </tr>
                                <?php 
                                $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">SPECIAL CUT / <?= date('D M Y') ?></h3>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center"><b>No</b></th>
                                    <th class="text-center"><b>Kapster</b></th>
                                    <th class="text-center"><b>Jumlah</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $hasil = mysqli_query($koneksi, "SELECT `nama_pegawai`, COUNT( `nama_paket` ) AS total FROM booking 
                                    WHERE `tanggal`= CURDATE() AND `nama_paket`='SPECIAL CUT'
                                    GROUP BY `nama_pegawai`");
                                    while($data = mysqli_fetch_array($hasil)){
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td class=""><?= $data['nama_pegawai'] ?></td>
                                    <td class="text-center"><?= $data['total'] ?></td>
                                </tr>
                                <?php 
                                $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">REKAP TRANSAKSI / <?= date('M') ?></h3>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                            <thead>
                                <tr>
                                    <th class="text-center"><b>No</b></th>
                                    <th class="text-center"><b>Tanggal</b></th>
                                    <th class="text-center"><b>Booking</b></th>
                                    <th class="text-center"><b>Customer</b></th>
                                    <th class="text-center"><b>Paket</b></th>
                                    <th class="text-center"><b>Tambahan</b></th>
                                    <th class="text-center"><b>Kapster</b></th>
                                    <th class="text-center"><b>Status</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $hasil = mysqli_query($koneksi, "SELECT * FROM booking WHERE MONTH(`tanggal`)=MONTH(CURRENT_DATE)");
                                    while($data = mysqli_fetch_array($hasil)){
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td class="text-center"><?= $data['tanggal'] ?></td>
                                    <td class="text-center"><?= $data['kode_booking'] ?></td>
                                    <td class=""><?= $data['customer'] ?></td>
                                    <td class="text-center"><?= $data['nama_paket'] ?></td>
                                    <td class=""><?= $data['tambahan'] ?></td>
                                    <td class=""><?= $data['nama_pegawai'] ?></td>
                                    <?php
                                            if($data['status'] == 'ANTRIAN'){
                                                echo '<td class="text-center"><span class="badge badge-primary"><b>ANTRIAN</b></span></td>';
                                            } else if($data['status'] == 'PROSES'){
                                                echo '<td class="text-center"><span class=" badge badge-danger"><b>PROSES</b></td>';
                                            } else if($data['status'] == 'SELESAI'){
                                                echo '<td class="text-center"><span class=" badge badge-success"><b>SELESAI</b></td>';
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
        </div>
    </div>
    
</main>
<?php include '../layout/footer.php'; ?>