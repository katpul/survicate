<?php get_header(); ?>



		<?php get_template_part('templates/content','loop'); ?>

		<!-- 1 baner-->

<section class="container-fluid">
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
</section>

<!-- baner companies -->

<section class="container-fluid">
  <div class="row pad">
    <div class="col d-flex justify-content-center align-bottom">
	  <img width="110" src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.svg">
    </div>
    <div class="col d-flex justify-content-center align-bottom">
	  <img width="110" src="<?php echo get_stylesheet_directory_uri(); ?>/img/5.svg">
    </div>
    <div class="col d-flex justify-content-center align-bottom">
	  <img width="110" src="<?php echo get_stylesheet_directory_uri(); ?>/img/4.svg">
    </div>
    <div class="col d-flex justify-content-center align-bottom">
	  <img width="110" src="<?php echo get_stylesheet_directory_uri(); ?>/img/3.svg">
    </div>
    <div class="col d-flex justify-content-center align-bottom">
	  <img width="110" src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.svg">
    </div>
  </div>
</section>

<!-- carousel -->

<section id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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
				  <p class="textsmall"><span class="green">Lucjan Kierczak</span><br> Manager Advisor / survicate.com</p>
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
</section>

<!-- icons -->

  <section class="features-icons text-center">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="m-auto pb-3 pt-3">
	  			<img width="60" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Create.svg">
				</i>
            </div>
            <h3>Create</h3>
            <p class="lead mb-0">Send surveys with automated triggers based on your visitor’s, prospect’s or customer’s actions.</p>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="m-auto pb-3 pt-3">
	  			<img width="75" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Design.svg">
				</i>
            </div>
            <h3>Design</h3>
            <p class="lead mb-0">Map survey questions to your system to send responses in real-time as attributes and activities.</p>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="m-auto pb-3 pt-3">
	  			<img width="75" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Target.svg">
				</i>
            </div>
            <h3>Target</h3>
            <p class="lead mb-0">See real-time feedback automatically update within your Marketo database, and use this data to create Smart Lists and reports</p>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="m-auto pb-3 pt-3">
	  			<img width="45" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Measure.svg">
				</i>
            </div>
            <h3>Measure</h3>
            <p class="lead mb-0">Automate your follow-up actions like lead scoring, assigning or campaigns with workflows and notifications.</p>
          </div>
        </div>
    </div>
  </section>

	<!-- last baner -->

  <section class="container-fluid pad2">
  <div class="row justify-content-around">
    <div class="col-xl-4 d-flex justify-content-center">
	  <p class="textmid"><b>Empower your </b><br> business now!</p>
    </div>
    <div class="col-xl-4 d-flex justify-content-center">
      <form class="form-inline flex-nowrap ng-pristine ng-invalid ng-invalid-required">
		  <input class="form-control ng-pristine ng-invalid ng-invalid-required btn-pill" ng-model="password" placeholder="Enter e-mail" required="">
		  <button ng-click="updatePassword()" class="btn btn-small btn-inline btncol">SIGN UP FREE
		 </button>
		 </form>
    </div>
  </div>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
