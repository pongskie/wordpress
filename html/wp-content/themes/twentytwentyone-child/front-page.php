<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>

<!-- BANNER -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="https://pldtenterprise.com/phdigicon2021" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banners/01_Revolution_Design_Registration_Banner_1920x350.png" class="d-block w-100" alt="Revolution Design Registration" />
            </a>
        </div>
        <div class="carousel-item">
            <a href="<?php echo site_url(); ?>/ehealth/" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banners/banner-eHealth.jpg" class="d-block w-100" alt="eHealth" />
            </a>
        </div>
        <div class="carousel-item">
            <a href="https://www.youtube.com/watch?v=FS6v_o8PIjM&feature=youtu.be" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banners/03_Revolution_ePLDT_Website_Banner_1920x350.png" class="d-block w-100" alt="Revolution ePLDT Website" />
            </a>
        </div>
        <div class="carousel-item">
            <a href="<?php echo site_url(); ?>/eoperations/" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banners/banner-eOC.jpg" class="d-block w-100" alt="Banner EOC" />
            </a>
        </div>
        <div class="carousel-item">
            <a href="https://www.youtube.com/watch?v=V02zG0IXTfU" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banners/02_CT_Reveal_ePLDT_Website_Banner_1920x350.png" class="d-block w-100" alt="CT Reveal ePLDT Website" />
            </a>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- END BANNER -->
 
<!-- BUNDLED SOLUTIONS -->
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-sm col-md-8">
            <?php printf( '<h2>' . esc_html__( 'Ensure Business Solutions eBundle', 'twentytwentyone' ) . '</h2>'); ?>
            <?php printf( '<p>' . esc_html__( 'Explore ePLDTs latest continuity solution and bundled offerings for your business', 'twentytwentyone' ) . '</p>'); ?>
        </div>
    </div>
    <div class="row">
        <?php
            $news = new WP_Query(array(
                'posts_per_page' => 12,
                'order'=> 'DESC', 
                'orderby' => 'date', 
                'post_type' => 'post',
                'category_name' => 'bundled-solution',
                'paged' => 1,
            ));

            if ($news->have_posts()) : while($news->have_posts()) : $news->the_post(); 
        ?>
     
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--image border-0">
                <a href="<?php the_permalink(); ?>">
                    <figure class="mb-0">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'news-thumbnail-small' );
                            } else { ?>
                            <img class="card-img-top rounded-0" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fallback-thumbnail.jpg" alt="<?php the_title_attribute(); ?>" />
                        <?php } ?>
                    </figure>
                </a>
                <div class="card-body">
                <h5 class="card-title small">
                    <?php if( get_field( 'hero_title' ) ): ?>
                        <?php the_field( 'hero_title' ); ?>
                    <?php else : ?>
                        <?php the_title(); ?>
                    <?php endif; ?>
                </h5>
                <p><a href="<?php the_permalink(); ?>" class="card-more">Learn more <i class="uil uil-arrow-right"></i></a></p>
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
<!-- END BUNDLED SOLUTIONS -->

<!-- VIDEO  -->
<div class="container py-5">
    <div class="row">
        <div class="col-xs col-md-6">
            <header class="mb-4">
                <h2 class="mb-3"><?php printf(esc_html__( 'UNBREAKABLE', 'twentytwentyone' )); ?></h2>
                <p><?php printf(esc_html__( 'PLDT Enterprise and ePLDT give tribute to the unbreakable spirit of the Filipino entrepreneur and businesses that have emerged forever changed after all the challenges - stronger, tougher, fearless.', 'twentytwentyone' )); ?></p>
            </header>
            <div class="embed-responsive embed-responsive-16by9 mb-4">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube-nocookie.com/embed/XLhtqEJHxn4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-xs col-md-6">
            <header class="mb-4">
                <h2 class="mb-3"><?php printf(esc_html__( 'REVOLUTION', 'twentytwentyone' )); ?></h2>
                <p><?php printf(esc_html__( 'Embrace the change and take the lead with innovative and Revolutionary ICT solutions. Join the ICT REVOLUTION. You are UNBREAKABLE.', 'twentytwentyone' )); ?></p>
            </header>
            <div class="embed-responsive embed-responsive-16by9 mb-4">
            <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube-nocookie.com/embed/-J6k3410AW0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- END OF VIDEOS -->

