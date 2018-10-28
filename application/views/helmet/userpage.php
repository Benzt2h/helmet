
		<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>ข้อมูลส่วนตัว</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"></div>
				  <div class="form">
					<p>ชื่อ - นามสกุล&nbsp;&nbsp;::&nbsp;&nbsp;<?php echo $get['0']['name']?></p>
          			<p>ที่อยู่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: <?php echo $get['0']['address']?></p>
          			<p>เบอร์โทรศัพท์&nbsp;&nbsp;::&nbsp;<?php echo $get['0']['call']?></p>
		  			<a href="<?php echo site_url('helmet/order');?>" class="btn btn-success">คำสั่งซื้อ</a>&nbsp;<a href="<?php echo site_url('helmet/logout');?>" class="btn btn-danger">ออกจากระบบ</a>
				  </div>
				</div>
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
			<!-- <div class="col-md-3 w3_footer_grid">
				<h3>twitter posts</h3>
				<ul class="w3_footer_grid_list1">
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam <a href="#">http://sd.ds/13jklf#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam <a href="#">http://fd.uf/56hfg#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
				</ul>
			</div> -->
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
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
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
