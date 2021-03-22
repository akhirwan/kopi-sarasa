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
                            <div class="title"><i class="fa fa-users"></i> Set Role</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo form_open_multipart('Admin/Users/ActionRole');?>
                        <div class="form-horizontal">
                            <input type="hidden" name="id" value="<?php echo $credential[0]->xid;?>">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $credential[0]->username;?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password">
                                    <small>kosongkan jika tidak ada perubahan</small>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Re-Type Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="re-password" name="re-password">
                                    <small>kosongkan jika tidak ada perubahan</small>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Role</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="level" id="level">
                                    <?php if($credential[0]->level == 'user') {
                                        echo '<option value="user" selected>User</option>';
                                        echo '<option value="admin">Adminstrator</option>';
                                    } else {
                                        echo '<option value="admin" selected>Adminstrator</option>';
                                        echo '<option value="user">User</option>';
                                    }?> 
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="<?php echo base_url().'manage-users' ?>" class="btn btn-default">Cancel</a>
                                    <input type="submit" class="btn btn-success" name="submit" value="Submit">
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