<!-- Main Content -->
<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addFAQ">
                <i class="fa fa-plus-square"></i> Add FAQ
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewMsg">
                <i class="fa fa-info-circle"></i> View Messages
            </button>
        </div>
        <?php $this->load->view('admin/faq/add-view');?>
        <?php $this->load->view('admin/faq/list-msg-view');?>
        <div class="row">
            <div class="col-xs-12">
                <div class="card fresh-color card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">
                                <i class="icon fa fa-question-circle"></i> Frequently Ask Questions (FAQ)
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="5%x">No</th>
                                    <th>Questions</th>
                                    <th>Answers</th>
                                    <th width="15%">Created At</th>
                                    <th width="15%">Modifed At</th>
                                    <th width="15%">Active</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Questions</th>
                                    <th>Answers</th>
                                    <th>Created At</th>
                                    <th>Modifed At</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1; foreach($faqs as $faq){?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td>
                                        <?php 
                                            $question = (strlen($faq->question) > 50) ? substr($faq->question, 0, 47) . '...' : $faq->question;
                                            echo $question;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $answer = (strlen($faq->answer) > 50) ? substr($faq->answer, 0, 47) . '...' : $faq->answer;
                                            echo $answer;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $created = new DateTime("@$faq->created_at");
                                            $cdate = ($faq->created_at == 0) ? "-" : date_format($created, 'd M Y');
                                            echo $cdate;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $modified = new DateTime("@$faq->modified_at");
                                            $mdate = ($faq->modified_at == 0) ? "-" : date_format($modified, 'd M Y');
                                            echo $mdate;
                                        ?>
                                    </td>
                                    <td>
                                        <form id="activeForm" action="<?php echo base_url().'Admin/Faq/Active'; ?>" method="post">
                                            <input type="hidden" name="id" value="<?php echo $faq->id;?>">
                                            <?php if($faq->is_active == 1){?>
                                                <input type="submit" class="btn btn-xs btn-info" name="is_active" value="Aktif">
                                            <?php } else {?>
                                                <input type="submit" class="btn btn-xs btn-default" name="is_active" value="Tidak Aktif">
                                            <?php } ?>
                                        </form>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editFAQ<?php echo (string)$faq->id;?>">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <a href="<?php echo base_url().'Admin/Faq/Delete/'.$faq->id; ?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                
                                <!-- Edit -->
                                <div class="modal fade modal-warning" id="editFAQ<?php echo (string)$faq->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-edit"></i> Ubah FAQ</h4>  
                                            </div>
                                            <?php echo form_open_multipart('Admin/Faq/Update');?>
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" value="<?php echo $faq->id;?>">
                                                    <div class="form-group">
                                                        <label for="question">Question</label>
                                                        <textarea class="form-control" name="question" id="question" rows="5" required><?php echo $faq->question;?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="answer">Answer</label>
                                                        <textarea class="form-control" name="answer" id="answer" rows="5" required><?php echo $faq->answer;?></textarea>
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

