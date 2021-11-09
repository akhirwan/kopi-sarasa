<!-- Main Content -->
<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
            <a href="<?php echo base_url().'manage-user-info/0' ?>" class="btn btn-info">
                <i class="fa fa-plus-square"></i> Add User
            </a>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="card fresh-color card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">
                                <i class="icon fa fa-users"></i> List Users
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="5%x">No</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th width="15%">Active</th>
                                    <th width="15%">Preview</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th width="5%x">No</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th width="15%">Active</th>
                                    <th width="15%">Preview</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1; foreach($users as $user) {
                                    if($user->picture){
                                        $pic = base_url().'assets/public/img/users/'.$user->picture;
                                    } else {
                                        $pic = base_url().'assets/public/img/default/default.png';
                                    }?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $user->name;?></td>
                                    <td><?php echo $user->job_position;?></td>
                                    <td>
                                        <form id="activeForm" action="<?php echo base_url().'Admin/Users/Active'; ?>" method="post">
                                            <input type="hidden" name="id" value="<?php echo $user->uid;?>">
                                            <?php if($user->is_active == 1){?>
                                                <input type="submit" class="btn btn-xs btn-info" name="is_active" value="Aktif">
                                            <?php } else {?>
                                                <input type="submit" class="btn btn-xs btn-default" name="is_active" value="Tidak Aktif">
                                            <?php } ?>
                                        </form>    
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#detail<?php echo (string)$user->uid;?>">
                                            <i class="fa fa-search"></i>
                                            View Profile
                                        </button>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url().'manage-user-role/'.$user->uid; ?>" class="btn btn-xs btn-success"> <i class="fa fa-user-secret"></i></a>
                                        <a href="<?php echo base_url().'manage-user-upload/'.$user->uid; ?>" class="btn btn-xs btn-info"> <i class="fa fa-image"></i></a>
                                        <a href="<?php echo base_url().'manage-user-info/'.$user->uid; ?>" class="btn btn-xs btn-warning"> <i class="fa fa-edit"></i></a>
                                        <a href="<?php echo base_url().'Admin/Users/Delete/'.$user->uid; ?>" class="btn btn-xs btn-danger"> <i class="fa fa-user-times"></i></a>
                                    </td>
                                </tr>
                                
                                <!-- Preview -->
                                <div class="modal fade modal-default" id="detail<?php echo (string)$user->uid;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel"><?php echo $user->name;?>'s Information</h4>  
                                            </div>
                                            <div class="modal-body">
                                                <div class="thumbnail">
                                                    <img src="<?php echo $pic;?>" width="128" alt="" sizes="" srcset="" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 id="thumbnail-label"><?php echo $user->job_position?></h3>
                                                        <p><?php echo $user->job_desc?></p>
                                                        <h4 id="thumbnail-label">
                                                            <?php 
                                                                if($user->joined_at == 0000-00-00){
                                                                    echo '-';
                                                                } else {
                                                                    $date=date_create($user->joined_at);
                                                                    echo date_format($date,"d M Y");
                                                                }
                                                                    ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <li class="list-group-item"><b>Email : </b> <?php echo $user->email;?></li>
                                                    <li class="list-group-item"><b>Phone : </b> <?php echo $user->phone;?></li>
                                                    <li class="list-group-item"><b>Address : </b> <?php echo $user->address;?></li>
                                                    <li class="list-group-item">
                                                        <b>Status : </b> 
                                                        <?php 
                                                            $active = ($user->is_active == 1) ? 'Aktif' : 'Tidak Aktif';
                                                            echo $active;?>
                                                    </li>
                                                    <li class="list-group-item">    
                                                        <b>Links : </b> <br>
                                                        <i class="fa fa-facebook-square"></i> <a href="<?php echo $user->link_fb;?>"><?php echo $user->link_fb;?></a> <br>
                                                        <i class="fa fa-instagram"></i> <a href="<?php echo $user->link_ig;?>"><?php echo $user->link_ig;?></a> <br>
                                                        <i class="fa fa-twitter"></i> <a href="<?php echo $user->link_fb;?>"><?php echo $user->link_fb;?></a> <br>
                                                        <i class="fa fa-youtube-play"></i> <a href="<?php echo $user->link_yt;?>"><?php echo $user->link_yt;?></a> <br>
                                                    </li>
                                                    <li class="list-group-item">
                                                    <?php 
                                                        $created = new DateTime("@$user->created_at");
                                                        $cdate = ($user->created_at == 0) ? "-" : date_format($created, 'd M Y');
                                                        echo '<b>Created At : </b> ' . $cdate . '<b> By : </b>' . $user->created_by;
                                                    ?>
                                                    </li>
                                                    <li class="list-group-item">
                                                    <?php 
                                                        $modified = new DateTime("@$user->modified_at");
                                                        $mdate = ($user->modified_at == 0) ? "-" : date_format($modified, 'd M Y');
                                                        echo '<b>Modified At : </b> ' . $mdate . '<b> By : </b>' . $user->modified_by;
                                                    ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

