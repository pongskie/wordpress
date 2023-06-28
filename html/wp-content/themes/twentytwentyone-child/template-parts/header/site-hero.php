<?php
/**
 * Displays the site hero.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>

<?php if (is_front_page()) { ?>
    <div class="e-hero">
        <div class="container">
            <div class="row">
                <div class="col-sm col-md-7">
                    <div class="e-hero-content">
                        <?php get_template_part( 'template-parts/header/entry-header' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
	<div class="e-hero-bg">
	   <?php the_post_thumbnail('post-thumbnail', ['class' => 'responsive--full']); ?>
	</div>
    </div>
<?php } elseif (is_page()) { ?>
    <div class="e-hero">
        <div class="container">
            <div class="row">
                <div class="col-sm col-md-7">
                    <div class="e-hero-content">
                        <?php the_breadcrumb(); ?>
                        <?php get_template_part( 'template-parts/header/entry-header' ); ?>
                    </div>
                </div>

<?php 
$image = get_field('hero_sub_image');
if( !empty( $image ) ): ?>
<div class="col-sm col-md-5">
    <img class="sub-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
</div>
<?php endif; ?>

            </div>
        </div>
        <div class="overlay"></div>
	<div class="e-hero-bg">
	   <?php the_post_thumbnail('post-thumbnail', ['class' => 'responsive--full']); ?>
	</div>
    </div>
<?php } elseif (is_single()) { ?>
    <div class="e-hero">
        <div class="container">
            <div class="row">
                <div class="col-sm col-md-7">
                    <div class="e-hero-content">
                        <?php the_breadcrumb(); ?>
                        <?php get_template_part( 'template-parts/header/entry-header' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
	<div class="e-hero-bg">
	   <?php the_post_thumbnail('post-thumbnail', ['class' => 'responsive--full']); ?>
	</div>
    </div>
<?php } elseif (in_category( '6' )) { ?>
    <div class="e-hero">
        <div class="container">
            <div class="row">
                <div class="col-sm col-md-7">
                    <div class="e-hero-content">
                        <?php get_template_part( 'template-parts/header/entry-header' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
	<div class="e-hero-bg">
	   <?php the_post_thumbnail('post-thumbnail', ['class' => 'responsive--full']); ?>
	</div>
    </div>
<?php } else { ?>
<?php } ?>






