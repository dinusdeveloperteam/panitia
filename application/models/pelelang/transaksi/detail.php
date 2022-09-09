<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url('vendors/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href=" <?php echo base_url('vendors/adminassets/assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href=" <?php echo base_url('vendors/adminassets/assets/vendors/css/vendor.bundle.base.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('vendors/adminassets/assets/css/style.css') ?>">
    <link href="<?php echo base_url('vendors/swal/dist/sweetalert2.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body>
   <!--navbar-->
     <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href=""><img src="" alt="logo" style="width:100px; height:100px;" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="<?php echo base_url('vendors/adminassets/assets/images/faces/face1.jpg') ?>
" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Admin</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href=""
                   >
                    <i class="mdi mdi-home menu-icon mr-2 text-primary"></i> Halaman Utama
                </a>

                <a class="dropdown-item" href=""
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Logout
                </a>
                  

                <form id="logout-form" action="" method="POST" style="display: none;">
                </form>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="<?php echo base_url('dashboard.php')?>" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?php echo base_url('vendors/adminassets/assets/images/faces/face1.jpg') ?>" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                 </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Pelelang</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pelelang/dashboard')?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pelelang/pemenang');?>">
                <span class="menu-title">Pemenang Lelang</span>
                <i class="mdi mdi mdi-account-multiple menu-icon"></i>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                <span class="menu-title">Data barang Lelang</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi-table-large menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic1">
                 <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('pelelang/product/tambah') ?>">Tambah Lelang</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('pelelang/product/index')?>">Daftar Lelang</a></li>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Transaksi</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-shopping menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('pelelang/transaksi/index') ?>">Pesanan Baru</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('pelelang/transaksi/perludicek')?>">Perlu Di Cek</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('pelelang/transaksi/perludikirim')?>">Perlu Di Kirim</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('pelelang/transaksi/dikirim')?>">Barang Di Kirim</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('pelelang/transaksi/selesai')?>">Selesai</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('pelelang/transaksi/dibatalkan')?>">Dibatalkan</a></li>
                </ul>
              </div>
              <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pelelang/riwayat')?>">
                <span class="menu-title">Riwayat Lelang</span>
                <i class="fas fa-book menu-icon"></i>
              </a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pelelang/feedback')?>">
                <span class="menu-title">Feedback</span>
                <i class="mdi mdi mdi-message-text menu-icon"></i>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pelelang/Pengaturan')?>">
                <span class="menu-title">Pengaturan akun</span>
                <i class="mdi mdi-shopping menu-icon menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Pesanan </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col">
                      <h4 class="card-title">Detail Pesanan </h4>
                      </div>
                      <div class="col text-right">
                      <a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-primary">Kembali</a>
                      </div>
                    </div>
                    <hr>
                   <div class="row">
                   <div class="col-md-7">
                    <table>
                      <?php foreach($detail as $data) :?>
                        <tr>
                            <td>No Invoice</td>
                            <td>:</td>
                            <td  class="p-4"><?= $data->lelang_id ?></td>
                        </tr>
                        <tr>
                            <td>Metode Pembayaran</td>
                            <td>:</td>
                            <td  class="p-4"><?= $data->metode_bayar ?></td>
                        </tr>
                        <tr>
                            <td>Status Pesanan</td>
                            <td>:</td>
                            <td  class="p-4"><?= $data->status ?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td  class="p-4"><?= $data->nominal_dibayarkan ?></td>
                        </tr>
                        <tr>
                            <td>Biaya Ongkir</td>
                            <td>:</td>
                            <td  class="p-4"><?= $data->ongkir ?></td>
                        </tr>
                        <tr>
                            <td>Kurir</td>
                            <td>:</td>
                            <td  class="p-4"><?= $data->kurir ?></td>
                        </tr>
                        <tr>
                            <td>No Resi</td>
                            <td>:</td>
                            <td  class="p-4"><?= $data->no_resi ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pembelian</td>
                            <td>:</td>
                            <td  class="p-4"><?= $data->jumlah ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td>Biaya Adm</td>
                            <td>:</td>
                            <td  class="p-4"><?=  echo $adm->biaya_adm; ?></td>
                        </tr>
                        <tr>
                            <td>Bukti Pembayaran</td>
                            <td>:</td>
                            <td  class="p-4"><img src="<?php echo base_url()?>assets/uploads/produk/<?php echo $bukti->bukti_pembayaran ?>" alt="" srcset="" class="img-fluid" width="300"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td  class="p-2"><a href="" onclick="return confirm('Yakin ingin mengonfirmasi pesanan ini?')" class="btn btn-primary mt-1">Konfirmasi Telah Bayar</a><br>
                            <small>Klik tombol ini jika pembeli sudah terbukti melakukan pembayaran</small>
                            </td>
                        </tr>
                        <tr>
                            <td>No Resi</td>
                            <td>:</td>
                            <td  class="p-2">
                            <form action="" method="POST">
                            <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" placeholder="Input Resi" aria-label="Recipient's username" aria-describedby="basic-addon2" name="no_resi" required>
                                <div class="input-group-append">
                                <button type="submit" class="btn btn-sm btn-primary" type="button">Simpan</button>
                                </div>
                            </div>
                            </div>
                            </form>
                            </td>
                        </tr>
                    </table>
                    </div>
                   <!--  <div class="col-md-5">
                      <div class="table-responsive">
                      <table class="table table-bordered table-hovered" >
                        <thead class="bg-primary text-white">
                          <tr>
                            <th width="5%">No</th>
                            <th>Nama Produk</th>
                            <th>jumlah</th>
                            <th>Total Harga</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                    </div> -->
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

     <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

<!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('vendors/adminassets/assets/vendors/js/vendor.bundle.base.js') ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('vendors/adminassets/assets/vendors/chart.js/Chart.min.js') ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('vendors/adminassets/assets/js/off-canvas.js') ?>"></script>
    <script src="<?php echo base_url('vendors/adminassets/assets/js/hoverable-collapse.js') ?>"></script>
    <script src="<?php echo base_url('vendors/adminassets/assets/js/misc.js') ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('vendors/adminassets/assets/js/dashboard.js') ?>"></script>
    <script src="<?php echo base_url('vendors/adminassets/assets/js/todolist.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('vendors/table/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('vendors/table/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('vendors/table/datatables/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('vendors/swal/dist/sweetalert2.min.js') ?>"></script>
    </body>
</html>
