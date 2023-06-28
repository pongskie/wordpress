<?php 

add_action('rest_api_init', 'epldtJobSearch');

function epldtJobSearch() {
    register_rest_route('epldt/v1', 'job', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'epldtJobSearchResults'
    ));
}


function epldtJobSearchResults($data) {
    
    $epldtJobs = new WP_Query(array(
        'post_type' => 'jobs',
        'posts_per_page' => -1,
        's' => sanitize_text_field($data['term'])
    ));
    
    $epldtJobResults = array();
    
    while($epldtJobs->have_posts()) {
        $epldtJobs->the_post();
        array_push($epldtJobResults, array(
            'title' => get_the_title(),
            'permalink' => get_the_permalink(),
            'content' => get_the_content(),
            'excerpt' => get_the_excerpt(),
            'job_location' => get_field('job_location'),
            'date' => get_the_date()
        ));
    }
    
    return $epldtJobResults;
}