<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body padding-top">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<a href="<?php echo base_url().'manage-articles' ?>">
					<div class="card red summary-inline">
						<div class="card-body">
							<i class="icon fa fa-newspaper-o fa-4x"></i>
							<div class="content">
								<div class="title"><?php echo $sum_articles ?></div>
								<div class="sub-title">Jumlah Artikel</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<a href="<?php echo base_url().'manage-items' ?>">
					<div class="card yellow summary-inline">
						<div class="card-body">
							<i class="icon fa fa-cutlery fa-4x"></i>
							<div class="content">
								<div class="title"><?php echo $sum_items ?></div>
								<div class="sub-title">Jumlah Item</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<a href="<?php echo base_url().'manage-users' ?>">
					<div class="card blue summary-inline">
						<div class="card-body">
							<i class="icon fa fa-users fa-4x"></i>
							<div class="content">
								<div class="title"><?php echo $sum_users ?></div>
								<div class="sub-title">Jumlah User</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row  no-margin-bottom">
			<div class="col-sm-6 col-xs-12">
				<div class="card card-success">
					<div class="card-header">
						<div class="card-title">
							<div class="title"><i class="fa fa-comments-o"></i> Last Comments</div>
						</div>
						<div class="clear-both"></div>
					</div>
					<div class="card-body no-padding">
						<ul class="message-list">
							<?php $i = 1; foreach($messages as $msg) { 
								$sent = new DateTime("@$msg->id");
								$date = ($msg->id == 0) ? "-" : date_format($sent, 'd M Y');
								?>
							<a href="#">
								<li>
									<!-- <img src="<?php //echo base_url().'assets/admin/img/profile/profile-1.jpg'?>" class="profile-img pull-left"> -->
									<div class="profile-img pull-left"><i class="icon fa fa-user fa-4x"></i></div>
									<div class="message-block">
										<div>
											<span class="username"><?php echo $msg->name;?> / <?php echo $msg->email;?></span> 
											<span class="message-datetime"><?php echo $date;?></span>
										</div>
										<div class="message"><?php echo $msg->message;?></div>
									</div>
								</li>
							</a>
							<?php $i++; if($i > 5) break;?>
							<?php } ?>
							<a href="#" id="message-load-more">
								<li class="text-center load-more">
									<i class="fa fa-refresh"></i> load more..
								</li>
							</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>