<?php get_header(); ?>



		<?php get_template_part('templates/content','loop'); ?>

<div class="d-flex justify-content-center">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/gravatar.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
