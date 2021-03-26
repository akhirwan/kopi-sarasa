<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body padding-top">
        <div class="row">
            <div class="col-xs-12">
                <div class="card fresh-color card-info">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">About the Website</div>
                        </div>
                    </div>
                    <div class="card-body">
                    <?php 
                        if(isset($_GET['alert'])){
                            if($_GET['alert'] == "sukses"){
                                echo "<div class='alert fresh-color alert-success' role='alert'>Informasi Website telah di-update!</div>";
                            }
                        }

                        foreach($configure as $conf){
                        echo form_open_multipart('Admin/Dashboard/UpdateAbout');
                    ?>
                        <div class="form-group">
                            <label for="logo">Picture</label>
                            <input type="file" id="desc_banner" name="desc_banner"><br>
                            <img src="<?php echo base_url().'assets/public/img/about/'.$conf->desc_banner; ?>" width="120" alt="" srcset="" style="background-color: gray;">
                            <p class="help-block">Dimensi 480 x 240</p>
                        </div> 
                        <div class="form-group">
                            <label for="desc_title">Title</label>
                            <input type="text" class="form-control" id="desc_title" name="desc_title" value="<?php echo $conf->desc_title; ?>">
                            <?php echo form_error('desc_title');?>
                        </div> 
                        <div class="form-group">
                            <label for="description">About</label>
                            <textarea class="form-control" id="description" name="description" rows="3"><?php echo $conf->description; ?></textarea>
                            <?php echo form_error('description');?>
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Submit</button>
                    <?php 
                        echo form_close();
                    }                     
                    ?>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<script>
    tinymce.init({
        selector: 'textarea',
        theme: "modern",
        height: 220,
        menubar: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code help wordcount'
        ],
        toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']
    });
</script>