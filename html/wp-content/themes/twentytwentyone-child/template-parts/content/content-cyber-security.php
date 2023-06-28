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

    <div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<h3 class="fs-3 fw-bold mb-5">Resources and Articles</h3>
</div>
</div>
        <div class="row">
          <div class="col-lg-6">
<div class="ensights">
            <?php
                $jobs = new WP_Query(array(
                    'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'category_name' => 'ensights',
                    'paged' => 1,
                ));
                if ($jobs->have_posts()) : while($jobs->have_posts()) : $jobs->the_post(); 
            ?>
            
            <?php if ( has_post_thumbnail() ) { ?>
<?php $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
<a data-fancybox="gallery" href="<?php echo esc_url( $attachment_image ); ?>">
                  <?php the_post_thumbnail('full', ['class' => 'ensights-securitips']); ?>
</a>
<?php } else {  ?>
            <?php }  ?> 
            
            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry! There are no eNSIGHTS post to display.' ); ?></p>
            <?php endif; ?>
</div>
          </div>
          <div class="col-lg-6">
<div class="cyber-securitips">
            <?php
                $jobs = new WP_Query(array(
                    'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'category_name' => 'cybersecuritips',
                    'paged' => 1,
                ));
                if ($jobs->have_posts()) : while($jobs->have_posts()) : $jobs->the_post(); 
            ?>
            
            <?php if ( has_post_thumbnail() ) { ?>
<?php $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
<a data-fancybox="gallery" href="<?php echo esc_url( $attachment_image ); ?>">
                  <?php the_post_thumbnail('full', ['class' => 'ensights-securitips']); ?>
</a>
<?php } else {  ?>
            <?php }  ?> 
            
            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry! There are no Cyber Securitips post to display.' ); ?></p>
            <?php endif; ?>
          </div>
</div>
        </div>
      </div>


