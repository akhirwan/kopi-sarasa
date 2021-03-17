<?php 
    $quo_c = (isset($quo_contact[0]->quote)) ? $quo_contact[0]->quote : 'empty quote'; 
    $quo_f = (isset($quo_faq[0]->quote)) ? $quo_faq[0]->quote : 'empty quote'; 
?>
<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Contact Us</h2>
        <p class="col-12 text-center"><?php echo $quo_c; ?></p>
    </header>

    <div class="tm-container-inner-2 tm-contact-section">
        <div class="row">
            <div class="col-md-6">
                <form action="<?php echo base_url('Home/Message');?>" method="POST" class="tm-contact-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" required="" />
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                    </div>
        
                    <div class="form-group">
                        <textarea rows="5" name="message" class="form-control" placeholder="Message" required=""></textarea>
                    </div>
            
                    <div class="form-group tm-d-flex">
                        <button type="submit" class="tm-btn tm-btn-success tm-btn-right" id="send-message" onclick="alert('Thank you')">
                        Send
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="tm-address-box">
                    <h4 class="tm-info-title tm-text-success">Our Address</h4>
                    <address>
                        <?php echo $config->address ?>
                    </address>
                    <a href="tel:<?php echo $config->phone1 ?>" class="tm-contact-link">
                        <i class="fas fa-phone tm-contact-icon"></i><?php echo $config->phone1 ?>
                    </a>
                    <a href="mailto:<?php echo $config->email ?>" class="tm-contact-link">
                        <i class="fas fa-envelope tm-contact-icon"></i><?php echo $config->email ?>
                    </a>
                    <div class="tm-contact-social">
                        <a href="<?php echo $config->link_fb ?>" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
                        <a href="<?php echo $config->link_tw ?>" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
                        <a href="<?php echo $config->link_ig ?>" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- How to change your own map point
1. Go to Google Maps
2. Click on your location point
3. Click "Share" and choose "Embed map" tab
4. Copy only URL and paste it within the src="" field below
-->
    <div class="tm-container-inner-2 tm-map-section">
        <div class="row">
            <div class="col-12">
                <div class="tm-map">
                    <?php echo $config->map ?>   
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.706601335146!2d107.6342151142116!3d-6.9256321197116195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d87e72aefd%3A0xd2572025945d3808!2sTrans%20Studio%20Bandung!5e0!3m2!1sid!2sid!4v1615997938059!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                </div>
            </div>
        </div>
    </div>
    <div class="tm-container-inner-2 tm-info-section">
        <div class="row">
            <!-- FAQ -->
            <div class="col-12 tm-faq">
                <h2 class="text-center tm-section-title">FAQs</h2>
                <p class="text-center"><?php echo $quo_f; ?></p>
                <div class="tm-accordion">
                    <?php 
                    $i = 1;
                    foreach($faqs as $faq){?>
                        <button class="accordion"><?php echo $i++ . '. ' . $faq->question;?></button>
                        <div class="panel">
                            <p><?php echo $faq->answer;?></p>
                        </div>
                    <?php } ?>
                </div>	
            </div>
        </div>
    </div>
</main>