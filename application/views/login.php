<!DOCTYPE html>
<html>
<head>
	<title>Sign In And Sign Up Forms a Flat Responsive Widget Template :: w3layouts</title>
	<link rel="stylesheet" href="<?= base_url() ?>assets/universitas/login/css/style.css">
	<link href="<?= base_url() ?>assets/universitas/login/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />

	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Sign In And Sign Up Forms  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	</script>
	<script src="<?= base_url() ?>assets/universitas/login/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/universitas/login/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/universitas/login/js/modernizr.custom.53451.js"></script> 
	<script>
		$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>	

		
</head>
<body style="background-color: #fafafa">
	<h1 style="color: #FF9800;">LOGIN KM-UNSRI</h1>
	<?php 

	$msg = $this->session->flashdata('msg');
	if(isset($msg)) {
		echo $msg;
	}

	?>
	<div class="w3layouts">
		<div class="signin-agile">
			<h2>Sign In</h2>
			<form action="<?= site_url('Login/log') ?>" method="post">
				<input type="text" name="name" class="name" placeholder="Username" required="">
				<input type="password" name="password" class="password" placeholder="Password" required="">
				<ul>
					<li>
						<input type="checkbox" id="brand1" value="">
						<label for="brand1"><span></span>Remember me</label>
					</li>
				</ul>
				<a href="#">Forgot Password?</a><br>
				<div class="clear"></div>
				<input type="submit" value="Login">
			</form>
		</div>
		<div class="signup-agileinfo">
			<h3>Sign Up</h3>
			<p>Belum Punya akun ? Daftarkan sekarang !!</p>
			<div class="more">
				<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Sign Up</a>				
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="pop-up"> 
	<div id="small-dialog" class="mfp-hide book-form">
		<h3>Sign Up Form </h3>
			<form action="#" method="post">
				<input type="text" name="Name" placeholder="Your Name" required=""/>
				<input type="text" name="Email" class="email" placeholder="Email" required=""/>
				<input type="password" name="Password" class="password" placeholder="Password" required=""/>
				<input type="password" name="Password" class="password" placeholder="Confirm Password" required=""/>					
				<input type="submit" value="Sign Up">
			</form>
	</div>
</div>	
<body>
</html>