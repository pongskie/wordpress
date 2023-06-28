<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>


<?php get_template_part( 'template-parts/header/site-contactbar' ); ?>
    
<div class="sticky-sm-top">
  <div class="e-navbar">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">

              <?php get_template_part( 'template-parts/header/site-branding' ); ?>
              <?php get_template_part( 'template-parts/header/site-nav' ); ?>

            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part( 'template-parts/header/site-hero' ); ?>








