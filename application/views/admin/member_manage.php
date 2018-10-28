
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">
                  <?php echo $manage == 'add' ? 'เพิ่ม' : 'แก้ไข'; ?><?php echo $title_name; ?>
                </h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                            <?php echo $manage == 'add' ? 'Add' : 'Edit'; ?> <?php echo $this->uri->segment(2); ?></li>
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
                      <div class="card">
                            <form class="form-horizontal" 
                              action="<?php echo $manage == 'add' ? site_url('admin_manage/Add') : site_url('admin_manage/Edit'); ?>"
                              method="post" enctype="multipart/form-data">
                            <!-- ชื่อตาราง -->
                            <input type="hidden" class="form-control" name="table" value="member">
                            <!-- End -->
                            <!-- ไอดี -->
                            <input type="hidden" class="form-control" name="id" value="<?php echo !empty($member_list[0]['id']) ? $member_list[0]['id'] : ''; ?>">
                            <!-- End -->

                                <div class="card-body">

                                    <!-- Input Data -->
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">ชื่อ-สกุล</label>
                                        <div class="col-sm-9">
                                            <input 
                                              type="text" 
                                              class="form-control" 
                                              name="name"
                                              value="<?php echo !empty($member_list[0]['name']) ? $member_list[0]['name'] : ''; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">ที่อยู่</label>
                                        <div class="col-sm-9">
                                            <textarea name="address" class="form-control"><?php echo !empty($member_list[0]['address']) ? $member_list[0]['address'] : ''; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">เบอร์โทร</label>
                                        <div class="col-sm-9">
                                            <input 
                                              type="text" 
                                              class="form-control" 
                                              name="call"
                                              value="<?php echo !empty($member_list[0]['call']) ? $member_list[0]['call'] : ''; ?>">
                                        </div>
                                    </div>

                                    <!-- <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">ราคา</label>
                                        <div class="col-sm-9">
                                            <input 
                                              type="text" 
                                              class="form-control" 
                                              name="price"
                                              value="<?php echo !empty($member_list[0]['price']) ? $member_list[0]['price'] : ''; ?>">
                                        </div>
                                    </div> -->

                                     <!-- <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">สี</label>
                                        <div class="col-sm-9">
                                            <input 
                                              type="text" 
                                              class="form-control" 
                                              name="color"
                                              value="<?php echo !empty($member_list[0]['color']) ? $member_list[0]['color'] : ''; ?>">
                                        </div>
                                    </div> -->

                                    <!-- <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">รายละเอียดสินค้า</label>
                                        <div class="col-sm-9">
                                            <textarea name="detail" id="editor1">
                                                <?php echo !empty($member_list[0]['detail']) ? $member_list[0]['detail'] : ''; ?>
                                            </textarea>
                                        </div>
                                    </div> -->

                                    <!-- <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">รูปภาพ</label>
                                        <div class="col-sm-9">
                                            <input 
                                              type="file" 
                                              class="form-control" 
                                              name="image"
                                              value="<?php echo !empty($member_list[0]['image']) ? $member_list[0]['image'] : ''; ?>">
                                        </div>
                                    </div>
 -->
                                    <!-- End Input Data -->
                                </div>
                                
                                
                                <div class="border-top">
                                    <div class="card-body text-right">
                                        <button type="submit" class="btn btn-info">บันทึกข้อมูล</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="row">
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

<script type="text/javascript">
    CKEDITOR.replace( 'editor1' );
</script>

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