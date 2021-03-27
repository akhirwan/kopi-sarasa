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

<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title" style="color: #555;"><?php echo $config->desc_title;?></h2>
        <p class="col-12 text-left" style="color: #555;"><?php echo $config->description;?></p>
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