<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>ยืนยันการสั่งซื้อสินค้า</h3>
			<div class="w3_login_module">
            <table class="table" cellpadding="2" cellspacing="2">
        	<tr>
        		<th>รายการ</th>
        		<th>รูป</th>
        		<th>ราคา</th>
        		<th>จำนวน</th>
        		<th>รวม</th>
        	</tr>
        	<?php foreach ($items as $item) { ?>
        		<tr>
        			<td><?php echo $item['name']; ?></td>
        			<td><img src="<?php echo base_url() ?>uploads/product/<?php echo $item['photo']; ?>" width="50"></td>
        			<td><?php echo number_format($item['price'],2); ?></td>
        			<td><?php echo $item['quantity']; ?></td>
        			<td><?php echo number_format($item['price'] * $item['quantity'],2); ?></td>

        		</tr>
        	<?php } ?>
        		<tr>
        			<td colspan="4" align="right">Total</td>
        			<td><?php echo number_format($total,2); ?></td>
        		</tr>
        </table>
        <div align="left"><a href="<?php echo site_url('helmet/checkoutfinish'); ?>" class="btn btn-danger">ยืนยันคำสั่งซื้อ</a></div>

			</div>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
