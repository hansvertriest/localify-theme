<!-- @extends('layouts.app') -->


<div class="page container">

  <img class="header-bg-image" src="<?= get_template_directory_uri(); ?>/assets/images/headerBg.svg" />

  <div class="nav">
    <div class="container">
      <div class="row">
      <h1 class="col-12 col-lg-4">lo<span>Calify</span></h1>
      <ul class="col-12 col-lg-4 offset-lg-4">
          <li><a href="#consumer"><?php echo get_field('consumer_title') ?></a></li>
          <li><a href="#stores"><?php echo get_field('consumer_title') ?></a></li>
          <li><a href="#cta"><?php echo get_field('cta_button_label') ?></a></li>
      </ul>
    </div>
    </div>
  </div>

  <div id="header" class="header row">
    <div class="header__content-container col-12 col-lg-6">
      <h1><?php echo get_field('header_title') ?></h1>
      <h2><?php echo get_field('header_subtitle') ?></h2>
    </div>
    <img class="col-12 col-lg-6" src="<?php echo get_field('header_image') ?>" /> 
  </div>
  
  <div id="consumer" class="consumer row">
    <img class="col-12 col-lg-7 offset-right-2" src="<?php echo get_field('consumer_image') ?>" /> 
    <div class="consumer__content-container col-12 col-lg-5">
      <h1><?php echo get_field('consumer_title') ?></h1>
      <h3><?php echo get_field('consumer_sub-title') ?></h3>
      <p class="col-12 col-lg-4"><?php echo get_field('consumer_text') ?></p>
    </div>
  </div>

  <div id="stores" class="stores row">
    <div class="stores__content-container col-12 col-lg-5">
      <h1><?php echo get_field('stores_title') ?></h1>
      <h3><?php echo get_field('stores_sub-title') ?></h3>
      <p class="col-4"><?php echo get_field('stores_text') ?></p>
    </div>
    <img class="col-12 col-lg-7 offset-right-2" src="<?php echo get_field('stores_image') ?>" /> 
  </div>

  <div id="bubble" class="bubbles row">
    <div class="bubble bubble--small " > <?php echo get_field('bubble_left') ?> </div>
    <div class="bubble " > <?php echo get_field('bubble_middle') ?> </div>
    <div class="bubble bubble--small "> <?php echo get_field('bubble_right') ?> </div>
  </div>

  <div id="cta" class="cta row">
    <h1><?php echo get_field('cta_top') ?></h1>
    <h1><?php echo get_field('cta_bottom') ?></h1>
    <a class="cta_button" href="https://www.hansvertriest.rocks"><?php echo get_field('cta_button_label') ?></a>
  </div>

</div>
