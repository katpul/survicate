<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- navbar -->
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/survicate_logo.svg" width="185" height="35">
  	</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse vbottom" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">SURVEY SUITE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FEEDBACK HUB</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SOLUTIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PRICING</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CUSTOMERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">RESOURCES</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link textbold" href="#">LOG IN</a>
        </li>
  	     <li  class="signup1"><a href="">sign up free</a></li>
      </ul>
    </div>
  </nav>
</div>
