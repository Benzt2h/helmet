
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title"><?php echo $title_name;?></h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">member</li>
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
                                    <a href="<?php echo site_url('admin/member/add') ?>">
                                        <button  type="button" class="btn btn-success" name="">เพิ่มข้อมูล</button>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">ลำดับ</th>
                                  <th scope="col">ชื่อ-สกุล</th>
                                  <th scope="col">ที่อยู่</th>
                                  <th scope="col">เบอร์โทร</th>
                                  <th scope="col" width="20%">จัดการข้อมูล</th>
                              </tr>
                          </thead>
                          <tbody class="text-center">
                            <?php $i = 1; ?>
                            <?php foreach ($member_list as $value) { ?>
                              <tr>
                              <td> <?php echo $i; ?> </td>
                              <td> <?php echo $value['name']; ?> </td>
                              <td> <?php echo $value['address']; ?> </td>
                              <td> <?php echo $value['call']; ?> </td>
                              <td>
                                <a href="<?php echo site_url('admin/member/edit'); ?>/<?php echo $value['id']; ?>">
                                  <input type="button" class="btn btn-warning" name="edit" value="แก้ไข">
                                </a>
                                <a href="<?php echo site_url('admin/member/delete'); ?>/<?php echo $value['id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล');" class="hide">
                                  <input type="button" class="btn btn-danger" name="delete" value="ลบ">
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
</div>
</div>
</div>
<footer class="footer text-center">
    @Helmet
</footer>
</div>
</div>
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