<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #556E5B;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<?php 
  $createdInt = $articles[0]->created_at;
  $created = new DateTime("@$createdInt");
  $cdate = ($createdInt == 0) ? "-" : date_format($created, 'd M Y');?>

<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title"><?php echo $articles[0]->title;?></h2>
        <p class="col-12 text-center">
          <small><b> Date : </b><?php echo $cdate;?></small> ||
          <small><b> Author : </b><?php echo $author[0]->name;?></small>
          <a href="<?php echo $author[0]->link_fb;?>" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
          <a href="<?php echo $author[0]->link_tw;?>" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
          <a href="<?php echo $author[0]->link_ig;?>" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
          <a href="<?php echo $author[0]->link_yt;?>" class="tm-social-link"><i class="fab fa-youtube tm-social-icon"></i></a>
        </p><hr>
        <p class="col-12 text-left"><?php echo $articles[0]->content;?></p>
    </header>
</main>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the author[0] scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the author[0] clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>