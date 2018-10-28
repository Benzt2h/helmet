
		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner3">
				<h3>ช้อปคุ้มกว่าเดิม กับเราได้ที่นี่<span class="blink_me"></span></h3>
			</div>

			<div class="w3ls_w3l_banner_nav_right_grid">
				<h3>รายการสินค้า</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>Helmet New</h6>
					<?php foreach($product as $objproduct):?>
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="<?php echo base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="<?php echo base_url('assets/'); ?>single.html"><img src="<?php echo base_url('uploads/product/'.$objproduct['image']); ?>" alt=" " class="img-responsive" /></a>
											<p><?php echo $objproduct['name'];?></p>
											<h4><?php echo number_format($objproduct['price'],2);?></h4>
										</div>
										<center>
											<a href="<?php echo site_url('helmet/addcart/'.$objproduct['id']);?>" class="btn btn-success">ลงตะกร้าสินค้า</a>
										</center>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
				<?php endforeach;?>
					<div class="clearfix"> </div>
				</div>
				<center>
					<ul class="pagination">
					  <li><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					</ul>
					</center>

					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>เมนู</h3>
				<ul class="w3_footer_grid_list">
					<!-- <li><a href="events.html">Events</a></li> -->
					<li><a href="<?php echo site_url('helmet/about'); ?>">เกี่ยวกับเรา</a></li>
					<li><a href="<?php echo site_url('helmet/product'); ?>">ช้อปสินค้า</a></li>
					<li><a href="<?php echo site_url('helmet/services'); ?>">บริการ</a></li>
					<li><a href="<?php echo site_url('helmet/contactus'); ?>">ติดต่อเรา</a></li>
					<li><a href="<?php echo site_url('helmet/login'); ?>">เข้าสู่ระบบ</a></li>
				</ul>
			</div>
			<!-- <div class="col-md-3 w3_footer_grid">
				<h3>policy info</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="<?php echo base_url('assets/'); ?>faqs.html">FAQ</a></li>
					<li><a href="<?php echo base_url('assets/'); ?>privacy.html">privacy policy</a></li>
					<li><a href="<?php echo base_url('assets/'); ?>privacy.html">terms of use</a></li>
				</ul>
			</div> -->
			<div class="col-md-3 w3_footer_grid">
				<h3>หมวดหมู่สินค้า</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="<?php echo site_url('helmet/product'); ?>/1">หมวกกันน็อคเต็มใบ</a></li>
					<li><a href="<?php echo site_url('helmet/product'); ?>/2">หมวกกันน็อคครึ่งใบ</a></li>
					<li><a href="<?php echo site_url('helmet/product'); ?>/3">หมวกกันน็อคเปิดหน้า</a></li>
					<li><a href="<?php echo site_url('helmet/product'); ?>/4">หมวกกันน็อคช็อป</a></li>
					<li><a href="<?php echo site_url('helmet/product'); ?>/5">หมวกกันน็อคแว่นสองชั้น</a></li>
					<li><a href="<?php echo site_url('helmet/product'); ?>/6">หมวกกันน็อคคลาสสิค</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<!-- <div class="w3_footer_grid_bottom">
						<h4>100% secure payments</h4>
						<img src="<?php echo base_url('assets/'); ?>images/card.png" alt=" " class="img-responsive" />
					</div> -->
				</div>
				<!-- <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="<?php echo base_url('assets/'); ?>#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo base_url('assets/'); ?>#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo base_url('assets/'); ?>#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo base_url('assets/'); ?>#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo base_url('assets/'); ?>#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div> -->
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2018 DN Helmet shop <a href="http://w3layouts.com/"><!-- W3layouts --></a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
<script src="<?php echo base_url('assets/'); ?>js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>
