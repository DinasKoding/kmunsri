<div class="container-fluid main">
		
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="" class="navbar-brand">KM-UNSRI</a>
				</div>
				<div class="collapse navbar-collapse" id="navBar">
					<?php

					$user = $this->session->userdata('user');

					if(!isset($user)) {

					 ?>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?= site_url('Index/logpage') ?>">Login</a></li>
						<li><a href="<?= site_url('Index/logpage') ?>">Sign-Up</a></li>
					</ul>
					<?php } else { ?>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?= site_url('Login/logout') ?>">Logout</a></li>
					</ul>
						<?php } ?>
				</div>
			</div>
		</nav>

		<div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
			<div class="carousel-inner" role="listbox">
				<div class="item active background a"></div>
				<div class="item background b"></div>
				<div class="item background c"></div>
			</div>
		</div>