<div class="main-panel">
    <div class="content-wrapper">
        <!-- partials breadcrumb start -->
        <?php $this->load->view("panitia/partials/breadcrumb.php"); ?>
        <!-- partilas breadcrumb end -->
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body shadow-sm rounded">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th> ID </th>
                                        <th> Nama </th>
                                        <th> Provinsi </th>
                                        <th> Kota </th>
                                        <th> Telp </th>
                                        <th> Email </th>
                                        <th> Status </th>
                                        <th> Aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $count = 0;
                                    foreach ($pelelang as $i) {
                                        $count = $count + 1;
                                    ?>
                                        <tr>
                                            <td><?= $count ?></td>
                                            <td><?= $i->pelelang_id ?></td>
                                            <td><?= $i->nama ?></td>
                                            <td><?= $i->provinsi ?></td>
                                            <td><?= $i->kota ?></td>
                                            <td><?= $i->telp ?></td>
                                            <td><?= $i->email ?></td>
                                            <td> <?php
                                                    if ($i->status == 0) {
                                                        echo "<span class='badge badge-secondary'>Belum Terverifikasi</span>";
                                                    } else if ($i->status == 1) {
                                                        echo "<span class='badge badge-success'>Terverifikasi</span>";
                                                    } else if ($i->status == 2) {
                                                        echo "<span class='badge badge-warning'>Di tolak</span>";
                                                    } else if ($i->status == 3) {
                                                        echo "<span class='badge badge-danger'>Di banned</span>";
                                                    } else {
                                                        echo "Unknown";
                                                    }
                                                    ?>

                                            <td>
                                                <a href="<?= base_url() ?>panitia/pelelang/detail/<?= $i->pelelang_id ?>" class="btn btn-warning btn-sm">
                                                    <i class="mdi mdi-account-edit"></i>
                                                </a>&emsp;
                                                <a href="<?= base_url() ?>panitia/pelelang/hapusPelelang/<?= $i->pelelang_id ?>" onclick="return confirm('Yakin Hapus data')"" class="btn btn-danger btn-sm">
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
<!-- <div class="modal fade" id="hapusPelelangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span>Yakin ingin hapus data?</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div> -->
<!-- End Modal Delete -->