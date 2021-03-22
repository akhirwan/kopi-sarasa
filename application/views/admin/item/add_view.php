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
                            <div class="title"><i class="fa fa-cutlery"></i> Manage Item</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo form_open_multipart('Admin/Items/Action');?>
                        <div class="form-horizontal">
                            <input type="hidden" name="id" value="<?php echo $getId;?>">
                            <div class="form-group">
                                <label for="code" class="col-sm-2 control-label">Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="code" name="code" value="<?php echo $code;?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price" class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $price;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category" class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category" id="category">  
                                        <option value="<?php echo $category?>">
                                        <?php foreach($categories as $cat){
                                            if ($cat->id == $category)
                                                echo $cat->name;
                                        }?>
                                        </option>
                                        <?php foreach($categories as $cat){?>
                                            <option <?php if(set_value('category') == $cat->id){echo "selected='selected'";}?> value="<?php echo $cat->id; ?>">
                                                <?php echo $cat->name; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="description" name="description" rows="3"><?php echo $description;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="picture" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="picture" name="picture">
                                    <img src="<?php echo 'assets/public/img/items/'.$picture;?>" alt="" srcset="">
                                    <small>Ukuran 250 x 250</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="<?php echo base_url().'manage-items' ?>" class="btn btn-default">
                                        <i class="fa fa-sign-out"></i> Cancel
                                    </a>
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-paper-plane"></i> Submit
                                    </button>
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