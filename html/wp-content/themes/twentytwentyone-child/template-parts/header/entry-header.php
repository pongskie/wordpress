<?php 

/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */


if( get_field( 'hero_title' ) ): ?>
    <h1 class="h3 mb-4"><?php the_field( 'hero_title' ); ?></h1>
<?php else : ?>
    <?php the_title( '<h1 class="h2 mb-4">', '</h1>'); ?>
<?php endif; ?>

<?php if( get_field( 'hero_description' ) ): ?>
    <?php the_field( 'hero_description' ); ?>
<?php else : ?>
<?php endif; ?>


