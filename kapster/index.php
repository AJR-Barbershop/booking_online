<?php include '../layout/header.php' ?>

<main id="main-container">
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Setting Kapster Ready</h3>
            </div>
            <form action="query_edit.php" method="post">
            <div class="block-content block-content-full">
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Nama Outlet</label>
                    <div class="col-lg-10">
                        <select class="form-control" name="kode_outlet">
                            <option selected disabled>- Pilih Outlet -</option>
                                <?php
                                    $query ="select * from outlet";
                                    $hasil = mysqli_query($koneksi, $query);
                                    while ($data = mysqli_fetch_array($hasil)) {
                                ?>
                            <option value="<?= $data['kode_outlet'] ?>" <?php echo ($data['nama_outlet'] == $row['nama_outlet']) ? 'selected' : '' ?>><?= $data['nama_outlet'] ?></option>

                                <?php
                                } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Nama Kapster</label>
                    <div class="col-lg-10">
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
                    <div class="col-md-2 mb-5"></div>
                    <div class="col-md-10 mb-5">
                        <button type="submit" class="btn btn-block btn-primary mr-5 mb-5">
                            - T A M B A H - 
                        </button>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <div class="block-content block-content-full">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Outlet Madureso</b></p>
                            </div>
                            <div class="col-md-6 text-right">
                                <a type="button" href="query_delete.php" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center"><b>No</b></th>
                                    <th class="text-center"><b>Nama Kapster</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $hasil = mysqli_query($koneksi, "SELECT * FROM kapster WHERE `kode_outlet`='KO-001'");
                                    while($data = mysqli_fetch_array($hasil)){
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td class="text-center"><?= $data['nama_pegawai'] ?></td>
                                </tr>
                                <?php 
                                $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
            <div class="block">
                    <div class="block-content block-content-full">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Outlet Dr. Soetomo</b></p>
                            </div>
                            <div class="col-md-6 text-right">
                                <a type="button" href="query_delete1.php" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center"><b>No</b></th>
                                    <th class="text-center"><b>Nama Kapster</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $hasil = mysqli_query($koneksi, "SELECT * FROM kapster WHERE `kode_outlet`='KO-002'");
                                    while($data = mysqli_fetch_array($hasil)){
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td class="text-center"><?= $data['nama_pegawai'] ?></td>
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

<?php include '../layout/footer.php' ?>