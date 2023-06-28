<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-sm col-md-6 text-center">
            <h1 class="mb-3"><?php esc_html_e( 'Page not found', 'twentytwentyone' ); ?></h1>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-sm col-md-6 text-center">
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?></p>
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/not-found.svg" alt="Page not found" />
        </div>
    </div>
</div>

<?php
get_footer();
