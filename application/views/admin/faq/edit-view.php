<!-- Edit -->
<div class="modal fade modal-warning" id="editFAQ<?php echo (string)$faq->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo $faq->question;?>
                <?php echo $faq->answer;?>
            </div>
        </div>
    </div>
</div>