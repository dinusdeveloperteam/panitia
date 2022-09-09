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
                            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Kelola Akun Admin</h1>

                        </div>




                        <!-- Begin Page Content -->

                        <!-- Page Heading -->


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered  text-dark" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Username</th>
                                                <th>Telp</th>
                                                <th>Hak Akses</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($adminx as $u) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $u['nama']; ?></td>
                                                    <td><?= $u['username']; ?></td>
                                                    <td><?= $u['telp']; ?></td>
                                                    <td><?php
                                                        if ($u['role'] == 1) {
                                                            echo "Administrator";
                                                        } else {
                                                            echo "Tidak Diketahui";
                                                        }
                                                        ?>

                                                    </td>

                                                    <td>


                                                        <a href="<?= base_url(); ?>admin/kelola_akun/admin/edit/<?= $u['userid']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i>Ubah</a>

                                                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletepenjualModal<?= $u['userid'] ?>"><i class="fas fa-trash-can"></i>Hapus</a>
                                                        <div class="modal fade" id="deletepenjualModal<?= $u['userid'] ?>" tabindex="-1" aria-labelledby="deletepenjualModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content bg-light">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="deletepenjualModalLabel">Hapus Admin</h5>
                                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h4>Yakin ingin menghapus Admin dengan Username "<?= $u['username'] ?>" ?</h4>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                                                                        <a href="<?= base_url() ?>admin/kelola_akun/admin/deleteadmin/<?= $u['userid']; ?>" class="btn btn-danger">Ya</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
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