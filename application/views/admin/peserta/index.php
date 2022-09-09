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
                            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Kelola Data Peserta Lelang</h1>

                        </div>




                        <!-- Begin Page Content -->

                        <!-- Page Heading -->


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <!-- <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Peserta Lelang</h6>
                            </div> -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered text-dark" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Peserta</th>
                                                <th>Email</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($peserta as $u) :
                                            ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $u['nama'] ?></td>

                                                    <td><?= $u['email'] ?></td>
                                                    <td> <?php if ($u['jeniskel'] == 1) {
                                                                echo "Laki-Laki";
                                                            } else if ($u['jeniskel'] == 2) {
                                                                echo "Perempuan";
                                                            } else {
                                                                echo "Belum diisi";
                                                            } ?>
                                                    </td>
                                                    <td class="text-light"><?php
                                                                            if ($u['status'] == 0) {
                                                                                echo '<span class="badge bg-warning">Belum Diverifikasi</span>';
                                                                            } else if ($u['status'] == 1) {
                                                                                echo '<span class="badge bg-success">Terverifikasi</span>';
                                                                            } else if ($u['status'] == 2) {
                                                                                echo '<span class="badge bg-danger">Ditolak</span>';
                                                                            } else if ($u['status'] == 3) {
                                                                                echo '<span class="badge bg-secondary">Dibanned</span>';
                                                                            } else {
                                                                                echo "status tidak diketahui";
                                                                            }
                                                                            ?>
                                                    </td>

                                                    <td>

                                                        <a href="<?= base_url(); ?>admin/peserta/detail/<?= $u['peserta_id']; ?>" class="btn btn-sm btn-info mr-2"><i class="fa fa-info-circle"></i>Detail</a>
                                                        <a href="<?php echo base_url(); ?>admin/peserta/edit/<?php echo $u['peserta_id']; ?>" class="btn btn-sm btn-warning mr-2"><i class="fas fa-edit"></i>Ubah</a>
                                                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletepesertaModal<?= $u['peserta_id'] ?>"><i class="fas fa-trash-can"></i>Hapus</a>
                                                        <div class="modal fade" id="deletepesertaModal<?= $u['peserta_id'] ?>" tabindex="-1" aria-labelledby="deletepesertaModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content bg-light">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="deletepesertaModalLabel">Hapus Peserta Lelang</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h4>Yakin ingin menghapus Peserta Lelang dengan Nama "<?= $u['nama'] ?>" ?</h4>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                                                                        <a href="<?= base_url() ?>admin/peserta/deletepeserta/<?= $u['peserta_id']; ?>" class="btn btn-danger">Ya</a>
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