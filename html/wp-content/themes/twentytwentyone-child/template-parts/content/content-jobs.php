<?php
/**
 * Template part for displaying job content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-10">
        
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="form-search mb-4">
                            <input type="text" class="search-term" id="search-term" placeholder="Search Jobs...">
                            <i class="bi bi-search"></i>
                        </div>
                    </div>
                </div>
                <div id="search-results">
                    <div class="jobs">

                        <?php
                            $jobs = new WP_Query(array(
                                'posts_per_page' => 10,
                                'post_status' => 'publish',
                                'post_type' => 'jobs',
                                'paged' => 1,
                            ));
                            if ($jobs->have_posts()) : while($jobs->have_posts()) : $jobs->the_post(); 
                        ?>
                        
                        <div class="row align-items-center job-item" href="<?php the_permalink(); ?>">
                            <div class="col-md-10">
<h2 class="job-title"><?php the_title(); ?></h2>
                                <ul class="job-location">
                                    <?php
                                        $field = get_field_object('job_location');
                                        $value = $field['value'];
                                        $label = $field['choices'][ $value ];
                                    ?>
                                    <li><i class="uil uil-map-marker"></i> <?php echo $label; ?></li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <div class="d-grid gap-2">
                                    <a class="btn btn-danger btn-sm" href="<?php the_permalink(); ?>">Apply Now</a>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'Sorry! There are no jobs to display.' ); ?></p>
                        <?php endif; ?>

                    </div>
                </div>

            </article>

            <?php 	
                $args = array( 
		    'posts_per_page' => 12, 
                    'post_type' => 'jobs' 
                );
                $loop = new WP_Query( $args );
                $numposts = $loop->post_count; 
            ?>

            <?php if ($numposts > 10) { ?>
                <div class="text-center mt-5 mb-5">
                    <button class="btn btn-danger load-more-jobs">Load More Jobs</button>
                </div>
            <?php } else if ($numposts < 10) { ?>
            <?php } else { ?>
            <?php } ?>
            
            <div class="nojobs text-center"></div>
        
        </div>
    </div>
</div>

<script>
    var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
    var page = 2;
    jQuery(function ($) {
    $('body').on('click', '.load-more-jobs', function () {
        var data = {
        'action': 'load_jobs_by_ajax',
        'page': page,
        'security': '<?php echo wp_create_nonce("load_more_jobs"); ?>'
        };
        $.post(ajaxurl, data, function (response) {
        if (response != '') {
            $('.jobs').append(response);
            var n = $( ".job-item" ).length;
            $( ".count" ).text( "Displaying " + n + " recent job posts");
            page++;
        } else {
            $('.load-more-jobs').hide();
            $('.nojobs').text( "There are no more jobs to display" );
        }
        });
    });
    }); 
</script>

<script>
    $(document).ready(function() {
        var n = $( ".job-item" ).length;
        $( ".count" ).text( "Displaying " + n + " recent job posts");       
    });
</script>


