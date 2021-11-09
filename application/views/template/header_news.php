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

	<style>
		.block {
			display: block;
			width: 100%;
			border: 1px solid #ccc;
			background-color: transparent;
			color: #626364;
			padding: 14px 28px;
			font-size: 16px;
			cursor: pointer;
			text-align: center;
		}

		.block:hover {
			color: white;
  			background-color: #98999A;
		}
	</style>
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 
	<?php 
		if($config->logo){
			$logo = base_url().'assets/public/img/logo/'.$config->logo;
		} else {
			$logo = base_url().'assets/public/img/default/default.png';
		}
	?>
	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url().'assets/public/img/articles/'.$articles[0]->picture;?>">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="<?php echo $logo; ?>" width="96" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title"><?php echo $config->app_name ?></h1>
								<h6 class="tm-site-description"><?php echo $config->company ?></h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="<?php echo base_url();?>" class="tm-nav-link <?php if(isset($active_home)){echo $active_home ;}?>">Home</a></li>
								<li class="tm-nav-li"><a href="<?php echo base_url().'about';?>" class="tm-nav-link <?php if(isset($active_about)){echo $active_about ;}?>">About</a></li>
								<li class="tm-nav-li"><a href="<?php echo base_url().'contact';?>" class="tm-nav-link <?php if(isset($active_contact)){echo $active_contact ;}?>">Contact</a></li>
								<li class="tm-nav-li"><a href="<?php echo base_url().'news';?>" class="tm-nav-link <?php if(isset($active_news)){echo $active_news ;}?>">News and Events</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>