<!-- PILLARS -->
<div class="container py-5">
    <div class="row mb-4">
        <header class="col-sm col-md-6">
            <?php printf( '<h2>' . esc_html__( 'All the essential tools to impact the world, all in one place', 'twentytwentyone' ) . '</h2>'); ?>
            <?php printf( '<p>' . esc_html__( 'Explore ePLDTs latest continuity solution and bundled offerings for your business.', 'twentytwentyone' ) . '</p>'); ?>
        </header>
    </div>
    <div class="row">
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--icon card--shadow rounded-0 mb-4">
                <div class="card-body">
                    <i class="uil uil-server"></i>
                    <?php printf( '<h5 class="card-title">' . esc_html__( 'Data Center', 'twentytwentyone' ) . '</h5>'); ?>
                    <?php printf( '<p>' . esc_html__( 'Protect mission-critical assets in a global-class and highly robust data center facility.', 'twentytwentyone' ) . '</p>'); ?>
                    <p><a href="<?php echo site_url(); ?>/managed-it/" class="card-more">
                        <?php printf(esc_html__( 'Learn more', 'twentytwentyone' )); ?> <i class="uil uil-arrow-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--icon card--shadow rounded-0 mb-4">
                <div class="card-body">
                    <i class="uil uil-cloud"></i>
                    <?php printf( '<h5 class="card-title">' . esc_html__( 'Cloud', 'twentytwentyone' ) . '</h5>'); ?>
                    <?php printf( '<p>' . esc_html__( 'Our cloud solutions are especially designed according to your needs.', 'twentytwentyone' ) . '</p>'); ?>
                    <p><a href="<?php echo site_url(); ?>/managed-it/" class="card-more">
                        <?php printf(esc_html__( 'Learn more', 'twentytwentyone' )); ?> <i class="uil uil-arrow-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--icon card--shadow rounded-0 mb-4">
                <div class="card-body">
                    <i class="uil uil-shield-plus"></i>
                    <?php printf( '<h5 class="card-title">' . esc_html__( 'Cyber Security', 'twentytwentyone' ) . '</h5>'); ?>
                    <?php printf( '<p>' . esc_html__( 'Security is not optional. Don’t let vulnerabilities take your business down.', 'twentytwentyone' ) . '</p>'); ?>
                    <p><a href="<?php echo site_url(); ?>/managed-it/" class="card-more">
                        <?php printf(esc_html__( 'Learn more', 'twentytwentyone' )); ?> <i class="uil uil-arrow-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--icon card--shadow rounded-0 mb-4">
                <div class="card-body">
                    <i class="uil uil-setting"></i>
                    <?php printf( '<h5 class="card-title">' . esc_html__( 'Managed IT', 'twentytwentyone' ) . '</h5>'); ?>
                    <?php printf( '<p>' . esc_html__( 'Focus on your core operations and let our experts handle your critical IT operations.', 'twentytwentyone' ) . '</p>'); ?>
                    <p><a href="<?php echo site_url(); ?>/managed-it/" class="card-more">
                        <?php printf(esc_html__( 'Learn more', 'twentytwentyone' )); ?> <i class="uil uil-arrow-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF PILLARS -->

