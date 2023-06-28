<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
	
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-sm col-md-6 text-center">
            <?php if ( is_search() ) : ?>
                <h1 class="mb-3">
                    <?php
                    printf(
                        /* translators: %s: Search term. */
                        esc_html__( 'Results for "%s"', 'twentytwentyone' ),
                        '<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
                    );
                    ?>
                </h1>
            <?php else : ?>
                <h1 class="mb-3"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-sm col-md-6 text-center">

            <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

                <?php
                printf(
                    '<p>' . wp_kses(
                        /* translators: %s: Link to WP admin new post page. */
                        __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwentyone' ),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ) . '</p>',
                    esc_url( admin_url( 'post-new.php' ) )
                );
                ?>

            <?php elseif ( is_search() ) : ?>

                <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentytwentyone' ); ?></p>
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/not-found.svg" alt="Page not found" />

            <?php else : ?>

                <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwentyone' ); ?></p>
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/not-found.svg" alt="Page not found" />

            <?php endif; ?>

        </div>
    </div>
</div>
