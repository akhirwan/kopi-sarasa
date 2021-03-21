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
                            <input type="hidden" name="id" value="<?php echo $users[0]->uid;?>">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $users[0]->email;?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="email" name="email">
                                    <small>kosongkan jika tidak ada perubahan</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Role</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="level" id="level">
                                        <option value="admin">Adminstrator</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <div class="radio3 radio-check radio-success radio-inline">
                                        <input type="radio" id="radio4" name="status" value="1" checked="">
                                        <label for="radio4">
                                            Aktif
                                        </label>
                                    </div>
                                    <div class="radio3 radio-check radio-danger radio-inline">
                                        <input type="radio" id="radio5" name="status" value="0">
                                        <label for="radio5">
                                            Tidak Aktif
                                        </label>
                                    </div>
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