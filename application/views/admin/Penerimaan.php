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
                            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Konfirmasi Penerimaan Hasil Lelang</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>




                        <!-- Begin Page Content -->

                        <!-- Page Heading -->


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered text-dark" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-dark">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.container-fluid -->

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