<?php $quo = (isset($quotes[0]->quote)) ? $quotes[0]->quote : ' '; $page = explode('/',$_SERVER['PHP_SELF']);?>
<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Welcome to <?php echo $config->app_name ?></h2>
        <p class="col-12 text-center"><?php echo $quo; ?></p>
    </header>
    
    <div class="tm-paging-links">
        <nav>
            <ul>
                <li class="tm-paging-item">
                    <a href="<?php echo base_url();?>" class="tm-paging-link active">All Menus</a>
                </li>
                <?php foreach($categories as $cat){ ?>
                    <li class="tm-paging-item">
                        <a href="<?php echo base_url().'home/'.$cat->id;?>" class="tm-paging-link">
                            <?php echo $cat->name;?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>

    <!-- Gallery -->
    <div class="row tm-gallery">
        <!-- gallery page 1 -->
        <div id="tm-gallery-page-pizza" class="tm-gallery-page">
            <?php foreach($items as $key => $item){?>
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
            <?php //if($key >= 7) break; ?>
            <?php } ?>
        </div> 
    </div>
    <?php if($headlines[0]->picture != ""){
        $pic = base_url().'assets/public/img/articles/'.$headlines[0]->picture;
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
                    <h4 class="tm-gallery-title"><?php echo $headlines[0]->title;?></h4>
                    <p class="tm-mb-45"><?php if(strlen($headlines[0]->content) > 150) echo substr($headlines[0]->content, 0, 97) . '...'?></p>
                    <a href="<?php echo base_url().'news/'.$headlines[0]->created_at.'-'.$headlines[0]->slug;?>" class="tm-btn tm-btn-default tm-right">Read More</a>
                </div>
            </div>
        </div>
    </div>
</main>