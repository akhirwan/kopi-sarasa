<?php $quo = (isset($quotes[0]->quote)) ? $quotes[0]->quote : ' '; ?>
<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Menu at <?php echo $config->app_name ?></h2>
        <p class="col-12 text-center"><?php echo $quo; ?></p>
    </header>

<div class="tm-paging-links">
    <nav>
        <ul>
            <li class="tm-paging-item">
                <a href="#" class="tm-paging-link active" id="<?php echo $categories[0]->id;?>">
                    <?php echo $categories[0]->name;?>
                </a>
            </li>
            <?php foreach($categories as $key => $cat) {
                if ($key >= 1) {?>
                <li class="tm-paging-item">
                    <a href="#" class="tm-paging-link" id="<?php echo $cat->id;?>">
                        <?php echo $cat->name;?>
                    </a>
                </li>
            <?php } } ?>
        </ul>
    </nav>
</div>

<div class="row tm-gallery">
    <div id="tm-gallery-page-all" class="tm-gallery-page">
    <?php $i = 1; foreach($items as $item) {
        if ($categories[0]->id == $item->category) {?>
        <article class="col-12 tm-gallery-item">
            <figure>
                <img src="<?php echo base_url('assets/public/img/items/'.$item->picture)?>" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title" title="<?php echo $item->name;?>"><?php echo $item->name;?></h4>
                    <p class="tm-gallery-description" title="<?php echo $item->description;?>"><?php echo $item->description;?></p>
                    <p class="tm-gallery-price">Rp. <?php echo $item->price;?></p>
                </figcaption>
            </figure>
        </article>
    <?php //$i++; if($i > 8) break; ?>
    <?php } } ?>
    </div>

    <?php foreach($categories as $cat) {?>
    <div id="tm-gallery-page-<?php echo $cat->id;?>" class="tm-gallery-page hidden">
    <?php $i = 1; foreach($items as $item) {
        if($item->category == $cat->id) { ?>
        <article class="col-12 tm-gallery-item">
            <figure>
                <img src="<?php echo base_url('assets/public/img/items/'.$item->picture)?>" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title" title="<?php echo $item->name;?>"><?php echo $item->name;?></h4>
                    <p class="tm-gallery-description" title="<?php echo $item->description;?>"><?php echo $item->description;?></p>
                    <p class="tm-gallery-price">Rp. <?php echo $item->price;?></p>
                </figcaption>
            </figure>
        </article>
    <?php //$i++; if($i > 8) break; ?>
    <?php }  } ?>
    </div>
    <?php } ?>
</div>
    
</main>