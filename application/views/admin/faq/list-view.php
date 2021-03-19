<!-- Main Content -->
<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addFAQ">
                <i class="fa fa-plus-square"></i> Add FAQ
            </button>
        </div>
        <?php $this->load->view('admin/faq/add-view');?>
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
                                    <th width="15%">Date Created</th>
                                    <th width="15%">Active</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Questions</th>
                                    <th>Answers</th>
                                    <th>Date Created</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1; foreach($faqs as $faq){?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $faq->question;?></td>
                                    <td><?php echo $faq->answer;?></td>
                                    <td>
                                        <?php 
                                            $created = new DateTime("@$faq->created_at");
                                            $date = ($faq->created_at == 0) ? "-" : date_format($created, 'd M Y');
                                            echo $date;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $active = ($faq->is_active == 1) ? "Aktif" : "Tidak Aktif";
                                            echo $active;
                                        ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editFAQ<?php echo (string)$faq->id;?>">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <a href="<?php echo base_url().'Admin/Faq/Delete/'.$faq->id; ?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                                <!-- <?php //$this->load->view('admin/faq/edit-view');?> -->
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
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

