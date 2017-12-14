<?php
/*
Template Name: Contact Us
*/
get_header(); ?>

<div class="contact-container">

  <h1 class="contact-title">Contact Us</h1>

  <p class="contact-cta">
    If your business, charity, or school is looking for a custom mascot, our team of specialists is here to help!
  </p>

  <div class="column-container">
  
  

  <?php echo do_shortcode( '[contact-form-7 id="23" title="Contact Page"]' ); ?>

  <div class="contact-map">
    <div class="contact-info">
      <p>Phone: 1-877-622-8422</p>
      <p>Fax: 416-503-1000</p>
      <p>Email: info@hogtownmascots.com</p>
      <p>Hours: Monday to Friday<p>8am-4pm EST</p></p>
    </div>


    <div class="contact-map">
      <h3 class="hide-desktop">Visit Us in Person!</h3>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.050578350922!2d-79.43389068414706!3d43.68871187912019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3384701a0239%3A0xad240a2316b9d25b!2sHogtown+Mascots+Inc.!5e0!3m2!1sen!2sca!4v1512748820818" width="100%" height="375px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      
    </div>

    <div class="location-info">
      <p>Hogtown Mascots Inc.</p>
      <p>400 Vaughan Road</p>
      <p>Toronto, Ontario</p>
      <p>M6C 2N9</p>
    </div>
  </div>
  

  </div>

</div>

<?php get_footer();