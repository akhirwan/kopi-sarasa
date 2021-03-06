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
                        <?php echo form_open_multipart('Admin/Articles/Action');?>
                        <div class="form-horizontal">
                            <input type="hidden" name="id" value="<?php echo $getId;?>">
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $title;?>" onkeyup="autofill()" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slug" class="col-sm-2 control-label">Slug</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="slug" name="slug" value="<?php echo $slug;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content" class="col-sm-2 control-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="content" name="content" rows="3"><?php echo $content;?></textarea>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="display" class="col-sm-2 control-label">Display At</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="display" id="display">  
                                        <option value="1">Head Line</option>
                                        <option value="0">Reguler</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="picture" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="picture" name="picture">
                                    <img src="<?php echo 'assets/public/img/articles/'.$picture;?>" alt="" srcset="">
                                    <small>Ukuran 480 x 280</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="<?php echo base_url().'manage-articles'?>" class="btn btn-default" onclick="return confirm('Batalkan menambah / memperbaharui artikel ini?');">Cancel</a>
                                    <input type="submit" class="btn btn-warning" name="is_published" value="Draft" onclick="return confirm('Simpan artikel ini?');">
                                    <input type="submit" class="btn btn-success" name="is_published" value="Publish"onclick="return confirm('Simpan dan terbitkan artikel ini?');">
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

<script>
function autofill() {
    var title = $('#title').val();

    title = title.replace(/[^a-zA-Z0-9]/g, "-");
    // title = title.replace(/ /g, "-");
    title = title.toLowerCase()

    $('#slug').val(title);
}

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