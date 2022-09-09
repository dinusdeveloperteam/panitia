<div class="main-panel">
    <div class="content-wrapper">
        <!-- partials breadcrumb start -->
        <?php $this->load->view("panitia/partials/breadcrumb.php"); ?>
        <!-- partilas breadcrumb end -->
        <style>
            .main-panel .content-wrapper .row .grid-margin .card .card-body .form-row .form-group input {
                background-color: #FFF;
            }
        </style>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body shadow-sm rounded">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="peserta_id">ID Peserta</label>
                                <input type="text" class="form-control" id="peserta_id" value="<?= $peserta['peserta_id'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="deposit">Jumlah Deposit</label>
                                <input type="text" class="form-control" id="deposit" value="<?= $peserta['deposit'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" value="<?= $peserta['nama'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" value="<?= $peserta['username'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <?php
                            $jenis = $peserta['jeniskel'];
                            if ($jenis == 'L' || $jenis == 'l') {
                                $jeniskel = "Laki - laki";
                            } else if ($jenis == 'P' || $jenis == 'p') {
                                $jeniskel = "Perempuan";
                            } else {
                                $jeniskel = "Tidak diketahui";
                            }
                            ?>
                            <div class="form-group col-md-6">
                                <label for="jeniskel">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jeniskel" value="<?= $jeniskel ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" value="<?= $peserta['nik'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telp">Telepon</label>
                                <input type="text" class="form-control" id="telp" value="<?= $peserta['telp'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" value="<?= $peserta['email'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="kelurahan">Kelurahan</label>
                                <input type="text" class="form-control" id="kelurahan" value="<?= $peserta['kelurahan'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" value="<?= $peserta['kecamatan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control" id="kota" value="<?= $peserta['kota'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" value="<?= $peserta['provinsi'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" value="<?= $peserta['alamat'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="npwp">Nomor NPWP</label>
                                <input type="text" class="form-control" id="npwp" value="<?= $peserta['npwp'] ?>" readonly>
                            </div>
                            <?php
                            $status = $peserta['status'];
                            if ($status == 0) {
                                $data = "Belum diverifikasi";
                            } else if ($status == 1) {
                                $data = "Terverifikasi";
                            } else if ($status == 2) {
                                $data = "Ditolak";
                            } else if ($status == 3) {
                                $data = "Dibanned";
                            } else {
                                $data = "Status tidak diketahui";
                            }
                            ?>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" id="status" value="<?= $data ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ktp">File KTP</label>
                                <a href="<?= base_url('assets/uploads/peserta/') . $peserta['filektp'] ?>" data-toggle="tooltip" data-placement="bottom" title="Lihat Gambar">
                                    <img src="<?= base_url('assets/uploads/peserta/') . $peserta['filektp'] ?>" class="d-block" width="100% auto" alt="">
                                </a>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="npwp">File NPWP</label>
                                <a href="<?= base_url('assets/uploads/peserta/') . $peserta['filenpwp'] ?>" data-toggle="tooltip" data-placement="bottom" title="Lihat Gambar">
                                    <img src="<?= base_url('assets/uploads/peserta/') . $peserta['filenpwp'] ?>" class="d-block" width="100% auto" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="between">
                            <button type="button" class="btn btn-secondary btn-sm" style="float: left">
                                <i class="mdi mdi-arrow-left-circle"></i>
                                <span>Kembali</span>
                            </button>
                            <button type="submit" class="btn btn-success btn-sm" style="float: right">
                                <i class="mdi mdi-content-save"></i>
                                <span>Simpan</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>