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
                            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Pembukaan Lelang</h1>
                        </div>






                        <!-- Page Heading -->



                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <!-- <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Pembukaan Lelang</h6>
                            </div> -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered text-dark" id="dataTable" width="150%" cellspacing="0">
                                        <thead class="text-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pelelang</th>
                                                <th>Produk</th>
                                                <th>Gambar 1</th>
                                                <th>Gambar 2</th>
                                                <th>Gambar 3</th>
                                                <th>Gambar 4</th>
                                                <th>Harga Awal</th>
                                                <th>Harga Min</th>
                                                <th>Status</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($lelang as $u) :
                                            ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $u['nama'] ?></td>
                                                    <td><?= $u['produk'] ?></td>

                                                    <td><img src="<?= base_url('vendors/images/') . $u['image1']; ?>" alt="Gambar Ikan" width="75px" height="75px"></td>
                                                    <td><img src="<?= base_url('vendors/images/') . $u['image2']; ?>" alt="Gambar Ikan" width="75px" height="75px"></td>
                                                    <td><img src="<?= base_url('vendors/images/') . $u['image3']; ?>" alt="Gambar Ikan" width="75px" height="75px"></td>
                                                    <td><img src="<?= base_url('vendors/images/') . $u['image4']; ?>" alt="Gambar Ikan" width="75px" height="75px"></td>
                                                    <td>Rp <?= number_format($u['harga_awal']) ?></td>
                                                    <td>Rp <?= number_format($u['harga_minimal_diterima']) ?></td>
                                                    <td> <?php if ($u['status_pemeriksaan'] == 0) {
                                                                echo "Belum Diperiksa";
                                                            } else if ($u['status_pemeriksaan'] == 1) {
                                                                echo "Telah Diperiksa";
                                                            } else {
                                                                echo "Belum diisi";
                                                            }
                                                            ?>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="<?= base_url(); ?>admin/penawaran/detail/<?= $u['lelang_id']; ?>" class="btn btn-sm btn-success mr-2"><i class="fa fa-info-circle"></i>Penawaran</a>
                                                            <a href="#" class="btn btn-sm btn-warning mr-2" data-toggle="modal" data-target="#editMenuModal<?= $u['lelang_id'] ?>"><i class="fas fa-edit"></i>Ubah</a>
                                                            <!-- Edit Menu Modal -->
                                                            <div class="modal fade" id="editMenuModal<?= $u['lelang_id'] ?>" tabindex="-1" aria-labelledby="editOrderModal" aria-hidden="true">
                                                                <div class="modal-dialog modal-xl">
                                                                    <div class="modal-content bg-default">
                                                                        <div class="modal-header ">
                                                                            <h5 class="modal-title font-weight-bold" id="editOrderModal">Pembukaan Lelang</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <?php
                                                                            ?>
                                                                            <form action="<?= base_url('admin/penawaran/edit/' . $u['lelang_id']) ?>" method="POST">
                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <div class="col-6">
                                                                                            <label for="basic-url">ID Lelang </label>
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="lelang_id" id="lelang_id" value="<?= $u['lelang_id'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                            </div>

                                                                                            <label for="basic-url">ID Pelelang</label><br>
                                                                                            <div class="input-group mb-1">
                                                                                                <input type="text" class="form-control" name="pelelang_id" id="pelelang_id" value="<?= $u['pelelang_id'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                            </div><br>



                                                                                            <label for="basic-url">Nama Pelelang</label><br>
                                                                                            <div class="input-group mb-1">
                                                                                                <input type="text" class="form-control" name="nama_pelelang" id="nama_pelelang" value="<?= $u['nama'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                            </div><br>



                                                                                            <label for="basic-url">Nama Produk</label><br>
                                                                                            <div class="input-group mb-1">
                                                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $u['produk'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                            </div><br>

                                                                                            <label for="basic-url">Deskripsi Produk</label>
                                                                                            <br>
                                                                                            <div class="input-group mb-1">
                                                                                                <textarea class="form-control" name="deskripsi_produk" id="deskripsi_produk" aria-label="With textarea" height="56px" readonly><?= $u['deskripsi_produk'] ?></textarea>
                                                                                            </div><br>

                                                                                            <label for="basic-url">Harga Awal</label><br>
                                                                                            <div class="input-group mb-1">
                                                                                                <input type="text" class="form-control" name="harga_awal" id="harga_awal" value="Rp <?= number_format($u['harga_awal']) ?>" aria-describedby="basic-addon3" readonly>
                                                                                            </div><br>

                                                                                            <label for="basic-url">Harga Min Diterima</label><br>
                                                                                            <div class="input-group mb-1">
                                                                                                <input type="text" class="form-control" name="harga_minimal_diterima" id="harga_minimal_diterima" value="Rp <?= number_format($u['harga_minimal_diterima']) ?>" aria-describedby="basic-addon3" readonly>
                                                                                            </div><br>


                                                                                        </div>
                                                                                        <div class="col-6">

                                                                                            <label for="basic-url">Kelipatan Harga</label>
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="incremental_value" id="incremental_value" value="Rp <?= number_format($u['incremental_value']) ?>" aria-describedby="basic-addon3" readonly>
                                                                                            </div>

                                                                                            <label for="basic-url">Tanggal Mulai</label><br>
                                                                                            <div class="input-group mb-1">
                                                                                                <input type="text" class="form-control" name="tanggal_mulai" id="tanggal_mulai" value="<?= $u['tgl_mulai'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                            </div><br>

                                                                                            <label for="basic-url">Tanggal Selesai</label><br>
                                                                                            <div class="input-group mb-1">
                                                                                                <input type="text" class="form-control" name="tanggal_selesai" id="tanggal_selesai" value="<?= $u['tgl_selesai'] ?>" aria-describedby="basic-addon3" readonly>
                                                                                            </div><br>

                                                                                            <label for="basic-url">Harga Beli Sekarang</label><br>
                                                                                            <div class="input-group mb-1">
                                                                                                <input type="text" class="form-control" name="harga_beli_sekarang" id="harga_beli_sekarang" value="Rp <?= number_format($u['harga_beli_sekarang']) ?>" aria-describedby="basic-addon3" readonly>
                                                                                            </div><br>

                                                                                            <label for="basic-url">Keterangan</label>
                                                                                            <br>
                                                                                            <div class="input-group mb-1">
                                                                                                <textarea class="form-control" name="keterangan" id="keterangan" aria-label="With textarea" height="56px" readonly><?= $u['keterangan'] ?></textarea>
                                                                                            </div><br>

                                                                                            <label for="basic-url">Metode Bayar</label><br>
                                                                                            <div class="input-group mb-1">
                                                                                                <input type="text" class="form-control" name="metode_bayar" id="metode_bayar" value="<?php
                                                                                                                                                                                        if ($u['metode_bayar'] == 0) {
                                                                                                                                                                                            echo "Transfer";
                                                                                                                                                                                        } else {
                                                                                                                                                                                            echo "Paypall";
                                                                                                                                                                                        } ?> " aria-describedby="basic-addon3" readonly>

                                                                                            </div><br>






                                                                                            <label for="basic-url">Status Pemeriksaan</label><br>
                                                                                            <div class="input-group mb-3">
                                                                                                <select class="custom-select" name="status_pemeriksaan" id="status_pemeriksaan">
                                                                                                    <option value="<?= $u['status_pemeriksaan'] ?>"><?php
                                                                                                                                                    if ($u['status_pemeriksaan'] == 0) {
                                                                                                                                                        echo 'Belum diperiksa';
                                                                                                                                                    } else if ($u['status_pemeriksaan'] == 1) {
                                                                                                                                                        echo 'Telah Diperiksa';
                                                                                                                                                    } else {
                                                                                                                                                        echo 'Belum Diketahui';
                                                                                                                                                    }
                                                                                                                                                    ?></option>
                                                                                                    <option value="0">Belum diperiksa</option>
                                                                                                    <option value="1">Telah Diperiksa</option>
                                                                                                </select>
                                                                                            </div>




                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Delete -->
                                                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletepelelangModal<?= $u['lelang_id'] ?>"><i class="fas fa-trash-can"></i>Hapus</a>
                                                            <div class="modal fade" id="deletepelelangModal<?= $u['lelang_id'] ?>" tabindex="-1" aria-labelledby="deletepelelangModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content bg-light">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="deletepelelangModalLabel">Hapus Pembukaan Pelelang</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h4>Yakin ingin menghapus Pembukaan Lelang dengan ID Lelang "<?= $u['lelang_id'] ?>" ?</h4>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                                                                            <a href="<?= base_url() ?>admin/penawaran/deletebukalelang/<?= $u['lelang_id']; ?>" class="btn btn-danger">Ya</a>
                                                                        </div>
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