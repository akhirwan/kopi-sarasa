<!-- Main Content -->
<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
            <!-- <a href="<?php echo base_url().'manage-categories' ?>" class="btn btn-info">
                <i class="fa fa-plus-square"></i> Add Category
            </a> -->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addCat">
                <i class="fa fa-plus-square"></i> Add Category
            </button>
        </div>
        <?php $this->load->view('admin/category/add_view');?>
        <div class="row">
            <div class="col-xs-12">
                <div class="card fresh-color card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">
                                <i class="icon fa fa-cubes"></i> List Categories
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="5%x">No</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Created</th>
                                    <th>Modified</th>
                                    <th width="15%">Active</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th width="5%x">No</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Created</th>
                                    <th>Modified</th>
                                    <th width="15%">Active</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1; foreach($categories as $cat){ ?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $cat->name;?></td>
                                    <td><?php echo $cat->description;?></td>
                                    <td>
                                    <?php 
                                        $created = new DateTime("@$cat->created_at");
                                        $cdate = ($cat->created_at == 0) ? "-" : date_format($created, 'd M Y');
                                        echo '<b>At : </b> ' . $cdate . '<br/><b> By : </b>' . $cat->created_by;
                                    ?>    
                                    </td>
                                    <td>
                                    <?php 
                                        $modified = new DateTime("@$cat->modified_at");
                                        $mdate = ($cat->modified_at == 0) ? "-" : date_format($modified, 'd M Y');
                                        echo '<b>At : </b> ' . $mdate . '<br/><b> By : </b>' . $cat->modified_by;
                                    ?>    
                                    </td>
                                    <td>
                                        <form id="activeForm" action="<?php echo base_url().'Admin/Categories/Active'; ?>" method="post">
                                            <input type="hidden" name="id" value="<?php echo $cat->id;?>">
                                            <?php if($cat->is_active == 1){?>
                                                <input type="submit" class="btn btn-xs btn-info" name="is_active" value="Aktif">
                                            <?php } else {?>
                                                <input type="submit" class="btn btn-xs btn-default" name="is_active" value="Tidak Aktif">
                                            <?php } ?>
                                        </form>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editCat<?php echo (string)$cat->id;?>">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <a href="<?php echo base_url().'Admin/Categories/Delete/'.$cat->id; ?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                
                                <!-- Edit -->
                                <div class="modal fade modal-warning" id="editCat<?php echo (string)$cat->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-edit"></i> Ubah FAQ</h4>  
                                            </div>
                                            <?php echo form_open_multipart('Admin/Categories/Update');?>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" id="id" value="<?php echo $cat->id;?>">
                                                <div class="form-group">
                                                    <label for="question">Name</label>
                                                    <input class="form-control" type="text" name="name" id="name" value="<?php echo $cat->name;?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="answer">Description</label>
                                                    <textarea class="form-control" name="description" id="description" rows="5" required><?php echo $cat->description;?></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        <?php echo form_close();?>              
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

