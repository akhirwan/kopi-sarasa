<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body padding-top">
        <div class="row">
            <div class="col-xs-12">
                <div class="card fresh-color card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">Website Information</div>
                        </div>
                    </div>
                    <div class="card-body">
                    <?php 
                        if(isset($_GET['alert'])){
                            if($_GET['alert'] == "sukses"){
                                echo "<div class='alert fresh-color alert-success' role='alert'>Konfigurasi telah di-update!</div>";
                            }
                        }

                        foreach($configure as $conf){
                        echo form_open_multipart('Admin/Dashboard/Update');
                    ?>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="app_name">Name</label>
                                    <input type="text" class="form-control" id="app_name" name="app_name" value="<?php echo $conf->app_name; ?>">
                                    <?php echo form_error('app_nama');?>
                                </div>
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" class="form-control" id="company" name="company" value="<?php echo $conf->company; ?>">
                                    <?php echo form_error('company');?>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" id="address" name="address" rows="3"><?php echo $conf->address; ?></textarea>
                                    <?php echo form_error('address');?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $conf->email; ?>">
                                    <?php echo form_error('email');?>
                                </div>
                                <div class="form-group">
                                    <label for="phone1">Phone 1</label>
                                    <input type="text" class="form-control" id="phone1" name="phone1" value="<?php echo $conf->phone1; ?>">
                                    <?php echo form_error('phone1');?>
                                </div>
                                <div class="form-group">
                                    <label for="phone2">Phone 2</label>
                                    <input type="text" class="form-control" id="phone2" name="phone2" value="<?php echo $conf->phone2; ?>">
                                    <?php echo form_error('phone2');?>
                                </div>                                                          
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="link_fb">Facebook Link</label>
                                    <input type="text" class="form-control" id="link_fb" name="link_fb" value="<?php echo $conf->link_fb; ?>">
                                    <?php echo form_error('link_fb');?>
                                </div>
                                <div class="form-group">
                                    <label for="link_tw">Twitter Link</label>
                                    <input type="text" class="form-control" id="link_tw" name="link_tw" value="<?php echo $conf->link_tw; ?>">
                                    <?php echo form_error('link_tw');?>
                                </div>
                                <div class="form-group">
                                    <label for="link_ig">Instagram Link</label>
                                    <input type="text" class="form-control" id="link_ig" name="link_ig" value="<?php echo $conf->link_ig; ?>">
                                    <?php echo form_error('link_ig');?>
                                </div>
                                <div class="form-group">
                                    <label for="link_yt">Youtube Link</label>
                                    <input type="text" class="form-control" id="link_yt" name="link_yt" value="<?php echo $conf->link_yt; ?>">
                                    <?php echo form_error('link_yt');?>
                                </div>
                                <div class="form-group">
                                    <label for="map">Map</label>
                                    <textarea class="form-control" id="map" name="map" rows="3"><?php echo $conf->map; ?></textarea>
                                    <?php echo form_error('map');?>
                                </div>
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" id="logo" name="logo"><br>
                                    <img src="<?php echo base_url().'assets/public/img/logo/'.$conf->logo; ?>" width="48" alt="" srcset="" style="background-color: gray;">
                                    <p class="help-block"><?php echo $conf->logo; ?></p>
                                </div>  
                            </div>
                            <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Submit</button>
                    <?php 
                        echo form_close();
                    }                     
                    ?>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>