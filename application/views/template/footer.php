		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2021 <a href="https://akhirwan.github.io/" target="_blank">akhirwan.github.io</a> 
            
            | Design: <a rel="nofollow" href="#">TemplateMo</a></p>
		</footer>
	</div>
	<script src="<?php echo base_url('assets/public/js/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('assets/public/js/parallax.min.js')?>"></script>
	<script>
		
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).attr("id");
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
		
		$(document).ready(function () {
		    $("#gallery").focus();
		});
        
        $(document).ready(function(){
            var acc = document.getElementsByClassName("accordion");
            var i;
            
            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
                });
            }	
        });

		function myDrop() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
    </script>
</body>
</html>