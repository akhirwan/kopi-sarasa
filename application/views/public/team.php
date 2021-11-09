<?php $quo = (isset($quotes[0]->quote)) ? $quotes[0]->quote : ''; ?>
<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Big Family of <?php echo $config->app_name ?></h2>
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
                    <div class="parallax-window-2" data-parallax="scroll" data-image-src="<?php echo (isset($config->body_banner)) ? base_url().'assets/public/img/body/'.$config->body_banner : '';?>"></div>		
                </div>
            </div>
        </div>
    </div>
</main>