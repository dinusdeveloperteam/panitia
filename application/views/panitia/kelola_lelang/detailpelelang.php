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
                            <div class="form-group col-md-12">
                                <label for="pelelang_id">ID Pelelang</label>
                                <input type="text" class="form-control" id="pelelang_id" value="<?= $pelelang['pelelang_id'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" value="<?= $pelelang['nama'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" value="<?= $pelelang['username'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="NIK">NIK</label>
                                <input type="text" class="form-control" id="NIK" value="<?= $pelelang['nik'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <?php
                                $data = $pelelang['jenis'];
                                if ($data == 1) {
                                    $jenis = "Perusahaan";
                                } else if ($jenis == 0) {
                                    $jenis = "Perorangan";
                                } else {
                                    echo "Tidak di ketahui";
                                }
                                ?>
                                <label for="jenis">Jenis</label>
                                <input type="text" class="form-control" id="jenis" value="<?= $jenis ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telp">Telp</label>
                                <input type="text" class="form-control" id="telp" value="<?= $pelelang['telp'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" value="<?= $pelelang['email'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" value="<?= $pelelang['deskripsi'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="kelurahan">Kelurahan</label>
                                <input type="text" class="form-control" id="kelurahan" value="<?= $pelelang['kelurahan'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" value="<?= $pelelang['kecamatan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control" id="kota" value="<?= $pelelang['kota'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" value="<?= $pelelang['provinsi'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" value="<?= $pelelang['alamat'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="bank">Bank</label>
                                <input type="text" class="form-control" id="bank" value="<?= $pelelang['bank'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="atasnama">Atas Nama</label>
                                <input type="text" class="form-control" id="atasnama" value="<?= $pelelang['atasnama'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="kota">Nomor Rekening</label>
                                <input type="text" class="form-control" id="norekening" value="<?= $pelelang['norekening'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="NPWP">Nomor NPWP</label>
                                <input type="text" class="form-control" id="NPWP" value="<?= $pelelang['npwp'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="ktp">FIle KTP</label>
                                <a href="<?= base_url('assets/uploads/pelelang/') . $pelelang['filektp'] ?>" data-toggle="tooltip" data-placement="bottom" title="Lihat Gambar">
                                    <img src="<?= base_url('assets/uploads/pelelang/') . $pelelang['filektp'] ?>" class="d-block" width="100% auto" alt="">
                                </a>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="npwp">File NPWP</label>
                                <a href="<?= base_url('assets/uploads/pelelang/') . $pelelang['filenpwp'] ?>" data-toggle="tooltip" data-placement="bottom" title="Lihat Gambar">
                                    <img src="<?= base_url('assets/uploads/pelelang/') . $pelelang['filenpwp'] ?>" class="d-block" width="100% auto" alt="">
                                </a>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="siup">File SIUP</label>
                                <a href="<?= base_url('assets/uploads/pelelang/') . $pelelang['fileSIUP'] ?>" data-toggle="tooltip" data-placement="bottom" title="Lihat Gambar">
                                    <img src="<?= base_url('assets/uploads/pelelang/') . $pelelang['fileSIUP'] ?>" class="d-block" width="100% auto" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputState">Verifikasi Kelengkapan Data</label>
                                <form action="<?= base_url('panitia/pelelang/edit/' . $pelelang['pelelang_id']) ?>" method="POST">
                                    <select class="form-control" name="status" id="status">
                                        <option value="<?= $pelelang['status'] ?>">
                                            <?php
                                            $status = $pelelang['status'];
                                            if ($status == 0) {
                                                echo "Unverified";
                                            } else if ($status == 1) {
                                                echo "Terverifikasi";
                                            } else if ($status == 2) {
                                                echo "Ditolak";
                                            } else if ($status == 3) {
                                                echo "Dibanned";
                                            } else {
                                                echo "status tidak diketahui";
                                            }
                                            ?>
                                        </option>
                                        <option value="0">Unverified</option>
                                        <option value="1">Terverifikasi</option>
                                        <option value="2">Ditolak</option>
                                        <option value="3">Dibanned</option>
                                    </select>

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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>