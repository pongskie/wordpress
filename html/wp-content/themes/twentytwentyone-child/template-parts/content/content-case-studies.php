<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->
	    
    <div class="container py-4">
        <div class="row">

            <?php
                $news = new WP_Query(array(
                    'posts_per_page' => 10,
                    'order'=> 'DESC', 
                    'orderby' => 'date', 
                    'post_type' => 'post',
                    'category_name' => 'case-studies',
                    'paged' => 1,
                ));

                if ($news->have_posts()) : while($news->have_posts()) : $news->the_post(); 
            ?>

            <div class="col-xs col-sm-6 col-md-3">
                <div class="card card--image border-0">
                    <a href="<?php the_permalink(); ?>">
                        <figure class="mb-0">
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            } else { ?>
                                <img class="card-img-top rounded-0" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fallback-thumbnail.jpg" alt="<?php the_title_attribute(); ?>" />
                            <?php } ?>
                        </figure>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title small">
                            <?php
                                echo wp_trim_words( get_the_title(), 8, '...' );
                            ?>
                        </h5>
                        <p>
                            <a href="<?php the_permalink(); ?>" class="card-more">Learn more <i class="uil uil-arrow-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>

            <?php endwhile; else : ?>
                <div class="col-sm col-md">
                    <div class="alert alert-danger" role="alert">
                        <?php esc_html_e( 'Sorry! There are no news to display.' ); ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->


