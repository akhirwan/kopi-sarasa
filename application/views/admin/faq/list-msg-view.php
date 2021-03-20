<!-- Add -->
<div class="modal fade modal-primary" id="viewMsg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-comments"></i> Data Komentar Masuk</h4>
            </div>
            <div class="modal-body">
                <table class="datatable table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Sender</th>
                            <th>Comments</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th width="5%">No</th>
                            <th>Sender</th>
                            <th>Comments</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $i = 1; foreach($messages as $msg){?>
                        <?php 
                            $sent = new DateTime("@$msg->id");
                            $date = ($msg->id == 0) ? "-" : date_format($sent, 'd M Y');
                        ?>
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td>
                                <b>Sent at : </b><?php echo $date;?><br>
                                <b>Name : </b><?php echo $msg->name;?><br>
                                <b>Email : </b><?php echo $msg->email;?><br>
                            </td>
                            <td><?php echo $msg->message;?></td>
                            <td>
                                <a href="<?php echo base_url().'Admin/Faq/DelMsg/'.$msg->id; ?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>