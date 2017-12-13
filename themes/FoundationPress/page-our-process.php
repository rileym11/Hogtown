
<?php 
    /* Template Name: About Template*/

?>
<?php get_header(); ?>

<main id="story-page">
    <section class="process-about-container">
        <iframe width="100%" height="300" src="https://www.youtube.com/embed/PP4kHvs1xSI" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                <h1 id='process-page-title'>Our Process</h1>
        <div class="process-about-steps">

            <p class="our-process-description">  1. You tell us what you want. We sketch it and send a detailed quote to you. </p>

            <p class="our-process-description"> 2. After you sign the quote and make a deposit to become a client, we begin to build your mascot. </p>

            <img class="our-process-img" src="<?php echo get_template_directory_uri() . '/src/assets/images/About-Page/Our-Process/Process1_Headcarve@2x.png'?>" /> 

            <p class="our-process-description"> 3. Once you approve the foundation pieces, we add the fabric. </p>

            <img class="our-process-img" src="<?php echo get_template_directory_uri() . '/src/assets/images/About-Page/Our-Process/Process2_Head@2x.png'?>" /> 

            <p class="our-process-description"> 4. The fabric and details are then added. Details such as eyebrows and logos will be tacked, not sewn, in place until final approval is received. </p> 

            <img class="our-process-img" src="<?php echo get_template_directory_uri() . '/src/assets/images/About-Page/Our-Process/Process3_HeadCover@2x.png'?>" /> 

            <img class="our-process-img" src="<?php echo get_template_directory_uri() . '/src/assets/images/About-Page/Our-Process/Process4_Claws@2x.png'?>" /> 

            <p class="our-process-description"> 5. You make the final payment and we ship the mascot. The tracking number, laundry and dressing instructions are e-mailed to you. </p>

             <img class="our-process-img" src="<?php echo get_template_directory_uri() . '/src/assets/images/About-Page/Our-Process/Process5_Final@2x.png'?>" />

            <p class="our-process-description"> 6. We follow up with you, to know how you and your mascot are doing! </p> 

            <p class="our-process-description"> Ready to get started? </p>

            <button class="our-process-btn"> Build a Quote </button> 

        </div>
    </section>
</main> 
<?php 
get_footer();

?>
