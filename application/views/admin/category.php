
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title"><?php echo $title_name; ?></h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <p>
                                    <a href="<?php echo site_url('admin/category/add') ?>">
                                        <button  type="button" class="btn btn-success" name="">เพิ่มข้อมูล</button>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col" width="15%">ลำดับ</th>
                                  <th scope="col">หมวดหมู่สินค้า</th>
                                  <th scope="col" width="20%">จัดการข้อมูล</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($category_list as $value) { ?>
                              <tr>
                              <th scope="row"><?php echo $i; ?></th>
                              <td><?php echo $value['subject']; ?></td>
                              <td>
                                <a href="<?php echo site_url('admin/category/edit'); ?>/<?php echo $value['id']; ?>">
                                  <input type="button" class="btn btn-warning" name="add" value="แก้ไข">
                                </a>
                                <a href="<?php echo site_url('admin/category/delete'); ?>/<?php echo $value['id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล');">
                                  <input type="button" class="btn btn-danger" name="edit" value="ลบ">
                                </a>
                              </td>
                            </tr>
                            <?php $i++; ?>
                            <?php } ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- Sales chart -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Recent comment and chats -->
<!-- ============================================================== -->
</div>
</div>
<!-- ============================================================== -->
<!-- Recent comment and chats -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
    @Helmet
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url('assets/admin/assets'); ?>/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url('assets/admin/assets'); ?>/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url('assets/admin/assets'); ?>/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/admin/assets'); ?>/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url('assets/admin/assets'); ?>/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('assets/admin/dist'); ?>/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url('assets/admin/dist'); ?>/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url('assets/admin/dist'); ?>/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="<?php echo base_url('assets/admin/dist'); ?>/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="<?php echo base_url('assets/admin/assets'); ?>/libs/flot/excanvas.js"></script>
<script src="<?php echo base_url('assets/admin/assets'); ?>/libs/flot/jquery.flot.js"></script>
<script src="<?php echo base_url('assets/admin/assets'); ?>/libs/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url('assets/admin/assets'); ?>/libs/flot/jquery.flot.time.js"></script>
<script src="<?php echo base_url('assets/admin/assets'); ?>/libs/flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url('assets/admin/assets'); ?>/libs/flot/jquery.flot.crosshair.js"></script>
<script src="<?php echo base_url('assets/admin/assets'); ?>/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url('assets/admin/dist'); ?>/js/pages/chart/chart-page-init.js"></script>

</body>

</html>