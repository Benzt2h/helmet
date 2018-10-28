<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>ตะกร้าสินค้า</h3>
			<div class="w3_login_module">
            <table class="table" cellpadding="2" cellspacing="2">
        	<tr>
        		<th>รายการ</th>
        		<th>รูป</th>
        		<th>ราคา</th>
        		<th>จำนวน</th>
        		<th>รวม</th>
        		<th>Action</th>
        	</tr>
        	<?php foreach ($items as $item) { ?>
        		<tr>
        			<td><?php echo $item['name']; ?></td>
        			<td><img src="<?php echo base_url() ?>assets/images/<?php echo $item['photo']; ?>" width="50"></td>
        			<td><?php echo $item['price']; ?></td>
        			<td><?php echo $item['quantity']; ?></td>
        			<td><?php echo $item['price'] * $item['quantity']; ?></td>
        			<td align="center">
        				<a href="<?php echo site_url('helmet/remove/'.$item['id']); ?>">X</a>
        			</td>
                    
        		</tr>
        	<?php } ?>
        		<tr>
        			<td colspan="5" align="right">Total</td>
        			<td><?php echo $total; ?></td>
        		</tr>
        </table>
        <div align="left"><a href="<?php echo site_url('helmet/product'); ?>" class="btn btn-warning">กลับไปเลือกสินค้าต่อ</a></div>
		<?php if(count($items) != ''):?>
        <div align="left"><a href="<?php echo site_url('helmet/checkout'); ?>" class="btn btn-danger">ต่อไป</a></div>
			<?php endif;?>		
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>