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
	
    <div class="container">
        <div class="row newsroom">
           
            <?php
                $news = new WP_Query(array(
                    'posts_per_page' => 12,
                    'order'=> 'DESC', 
                    'orderby' => 'date', 
                    'post_type' => 'post',
                    'category_name' => 'life-at-epldt',
                    'paged' => 1,
                ));

                if ($news->have_posts()) : while($news->have_posts()) : $news->the_post(); 
            ?>
            
            <div class="col-xs col-sm-6 col-md-3 newsroom-item">
                <div class="card card--image border-0">
                    <a href="<?php the_permalink(); ?>">
                        <figure class="mb-0">
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                                } else { ?>
                                <img class="card-img-top rounded-0" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fallback-thumbnail.png" alt="<?php the_title_attribute(); ?>" />
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

        <?php 
                $args = array( 
                    'posts_per_page' => 12,
                    'post_type' => 'post',
                    'category_name' => 'life-at-epldt',
                );
                $loop = new WP_Query( $args );
                $numposts = $loop->post_count; 
            ?>
            <?php if ($numposts > 11) { ?>
                <div class="my-3 text-center">
                    <button class="btn btn-danger load-more-articles">
                        Load More Articles
                    </button>
                </div>
            <?php } else if ($numposts < 11) { ?>
            <?php } else { ?>
            <?php } ?>

			<div class="no-articles text-center"></div>		

    </div>

</article>

<script>
    var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
    var page = 2;
    jQuery(function ($) {
        $('body').on('click', '.load-more-articles', function () {
            var data = {
            'action': 'load_lifeatepldt_by_ajax',
            'page': page,
            'security': '<?php echo wp_create_nonce("load_more_articles"); ?>'
            };
            $.post(ajaxurl, data, function (response) {
            if (response != '') {
                $('.newsroom').append(response);
                var n = $( ".newsroom-item" ).length;
                $( ".count" ).text( "Displaying " + n + " recent articles");
                page++;
            } else {
                $('.load-more-articles').hide();
                $('.no-articles').text( "There are no more articles to display!" );
            }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        var n = $( ".newsroom-item" ).length;
        $( ".count" ).text( "Displaying " + n + " recent articles");       
    });
</script>
        
