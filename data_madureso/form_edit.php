<?php include '../layout/header.php' ?>

<?php
    $kode_booking        = $_GET['kode_booking'];
 
    $booking     = mysqli_query($koneksi, "select * from booking where kode_booking='$kode_booking'");
    $row        = mysqli_fetch_array($booking);
?>

<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h5>Data Bookings</h5>
            </div>
            <div class="col-md-6 text-right">
                <a type="button" href="index.php" class="btn btn-danger"><i class="fa fa-arrow-circle-o-left mr-5"></i>KEMBALI</a>
            </div>
        </div>
        <div class="block">
            <form action="query_edit.php" method="post">
                <div class="block-content row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Kode Booking</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="kode_booking" value="<?= $row['kode_booking'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Data Customer</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="customer" value="<?= $row['customer'] ?>" readonly>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="wa" value="<?= $row['wa'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Keterangan</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="keterangan" value="<?= $row['keterangan'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Nama Kapster</label>
                            <div class="col-lg-8">
                                <select class="form-control" name="nama_pegawai">
                                    <option selected disabled>- Pilih Kapster -</option>
                                        <?php
                                            $query ="select * from pegawai";
                                            $hasil = mysqli_query($koneksi, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                        ?>
                                    <option value="<?= $data['nama_pegawai'] ?>" <?php echo ($data['nama_pegawai'] == $row['nama_pegawai']) ? 'selected' : '' ?>><?= $data['nama_pegawai'] ?></option>

                                        <?php
                                        } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Status</label>
                            <div class="col-lg-8">
                                <select class="form-control" name="status">
                                    <option selected disabled value="<?= $row['status'] ?>" <?php echo ($row['status'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'] ?></option>
                                    <option value="PROSES">PROSES</option>
                                    <option value="SELESAI">SELESAI</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Jenis Paket</label>
                            <div class="col-lg-8">
                                <select class="form-control" name="nama_paket">
                                    <option selected disabled value="<?= $row['nama_paket'] ?>" <?php echo ($row['nama_paket'] == $row['nama_paket']) ? 'selected' : '' ?>><?= $row['nama_paket'] ?></option>
                                    <option value="PAKET HEMAT">PAKET HEMAT</option>
                                    <option value="REGULAR">REGULAR</option>
                                    <option value="SPECIAL CUT">SPECIAL CUT</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" >Tambahan</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" name="tambahan"><?= $row['tambahan'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-5">
                        <button type="submit" class="btn btn-block btn-primary mr-5 mb-5">
                            - S E L E S A I - 
                        </button>
                    </div>
                </div>     
            </form>
        </div>
    </div>
</main>
<?php include '../layout/footer.php' ?>