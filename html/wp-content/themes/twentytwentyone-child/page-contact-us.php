<?php
/**
 * The template for contact us
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if (isset($_POST[ 'submit-careers' ])) {
    include( 'inc/career_process_inc.php' );
}

get_header(); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php
                $fr = sanitize_text_field($_GET['fr']);
                switch ($fr) {                        

                    case "ca": 
                        include('inc/form_careers.inc.php');
                        break;
                }
            ?>
        </div>
    </div>
</div>

<?php get_footer();