<!-- INDUSTRY -->
<div class="container py-5">
    <div class="row mb-4">
        <header class="col-sm col-md-6">
            <?php printf( '<h2>' . esc_html__( 'At the center of every industry', 'twentytwentyone' ) . '</h2>'); ?>
            <?php printf( '<p>' . esc_html__( 'We propel the country forward with our widest spectrum of digital infrastructure.', 'twentytwentyone' ) . '</p>'); ?>
        </header>
    </div>
    <div class="row">
      
        <?php
            $news = new WP_Query(array(
                'posts_per_page' => 5,
                'order'=> 'DESC', 
                'orderby' => 'date', 
                'post_type' => 'post',
                'category_name' => 'industry',
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
                    <h5 class="card-title truncate-overflow small">
                        <?php the_title(); ?>
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
<!-- END OF INDUSTRY -->

<!-- AWARDS AND RECOGNITIONS-->
<div class="container py-5">
    <div class="row mb-4 align-items-center">
        <div class="col-sm col-md-6">
            <?php printf( '<h2>' . esc_html__( 'Awards and Recognition', 'twentytwentyone' ) . '</h2>'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--image border-0">
                <figure class="mb-0">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/asus-zenith-award.jpg" class="card-img-top rounded-0" alt="Asus Zenith Award" />
                </figure>
                <div class="card-body">
                    <?php printf( '<h5 class="card-title small">' . esc_html__( 'Asus Zenith Award', 'twentytwentyone' ) . '</h5>'); ?>
                </div>
            </div>
        </div>
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--image border-0">
                <a href="">
                    <figure class="mb-0">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cisco-partner-of-the-year.jpg" class="card-img-top rounded-0" alt="CISCO Partner of the Year" />
                    </figure>
                </a>
                <div class="card-body">
                    <?php printf( '<h5 class="card-title small">' . esc_html__( 'CISCO Partner of the Year', 'twentytwentyone' ) . '</h5>'); ?>
                </div>
            </div>
        </div>
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--image border-0">
                <a href="">
                    <figure class="mb-0">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cisco-software-partner-of-the-year.jpg" class="card-img-top rounded-0" alt="PLDT rallies businesses to boost cybersecurity, as attacks quadruple" />
                    </figure>
                </a>
                <div class="card-body">
                    <?php printf( '<h5 class="card-title small">' . esc_html__( 'CISCO Software Partner of the Year', 'twentytwentyone' ) . '</h5>'); ?>
                </div>
            </div>
        </div>
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--image border-0">
                <a href="">
                    <figure class="mb-0">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cisco-top-business-partner.jpg" class="card-img-top rounded-0"  alt="Cisco Top Business Partner" />
                    </figure>
                </a>
                <div class="card-body">
                    <?php printf( '<h5 class="card-title small">' . esc_html__( 'Cisco Top Business Partner', 'twentytwentyone' ) . '</h5>'); ?>
                </div>
            </div>
        </div>
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--image border-0">
                <a href="">
                    <figure class="mb-0">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/microsoft-para-sa-bayan-award.jpg" class="card-img-top rounded-0" alt="Microsoft Para sa Bayan Award" />
                    </figure>
                </a>
                <div class="card-body">
                    <?php printf( '<h5 class="card-title small">' . esc_html__( 'Microsoft Para sa Bayan Award', 'twentytwentyone' ) . '</h5>'); ?>
                </div>
            </div>
        </div>
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--image border-0">
                <a href="">
                    <figure class="mb-0">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/microsoft-tech-intensity-award.jpg" class="card-img-top rounded-0" alt="Microsoft Tech Intensity Award" />
                    </figure>
                </a>
                <div class="card-body">
                <?php printf( '<h5 class="card-title small">' . esc_html__( 'Microsoft Tech Intensity Award', 'twentytwentyone' ) . '</h5>'); ?>
                </div>
            </div>
        </div>
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--image border-0">
                <a href="">
                    <figure class="mb-0">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fortinet-retail-partner-of-the-year.jpg" class="card-img-top rounded-0" alt="Fortinet Retail Partner of the Year" />
                    </figure>
                </a>
                <div class="card-body">
                    <?php printf( '<h5 class="card-title small">' . esc_html__( 'Fortinet Retail Partner of the Year', 'twentytwentyone' ) . '</h5>'); ?>
                </div>
            </div>
        </div>
        <div class="col-xs col-sm-6 col-md-3">
            <div class="card card--image border-0">
                <a href="">
                    <figure class="mb-0">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hpe-service-provider-of-the-year.jpg" class="card-img-top rounded-0" alt="HPE Service Provider of the Year" />
                    </figure>
                </a>
                <div class="card-body">
                    <?php printf( '<h5 class="card-title small">' . esc_html__( 'HPE Service Provider of the Year', 'twentytwentyone' ) . '</h5>'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END AWARDS AND RECOGNITIONS -->

<!-- CALL TO ACTION -->
<div class="container py-5">
    <div class="row mb-4 align-items-center">
        <div class="col-sm col-md-6">
            <?php printf( '<h2 class="h1">' . esc_html__( 'Leave the complex IT situation to us.', 'twentytwentyone' ) . '</h2>'); ?>
            <?php printf( '<p class="lead">' . esc_html__( 'Jumpstart your journey towards transformative growth with ePLDT
            now.', 'twentytwentyone' ) . '</p>'); ?>
            <p>
                <a href="<?php echo site_url(); ?>" class="btn btn-danger"><?php printf(esc_html__( 'Schedule a Meeting', 'twentytwentyone' )); ?></a>
            </p>
        </div>
        <div class="col-sm col-md-6">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/transformative-growth-with-ePLDT.svg" alt="Leave the complex IT situation to us." />
        </div>
    </div>
</div>
<!-- END CALL TO ACTION -->

<!-- SUBSIDIARIES -->
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-sm col-md-6">
            <?php printf( '<h2>' . esc_html__( 'We are ONE. We are ONE Team.', 'twentytwentyone' ) . '</h2>'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-md-4">
            <div class="card card--image border-0">
                <a href="https://ags.com.ph/" target="blank">
                    <figure class="mb-0">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-ags.jpg" class="card-img-top rounded-0" alt="AGS" />
                    </figure>
                </a>
                <div class="card-body">
                    <?php printf( '<p>' . esc_html__( 'Capture all of your business information in a single scalable system.', 'twentytwentyone' ) . '</p>'); ?>
                    <p>
                        <a href="https://ags.com.ph/" target="blank" class="card-more">
                            <?php printf(esc_html__( 'Learn more', 'twentytwentyone' )); ?> <i class="uil uil-arrow-right"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs col-md-4">
            <div class="card card--image border-0">
                <a href="https://www.curoteknika.com/site/page/content" target="blank">
                    <figure class="mb-0">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-curotek.jpg" class="card-img-top rounded-0" alt="CuroTek" />
                    </figure>
                </a>
                <div class="card-body">
                    <?php printf( '<p>' . esc_html__( 'We help different industries and sectors managed the broad aspects of IT in their business.', 'twentytwentyone' ) . '</p>'); ?>
                    <p>
                        <a href="https://www.curoteknika.com/site/page/content" target="blank" class="card-more">
                            <?php printf(esc_html__( 'Learn more', 'twentytwentyone' )); ?> <i class="uil uil-arrow-right"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs col-md-4">
            <div class="card card--image border-0">
                <a href="https://epdsi.ph/" target="blank">
                <figure class="mb-0">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-epds.jpg" class="card-img-top rounded-0" alt="ePDS" />
                </figure>
                </a>
                <div class="card-body">
                    <?php printf( '<p>' . esc_html__( 'We provide inovative technology to deliver your companys digital transformation needs', 'twentytwentyone' ) . '</p>'); ?>
                    <p>
                        <a href="https://epdsi.ph/" target="blank" class="card-more">
                            <?php printf(esc_html__( 'Learn more', 'twentytwentyone' )); ?> <i class="uil uil-arrow-right"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SUBSIDIARIES -->

<!-- NEWS -->
<div class="container py-5">
    <div class="row mb-4 align-items-center">
        <div class="col-sm col-md-6">
            <?php printf( '<h2>' . esc_html__( 'Discover what’s happening in the IT landscape', 'twentytwentyone' ) . '</h2>'); ?>
            <?php printf( '<p>' . esc_html__( 'See latest news about ePLDT up to the minute', 'twentytwentyone' ) . '</p>'); ?>
        </div>
        <div class="col-sm col-md-6">
            <p class="mb-0">
                <a href="<?php echo site_url(); ?>/newsroom/" class="card-more">
                    <?php printf(esc_html__( 'Go to Newsroom', 'twentytwentyone' )); ?> <i class="uil uil-arrow-right"></i>
                </a>
            </p>
        </div>
    </div>
    <div class="row">

    <?php
        $news = new WP_Query(array(
            'posts_per_page' => 4,
            'order'=> 'DESC', 
            'orderby' => 'date', 
            'post_type' => 'post',
            'category_name' => 'press-release',
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
                <h5 class="card-title truncate-overflow small">
                    <?php the_title(); ?>
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
<!-- END NEWS -->

<!-- VIDEO MODAL -->
<div class="modal fade" id="purposeVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/kLOlHChwxTc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<!-- END VIDEO MODAL -->

<script>
$(document).ready(function() {
	$('.watch-video').on('click', function(e) {
		e.preventDefault();
		var src = $(this).attr('href');
		$('#purposeVideo').on('shown.bs.modal');
		$('#purposeVideo iframe').attr('src', src);
	});
	//auto close or pause on model hide
	$("#purposeVideo").on('hidden.bs.modal', function(e) {
		$("#purposeVideo iframe").attr("src", '');
	});
});
</script>


<?php get_footer();
