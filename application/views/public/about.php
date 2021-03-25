<?php $quo = (isset($quotes[0]->quote)) ? $quotes[0]->quote : ''; ?>
<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">About <?php echo $config->app_name ?></h2>
        <p class="col-12 text-center"><?php echo $quo; ?></p>
    </header>

    <div class="tm-container-inner tm-persons">
        <div class="row">
        <?php foreach($users as $user){?>
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
        <?php } ?>
        </div>
    </div>
    <div class="tm-container-inner tm-featured-image">
        <div class="row">
            <div class="col-12">
                <div class="placeholder-2">
                    <div class="parallax-window-2" data-parallax="scroll" data-image-src="<?php echo base_url('assets/public/img/about-05.jpg')?>"></div>		
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
                }?>
            <div class="col-lg-4">
                <div class="tm-feature">
                    <!-- <i class="fas fa-4x fa-pepper-hot tm-feature-icon"></i> -->
                    <img src="<?php echo $pic?>" width="128" alt="" srcset="">
                    <p class="tm-feature-description">
                        <?php if(strlen($art->content) > 100) echo substr($art->content, 0, 97) . '...'?>
                    </p>
                    <a href="<?php echo base_url().'news/'.$art->created_at.'-'.$art->slug;?>" class="tm-btn tm-btn-primary">Read More</a>
                </div>
            </div>
            <?php if($key >= 2) break; } ?>
        </div>
        <a href="<?php echo base_url().'news';?>" class="block">Read All News</a>
    </div>
    <div class="tm-container-inner tm-history">
        <div class="row">
            <div class="col-12">
                <div class="tm-history-inner">
                    <img src="<?php echo base_url('assets/public/img/about-06.jpg')?>" alt="Image" class="img-fluid tm-history-img" />
                    <div class="tm-history-text"> 
                        <h4 class="tm-history-title">History of our restaurant</h4>
                        <p class="tm-mb-p">Sed ligula risus, interdum aliquet imperdiet sit amet, auctor sit amet justo. Maecenas posuere lorem id augue interdum vehicula. Praesent sed leo eget libero ultricies congue.</p>
                        <p>Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a href="https://templatemo.com/contact">contact TemplateMo</a> for additional permissions about our templates. Thank you.</p>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</main>