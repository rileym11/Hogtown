<?php
/* * Template Name: Home Template*/
 ?>
 <?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<div class="main-container">
  <div class="main-grid">
    <main class="">
      <?php 
    if ( $post = get_page_by_path( 'front-page', OBJECT, 'page' ) )
    $id = $post->ID;
else
    $id = 0;
    ?>
    <?php if (has_post_thumbnail($id) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'single-post-thumbnail' ); ?>
  
      <div class="hero" style="background-image: url('<?php echo $image[0]  ?>'); background-repeat: no-repeat; background-size: cover, cover;">
   
    </div>
<?php endif; ?>
      <div class="build-quote">
        <p class="hero-text">We create custom mascots for your special events.</p>
        <a href="./build-a-quote/" class="front-page-btn">Build A Quote</a>
      </div>
      <div class="our-process">
        <a href="./our-process/"><h1 class="section-header">Our Process</h1></a>
        <div class="our-process-section">
          <div class="sketch">
            <img src="<?php bloginfo('template_url'); ?>/src/assets/images/About-Page/Our-Process/Process-1.png" class="our-process-image" alt="Sketch of Tiger Mascot">
            <p class="our-process-head">1. Sketch</p>
            <p class="our-process-text">We sketch your dream mascot</p>
          </div>
          <div class="build">
            <img src="<?php bloginfo('template_url'); ?>/src/assets/images/About-Page/Our-Process/Process2_Head@2x.png" class="our-process-image" alt="Sketch of Tiger Mascot">
            <p class="our-process-head">2. Build</p>
            <p class="our-process-text">We make the sketch come to life</p>
          </div>
          <div class="deliver">
            <img src="<?php bloginfo('template_url'); ?>/src/assets/images/About-Page/Our-Process/Process5_Final.png" class="our-process-image" alt="Finished Tiger Mascot">
            <p class="our-process-head">3. Deliver</p>
            <p class="our-process-text">We ship your mascot to you</p>
          </div>
        </div>
          <br>
          <a href="<?php echo get_page_link(get_page_by_path( 'Our Process' )) ?>" class="front-page-btn">Learn More</a>
      </div>
      <!-- Mascots slider -->
      <div class="our-mascots">
        <h2 class="section-header">Our Mascots</h2>
        <div class="orbit mascot-orbit" data-orbit>
          <div class="orbit-wrapper">
            <div class="orbit-controls">
              <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
              <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            </div>
            <ul class="orbit-container mascot-container">
              <li class="is-active orbit-slide responsive-embed widescreen">
                <figure class="orbit-figure">
                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/src/assets/images/Mascots/IMG_0060.jpg" alt="Building a Mascot">
                </figure>
              </li>
              <li class="orbit-slide responsive-embed widescreen">
                <figure class="orbit-figure">
                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/src/assets/images/Mascots/DSCF9329.jpg" alt="Mascot heads and paws">
                </figure>
              </li>
              <li class="orbit-slide responsive-embed widescreen">
                <figure class="orbit-figure">
                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/src/assets/images/Mascots/IMG_2005.jpg" alt="Building Mascot Heads">
                </figure>
              </li>
              <li class="orbit-slide responsive-embed widescreen">
                <figure class="orbit-figure">
                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/src/assets/images/Mascots/IMG_0066.jpg" alt="CBC Mascots">
                </figure>
              </li>
              <li class="orbit-slide responsive-embed widescreen">
                <figure class="orbit-figure">
                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/src/assets/images/Mascots/IMG_3889.jpg" alt="Building Robot Head">
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
        <a href="<?php echo get_post_type_archive_link('gallery') ?>" class="front-page-btn">View Full Gallery</a>
      </div>
      <!-- Brand logos -->
      <div class="orbit-mobile brand-slides" data-orbit>
        <div class="orbit-wrapper">
          <ul class="orbit-container brand-slide-container">
            <li class="is-active orbit-slide">
              <div class="brand-slide">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/brand2.png" alt="Children's Wish Foundation Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/brand1.png" alt="Sesame Street Logo">
              </div>
            </li>
            <li class="orbit-slide brand-slide">
              <div class="brand-slide">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/AOL.png" alt="AOL Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/20th_century.png" alt="20th Century Fox Logo">
              </div>
            </li>
            <li class="orbit-slide">
              <div class="brand-slide">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/ca.png" alt="Government of Canada Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/cb.png" alt="Canadian Broadcasting Corporation CBC Logo">
              </div>
            </li>
            <li class="orbit-slide">
              <div class="brand-slide">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/hb.png" alt="Hasbro Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/mg.png" alt="Memphis Grizzlies Logo">
              </div>
            </li>
            <li class="orbit-slide">
              <div class="brand-slide">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/ms.png" alt="Microsoft Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/nf.png" alt="Netflix Logo">
              </div>
            </li>
            <li class="orbit-slide">
              <div class="brand-slide">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/ni.png" alt="Nintendo Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/sa.png" alt="Sandals Resorts Logo">
              </div>
            </li>
            <li class="orbit-slide">
              <div class="brand-slide">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/sr.png" alt="Sanrio Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/wl.png" alt="Winterlude de Neige Logo">
              </div>
            </li>
          </ul>
        </div>
        <nav class="orbit-bullets brand-bullets">
          <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
          <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
          <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
          <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
        </nav>
      </div>
      <div class="orbit-desktop brand-slides-desktop" data-orbit>
        <div class="orbit-wrapper">
          <ul class="orbit-container brand-slide-container">
            <li class="is-active orbit-slide">
              <div class="brand-slide">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/brand2.png" alt="Children's Wish Foundation Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/brand1.png" alt="Sesame Street Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/AOL.png" alt="AOL Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/20th_century.png" alt="20th Century Fox Logo">
              </div>
            </li>
            <li class="orbit-slide">
              <div class="brand-slide">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/ca.png" alt="Government of Canada Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/cb.png" alt="Canadian Broadcasting Corporation CBC Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/hb.png" alt="Hasbro Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/mg.png" alt="Memphis Grizzlies Logo">
              </div>
            </li>
            <li class="orbit-slide">
              <div class="brand-slide">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/ms.png" alt="Microsoft Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/nf.png" alt="Netflix Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/ni.png" alt="Nintendo Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/sa.png" alt="Sandals Resorts Logo">
              </div>
            </li>
            <li class="orbit-slide">
              <div class="brand-slide">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/sr.png" alt="Sanrio Logo">
                <img src="<?php bloginfo('template_url'); ?>/src/assets/images/brand-imgs/wl.png" alt="Winterlude de Neige Logo">
              </div>
            </li>
          </ul>
        </div>
        <nav class="orbit-bullets brand-bullets">
          <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
          <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
          <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
          <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
        </nav>
      </div>
      <div class="wrapper">
        <!-- Our services hero spot -->
        <div class="our-services">
          <h3 class="services-header">Our Services</h3>
          <p class="our-services-text">We offer mascot cleanings, repairs and recycling, among many other services.</p>
          <a href="<?php echo get_page_link(get_page_by_path( 'Services' )) ?>" class="front-page-btn">Learn More</a>
        </div>
        <!-- Testimonial slider -->
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
                </div>
        <nav class="orbit-bullets">
          <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
          <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
          <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
          <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
        </nav>
      </div>
      <div class="hashtag-section">
        <p class="hashtag">#hogtownmascots</p>
      </div>
      <div class="insta-thumbnails">
        <?php echo do_shortcode( '[jr_instagram id="2"]' ) ?>
      </div>
      <div class="insta-slider">
        <?php echo do_shortcode( '[jr_instagram id="3"]' ) ?>
      </div>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
