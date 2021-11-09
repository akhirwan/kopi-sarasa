<?php $quo = (isset($quotes[0]->quote)) ? $quotes[0]->quote : ''; ?>
<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">About <?php echo $config->app_name ?></h2>
        <p class="col-12 text-center"><?php echo $quo; ?></p>
    </header>

    <div class="tm-container-inner tm-persons">
        <div class="row">
        <?php $i = 1; foreach($users as $user){?>
            <article class="col-lg-6">
                <figure class="tm-person">
                    <img src="<?php echo base_url('assets/public/img/users/'.$user->picture)?>" alt="Image" class="img-fluid tm-person-img" />
                    <figcaption class="tm-person-description">
                        <h4 class="tm-person-name"><?php echo $user->name;?></h4>
                        <p class="tm-person-title"><?php echo $user->job_position;?></p>
                        <p class="tm-person-about"><?php echo $user->job_desc;?></p>
                        <div>
                            <a href="<?php echo $user->link_fb;?>" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
                            <a href="<?php echo $user->link_tw;?>" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
                            <a href="<?php echo $user->link_ig;?>" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
                            <a href="<?php echo $user->link_yt;?>" class="tm-social-link"><i class="fab fa-youtube tm-social-icon"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </article>
        <?php $i++; if($i > 4) break;?>
        <?php } ?>
        </div>
    </div>
    <div class="tm-container-inner tm-featured-image">
        <div class="row">
            <div class="col-12">
                <div class="placeholder-2">
                    <div class="parallax-window-2" data-parallax="scroll" data-image-src="<?php echo (isset($config->body_banner)) ? base_url().'assets/public/img/body/'.$config->body_banner : '';?>"></div>		
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
            <?php foreach($articles as $key => $art) {
                if($art->picture){
                    $pic = base_url().'assets/public/img/articles/'.$art->picture;
                } else {
                    $pic = base_url().'assets/public/img/default/default.png';
                }
                
                if(strlen($art->content) > 50) {
                    $content = substr($art->content, 0, 47) . '...';
                } else {
                    $content = $art->content;
                }
                ?>
            <div class="col-lg-4">
                <div class="tm-feature">
                    <!-- <i class="fas fa-4x fa-pepper-hot tm-feature-icon"></i> -->
                    <img src="<?php echo $pic?>" width="128" alt="" srcset="">
                    <p class="tm-feature-description">
                        <?php echo $art->title?>
                    </p>
                    <a href="<?php echo base_url().'news/'.$art->created_at.'-'.$art->slug;?>" class="tm-btn tm-btn-primary">Read More</a>
                </div>
            </div>
            <?php if($key >= 2) break; } ?>
        </div>
        <a href="<?php echo base_url().'news';?>" class="block">Read All News</a>
    </div>
    <?php if(isset($config->desc_banner)){?>
    <div class="tm-container-inner tm-history">
        <div class="row">
            <div class="col-12">
                <div class="tm-history-inner">
                    <?php
                    if($config->desc_banner){
                        $desc = base_url().'assets/public/img/about/'.$config->desc_banner;
                    } else {
                        $desc = base_url().'assets/public/img/default/default.png';
                    }
                    ?>
                    <img src="<?php echo $desc;?>" alt="Image" class="img-fluid tm-history-img" />
                    <div class="tm-history-text"> 
                        <h4 class="tm-history-title"><?php echo $config->desc_title; ?></h4>
                        <p class="tm-mb-p">
                        <?php
                            if(strlen($config->description) > 350) {
                                echo substr($config->description, 0, 347) . '...';
                            } else {
                                echo $config->description;
                            }
                        ?>
                        </p><br>
                        <a href="<?php echo base_url().'news/d2ViLXByb2ZpbGU-'.str_replace(' ', '-', strtolower($config->desc_title));?>" class="tm-btn tm-btn-default">Read More</a>
                    </div>
                </div>	
            </div>
        </div>
    </div>
    <?php } ?>
</main>