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
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Informasi Pemenang Lelang</h1>
                        </div>




                        <!-- Begin Page Content -->

                        <!-- Page Heading -->


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <!-- <div class="card-header py-3 bg-success">
                                <h6 class="m-0 font-weight-bold text-primary">Data Pemenang Lelang</h6>
                            </div> -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered text-dark" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-dark">
                                            <tr>
                                                <th width="20px">No</th>
                                                <th>Nama Produk</th>
                                                <th>Nama Peserta</th>
                                                <th>NIK</th>
                                                <th>Tanggal diumumkan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>



                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($datapemenang as $u) :
                                            ?>
                                                <tr>


                                                    <td><?= $no++; ?></td>
                                                    <td><?= $u['produk'] ?></td>
                                                    <td><?= $u['nama'] ?></td>
                                                    <td><?= $u['nik'] ?></td>
                                                    <td><?= $u['tgl_diumumkan'] ?></td>
                                                    <!-- <td class="text-light">
                                                         <?php
                                                            // if ($u['status'] == 0) {
                                                            //     echo '<span class="badge bg-secondary">Belum Dibayar</span>';
                                                            // } else if ($u['status'] == 1) {
                                                            //     echo '<span class="badge bg-success">Telah Dibayar</span>';
                                                            // } else {
                                                            //     echo '<span class="badge bg-danger">Ditolak</span>';
                                                            // }
                                                            ?> -->
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-info mr-2" data-toggle="modal" data-target="#editMenuModal<?= $u['lelang_id'] ?>"><i class="fa-solid fa-circle-info"></i> Detail</a>
                                                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletepesertaModal<?= $u['lelang_id'] ?>"><i class="fas fa-trash-can"></i>Hapus</a>
                                                        <div class="modal fade" id="deletepesertaModal<?= $u['lelang_id'] ?>" tabindex="-1" aria-labelledby="deletepesertaModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content bg-light">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="deletepesertaModalLabel">Hapus Pemenang Lelang</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h4>Yakin ingin menghapus Pemenang Lelang dengan Nama "<?= $u['nama'] ?>" ?</h4>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                                                                        <a href="<?= base_url() ?>admin/peserta/deletepeserta/<?= $u['lelang_id']; ?>" class="btn btn-danger">Ya</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <!-- Edit Menu Modal -->
                                                        <div class="modal fade" id="editMenuModal<?= $u['lelang_id'] ?>" tabindex="-1" aria-labelledby="editOrderModal" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content bg-default">
                                                                    <div class="modal-header ">
                                                                        <h5 class="modal-title font-weight-bold" id="editOrderModal">Detail Pemenang Lelang</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-6">
                                                                                    <label for="basic-url">ID Lelang </label>
                                                                                    <div class="input-group mb-3">
                                                                                        <input type="text" class="form-control" name="lelang_id" id="lelang_id" value="<?= $u['lelang_id'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div>

                                                                                    <label for="basic-url">ID Peserta</label><br>
                                                                                    <div class="input-group mb-1">
                                                                                        <input type="text" class="form-control" name="peserta_id" id="peserta_id" value="<?= $u['peserta_id'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div><br>



                                                                                    <label for="basic-url">Nama Peserta</label><br>
                                                                                    <div class="input-group mb-1">
                                                                                        <input type="text" class="form-control" name="peserta_id" id="peserta_id" value="<?= $u['nama'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div><br>

                                                                                    <label for="basic-url">NIK</label><br>
                                                                                    <div class="input-group mb-1">
                                                                                        <input type="text" class="form-control" name="nik" id="nik" value="<?= $u['nik'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div><br>

                                                                                    <label for="basic-url">NPWP</label><br>
                                                                                    <div class="input-group mb-1">
                                                                                        <input type="text" class="form-control" name="npwp" id="npwp" value="<?= $u['npwp'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div><br>

                                                                                    <label for="basic-url">Nama Produk</label><br>
                                                                                    <div class="input-group mb-1">
                                                                                        <input type="text" class="form-control" name="peserta_id" id="peserta_id" value="<?= $u['produk'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div><br>

                                                                                    <label for="basic-url">Jenis Kelamin</label>
                                                                                    <div class="input-group mb-1">
                                                                                        <input type="text" class="form-control" name="jeniskel" id="jeniskel" value="<?php if ($u['jeniskel'] == 1) {
                                                                                                                                                                            echo "Laki-Laki";
                                                                                                                                                                        } else if ($u['jeniskel'] == 2) {
                                                                                                                                                                            echo "Perempuan";
                                                                                                                                                                        } else {
                                                                                                                                                                            echo "Belum diisi";
                                                                                                                                                                        } ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div><br>








                                                                                </div>
                                                                                <div class="col-6">


                                                                                    <label for="basic-url">Email</label>
                                                                                    <div class="input-group mb-3">
                                                                                        <input type="text" class="form-control" name="email" id="email" value="<?= $u['email'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div>

                                                                                    <label for="basic-url">Nomor HP/Telepon</label><br>
                                                                                    <div class="input-group mb-1">
                                                                                        <input type="text" class="form-control" name="telp" id="telp" value="<?= $u['telp'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div><br>


                                                                                    <label for="basic-url">Kota</label><br>
                                                                                    <div class="input-group mb-1">
                                                                                        <input type="text" class="form-control" name="kota" id="kota" value="<?= $u['kota'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div><br>

                                                                                    <label for="basic-url">Kelurahan</label><br>
                                                                                    <div class="input-group mb-1">
                                                                                        <input type="text" class="form-control" name="kelurahan" id="kelurahan" value="<?= $u['kelurahan'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div><br>

                                                                                    <label for="basic-url">Kecamatan</label><br>
                                                                                    <div class="input-group mb-1">
                                                                                        <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= $u['kecamatan'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div><br>

                                                                                    <label for="basic-url">Provinsi</label><br>
                                                                                    <div class="input-group mb-1">
                                                                                        <input type="text" class="form-control" name="provinsi" id="provinsi" value="<?= $u['provinsi'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                    </div><br>



                                                                                    <label for="basic-url">Alamat</label>
                                                                                    <br>
                                                                                    <div class="input-group mb-1">
                                                                                        <textarea class="form-control" name="alamat" id="alamat" aria-label="With textarea" height="56px" readonly><?= $u['alamat'] ?></textarea>
                                                                                    </div>



                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>


                                                </tr>
                                            <?php
                                            endforeach;
                                            ?>
                                        </tbody>


                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- /.container-fluid -->

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