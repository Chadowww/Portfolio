<?php include("include/header.php"); ?>

	<div class="container mt-5">
				
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="">
				  
						  <div class="carousel-inner">
								  	
								    <div class="carousel-item active">
								   	 <div class ="col pt-3 pb-3">
										<?php include("include/plateaux.php"); ?>
								   	 </div>
								    </div>
								    
								    <div class="carousel-item">
								    	 <div class ="col pt-3 pb-3">
										<?php include("include/carte.php"); ?>
								   	  </div>
								    </div>
								    
								    <div class="carousel-item">
								     <div class ="col pt-3 pb-3">
										<?php include("include/variante.php"); ?>
								     </div>
								    </div>
								    
								    <div class="carousel-item">
								     <div class ="col pt-3 pb-3">
										<?php include("include/boisson_dessert.php"); ?>
								     </div>
								    </div>
								    
						  </div>
						  
				</div>
		    
	</div>


    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="jquery.js"></script>
		
        <script>

			$(document).ready(function(){
				
				$(window).scroll(function(){
					if ($(this).scrollTop()>=418)
					{
						$('#bandeau').addClass('fixed');
					}else{
						$('#bandeau').removeClass('fixed');
					}
				});
			});
		</script>


</html>