<?php 
/* Template Name: Services */ 

get_header()

?> 

<div class="main-container">

  <h1 id="services-page-title"> Services </h1>
  <div class="services-img-div" style=" background-image: url('<?php echo get_template_directory_uri() . '/src/assets/images/About-Page/Our-Process/Process1_Headcarve@2x.png'?>')"> 
</div>

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

<!-- Desktop View --> 
<div class="desktop-services-container"> 
  <div class="desktop-services-sidemenu"> 
    <ul> 
      <li id="custom-top"> <a class="desktop-services-sidemenu-link" href="#"> Cleaning </a> </li>
      <li> <a class="desktop-services-sidemenu-link" href="#"> Storage </a> </li>
      <li> <a class="desktop-services-sidemenu-link" href="#"> Recycling </a> </li>
      <li> <a class="desktop-services-sidemenu-link" href="#"> Training </a> </li>
      <li> <a class="desktop-services-sidemenu-link" href="#"> Licensing </a> </li>
      <li> <a class="desktop-services-sidemenu-link" href="#"> Sesame Street Appearances </a> </li>
      <li> <a class="desktop-services-sidemenu-link" href="#"> Accessories </a> </li>
    </ul>
  </div>
  <div class="desktop-services-content"> 
    <div class="desktop-services-service-top"> 
      <h3> Cleaning </h3>
      <?php echo '<p>' . CFS()->get( 'cleaning' ) . '</p>' ?>
    </div> 
    <div class="desktop-services-service"> 
      <h3> Storage </h3>
      <?php echo '<p>' . CFS()->get( 'storage' ) . '</p>' ?>
    </div> 
    <div class="desktop-services-service"> 
      <h3> Recycling </h3>
      <?php echo '<p>' . CFS()->get( 'recycling' ) . '</p>' ?>
    </div> 
    <div class="desktop-services-service"> 
      <h3> Training </h3>
      <?php echo '<p>' . CFS()->get( 'training' ) . '</p>' ?>
    </div> 
    <div class="desktop-services-service"> 
      <h3> Licensing </h3>
      <?php echo '<p>' . CFS()->get( 'licensing' ) . '</p>' ?>
    </div> 
    <div class="desktop-services-service"> 
      <h3> Sesame Street Appearances </h3>
      <?php echo '<p>' . CFS()->get( 'sesame_street_appearances' ) . '</p>' ?>
    </div> 
    <div class="desktop-services-service-last"> 
      <h3> Accessories </h3>
      <?php echo '<p>' . CFS()->get( 'accessories' ) . '</p>' ?>
    </div> 
  </div>

</div>

</div>


<?php get_footer() ?>















