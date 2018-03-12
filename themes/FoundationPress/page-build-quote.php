<?php
/* Template Name: Build A Quote*/
?>
<?php

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="build-quote">
  <div class="page-one">
    <picture>
      <source media="(min-width: 1024px)" srcset="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/BYO-Homepage@2x.png" alt="White Mascot Paw">
        <img src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/BYO-Homepage.png" alt="White Mascot Paw">
      </picture>
      <h1 class="build-quote-head">Build Your Own Quote</h1>
      <p class="build-quote-text">Build your own quote is here to help you figure out an approximate cost for your dream mascot. This is not a final quote.</p>
      <button type="submit" class="build-quote-next-one">Next ></button>
  </div>
  <!-- Mascot Type -->
  <div class="mascot-type">
    <div class="progress-bar-mascot-type">
      <div class="progress-text-container-mascot-type">
        <p>Body</p>
        <p>Details</p>
        <p>Quote</p>
      </div>
      <div class="progress-bar-container-mascot-type">
        <div class="progress-body">
        </div>
        <div class="progress-details">
        </div>
        <div class="progress-quote">
        </div>
      </div>
    </div>
      <div class="mascot-type-content">
        <h2 class="build-quote-head">Pick Your Mascot Type</h2>
        <div class="container">
          <div class="mascot-container-pizza">
            <img src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/Pizza1.svg" alt="Pizza Mascot">
          </div>
          <div class="mascot-container-bear">
            <img src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/build-quote-assets/Bear1.svg" alt="Bear Mascot">
          </div>
        </div>
        <div class="text-container">
          <div class="unibody-text">
            <h3>Uni-Body</h3>
            <p>A large structure that fits over the entire body with only the limbs exposed</p>
          </div>
          <div class="head-body-text">
            <h4>Head and Body</h4>
            <p>Head is separated from bodysuit or clothing</p>
          </div>
        </div>
        <div class="mascot-type-btn-div">
          <button type="submit" class="build-quote-back">< Back</button>
          <button type="submit" class="build-quote-next-mascot-type">Next ></button>
        </div>
      </div>
    </div>
    <!-- Pick your head type div -->
    <div class="mascot-head-type">
      <div class="progress-bar-head-type">
        <div class="progress-text-container-head-type">
          <p>Body</p>
          <p>Details</p>
          <p>Quote</p>
        </div>
        <div class="progress-bar-container-head-type">
          <div class="progress-body">
          </div>
          <div class="progress-details">
          </div>
          <div class="progress-quote">
          </div>
        </div>
      </div>
      <h2 class="build-quote-head"> Pick Your Head Type </h2>
      <div class="mascot-head-type-container">
        <div class="ind-mascot-head">
          <img class="ind-mascot-img" id="human-head" src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/HumanHead.svg" alt="Human Head">
          <h3 class="ind-mascot-title"> Human Head </h3>
        </div>
        <div class="ind-mascot-head">
          <img class="ind-mascot-img" id="animal-head" src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/BearHead.svg" alt="Bear Head">
          <h3 class="ind-mascot-title"> Animal Head </h3>
        </div>
        <div class="ind-mascot-head">
          <img class="ind-mascot-img" id="x" src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/MonsterHead.svg" alt="Monster Head">
          <h3 class="ind-mascot-title"> Monster Head </h3>
        </div>
      </div>
      <div class="mascot-head-btn-div">
        <button type="submit" class="build-quote-back-head-type">< Back</button>
        <button type="submit" class="build-quote-next-head-type">Next ></button>
      </div>
    </div>
    <!-- Pick your body type div -->
    <div class="mascot-body-type">
      <div class="progress-bar-body-type">
        <div class="progress-text-container-body-type">
          <p>Body</p>
          <p>Details</p>
          <p>Quote</p>
        </div>
        <div class="progress-bar-container-body-type">
          <div class="progress-body">
          </div>
          <div class="progress-details">
          </div>
          <div class="progress-quote">
          </div>
        </div>
      </div>
      <h2 class="build-quote-head"> Pick Your Body Type </h2>
      <div class="mascot-body-type-container">
        <div class="ind-mascot-body">
          <img class="ind-mascot-body-img" id="body" src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/Body.svg" alt="Body">
          <h3 class="ind-mascot-body-title"> Body </h3>
        </div>
        <div class="ind-mascot-body">
          <img class="ind-mascot-body-img" id="clothes" src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/Clothes.svg" alt="Clothes">
          <h3 class="ind-mascot-body-title"> Clothes </h3>
        </div>
      </div>
      <div class="mascot-body-btn-div">
        <button type="submit" class="build-quote-back-body-type">< Back</button>
        <button type="submit" class="build-quote-next-body-type">Next ></button>
      </div>
    </div>
    <!-- Pick your detail div -->
    <div class="mascot-detail-type">
      <div class="progress-bar-detail">
        <div class="progress-text-container-detail">
          <p>Body</p>
          <p>Details</p>
          <p>Quote</p>
        </div>
        <div class="progress-bar-container-detail">
          <div class="progress-body">
          </div>
          <div class="progress-details">
          </div>
          <div class="progress-quote">
          </div>
        </div>
      </div>
      <div class="mascot-detail-type">
        <h2 class="build-quote-head"> Pick your level of detail </h2>
        <div class="interactive-container">
          <div class="mascot-detail-type-display">
            <img id="mascot-plain" class="mascot-detail-disply-img" src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/build-quote-assets/big-plain.png" alt="Level One">
            <p class="levels"> Level 1: The basics </p>
          </div>
          <!-- All on display: none until clicked -->
          <div class="mascot-detail-type-display-lashes">
            <img id="mascot-lashes" class="mascot-detail-disply-img-lashes" src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/build-quote-assets/big-lashes.png" alt="Level Two">
            <p class="levels"> Level 2: A little more </p>
          </div>

          <div class="mascot-detail-type-display-glasses">
            <img id="mascot-glasses" class="mascot-detail-disply-img-lashes" src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/build-quote-assets/big-glasses.png" alt="Level Three">
            <p class="levels"> Level 3: The works! </p>
          </div>
          <!-- -->
          <div class="mascot-detail-type-choices">
            <img id="level-one" class="mascot-detail-ind-choice" src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/build-quote-assets/small-plain.png" alt="Plain Head">
            <p class="mascot-detail-ind-txt"> Level 1 </p>
            <img id="level-two" class="mascot-detail-ind-choice" src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/build-quote-assets/small-lashes.png" alt="Lashes Head"/>
            <p class="mascot-detail-ind-txt"> Level 2 </p>
            <img id="level-three" class="mascot-detail-ind-choice" src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/build-quote-assets/small-glasses.png" alt="Glasses Head"/>
            <p class="mascot-detail-ind-txt"> Level 3 </p>
          </div>
          <div class="mascot-detail-btn-div">
            <button type="submit" class="build-quote-back-detail-type">< Back</button>
            <button type="submit" class="build-quote-next-detail-type">Next ></button>
          </div>
        </div>
    </div>
    <div class="quote-page">
      <div class="progress-bar-quote">
        <div class="progress-text-container-quote">
          <p>Body</p>
          <p>Details</p>
          <p>Quote</p>
        </div>
        <div class="progress-bar-container-quote">
          <div class="progress-body">
          </div>
          <div class="progress-details">
          </div>
          <div class="progress-quote">
          </div>
        </div>
      </div>
      <p class="quote">Your approximate quote</p>
      <p class="quote-price"></p>
      <p class="whats-next">Whats next?</p>
      <p class="quote-text-block"> To take the next step in ordering your custom mascot, fill out the form below and we'll get in touch with a detailed quote and sketch.</p>
    </div>
    <?php echo do_shortcode(' [contact-form-7 id="60" title="BYO"] ') ?>
</div>
   <?php get_footer();
?>
