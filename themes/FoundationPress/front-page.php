<?php
/* Template Name: Home Template*/
 ?>
 <?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
  <div class="main-grid">
    <main class="">
      <div class="hero">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url'); ?>/src/assets/images/homepageAssets1@3x.png" alt="Man Building Mascot">
          <source media="(min-width: 400px)" srcset="<?php bloginfo('template_url'); ?>/src/assets/images/homepageAssets1@2x.png" alt="Man Building Mascot">
          <img src="<?php bloginfo('template_url'); ?>/src/assets/images/homepageAssets1.png" alt="Man Building Mascot">
        </picture>
        <div class="build-quote">
          <p class="hero-text">We create custom mascots for your special events.</p>
          <a href="" class="front-page-btn">Build A Quote</a>
        </div>
      </div>
      <div class="our-process">
        <a href="./our-process/"><h1 class="section-header">Our Process</h1></a>
        <div class="sketch">
          <img src="<?php bloginfo('template_url'); ?>/src/assets/images/About-Page/Our-Process/Process-1.png" class="our-process-image" alt="Sketch of Tiger Mascot">
          <p class="our-process-head">1. Sketch</p>
          <p class="our-process-text">We sketch your dream mascot</p>
          <img src="<?php bloginfo('template_url'); ?>/src/assets/images/About-Page/Our-Process/Process2Jumpsuit1.png" class="our-process-image" alt="Girl Sewing Mascot">
        </div>
        <div class="build">
          <p class="our-process-head">2. Build</p>
          <p class="our-process-text">We make the sketch come to life</p>
        </div>
        <div class="deliver">
          <img src="<?php bloginfo('template_url'); ?>/src/assets/images/About-Page/Our-Process/Process5_Final.png" class="our-process-image" alt="Finished Tiger Mascot">
          <p class="our-process-head">3. Deliver</p>
          <p class="our-process-text">We ship your mascot to you</p>
          <br>
          <a href="" class="front-page-btn">Learn More</a>
        </div>
      </div>
      <div class="our-mascots">
        <h2 class="section-header">Our Mascots</h2>
        <div class="orbit" data-orbit>
          <div class="orbit-wrapper">
            <div class="orbit-controls">
              <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
              <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            </div>
            <ul class="orbit-container">
              <li class="is-active orbit-slide responsive-embed widescreen">
                <figure class="orbit-figure">
                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/src/assets/images/Mascots/blue-mascot.png" alt="Blue Mascot">
                </figure>
              </li>
              <li class="orbit-slide responsive-embed widescreen">
                <figure class="orbit-figure">
                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/src/assets/images/Mascots/gator_mascot.jpg" alt="Gator Mascot">
                </figure>
              </li>
              <li class="orbit-slide responsive-embed widescreen">
                <figure class="orbit-figure">
                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/src/assets/images/Mascots/oc_fair_mascots.jpg" alt="OC Fair Mascots">
                </figure>
              </li>
              <li class="orbit-slide responsive-embed widescreen">
                <figure class="orbit-figure">
                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/src/assets/images/Mascots/load_toad_mascot.jpg" alt="Toad Mascot">
                </figure>
              </li>
              <li class="orbit-slide responsive-embed widescreen">
                <figure class="orbit-figure">
                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/src/assets/images/Mascots/Tuggy.jpg" alt="Tuggy Mascots">
                </figure>
              </li>
            </ul>
          </div>
          <nav class="orbit-bullets mascot-bullets">
            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
            <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
            <button data-slide="4"><span class="show-for-sr">Fifth slide details.</span></button>
          </nav>
        </div>
        <p class="our-mascots-text">We make custom mascots for schools, businesses, brands, charities and more. See what we've created and imagine what we could do for you!</p>
        <a href="" class="front-page-btn">View Full Gallery</a>
      </div>
      <div class="brand-slides">
        <div class="slider">
          <div><img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/brand2.png" alt="Children's Wish Foundation Logo"><img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/brand1.png" alt="Sesame Street Logo"></div>
        </div>
      </div>
      <div class="our-services">
        <h3 class="services-header">Our Services</h3>
        <p class="our-services-text">We offer mascot cleanings, repairs and recycling, among many other services.</p>
        <a href="" class="front-page-btn">Learn More</a>
      </div>
      <div class="orbit testimonial-slides" data-orbit>
        <div class="orbit-wrapper">
          <div class="orbit-controls">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
          </div>
            <ul class="orbit-container">
              <!-- Testimonial 1 -->
              <li class="is-active orbit-slide">
                <div>
                  <p class="testimonial-text">I have to say, you really nailed this. Looks amazing, spot on to the drawing. Great work, John! <br>
                  M.B., Los Angeles CA</p>
                </div>
              </li>
              <li class="orbit-slide">
                <div>
                  <p class="testimonial-text">Two words "ABSOLUTELY PERFECT!" People are already asking where I got it, I will definitely send you some biz. <br>
                  A.D., Gaffney SC</p>
                </div>
              </li>
              <li class="orbit-slide">
                <div>
                  <p class="testimonial-text">I just love it... it is beautiful! I've alreay tried it on and everyone just loved it. The Pricipal of the college and my supervisor were just glowing when everyone gathered around to meet Success. Again thank you for your patience and the beautiful work. <br>
                  J.C., Campbellton, NB</p>
                </div>
              </li>
              <li class="orbit-slide">
                <div>
                  <p class="testimonial-text">You and your crew are awesome. Thanks so much! I put it on and our head coach took me around. Everyone just loved it. <br>
                  T.D., St. Joseph MO</p>
                </div>
              </li>
          </ul>
        </div>
        <nav class="orbit-bullets">
          <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
          <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
          <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
          <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
        </nav>
      </div>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
