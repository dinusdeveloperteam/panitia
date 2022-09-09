<div class="main-panel">
    <div class="content-wrapper">
        <!-- partials breadcrumb start -->
        <?php $this->load->view("panitia/partials/breadcrumb.php"); ?>
        <!-- partilas breadcrumb end -->

        <!-- start detail pembukaanLelang lelang -->
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body shadow-sm rounded">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="lelang_id">ID Lelang</label>
                                <input type="text" class="form-control" id="lelang_id" value="<?= $detailPembukaanLelang['lelang_id'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pelelang_id">ID Pelelang</label>
                                <input type="text" class="form-control" id="pelelang_id" value="<?= $detailPembukaanLelang['pelelang_id'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="panitia_id">ID panitia</label>
                                <input type="text" class="form-control" id="panitia_id" value="<?=  $user->panitia_id ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="produk">Produk</label>
                                <input type="text" class="form-control" id="produk" value="<?= $detailPembukaanLelang['produk'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="deskripsi_produk">Deskripsi Produk</label>
                                <input type="text" class="form-control" id="deskripsi_produk" value="<?= $detailPembukaanLelang['deskripsi_produk'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="harga_awal">Harga Awal</label>
                                <input type="text" class="form-control" id="harga_awal" value="<?= $detailPembukaanLelang['harga_awal'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="harga_minimal_diterima">Harga Minimal Diterima</label>
                                <input type="text" class="form-control" id="harga_minimal_diterima" value="<?= $detailPembukaanLelang['harga_minimal_diterima'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="incremental_value">Kelipatan Minimal</label>
                                <input type="text" class="form-control" id="incremental_value" value="<?= $detailPembukaanLelang['incremental_value'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="harga_beli_sekarang">Harga Beli Sekarang</label>
                                <input type="text" class="form-control" id="harga_beli_sekarang" value="<?= $detailPembukaanLelang['harga_beli_sekarang'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tgl_mulai">Tanggal Mulai</label>
                                <input type="text" class="form-control" id="tgl_mulai" value="<?= $detailPembukaanLelang['tgl_mulai'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tgl_selesai">Tanggal Selesai</label>
                                <input type="text" class="form-control" id="tgl_selesai" value="<?= $detailPembukaanLelang['tgl_selesai'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="image1">Gambar 1</label>
                                <a class="btn btn-secondary d-block" data-toggle="collapse" href="#gambar1" role="button" aria-expanded="false" aria-controls="gambar1">
                                    <span>Gambar 1</span>
                                </a>
                                <div class="collapse multi-collapse" id="gambar1">
                                    <div class="card card-body">
                                        <img src="<?= base_url('assets/uploads/produk/') . $detailPembukaanLelang['image1'] ?>" alt="" class="rounded mx-auto d-block FlowerLink" width="100% auto">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="image2">Gambar 2</label>
                                <a class="btn btn-secondary d-block" data-toggle="collapse" href="#gambar2" role="button" aria-expanded="false" aria-controls="gambar2">
                                    <span>Gambar 2</span>
                                </a>
                                <div class="collapse multi-collapse" id="gambar2">
                                    <div class="card card-body">
                                        <img src="<?= base_url('assets/uploads/produk/') . $detailPembukaanLelang['image2'] ?>" alt="" class="rounded mx-auto d-block FlowerLink" width="100% auto">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="image3">Gambar 3</label>
                                <a class="btn btn-secondary d-block" data-toggle="collapse" href="#gambar3" role="button" aria-expanded="false" aria-controls="gambar3">
                                    <span>Gambar 3</span>
                                </a>
                                <div class="collapse multi-collapse" id="gambar3">
                                    <div class="card card-body">
                                        <img src="<?= base_url('assets/uploads/produk/') . $detailPembukaanLelang['image3'] ?>" alt="" class="rounded mx-auto d-block FlowerLink" width="100% auto">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="image1">Gambar 4</label>
                                <a class="btn btn-secondary d-block" data-toggle="collapse" href="#gambar4" role="button" aria-expanded="false" aria-controls="gambar4">
                                    <span>Gambar 4</span>
                                </a>
                                <div class="collapse multi-collapse" id="gambar4">
                                    <div class="card card-body">
                                        <img src="<?= base_url('assets/uploads/produk/') . $detailPembukaanLelang['image4'] ?>" alt="" class="rounded mx-auto d-block FlowerLink" width="100% auto">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <form action="<?= base_url('panitia/pembukaanlelang/verifikasi/' . $detailPembukaanLelang['lelang_id']) ?>" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputState">Verifikasi Pembukaan Lelang</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="<?= $detailPembukaanLelang['status'] ?>">
                                            <?php
                                            $status = $detailPembukaanLelang['status'];
                                            if ($status == 0) {
                                                echo "Belum diperiksa";
                                            } else if ($status == 1) {
                                                echo "Telah diperiksa";
                                            } else {
                                                echo "Status tidak diketahui";
                                            }
                                            ?>
                                        </option>
                                        <option value="0">Belum diperiksa</option>
                                        <option value="1">Telah diperiksa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end detail pembukaan lelang -->
    </div>