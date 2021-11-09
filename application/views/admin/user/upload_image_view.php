<!-- Main Content -->
<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
            <!-- <span class="title">Form UI Kits</span>
            <div class="description">A ui elements use in form, input, select, etc.</div> -->
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="card fresh-color card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title"><i class="fa fa-users"></i> Set Image</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo form_open_multipart('Admin/Users/ActionUpload');?>
                             <div class="alert alert-info" role="alert">
                                Ukuran gambar dianjurkan (P x L) <strong>240 x 160</strong>.
                            </div>
                            <input type="hidden" name="id" value="<?php echo $users[0]->uid;?>">
                            <div class="form-group">
                                <label for="name">Upload <?php echo $users[0]->name;?> Image</label>
                                <input type="file" class="form-control" id="picture" name="picture">
                                <?php $pic = ($users[0]->picture) ? base_url().'assets/public/img/users/'.$users[0]->picture : base_url().'assets/public/img/default/default.png' ?>
                            </div>
                            <div class="form-group">
                                <img src="<?php echo $pic ?>" width="250" alt="" srcset="">
                            </div>
                            <div class="form-group">
                                <a href="<?php echo base_url().'manage-users' ?>" class="btn btn-default">Cancel</a>
                                <input type="submit" class="btn btn-success" name="submit" value="Submit">
                                <input type="submit" class="btn btn-success" name="submit" value="Submit and View Image">
                            </div>                  
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>