		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2021 <a href="https://akhirwan.github.io/">akhirwan.github.io</a> 
            
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
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
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
    </script>
</body>
</html>