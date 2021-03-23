<!-- Main Content -->
<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
            <a href="<?php echo base_url().'manage-article/0' ?>" class="btn btn-info">
                <i class="fa fa-plus-square"></i> Add Article
            </a>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="card fresh-color card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">
                                <i class="icon fa fa-newspaper-o"></i> List Articles
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="5%x">No</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th width="15%">Status</th>
                                    <th width="15%">Preview</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th width="5%x">No</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th width="15%">Status</th>
                                    <th width="15%">Preview</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1; foreach($articles as $art) {?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $art->title;?></td>
                                    <td><?php echo $art->slug;?></td>
                                    <td><?php echo $art->is_published?></td>
                                    <td><a href="<?php echo base_url().'manage-articles';?>" class="btn btn-xs btn-primary">Preview</a></td>
                                    <td>
                                        <a href="<?php echo base_url().'manage-article/'.$art->id;?>" class="btn btn-xs btn-primary">Edit</a>
                                        <a href="<?php echo base_url().'Admin/Articles/'.$art->id;?>" class="btn btn-xs btn-primary">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

