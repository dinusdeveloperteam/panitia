<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <div id="wrapper">

        <?php $this->load->view("admin/_partials/sidebar.php") ?>





        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <div id="content-wrapper">

                    <?php $this->load->view("admin/_partials/navbar.php") ?>

                    <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
                    <?php // $this->load->view("admin/_partials/breadcrumb.php") 
                    ?>


                    <!-- Begin Page Content -->
                    <div class="container-fluid">






                        <!-- Page Heading -->
                        <h2 class="text-dark font-weight-bold">DETAIL PELELANG</h2>

                        <div class="card mb-4">
                            <h5 class="card-header text-white bg-primary">Data Detail Pelelang Dengan Nama : <?php echo $row['nama']; ?></h5>
                            <div class="card-body table-responsive-xl">
                                <h5 class="card-title text-dark"></h5>
                                <p class="card-text text-dark"></p>
                                <table class="table text-dark">
                                    <tr>
                                        <td>Foto KTP</td>
                                        <td>:</td>
                                        <td><img src="<?= base_url('vendors/images/') . $row['filektp']; ?>" alt="Gambar KTP" width="375px" height="275px" class="img-fluid"></td>
                                    </tr>

                                    <tr>
                                        <td>ID Pelelang</td>
                                        <td>:</td>
                                        <td><?php echo $row['pelelang_id']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td><?php echo $row['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>NIK</td>
                                        <td>:</td>
                                        <td><?php echo $row['nik']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>:</td>
                                        <td><?php echo $row['username']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td><?php echo $row['alamat']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kota</td>
                                        <td>:</td>
                                        <td><?php echo $row['kota']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kecamatan</td>
                                        <td>:</td>
                                        <td><?php echo $row['kecamatan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kelurahan</td>
                                        <td>:</td>
                                        <td><?php echo $row['kelurahan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Provinsi</td>
                                        <td>:</td>
                                        <td><?php echo $row['provinsi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No Telp</td>
                                        <td>:</td>
                                        <td><?php echo $row['telp']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><?php echo $row['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>NPWP</td>
                                        <td>:</td>
                                        <td><?php echo $row['npwp']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No Rekening</td>
                                        <td>:</td>
                                        <td><?php echo $row['norekening']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Bank</td>
                                        <td>:</td>
                                        <td><?php echo $row['bank']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Atas Nama</td>
                                        <td>:</td>
                                        <td><?php echo $row['norekening']; ?></td>
                                    </tr>



                                    <tr>
                                        <td>Foto NPWP</td>
                                        <td>:</td>
                                        <td><img src="<?= base_url('vendors/images/') . $row['filenpwp']; ?>" alt="Gambar NPWP" width="375px" height="275px" class="img-fluid"></td>

                                    </tr>


                                    <tr>
                                        <td>Foto SIUP</td>
                                        <td>:</td>
                                        <td><img src="<?= base_url('vendors/images/') . $row['fileSIUP']; ?>" alt="Gambar SIUP" width="375px" height="275px" class="img-fluid"></td>

                                    </tr>
                                    <!--
                        <tr>
                            <td>Deposit</td>
                            <td>:</td>
                            <td><? // php echo $row['deposit']; 
                                ?></td>
                        </tr>
                        -->
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td class="text-light"><?php
                                                                if ($row['status'] == 0) {
                                                                    echo '<span class="badge bg-warning">Belum Diverifikasi</span>';
                                                                } else if ($row['status'] == 1) {
                                                                    echo '<span class="badge bg-success">Terverifikasi</span>';
                                                                } else if ($row['status'] == 2) {
                                                                    echo '<span class="badge bg-danger">Ditolak</span>';
                                                                } else {
                                                                    echo '<span class="badge bg-secondary">Dibanned</span>';
                                                                } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis</td>
                                        <td>:</td>
                                        <td>
                                            <?php
                                            if ($row['jenis'] == 0) {
                                                echo "Perorangan";
                                            } elseif ($row['jenis'] == 1) {
                                                echo "Perusahaan";
                                            } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td><?php echo $row['deskripsi']; ?></td>
                                    </tr>
                                </table>
                                <div class="box-footer">
                                    <?php
                                    echo anchor('admin/pelelang', 'Kembali', array('class' => 'btn btn-primary'));
                                    ?>
                                </div>
                            </div>
                        </div>




                    </div>
                    <!-- End of Main Content -->



                    <!-- Sticky Footer -->
                    <?php $this->load->view("admin/_partials/footer.php") ?>

                </div>
                <!-- /.content-wrapper -->

            </div>
            <!-- /#wrapper -->


            <?php $this->load->view("admin/_partials/scrolltop.php") ?>
            <?php $this->load->view("admin/_partials/modal.php") ?>
            <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>