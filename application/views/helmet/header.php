<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>DN Helmet Shop</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('assets/'); ?>css/style.css?version=อ้ายโจอี้ผีบ้า" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="<?php echo base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?php echo base_url('assets/'); ?>js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>

<body>

	<div class="logo_products">
		<div class="container" style="margin-left: 3%;">
			<div class="w3ls_logo_products_left">
				<h1><a href="<?php echo site_url ('') ?>"><img src="<?php echo base_url(''); ?>assets/images/logo/logo.jpg" width="100px"></a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<!-- <li><a href="<?php echo site_url('helmet/events') ?>">กิจกรรม</a><i>/</i></li> -->
					<li><a href="<?php echo site_url('helmet/about') ?>">เกี่ยวกับเรา</a><i>/</i></li>
					<li><a href="<?php echo site_url('helmet/product') ?>">ช้อปสินค้า</a><i>/</i></li>
					<li><a href="<?php echo site_url('helmet/services') ?>">บริการ</a><i>/</i></li>
					<li><a href="<?php echo site_url('helmet/contactus') ?>">ติดต่อเรา</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1" style="float:right;">
				<ul class="phone_email">
					<?php if(!$this->session->has_userdata('logged_in_user')){?>
							<li class="<?=($this->uri->segment(2)==='login')?'active-menu':''?>">
							<li><a href="<?php echo site_url('helmet/login') ?>">เข้าสู่ระบบ</a></li>
							</li>
							<?php }else{?>
								<li><a href="<?php echo site_url('helmet/cart') ?>">ตะกร้าสินค้า</a></li>
								<li class="<?=($this->uri->segment(2)==='userpage')?'active-menu':''?>">
								<a href="<?php echo site_url('helmet/userpage'); ?>"><?php echo $_SESSION['logged_in_user']['user_fullname']?></a>
								</li>
								<li>
								<a href="<?php echo site_url('helmet/logout'); ?>">ออกจากระบบ</a>
								</li>
							<?php }?>

				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->

<?php if (empty($this->uri->segment(2))) {
	# code...
	}else { ?>
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?php echo site_url ('') ?>">หน้าหลัก</a><span>|</span></li>
				<li>
					<?php echo $this->uri->segment(2) == 'about' ? 'เกี่ยวกับเรา' : ''; ?>
					<?php echo $this->uri->segment(2) == 'product' ? 'ช้อปสินค้า' : ''; ?>
					<?php echo $this->uri->segment(2) == 'services' ? 'บริการ' : ''; ?>
					<?php echo $this->uri->segment(2) == 'contactus' ? 'ติดต่อเรา' : ''; ?>
					<?php echo $this->uri->segment(2) == 'login' ? 'เข้าสู่ระบบ' : ''; ?>
					</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<?php } ?>
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div>
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<?php foreach ($category as $obj):?>
							<li><a href="<?php echo site_url('helmet/product/'.$obj['id']); ?>"><?php echo $obj['subject']; ?></a></li>
						<?php endforeach;?>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
