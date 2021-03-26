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
                                    <th width="15%">Headlines</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th width="5%x">No</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th width="15%">Status</th>
                                    <th width="15%">Headlines</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1; foreach($articles as $art) {?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $art->title;?></td>
                                    <td><?php echo $art->slug;?></td>
                                    <td>
                                        <form id="activeForm" action="<?php echo base_url().'Admin/Articles/Publish'; ?>" method="post">
                                            <input type="hidden" name="id" value="<?php echo $art->id;?>">
                                            <?php if($art->is_published == 1){?>
                                                <input type="submit" class="btn btn-xs btn-info" name="is_published" value="Published" onclick="return confirm('Masukan ke draft?');">
                                            <?php } else {?>
                                                <input type="submit" class="btn btn-xs btn-default" name="is_published" value="Draft" onclick="return confirm('Terbitkan artikel ini?');">
                                            <?php } ?>
                                        </form>
                                    </td>
                                    <td>
                                        <form id="activeForm" action="<?php echo base_url().'Admin/Articles/Headlines'; ?>" method="post">
                                            <input type="hidden" name="id" value="<?php echo $art->id;?>">
                                            <?php if($art->display == 1){?>
                                                <input type="submit" class="btn btn-xs btn-success" name="display" value="Headlines" onclick="return confirm('Hapus dari headlines?');">
                                            <?php } else {?>
                                                <input type="submit" class="btn btn-xs btn-default" name="display" value="Common" onclick="return confirm('Jadikan headlines?');">
                                            <?php } ?>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url().'manage-article/'.$art->id;?>" class="btn btn-xs btn-warning"><i class='fa fa-edit'></i></a>
                                        <a href="<?php echo base_url().'Admin/Articles/Delete/'.$art->id;?>" class="btn btn-xs btn-danger" onclick="return confirm('Hapus artikel ini?');"><i class='fa fa-trash'></i></a>
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

