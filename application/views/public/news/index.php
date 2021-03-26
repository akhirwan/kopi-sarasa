<?php $quo = (isset($quotes[0]->quote)) ? $quotes[0]->quote : ''; ?>
<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">News and Events</h2>
    </header>

    <?php 
    foreach($headlines as $head) {
    if($head->picture != ""){
        $pic = base_url().'assets/public/img/articles/'.$head->picture;
    }else{
        $pic = base_url().'assets/public/img/default/default.png';
    }?>
    <div class="tm-section tm-container-inner">
        <div class="row">
            <div class="col-md-6">
                <figure class="tm-description-figure">
                    <img src="<?php echo $pic;?>" alt="Image" class="img-fluid" />
                </figure>
            </div>
            <div class="col-md-6">
                <div class="tm-description-box"> 
                    <h4 class="tm-gallery-title"><?php echo $head->title;?></h4>
                    <p class="tm-mb-45"><?php if(strlen($head->content) > 350) echo substr($head->content, 0, 247) . '...'?></p>
                    <a href="<?php echo base_url().'news/'.$head->created_at.'-'.$head->slug;?>" class="tm-btn tm-btn-default tm-right">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="tm-container-inner tm-persons">
        <div class="row">
            
        </div>
    </div>
    <div class="tm-container-inner tm-featured-image">
        <div class="row">
            <div class="col-12">
                <div class="placeholder-2">
                    <div class="parallax-window-2" data-parallax="scroll" data-image-src="<?php echo base_url().'assets/public/img/body/'.$config->body_banner;?>"></div>		
                </div>
            </div>
        </div>
    </div>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">News and Event</h2>
        <!-- <p class="col-12 text-center"><?php //echo $quo_c; ?></p> -->
    </header>
    <div class="tm-container-inner tm-features">
        <div class="row">
            <?php foreach($commons as $key => $art) {
                if($art->picture){
                    $pic = base_url().'assets/public/img/articles/'.$art->picture;
                } else {
                    $pic = base_url().'assets/public/img/default/default.png';
                }
                
                if(strlen($art->content) > 100) {
                    $content = substr($art->content, 0, 97) . '...';
                } else {
                    $content = $art->content;
                }
                ?>
            <div class="col-lg-4">
                <div class="tm-feature">
                    <!-- <i class="fas fa-4x fa-pepper-hot tm-feature-icon"></i> -->
                    <img src="<?php echo $pic?>" width="128" alt="" srcset="">
                    <p class="tm-feature-description">
                        <?php echo $content?>
                    </p>
                    <a href="<?php echo base_url().'news/'.$art->created_at.'-'.$art->slug;?>" class="tm-btn tm-btn-primary">Read More</a>
                </div>
            </div>
            <?php if($key >= 2) break; } ?>
        </div>
        <a href="<?php echo base_url().'news';?>" class="block">Read All News</a>
    </div>
</main>