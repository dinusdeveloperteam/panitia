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
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama Produk</th>
                                        <th>Harga awal</th>
                                        <th>Harga Kelipatan</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai Lelang</th>
                                        <th>Jumlah Stok</th>
                                        <th>Status</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($pembukaanLelang as $row) {
                                        $count = $count + 1;

                                    ?>
                                        <tr>
                                            <td><?= $count ?></td>
                                            <td><?= $row->produk ?></td>
                                            <td><?= $row->harga_awal ?></td>
                                            <td><?= $row->incremental_value ?></td>
                                            <td><?= $row->tgl_mulai ?></td>
                                            <td><?= $row->tgl_selesai ?></td>
                                            <td><?= $row->jumlah ?></td>
                                            <?php if ($row->status == 0) {
                                            ?>
                                                <td class="text-danger">Belum diverifikasi</td>
                                            <?php } else { ?>
                                                <td class="text-success">Sudah diverifikasi</td>
                                            <?php } ?>
                                            <td align="center">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="" class="btn btn-success btn-sm">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                                    </a>&emsp;
                                                    <a href="<?= base_url('panitia/pembukaanlelang/detail/') . $row->lelang_id ?>" class="btn btn-warning btn-sm">
                                                        <i class="mdi mdi-details"></i>
                                                    </a>&emsp;
                                                    <a href="<?= base_url('panitia/pembukaanlelang/hapus/') . $row->lelang_id ?>" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                                        <i class="mdi mdi-delete-forever"></i>
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