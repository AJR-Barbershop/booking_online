<?php include '../layout/header.php' ?>

<main id="main-container">
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">LAPORAN PENGUNJUNG OUTLET</h3>
            </div>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="text-center"><b>No</b></th>
                            <th class="text-center"><b>Booking</b></th>
                            <th class="text-center"><b>Tanggal</b></th>
                            <th class="text-center"><b>Outlet</b></th>
                            <th class="text-center"><b>Customer</b></th>
                            <th class="text-center"><b>WA</b></th>
                            <th class="text-center"><b>Keterangan</b></th>
                            <th class="text-center"><b>Kapster</b></th>
                            <th class="text-center"><b>Status</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $hasil = mysqli_query($koneksi, "SELECT * FROM booking ORDER BY `kode_booking` DESC");
                            while($data = mysqli_fetch_array($hasil)){
                        ?>
                        <tr>
                            <td class="text-center"><?= $no ?></td>
                            <td class="text-center"><?= $data['kode_booking'] ?></td>
                            <td class="text-center"><?= $data['tanggal'] ?></td>
                            <td class="text-center"><?= $data['nama_outlet'] ?></td>
                            <td class=""><?= $data['customer'] ?></td>
                            <td class="text-center"><?= $data['wa'] ?></td>
                            <td class=""><?= $data['keterangan'] ?></td>
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
</main>

<?php include '../layout/footer.php' ?>