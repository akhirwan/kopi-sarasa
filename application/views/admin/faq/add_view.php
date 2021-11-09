<!-- Add -->
<div class="modal fade modal-info" id="addFAQ" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-square"></i> Tambah FAQ</h4>
            </div>
            <?php echo form_open_multipart('Admin/Faq/Insert');?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="question">Question</label>
                        <textarea class="form-control" name="question" id="question" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <textarea class="form-control" name="answer" id="answer" rows="5" required></textarea>
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