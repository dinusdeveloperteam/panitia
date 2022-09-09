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
                                        <th>No</th>
                                        <th>ID Peserta</th>
                                        <th>Nama</th>
                                        <th>provinsi</th>
                                        <th>Kota</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($peserta as $u) {
                                        $count = $count + 1;
                                    ?>
                                        <tr>
                                            <td><?= $count ?></td>
                                            <td><?= $u->peserta_id ?></td>
                                            <td><?= $u->nama ?></td>
                                            <td><?= $u->provinsi ?></td>
                                            <td><?= $u->kota ?></td>
                                            <td>
                                                <?php if ($u->status == 0) {
                                                    echo "<span class='badge badge-secondary'>Belum Terverifikasi</span>";
                                                } else if ($u->status == 1) {
                                                    echo "<span class='badge badge-success'>Terverifikasi</span>";
                                                } else if ($u->status == 2) {
                                                    echo "<span class='badge badge-warning'>Di tolak</span>";
                                                } else if ($u->status == 3) {
                                                    echo "<span class='badge badge-danger'>Di banned</span>";
                                                } else {
                                                    echo "Unknown";
                                                }
                                                ?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="<?= base_url() ?>panitia/peserta/detail/<?= $u->peserta_id ?>" class="btn btn-warning btn-sm">
                                                        <i class="mdi mdi-account-edit"></i>
                                                    </a>&emsp;
                                                    <a href="<?= base_url() ?>panitia/peserta/hapusPeserta/<?= $u->peserta_id ?>" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
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
    <!-- Modal Delete -->
    <div class="modal fade" id="hapusPesertaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span>Yakin ingin hapus data?</span>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <a href="<?= base_url() ?>panitia/peserta/hapusPeserta/<?= $u->peserta_id ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Delete -->