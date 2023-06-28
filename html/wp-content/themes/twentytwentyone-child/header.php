<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
		


<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
    <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet" />

<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
 function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
</script>

    <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <?php if ( is_page_template( 'form-template.php' ) ) { ?>
        <style>
            .e-hero { display: none; }
        </style>
    <?php } else { ?>
    <?php } ?>

    <?php if ( is_page( array('success', 'web-to-lead-form', 'privacy-policy', 'our-privacy-commitment' ) ) ) { ?>
        <style>
            .e-hero { display: none; }
        </style>
    <?php } else { ?>
    <?php } ?>
    
    <?php if ( is_front_page() ) { ?>
        <style>
            body main { padding-top: 0; }
        </style>
    <?php } else { ?>
    <?php } ?>

    <?php if ( is_singular( 'jobs' ) ) { ?>
        <style>
            body .e-hero { display: none; }
        </style>
    <?php } else { ?>
    <?php } ?>
   
    <?php get_template_part( 'template-parts/header/site-header' ); ?>
    
    <main>


			
			
