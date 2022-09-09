</div>

<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
  </div>
</footer>

<!-- MODAL POP UP -->
<?php if ($this->uri->segment(2) == 'Pengaturan' || $this->uri->segment(3) == 'halaman_edit') {
} else { ?>
  <?php if ($user->status == 0) { ?>
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Lengkapi Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Lengkapi data anda terlebih dahulu !!!
          </div>
          <div class="modal-footer">
            <a href="<?= base_url('pelelang/Pengaturan'); ?>" class="btn btn-primary">Lengkapi Data</a>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
<?php } ?>
<!-- END MODAL POP UP -->

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

<script type="text/javascript">
  $(window).on('load', function() {
    $('#myModal').modal('show');
  });
</script>

</body>

</html>