<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body padding-top">
        <?php 
        if(isset($_GET['alert'])){
            if($_GET['alert'] == "sukses"){
                echo "<div class='alert fresh-color alert-success' role='alert'>Informasi Website telah di-update!</div>";
            }
        }?>
        <div class="row">
            <div class="col-xs-12">
                <div class="card fresh-color card-info">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">Website Contents</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php foreach($configure as $conf){ ?>
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="thumbnail no-margin-bottom">
                            <?php 
                            if($config->logo) {
                                $logo = base_url().'assets/public/img/logo/'.$config->logo;
                            } else {
                                $logo = base_url().'assets/public/img/default/default.png';
                            }
                            echo form_open_multipart('Admin/Dashboard/UpdateContent');?>
                            <img src="<?php echo $logo;?>" height="500" class="img-responsive" style="background-color: gray;">
                            <div class="caption">
                                <h3 id="thumbnail-label">Logo</h3>
                                <input type="file" class="form-control" name="logo" id="logo">
                                <p class="help-block"> Ukuran / dimensi 512 x 512 </p>
                                <input type="submit" class="btn btn-success" name="submit" value="Upload Logo">
                            </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="thumbnail no-margin-bottom">
                            <?php 
                            if($config->head_banner) {
                                $head = base_url().'assets/public/img/header/'.$config->head_banner;
                            } else {
                                $head = base_url().'assets/public/img/default/default.png';
                            }
                            echo form_open_multipart('Admin/Dashboard/UpdateContent');?>
                            <img src="<?php echo $head;?>" height="500" class="img-responsive">
                            <div class="caption">
                                <h3 id="thumbnail-label">Banner Header</h3>
                                <input type="file" class="form-control" name="head_banner" id="head_banner">
                                <p class="help-block"> Ukuran / dimensi 1200 x 1200 </p>
                                <input type="submit" class="btn btn-success" name="submit" value="Upload Header">
                            </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="thumbnail no-margin-bottom">
                            <?php 
                            if($config->body_banner) {
                                $body = base_url().'assets/public/img/body/'.$config->body_banner;
                            } else {
                                $body = base_url().'assets/public/img/default/default.png';
                            }echo form_open_multipart('Admin/Dashboard/UpdateContent');?>
                            <img src="<?php echo $body;?>" height="500" class="img-responsive">
                            <div class="caption">
                                <h3 id="thumbnail-label">Banner Body</h3>
                                <input type="file" class="form-control" name="body_banner" id="body_banner">
                                <p class="help-block"> Ukuran / dimensi 1100 x 825 </p>
                                <input type="submit" class="btn btn-success" name="submit" value="Upload Body">
                            </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>            
            <?php } ?>
        </div>
	</div>
</div>