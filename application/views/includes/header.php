<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Life of Pie</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="<?=base_url('assets/img/pie.ico')?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@lifeofpie.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="facebook.com">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="linkedin.com">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="instagram.com">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="youtube.com">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="<?=base_url()?>" class="navbar-brand ml-lg-3">
				<img src="<?=base_url('assets/img/logo.png')?>" alt="" class="img-fluid" style="max-width: 200px">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="<?=base_url()?>" class="nav-item nav-link <?=$page == 'dashboard'  ? 'active' : ''?>">Home</a>
                    <a href="<?=base_url('menu')?>" class="nav-item nav-link <?=$page == 'menu'  ? 'active' : ''?>">Menu</a>
                    <a href="<?=base_url('about')?>" class="nav-item nav-link <?=$page == 'about'  ? 'active' : ''?>">About us</a>
                    <a href="<?=base_url('promo')?>" class="nav-item nav-link <?=$page == 'promo'  ? 'active' : ''?>">Promo</a>
					<?php 
						if($this->session->logged_in == TRUE){
					?>
						<a href="<?=base_url('booking')?>" class="nav-item nav-link <?=$page == 'booking'  ? 'active' : ''?>">Booking</a>
					<?php
						}
					?>
                </div>
				<?php 
					if($this->session->logged_in == FALSE){
				?>
                <a href="<?=base_url('login')?>" class="btn btn-primary py-2 px-4 d-none d-lg-block">Login</a>
				<?php
					}else{
				?>
                <a href="<?=base_url('login/logout')?>" class="btn btn-primary py-2 px-4 d-none d-lg-block">Logout</a>
				<?php
					}
		  		?>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
	
	<?php
	
	if($page != 'dashboard'){
	?>
		<!-- Header start -->
		<div class="jumbotron jumbotron-fluid mb-5">
			<div class="container text-center py-5">
				<h1 class="text-white display-3"><?=ucfirst($page)?></h1>
				<div class="d-inline-flex align-items-center text-white">
					<p class="m-0"><a class="text-white" href="<?=base_url()?>">Home</a></p>
					<i class="fa fa-circle px-3"></i>
					<p class="m-0"><?=ucfirst($page)?></p>
				</div>
			</div>
		</div>
		<!-- Header End -->
	<?php
	}
	?>