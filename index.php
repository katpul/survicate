<?php get_header(); ?>



		<?php get_template_part('templates/content','loop'); ?>



<div class="container-fluid">
   <div class="row baner1">
      <div class="col-lg-6 pt-5 text-nowrap d-flex justify-content-center">
		 <div class="">
	  <p class="textbig"><b>Boost your app</b><br> to 5 stars with<br> user feedback</p>
	  <br>

	  <p class="textsmall">Survicate Mobile App Surveys let you gather insights<br>
		  seamlessly within the user experience of your mobile<br>
		  application. An essential tool for product managers,<br>
		  marketers and developers.</p><br>
	  <div class="signup2"><a href="">sign up free</a></div>
	  </div>

	  </div>
      <div class="col-lg-6 pt-5 hide d-flex justify-content-center">
		 <img class="smallimg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Top_image.svg" width="690">
	  </div>
   </div>
</div>




<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active d-flex justify-content-center">

	<div class="shadow-lg mb-5 mt-5 pl-3 bg-white rounded size">
   <div class="row">
      <div width="500" class="col-6 text-nowrap d-flex align-items-start">

		<div>
	  <img class="hide" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Quote.svg">
	  <p class="textsmall">Survicate Mobile App Surveys let you gather insights<br>
		  seamlessly within the user experience of your mobile<br> application. An essential tool for product managers,<br>
		  marketers and developers.</p><br>
	  <p class="textsmall">Lucjan Kierczak Manager Advisor / survicate.com</p>
	  	</div>

	  </div>
      <div class="col-6 d-flex justify-content-center">
		 <img class="hide" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Lucjan Kierczak-kopia.png">
	  </div>
   </div>
   </div>

	</div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls hide1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon hide1" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls hide1" role="button" data-slide="next">
    <span class="carousel-control-next-icon hide1" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
