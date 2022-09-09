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
                        <h2 class="text-dark font-weight-bold">EDIT PANITIA</h2>

                        <div class="card mb-4">
                            <!-- Main content -->
                            <h5 class="card-header text-white bg-primary">Edit Panitia Dengan Nama : <?php echo $row['nama']; ?></h5>
                            <div class="card-body">
                                <h5 class="card-title text-dark"></h5>
                                <p class="card-text text-dark"></p>
                                <section class="content">
                                    <div class="row">
                                        <!-- right column -->
                                        <div class="col-md-8">
                                            <!-- Horizontal Form -->
                                            <div class="box box-info">

                                                <!-- form start -->
                                                <form action="<?php echo base_url(); ?>admin/kelola_akun/panitia/edit" method="post" class="form-horizontal">
                                                    <input type="hidden" name="id" value="<?php echo $row['panitia_id'] ?>">
                                                    <div class="box-body">

                                                    

                                                    <tr>
                                                            
                                                            <td>
                                                                <label class="col-sm-2 control-label text-dark">Foto Panitia</label><br>
                                                                    <div class="col-sm-10">
                                                                        <img src="<?= base_url('upload/') . $row['foto']; ?>" alt="Gambar Panitia <?= $row['nama'] ?>" width="375px" height="275px" class="img-fluid">
                                                                    </div>
                                                            </td>
                                                        
                                                    </tr>


                                                        <fieldset disabled>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label disabledTextInput text-dark mt-3">ID Panitia</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="panitiaid" id="disabledTextInput" class="form-control" value="<?php echo $row['panitia_id'] ?>">
                                                                </div>
                                                            </div>
                                                        </fieldset>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label text-dark">NIK</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" name="nik" required class="form-control" value="<?php echo $row['nik'] ?>">
                                                            </div>
                                                        </div>

                                                        <fieldset disabled>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label disabledTextInput text-dark">Username</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="username" id="disabledTextInput" class="form-control" value="<?php echo $row['username'] ?>">
                                                            </div>
                                                        </div>
                                                        </fieldset>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label text-dark">Nama</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="nama" required class="form-control" value="<?php echo $row['nama'] ?>">
                                                            </div>
                                                        </div>

                                                        

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label text-dark">Instansi</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="instansi" required class="form-control" value="<?php echo $row['instansi'] ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label text-dark">Jabatan</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="jabatan" required class="form-control" value="<?php echo $row['jabatan'] ?>">
                                                            </div>
                                                        </div>

                                                        <label for="basic-url" class="ml-3 text-dark">Jenis Kelamin</label><br>
                                                            <div class="col-sm-10">
                                                                <div class="input-group mb-3">
                                                                    
                                                                    </td>
                                                                    <td>
                                                                        <form action="<?= base_url('admin/kelola_akun/panitia/' . $row['panitia_id']) ?>" method="POST">
                                                                            <select class="custom-select" name="jeniskel" id="jeniskel">
                                                                                <option value="<?= $row['jeniskel'] ?>">
                                                                                    <?php if ($row['jeniskel'] == 0) {
                                                                                        echo "Belum Diisi";
                                                                                    } else if ($row['jeniskel'] == 1) {
                                                                                        echo "Laki-Laki";
                                                                                    } else if ($row['jeniskel'] == 2) {
                                                                                        echo "Perempuan";
                                                                                    } else {
                                                                                        echo "Jenis Kelamin tidak diketahui";
                                                                                    } ?></option>
                                                                        <option value="0">Belum Diisi</option>
                                                                        <option value="1">Laki-Laki</option>
                                                                        <option value="2">Perempuan</option>
                                                                    </select>
                                                                </div>
                                                            </div>










                                                    </div>
                                                    <!-- /.box-body -->
                                                    <div class="box-footer">
                                                        <?php
                                                        echo anchor('admin/kelola_akun/panitia', 'Kembali', array('class' => 'btn btn-secondary mr-5 ml-3'));
                                                        ?>
                                                        <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
                                                    </div>
                                                    <!-- /.box-footer -->

                                                </form>
                                            </div>
                                            <!-- /.box -->

                                        </div>
                                        <!--/.col (right) -->
                                    </div>
                                    <!-- /.row -->
                                </section>
                                <!-- /.content -->

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