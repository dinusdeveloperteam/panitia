<div class="main-panel">
    <!--content-->
    <div class="content-wrapper">
        <!-- partials breadcrumb start -->
        <?php $this->load->view("panitia/partials/breadcrumb.php"); ?>
        <!-- partilas breadcrumb end -->
        <!-- pelelang -->
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body shadow-sm rounded">
                        <!-- <h4 class="card-title">10 Transaksi Terbaru</h4> -->
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%" class="table">
                                <thead>
                                    <tr>
                                        <th>Lelang ID</th>
                                        <th>Peserta ID</th>
                                        <th>Email</th>
                                        <th>Tanggal Diumumkan</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Feedback</th>
                                        <th>Konfirmasi Terima Produk</th>
                                        <th>Status</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($PemenangLelang as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $row->lelang_id ?></td>
                                            <td><?= $row->peserta_id ?></td>
                                            <td><?= $row->email ?></td>
                                            <td><?= $row->tgl_diumumkan ?></td>
                                            <td><?= $row->tgl_bayar ?></td>
                                            <td><?= $row->testimoni_pemenang ?></td>
                                            <?php if ($row->konfirmasi_terimaproduk == 0) {
                                            ?>
                                                <td class="text-danger">Belum diterima</td>
                                            <?php } else { ?>
                                                <td class="text-success">Sudah diterima</td>
                                            <?php } ?>

                                            <?php if ($row->status == 0) {
                                            ?>
                                                <td class="text-danger">Belum Dibayar</td>
                                            <?php } else { ?>
                                                <td class="text-success">Telah dibayar</td>
                                            <?php } ?>
                                            <td>
                                                <div style="">
                                                    <a href="#" class="btn btn-sm btn-warning " data-toggle="modal" data-target="#editMenuModal<?= $row->lelang_id ?>"><i class="fas fa-edit"></i>Ubah</a>
                                                    <a href="#" class="btn btn-sm btn-danger " data-toggle="modal" data-target="#deletepenjualModal<?= $row->lelang_id ?>"><i class="fas fa-trash-can"></i>Hapus</a>
                                                    <a href="#" class="btn btn-sm btn-success " data-toggle="modal" data-target="#notifEmail"><i class="fas fa-trash-can"></i>Kirim</a>
                                                </div>
                                                <!-- Edit Menu Modal -->
                                                <div class="modal fade" id="editMenuModal<?= $row->lelang_id ?>" tabindex="-1" aria-labelledby="editOrderModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content bg-default">
                                                            <div class="modal-header ">
                                                                <h5 class="modal-title font-weight-bold" id="editOrderModal">Detail Pe Lelang</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-dark font-weight-bold">
                                                                <?php
                                                                ?>
                                                                <form action="<?= base_url('panitia/pemenang/edit/' . $row->lelang_id) ?>" method="POST">
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <label for="basic-url">ID Lelang </label>
                                                                                <div class="input-group mb-3">
                                                                                    <input type="text" class="form-control" name="lelang_id" id="lelang_id" value="<?= $row->lelang_id ?>" aria-describedby="basic-addon3" readonly>
                                                                                </div>

                                                                                <label for="basic-url">ID Peserta</label><br>
                                                                                <div class="input-group mb-1">
                                                                                    <input type="text" class="form-control" name="peserta_id" id="peserta_id" value="<?= $row->peserta_id ?>" aria-describedby="basic-addon3" readonly>
                                                                                </div>
                                                                                <label for="basic-url">Email</label>
                                                                                <div class="input-group mb-3">
                                                                                    <input type="text" class="form-control" name="email" value="<?= $row->email ?>" aria-describedby="basic-addon3" readonly>
                                                                                </div>
                                                                                <label for="basic-url">Tanggal Diumumkan</label><br>
                                                                                <div class="input-group mb-1">
                                                                                    <input type="text" class="form-control" name="tgl_diumumkan'" id="tgl_diumumkan'" value="<?= $row->tgl_diumumkan ?>" aria-describedby="basic-addon3" readonly>
                                                                                </div>

                                                                                <label for="basic-url">Tanggal Pembayaran</label>
                                                                                <div class="input-group mb-3">
                                                                                    <input type="text" class="form-control" name="tgl_bayar" id="tgl_bayar" value="<?= $row->tgl_bayar ?>" aria-describedby="basic-addon3" readonly>
                                                                                </div>

                                                                                <label for="basic-url">Bukti Pembayaran</label><br>
                                                                                <div class="input-group mb-3">
                                                                                    <img src="<?= base_url('vendors/images/pembayaran/' . $row->bukti_bayar) ?>" class="img-thumbnail thumbnail zoom" width="200px" alt="Gambar Bukti Transfer <?= $row->bukti_bayar ?>">
                                                                                </div>
                                                                                <label for="basic-url">Konfirmasi Terima Produk</label><br>
                                                                                <div class="input-group mb-1">
                                                                                    <select class="custom-select" name="konfirmasi_terimaproduk" id="konfirmasi_terimaproduk">
                                                                                        <option value="<?= $row->konfirmasi_terimaproduk ?>"><?php
                                                                                                                                                if ($row->konfirmasi_terimaproduk == 0) {
                                                                                                                                                    echo 'Belum Diterima';
                                                                                                                                                } else if ($row->konfirmasi_terimaproduk == 1) {
                                                                                                                                                    echo 'Sudah Diterima';
                                                                                                                                                }
                                                                                                                                                ?></option>
                                                                                        <option value="0">Belum Diterima</option>
                                                                                        <option value="1">Sudah Diterima</option>
                                                                                    </select>
                                                                                </div><br>
                                                                            </div>
                                                                            <div class="col-6">

                                                                                <label for="basic-url">Provinsi</label><br>
                                                                                <div class="input-group mb-3">
                                                                                    <input type="text" class="form-control" name="provinsi_kirim" id="provinsi_kirim" value="<?= $row->provinsi_kirim ?>" aria-describedby="basic-addon3" readonly>
                                                                                </div>

                                                                                <label for="basic-url">Kota</label><br>
                                                                                <div class="input-group mb-3">
                                                                                    <input type="text" class="form-control" name="kota_kirim" id="kota_kirim" value="<?= $row->kota_kirim ?>" aria-describedby="basic-addon3" readonly>
                                                                                </div>

                                                                                <label for="basic-url">kecamatan</label><br>
                                                                                <div class="input-group mb-3">
                                                                                    <input type="text" class="form-control" name="kecamatan_kirim" id="kecamatan_kirim" value="<?= $row->kecamatan_kirim ?>" aria-describedby="basic-addon3" readonly>
                                                                                </div>

                                                                                <label for="basic-url">Kelurahan</label><br>
                                                                                <div class="input-group mb-3">
                                                                                    <input type="text" class="form-control" name="kelurahan_kirim" id="kelurahan_kirim" value="<?= $row->kelurahan_kirim ?>" aria-describedby="basic-addon3" readonly>
                                                                                </div>

                                                                                <label for="basic-url">Alamat</label><br>
                                                                                <div class="input-group mb-3">
                                                                                    <input type="text" class="form-control" name="alamat_kirim" id="alamat_kirim" value="<?= $row->alamat_kirim ?>" aria-describedby="basic-addon3" readonly>
                                                                                </div>


                                                                                <label for="basic-url">Status Dibayarkan</label><br>
                                                                                <div class="input-group mb-1">
                                                                                    <select class="custom-select" name="status" id="status">
                                                                                        <option value="<?= $row->status ?>"><?php
                                                                                                                            if ($row->status == 0) {
                                                                                                                                echo 'Belum Dibayar';
                                                                                                                            } else if ($row->status == 1) {
                                                                                                                                echo 'Telah Dibayar';
                                                                                                                            } else if ($row->status == 2) {
                                                                                                                                echo 'Ditolak';
                                                                                                                            }
                                                                                                                            ?></option>
                                                                                        <option value="0">Belum Dibayar</option>
                                                                                        <option value="1">Telah Dibayar</option>
                                                                                        <option value="2">Ditolak</option>
                                                                                    </select>
                                                                                </div><br>
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
                                                <!--untuk kirim email-->
                                                <div class="modal fade" id="notifEmail" tabindex="-1" role="dialog" aria-labelledby="loginpelelangLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Kirim Notifikasi Email Pelelang</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="<?= base_url('Panitia/pemenang/VerifyEmail/') ?>" method="post">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $row->email ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                                                </div>
                                                                <?php echo $this->session->flashdata('msg'); ?>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Detail -->

                                                <!-- Modal Hapus -->
                                                <div class="modal fade" id="deletepenjualModal<?= $row->lelang_id ?>" tabindex="-1" aria-labelledby="deletepenjualModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content bg-light">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deletepenjualModalLabel">Hapus Pembayaran</h5>
                                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4>Yakin ingin menghapus Pembayaran dengan ID "<?= $row->lelang_id ?>" ?</h4>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                                                                <a href="<?= base_url() ?>panitia/pemenang<?= $row->lelang_id ?>" class="btn btn-danger">Ya</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            </a>
                        </div>
                        </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>