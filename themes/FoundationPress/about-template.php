
<?php 
    /* Template Name: About Template*/
 get_header();   
 
?>
<main id="story-page">
    <div class="page-title-container">
        <h1 class='page-title'>Our Story</h1>
    </div>
    <section class="team-about-container">
        <img class ="team-about-image" src="../wp-content/themes/FoundationPress/src/assets/images/About-Page/Our-Story/about_us.png" alt="">
        <div class="team-about-text">
            <p>
            Our team is comprised of highly skilled mascot specialists
             who are devoted to overcoming any design or construction challenge they encounter.
            </p>
        </div>
    </section>
    <section class='owners-content-container'>
        <div class='owners-content'>  
            <div class="owner-image">
                <picture>
                    <source media="(min-width: 768px)" srcset="../wp-content/themes/FoundationPress/src/assets/images/About-Page/Our-Story/John@2x.png">
                    <img src="../wp-content/themes/FoundationPress/src/assets/images/About-Page/Our-Story/John.png" alt="">
                </picture>
            </div>
            <div class="owners-text">
                <h2>John Kernaghan</h2>
                <?php echo '<p>' . CFS()->get( 'john' ) . '</p>' ?>
            </div> 
        </div>
        <div class="owners-content">
            <div class="owner-image">
                <picture>
                    <source media="(min-width: 768px)" srcset="../wp-content/themes/FoundationPress/src/assets/images/About-Page/Our-Story/george@2x.png">
                    <img src="../wp-content/themes/FoundationPress/src/assets/images/About-Page/Our-Story/george.png" alt="">
                </picture>
            </div>
            <div class="owners-text">
                <H2>George Civello</H2>
                <?php echo '<p>' . CFS()->get( 'george' ) . '</p>' ?>
            </div>
        </div>
    </section>
</main> 
<?php 
get_footer();

?>
