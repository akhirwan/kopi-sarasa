<!-- Add -->
<div class="modal fade modal-info" id="addCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-square"></i> Tambah Category</h4>
            </div>
            <?php echo form_open_multipart('Admin/Categories/Insert');?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="question">Name</label>
                        <input class="form-control" type="text" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="answer">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="5" required></textarea>
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