<!-- Main Content -->
<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
            <a href="<?php echo base_url().'manage-item/0' ?>" class="btn btn-info">
                <i class="fa fa-plus-square"></i> Add Items
            </a>
            <a href="<?php echo base_url().'manage-categories' ?>" class="btn btn-primary">
                <i class="fa fa-cubes"></i> Go to Categories
            </a>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="card fresh-color card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">
                                <i class="icon fa fa-cutlery"></i> List Items
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="5%x">No</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th width="15%">Active</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th width="5%x">No</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th width="15%">Active</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1; foreach($items as $item){
                                if($item->picture){
                                    $pic = base_url().'assets/public/img/items/'.$item->picture;
                                } else {
                                    $pic = base_url().'assets/public/img/default/default.png';
                                }
                            ?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-link" data-toggle="modal" data-target="#detail<?php echo (string)$item->id;?>">
                                            <?php echo $item->code;?>
                                        </button>
                                    </td>
                                    <td><?php echo $item->name;?></td>
                                    <td><?php echo $item->price;?></td>
                                    <td>
                                        <?php foreach($categories as $cat){
                                            if ($cat->id == $item->category)
                                                echo $cat->name;
                                        }?>
                                    </td>
                                    <td>
                                        <form id="activeForm" action="<?php echo base_url().'Admin/Items/Active'; ?>" method="post">
                                            <input type="hidden" name="id" value="<?php echo $item->id;?>">
                                            <?php if($item->is_active == 1){?>
                                                <input type="submit" class="btn btn-xs btn-info" name="is_active" value="Aktif">
                                            <?php } else {?>
                                                <input type="submit" class="btn btn-xs btn-default" name="is_active" value="Tidak Aktif">
                                            <?php } ?>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url().'manage-item/'.$item->id; ?>" class="btn btn-xs btn-warning"> <i class="fa fa-edit"></i></a>
                                        <a href="<?php echo base_url().'Admin/Items/Delete/'.$item->id; ?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                
                                <!-- Preview -->
                                <div class="modal fade modal-default" id="detail<?php echo (string)$item->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Detail : <?php echo $item->name;?></h4>  
                                            </div>
                                            <div class="modal-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><img src="<?php echo $pic;?>" width="128" alt="" sizes="" srcset=""></li>
                                                    <li class="list-group-item"><b>Code : </b> <?php echo $item->code;?></li>
                                                    <li class="list-group-item"><b>Price : </b> <?php echo $item->price;?></li>
                                                    <li class="list-group-item">
                                                    <b>Category : </b> 
                                                    <?php foreach($categories as $cat){
                                                        if ($cat->id == $item->category)
                                                            echo $cat->name;
                                                    }?>
                                                    </li>
                                                    <li class="list-group-item"><b>Description : </b> <?php echo $item->description;?></li>
                                                    <li class="list-group-item">
                                                    <?php 
                                                        $created = new DateTime("@$item->created_at");
                                                        $cdate = ($item->created_at == 0) ? "-" : date_format($created, 'd M Y');
                                                        echo '<b>Created At : </b> ' . $cdate . '<b> By : </b>' . $item->created_by;
                                                    ?>
                                                    </li>
                                                    <li class="list-group-item">
                                                    <?php 
                                                        $modified = new DateTime("@$item->modified_at");
                                                        $mdate = ($item->modified_at == 0) ? "-" : date_format($modified, 'd M Y');
                                                        echo '<b>Modified At : </b> ' . $mdate . '<b> By : </b>' . $item->modified_by;
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

