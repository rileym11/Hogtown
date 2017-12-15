<?php
/* Template Name: Build A Quote*/
 ?>
 <?php

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="page-one">
  <picture>
    <source media="(min-width: 1024px)" srcset="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/BYO-Homepage@2x.png" alt="White Mascot Paw">
    <img src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/BYO-Homepage.png" alt="White Mascot Paw">
  </picture>
  <h1 class="build-quote-head">Build Your Own Quote</h1>
  <p class="build-quote-text">Build your own quote is here to help you figure out an approximate cost for your dream mascot. This is not a final quote.</p>
  <button type="submit" class="build-quote-next">Next ></button>
</div>
<div class="mascot-type">
  <div class="progress" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
    <span class="progress-meter" style="width: 33.3%">
      <p class="progress-meter-text">Body</p>
    </span>
  </div>
  <div class="mascot-type-content">
    <h2 class="build-quote-head">Pick Your Mascot Type</h2>
    <div class="mascot-container">
      <img src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/Pizza1.svg" alt="Pizza Mascot">
    </div>
    <div class="mascot-container">
      <img src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/Bear1.svg" alt="Bear Mascot">
    </div>
    <div class="mascot-type-text">
      <h3>Uni-Body</h3>
      <p>A large structure that fits over the entire body with only the limbs exposed</p>
      <h4>Head and Body</h4>
      <p>Head is separated from bodysuit or clothing</p>
    </div>

    <button type="submit" class="build-quote-back">< Back</button>
    <button type="submit" class="build-quote-next">Next ></button>
  </div>
</div>
   <?php get_sidebar(); ?>
   <?php get_footer();
?>
