<?php $quo = (isset($quotes[0]->quote)) ? $quotes[0]->quote : ' '; $page = explode('/',$_SERVER['REQUEST_URI']);?>
<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Welcome to <?php echo $config->app_name ?></h2>
        <p class="col-12 text-center"><?php echo $quo; ?></p>
    </header>
    
    <div class="tm-paging-links">
        <nav>
            <ul>
                <li class="tm-paging-item">
                    <a href="<?php echo base_url();?>" class="tm-paging-link <?php if(count($page) < 4) echo 'active';?>">All Menus</a>
                </li>
                <?php foreach($categories as $cat){ ?>
                    <li class="tm-paging-item">
                        <a href="<?php echo base_url().'home/'.$cat->id;?>" class="tm-paging-link <?php if($page[3] == $cat->id) echo 'active';?>">
                            <?php echo $cat->name;?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>

    <!-- Gallery -->
    <div class="row tm-gallery" id="gallery" tabindex="-1" style="outline: 0;">
        <!-- gallery page 1 -->
        <div id="tm-gallery-page-pizza" class="tm-gallery-page">
            <?php foreach($items as $item){?>
            <!-- <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"> -->
            <article class="col-12 tm-gallery-item">
                <figure>
                    <img src="<?php echo base_url('assets/public/img/items/'.$item->picture)?>" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title"><?php echo $item->name;?></h4>
                        <p class="tm-gallery-description"><?php echo $item->description;?></p>
                        <p class="tm-gallery-price">Rp. <?php echo $item->price;?></p>
                    </figcaption>
                </figure>
            </article>
            <?php } ?>
        </div> 
    </div>
    <div class="tm-section tm-container-inner">
        <div class="row">
            <div class="col-md-6">
                <figure class="tm-description-figure">
                    <img src="<?php echo base_url('assets/public/img/img-01.jpg')?>" alt="Image" class="img-fluid" />
                </figure>
            </div>
            <div class="col-md-6">
                <div class="tm-description-box"> 
                    <h4 class="tm-gallery-title">Maecenas nulla neque</h4>
                    <p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p>
                    <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
                </div>
            </div>
        </div>
    </div>
</main>