<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body padding-top">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<a href="<?php //echo base_url().'admin/articles' ?>">
					<div class="card red summary-inline">
						<div class="card-body">
							<i class="icon fa fa-newspaper-o fa-4x"></i>
							<div class="content">
								<div class="title"><?php //echo $sum_articles ?></div>
								<div class="sub-title">Jumlah Artikel</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<a href="<?php //echo base_url().'admin/categories' ?>">
					<div class="card yellow summary-inline">
						<div class="card-body">
							<i class="icon fa fa-cutlery fa-4x"></i>
							<div class="content">
								<div class="title"><?php //echo $sum_categories ?></div>
								<div class="sub-title">Jumlah Item</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<a href="<?php //echo base_url().'admin/users' ?>">
					<div class="card blue summary-inline">
						<div class="card-body">
							<i class="icon fa fa-users fa-4x"></i>
							<div class="content">
								<div class="title"><?php //echo $sum_users ?></div>
								<div class="sub-title">Jumlah User</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>