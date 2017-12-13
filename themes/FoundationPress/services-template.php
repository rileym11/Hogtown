<?php 
/* Template Name: Services */ 

get_header()

?> 

<div class="main-container">
    
<h1 id="services-page-title"> Services </h1>
<img class="services-img" src="<?php echo get_template_directory_uri() . '/src/assets/images/Services/IMG_1223.jpg'?>" /> 

<div class="dropdown-services-container"> 

<!-- Services Accordian --> 
<ul class="accordion" data-accordion>
  <li class="accordion-item" data-accordion-item>
    
    <!-- Accordion tab title -->
    <a href="#" class="accordion-title">Cleaning</a>

    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
    <div class="accordion-content" data-tab-content>
           <?php echo '<p>' . CFS()->get( 'cleaning' ) . '</p>' ?>
    </div>
  </li>  
  <li class="accordion-item" data-accordion-item>

  <a href="#" class="accordion-title">Storage</a>

  <div class="accordion-content" data-tab-content>
      <?php echo '<p>' . CFS()->get( 'storage' ) . '</p>' ?>
    </div>
  </li>  
  <li class="accordion-item" data-accordion-item>

   <a href="#" class="accordion-title">Recycling</a>

  <div class="accordion-content" data-tab-content>
      <?php echo '<p>' . CFS()->get( 'recycling' ) . '</p>' ?>
    </div>
  </li>  
  <li class="accordion-item" data-accordion-item>

   <a href="#" class="accordion-title">Training</a>

   <div class="accordion-content" data-tab-content>
      <?php echo '<p>' . CFS()->get( 'training' ) . '</p>' ?>
    </div>
  </li>  
  <li class="accordion-item" data-accordion-item>

   <a href="#" class="accordion-title">Licensing</a>

  <div class="accordion-content" data-tab-content>
      <?php echo '<p>' . CFS()->get( 'licensing' ) . '</p>' ?>
    </div>
  </li>  
  <li class="accordion-item" data-accordion-item>

   <a href="#" class="accordion-title">Sesame Street Appearances</a>

  <div class="accordion-content" data-tab-content>
      <?php echo '<p>' . CFS()->get( 'sesame_street_appearances' ) . '</p>' ?>
    </div>
  </li>  
  <li class="accordion-item" data-accordion-item>

  <a href="#" class="accordion-title">Accessories</a>

  <div class="accordion-content" data-tab-content>
      <?php echo '<p>' . CFS()->get( 'accessories' ) . '</p>' ?>
    </div>
  </li>  
  <!-- End of Services Accordian -->
</ul>



</div>
</div>




<?php get_footer() ?>















