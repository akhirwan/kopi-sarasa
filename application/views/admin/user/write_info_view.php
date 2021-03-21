<?php $getId = (isset($id)) ? $id : '';?>
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
                            <div class="title"><i class="fa fa-users"></i> Set Informations</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo form_open_multipart('Admin/Users/ActionInfo');?>
                        <div class="form-horizontal">
                            <input type="hidden" name="id" value="<?php echo $getId;?>">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Job Position</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="job_position" name="job_position" value="<?php echo $jobPost;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Job Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="job_desc" name="job_desc" rows="3" required><?php echo $jobDesc;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Joined At</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="joined_at" name="joined_at" value="<?php echo $joined;?>" required>
                                    <?php ($joined == 0000-00-00) ? '' : '<p>'.$joined.'</p>';?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="address" name="address" rows="3" required><?php echo $address;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Facebook Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="link_fb" name="link_fb" value="<?php echo $facebook;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Twitter Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="link_tw" name="link_tw" value="<?php echo $twitter;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Instagram Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="link_ig" name="link_ig" value="<?php echo $instagram;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Youtube Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="link_yt" name="link_yt" value="<?php echo $youtube;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="<?php echo base_url().'manage-users' ?>" class="btn btn-default">Cancel</a>
                                    <input type="submit" class="btn btn-success" name="submit" value="Submit">
                                    <input type="submit" class="btn btn-success" name="submit" value="Submit and Upload Image">
                                    <input type="submit" class="btn btn-success" name="submit" value="Submit and Set Credential">
                                </div>
                            </div>
                        </div>                        
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>