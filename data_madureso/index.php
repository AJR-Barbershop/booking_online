<?php include '../layout/header.php' ?>

<main id="main-container">
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">List Antrian Madureso / <?= date('d M Y') ?></h3>
            </div>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center"><b>No</b></th>
                            <th class="text-center"><b>Booking</b></th>
                            <th class="text-center"><b>Nama Customer</b></th>
                            <th class="text-center"><b>WA</b></th>
                            <th class="text-center"><b>Keterangan</b></th>
                            <th class="text-center"><b>Kapster</b></th>
                            <th class="text-center"><b>Status</b></th>
                            <th class="text-center"><i class="fa fa-asterisk"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $hasil = mysqli_query($koneksi, "SELECT * FROM booking WHERE `nama_outlet`='Madureso' AND `tanggal`= CURDATE()");
                            while($data = mysqli_fetch_array($hasil)){
                        ?>
                        <tr>
                            <td class="text-center"><?= $no ?></td>
                            <td class="text-center"><?= $data['kode_booking'] ?></td>
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
                            <td class="text-center">
                                <a type="button" class="btn btn-sm btn-secondary js-tooltip-enabled" href='form_edit.php?kode_booking=<?php echo $data['kode_booking']; ?> '>
                                    <i class="fa fa-user"></i>
                                </a>
                            </td>
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