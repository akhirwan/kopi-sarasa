<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $title . ' - ' . $config->app_name ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    

	<link href="<?php echo base_url().'assets/public/img/logo/'.$config->logo; ?>" rel="icon">
  	<!-- <link href="<?php //echo base_url(); ?>assets/front/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <link href="<?php echo base_url('assets/public/css/all.min.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/public/css/templatemo-style.css')?>" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('assets/public/img/simple-house-01.jpg')?>">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="<?php echo base_url().'assets/public/img/logo/'.$config->logo; ?>" width="96" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title"><?php echo $config->app_name ?></h1>
								<h6 class="tm-site-description"><?php echo $config->company ?></h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="<?php echo base_url();?>" class="tm-nav-link <?php if(isset($active_home)){echo $active_home ;}?>">Home</a></li>
								<li class="tm-nav-li"><a href="<?php echo base_url('about');?>" class="tm-nav-link <?php if(isset($active_about)){echo $active_about ;}?>">About</a></li>
								<li class="tm-nav-li"><a href="<?php echo base_url('contact');?>" class="tm-nav-link <?php if(isset($active_contact)){echo $active_contact ;}?>">Contact</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>