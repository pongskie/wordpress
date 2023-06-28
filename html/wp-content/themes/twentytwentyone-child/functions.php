<?php

require get_theme_file_path('/inc/search-route.php');
require get_theme_file_path('/inc/job-route.php');

/*===================================================================================
 * Enqueue the latest jQuery as of 06/29/21
 * =================================================================================*/

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
  	wp_deregister_script('jquery');
  	wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js", false, null);
  	wp_enqueue_script('jquery');
}


/*===================================================================================
 * Enqueue scripts inside the body tag
 * =================================================================================*/

function enqueue_epldt_script() {
    wp_enqueue_script( 'parsley-script', get_theme_file_uri( 'js/parsley.min.js' ), [], '2.9.2', true);
    wp_enqueue_script( 'select2-script', get_theme_file_uri( 'js/select2.min.js' ), [], '4.1.0', true);
    wp_enqueue_script( 'validation-script', get_theme_file_uri( 'js/validation.js' ), [], '1.0.0', true);
    wp_enqueue_script( 'search-script', get_theme_file_uri( 'js/Search.js' ), [], '1.0.0', true);
    wp_localize_script( 'search-script', 'epldtData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));
    wp_enqueue_script( 'fancybox-script', get_theme_file_uri( 'js/jquery.fancybox.min.js' ), [], '3.2.10', true );
    wp_enqueue_script( 'app-script', get_theme_file_uri( '/js/app.js' ), [], '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_epldt_script' );

/*===================================================================================
 * Enqueue stylesheets based from wordpress codex
 * =================================================================================*/

function epldt_enqueue_styles() {

    $parent_style = 'parent-style'; 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style( 'select2-style', get_stylesheet_directory_uri() . '/css/select2.min.css');
    wp_enqueue_style( 'fancybox-style', get_stylesheet_directory_uri() . '/css/jquery.fancybox.min.css');

}
add_action( 'wp_enqueue_scripts', 'epldt_enqueue_styles' );


/*===================================================================================
 * Breadcrumbs
 * =================================================================================*/

function the_breadcrumb() {
        echo '<nav aria-label="breadcrumb"><ol class="breadcrumb">';
    if (!is_home()) {
        echo '<li class="breadcrumb-item"><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo "</a></li>";
        if (is_category() || is_single()) {
            echo '<li class="breadcrumb-item">';
            the_category(' </li><li class="breadcrumb-item"> ');
            if (is_single()) {
                echo "</li><li class='breadcrumb-item'>";
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            echo '<li class="breadcrumb-item active">';
            echo the_title();
            echo '</li></nav>';
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ol>';
}


/*===================================================================================
 * Display Form Error message
 * =================================================================================*/

function form_error_message($message = NULL) {
    
    if (!empty($message)) {
        
        return $message;
        
    } else {
        
        return "";
        
    }
    
}


/*===================================================================================
 * Add favicon
 * =================================================================================*/

function favicon() {
    
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_stylesheet_directory_uri().'/assets/img/favicon.ico" />';
    
}
add_action('wp_head', 'favicon');


/*===================================================================================
 * Add Custom Image Sizes
 * =================================================================================*/


add_image_size( 'news-thumbnail-small', 400, 250, array( 'center', 'center' ) ); 
add_image_size( 'ensights-securitips', 1366, 768, array( 'center', 'center' ) ); 


/*===================================================================================
 * Single Category Template for Careers
 * =================================================================================*/

function get_custom_cat_template($single_template) {
	
    global $post;
 
		if ( in_category( 'bundled-solution' )) {
          $single_template = dirname( __FILE__ ) . '/single-bundled-solution.php';
		};	
		
    return $single_template;
}
add_filter( "single_template", "get_custom_cat_template" ) ;



/*===================================================================================
 * Add Custom Post Type for Job Posts
 * =================================================================================*/

function cpt_job() {
 
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Job', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Job', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Jobs', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Jobs', 'twentytwentyone' ),
        'all_items'           => __( 'All Jobs', 'twentytwentyone' ),
        'view_item'           => __( 'View Job', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Job', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Job', 'twentytwentyone' ),
        'update_item'         => __( 'Update Job', 'twentytwentyone' ),
        'search_items'        => __( 'Search Job', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
    
    // Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'jobs', 'twentytwentyone' ),
        'description'         => __( 'jobs', 'twentytwentyone' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'thumbnail', 'revisions', 'editor',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'jobs', 'category' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
		'show_in_rest' => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-format-aside',
        'rewrite' => array('slug' => 'careers/jobs'),
    );
     
    // Registering your Custom Post Type
    register_post_type( 'jobs', $args );
 
    
}
add_action( 'init', 'cpt_job', 0 );


/*===================================================================================
 * Add Custom Footer Menu
 * =================================================================================*/

function wpb_custom_new_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );



/*===================================================================================
 * Load More Button for Newsroom
 * =================================================================================*/

add_action('wp_ajax_load_news_by_ajax', 'load_news_by_ajax_callback');
add_action('wp_ajax_nopriv_load_news_by_ajax', 'load_news_by_ajax_callback');
function load_news_by_ajax_callback() {
    check_ajax_referer('load_more_news', 'security');
    $paged = $_POST['page'];
    $args = array(
		'order'=> 'DESC', 
		'orderby' => 'date', 
		'post_type' => 'post',
		'category_name' => 'press-release',
		'posts_per_page' => 12,
        'paged' => $paged,
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) :
        ?>
        <?php while ( $my_posts->have_posts() ) : $my_posts->the_post(); ?>

        <div class="col-xs col-sm-6 col-md-3">
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

        <?php endwhile; ?>
        <?php
    endif;
 
    wp_die();
}


/*===================================================================================
 * Load More Button for Life at ePLDT
 * =================================================================================*/

add_action('wp_ajax_load_lifeatepldt_by_ajax', 'load_lifeatepldt_by_ajax_callback');
add_action('wp_ajax_nopriv_load_lifeatepldt_by_ajax', 'load_lifeatepldt_by_ajax_callback');
function load_lifeatepldt_by_ajax_callback() {
    check_ajax_referer('load_more_articles', 'security');
    $paged = $_POST['page'];
    $args = array(
		'order'=> 'DESC', 
		'orderby' => 'date', 
		'post_type' => 'post',
		'category_name' => 'life-at-epldt',
		'posts_per_page' => 12,
        'paged' => $paged,
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) :
        ?>
        <?php while ( $my_posts->have_posts() ) : $my_posts->the_post(); ?>

        <div class="col-xs col-sm-6 col-md-3">
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

        <?php endwhile; ?>
        <?php
    endif;
 
    wp_die();
}



/*===================================================================================
 * Load More Button for Jobs
 * =================================================================================*/

add_action('wp_ajax_load_jobs_by_ajax', 'load_jobs_by_ajax_callback');
add_action('wp_ajax_nopriv_load_jobs_by_ajax', 'load_jobs_by_ajax_callback');
function load_jobs_by_ajax_callback() {
    check_ajax_referer('load_more_jobs', 'security');
    $paged = $_POST['page'];
    $args = array(
		'order'=> 'DESC', 
		'orderby' => 'date', 
		'post_type' => 'jobs',
		'posts_per_page' => 12,
        'paged' => $paged,
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) :
        ?>
        <?php while ( $my_posts->have_posts() ) : $my_posts->the_post(); ?>

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

        <?php endwhile; ?>
        <?php
    endif;
 
    wp_die();
}



/*===================================================================================
 * Custom Login Logo and URL
 * =================================================================================*/

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-epldt-red.png);
            height:33px;
            width:140px;
            background-size: 140px 33px;
            background-repeat: no-repeat;
            margin-top: 30px;
            padding-bottom: 0;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function e_login_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'e_login_url', 10, 1 );

/*===================================================================================
 * Prevents Clickjacking
 * =================================================================================*/

function block_frames() {
header( 'X-FRAME-OPTIONS: SAMEORIGIN' );
}
add_action( 'send_headers', 'block_frames', 10 );


/*===================================================================================
 * Bootstrap 5 wp_nav_menu walker
 * =================================================================================*/

class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}

register_nav_menu('main-menu', 'Main menu');


// add tag support to pages
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
	
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

// Force SSL

function redirectToHTTPS(){
 //if($_SERVER['HTTPS']!="on"){
   //$redirect= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    //header("Location:$redirect");   
//}
}
//add_action('init','redirectToHTTPS');