<?php 

add_action('rest_api_init', 'epldtJob');

function epldtJob() {
    register_rest_route('epldt/v1', 'joblist', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'epldtJobResults'
    ));
}


function epldtJobResults($data) {
    
    $epldtJobs = new WP_Query(array(
        'post_type' => 'jobs',
        'posts_per_page' => 10,
        'paged' => $paged
    ));
    
    $epldtJobResults = array();
    
    while($epldtJobs->have_posts()) {
        $epldtJobs->the_post();
        array_push($epldtJobResults, array(
            'title' => get_the_title(),
            'permalink' => get_the_permalink(),
            'content' => get_the_content(),
            'excerpt' => get_the_excerpt(),
            'location' => get_field('location'),
            'type' => get_field('type'),
            'date' => get_the_date()
        ));
    }
    
    return $epldtJobResults;
}


