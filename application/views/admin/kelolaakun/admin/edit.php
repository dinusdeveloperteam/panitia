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





                        <!-- Begin Page Content -->

                            <!-- Page Heading -->
                            <h2 class="text-dark font-weight-bold">EDIT ADMIN</h2>

                            <div class="card mb-4">
                                <!-- Main content -->
                                <h5 class="card-header text-white bg-primary">Edit Admin Dengan Nama : <?php echo $row['nama']; ?></h5>
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
                                                    <form action="<?php echo base_url(); ?>admin/kelola_akun/admin/edit" method="post" class="form-horizontal">
                                                        <input type="hidden" name="id" value="<?php echo $row['userid'] ?>">
                                                        <div class="box-body">

                                                            <fieldset disabled>
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label disabledTextInput text-dark">ID Admin</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="userid" id="disabledTextInput" class="form-control" value="<?php echo $row['userid'] ?>">
                                                                    </div>
                                                                </div>
                                                            </fieldset>

                                                            <fieldset disabled>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label disabledTextInput text-dark">Username</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="username"   id="disabledTextInput" class="form-control"   value="<?php echo $row['username'] ?>">
                                                                </div>
                                                            </div>
                                                            </fieldset>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label text-dark">Nama Lengkap</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="nama" required class="form-control" value="<?php echo $row['nama'] ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label text-dark">Nomor HP/Telepon</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="telp" required class="form-control" value="<?php echo $row['telp'] ?>">
                                                                </div>
                                                            </div>


                                                            

                                                            <fieldset disabled>
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label disabledTextInput text-dark">Hak Akses</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="role" id="disabledTextInput" class="form-control" value="<?php
                                                                                                                                                            if ($row['role'] == 1) {
                                                                                                                                                                echo "Administrator";
                                                                                                                                                            } else {
                                                                                                                                                                echo "Tidak Diketahui";
                                                                                                                                                            } 
                                                                                                                                                           ?>">
                                                                    </div>
                                                                </div>
                                                            </fieldset>


                                                            


                                                            
                                
                                                            


                                                        </div>
                                                        <!-- /.box-body -->
                                                        <div class="box-footer">
                                                            <?php
                                                            echo anchor('admin/kelola_akun/admin', 'Kembali', array('class' => 'btn btn-secondary mr-5 ml-3'));
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