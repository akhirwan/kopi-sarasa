<?php 
    $quo_c = (isset($quo_contact[0]->quote)) ? $quo_contact[0]->quote : ' '; 
    $quo_f = (isset($quo_faq[0]->quote)) ? $quo_faq[0]->quote : ' '; 
?>
<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Contact Us</h2>
        <p class="col-12 text-center"><?php echo $quo_c; ?></p>
    </header>
    
    <div class="tm-container-inner-2 tm-contact-section">
        <div class="row">
            <a href="<?php echo base_url().'contact'?>" class="block" id="commentBtn" onclick="hide()" style="display:none;">Pesan / komentar Anda Berhasil dikirim</a>
            <div class="col-md-6">
                <form action="<?php echo base_url('Home/Message');?>" method="POST" class="tm-contact-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nama" required="" />
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                    </div>
        
                    <div class="form-group">
                        <textarea rows="5" name="message" class="form-control" placeholder="Isi komentar disini ..." required=""></textarea>
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
                        <a href="<?php echo $config->link_yt ?>" class="tm-social-link"><i class="fab fa-youtube tm-social-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-container-inner-2 tm-map-section">
        <div class="row">
            <div class="col-12">
                <div class="tm-map">
                    <?php echo $config->map ?>
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

<script>
    var alert = "<?php echo $_GET['alert']?>"
    
    if(alert){
        console.log(alert)
        if (alert = 'sukses'){
            document.getElementById("commentBtn").style.display = 'flex';
        }
    }

    // function hide() {
    //     document.getElementById("commentBtn").style.display = 'none';
    // }
</script>