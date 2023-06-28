<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
<div class="row justify-content-between">
<div class="col-md-8">
<h1 class="fs-1"><?php the_title(); ?></h1>
                                <ul class="job-location mb-5">
                                    <?php
                                        $field = get_field_object('job_location');
                                        $value = $field['value'];
                                        $label = $field['choices'][ $value ];
                                    ?>
                                    <li><i class="uil uil-map-marker"></i> <?php echo $label; ?></li>
                                </ul>
</div>
</div>
            <div class="row justify-content-between">
                <div class="col-md-7">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="job-content">
                            <?php if( get_field( 'job_description' ) ): ?>
                                <div class="pb-4">
                                    <p class="mb-3"><strong>Job Description</strong></p>
                                    <?php the_field( 'job_description' ); ?>
                                </div>
                            <?php else : ?>
                            <?php endif; ?>
                            <?php if( get_field( 'job_qualification' ) ): ?>
                                <div class="py-4">
                                    <p class="mb-3"><strong>Job Qualification</strong></p>
                                    <?php the_field( 'job_qualification' ); ?>
                                </div>
                            <?php else : ?>
                            <?php endif; ?>
                             
                            <a class="btn btn-danger btn-lg mt-4 mb-4" href="mailto:careers@epldt.com">
                                Apply Now
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <di class="job-contact">
                       <p class="mb-3"><strong><?php _e( 'Question in Mind', 'twentytwentyone' ); ?></strong></p>
                        <div class="card mb-4">
                            <div class="card-body py-4 px-4">
                                <p><?php _e( 'If you have any questions please do not hesitate to contact below:', 'twentytwentyone' ); ?></p>
                                <ul class="unstyled">
                                    <li><a href="mailto:careers@epldt.com"><?php _e( 'careers@epldt.com', 'twentytwentyone' ); ?></a></li>
                                    <li><?php _e( 'tel: (02) 8 859 0088 loc 5154', 'twentytwentyone' ); ?></li>
                                </ul>
                            </div>
                        </div>
                        <p class="mb-3"><strong>Share this job</strong></p>
                        <ul class="list-unstyled list-inline mb-0 px-0">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="icon-circle icon--medium" target="_blank">
                                    <i class="uil uil-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/intent/tweet?text='<?php the_permalink(); ?>'&amp;url='<?php the_title(); ?>'&amp;via=ePLDT'" class="icon-circle icon--medium" target="_blank">
                                    <i class="uil uil-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url='<?php the_permalink(); ?>'&amp;title='<?php the_title(); ?>" class="icon-circle icon--medium" target="_blank">
                                    <i class="uil uil-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </di>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php get_footer();
