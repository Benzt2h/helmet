<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>รายการสั่งซื้อสินค้า</h3>
			<div class="w3_login_module">
        <table class="table" cellpadding="2" cellspacing="2">
      <tr>
        <th>หมายเลขคำสั่งซื้อ</th>
        <th>สินค้า</th>
        <th>จำนวน</th>
        <th>รวม</th>
        <th>สถานะ</th>
        <th>Action</th>
      </tr>
  <?php
  if(isset($items)){
    foreach ($items as $item):
      switch ($item['status']) {
        case '0':
          $status = 'รอการชำระเงิน';
          break;
        case '1':
          $status = 'ได้รับเงินเรียบร้อย รอการจัดส่ง';
          break;
        case '2':
          $status = 'จัดส่งเรียบร้อย';
          break;

      }
  ?>
        <tr>
          <td><?php echo $item['id']; ?></td>
          <td><?php echo $item['name']; ?></td>
          <td><?php echo $item['product_qty']; ?></td>
          <td><?php echo $item['total']; ?></td>
          <td><?php echo $status;?></td>
          <td align="center">
            <a href="<?php echo site_url('helmet/payment/'.$item['id']); ?>">แจ้งชำระเงิน</a>
          </td>
        </tr>
  <?php endforeach; }?>
    </table>
			</div>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
