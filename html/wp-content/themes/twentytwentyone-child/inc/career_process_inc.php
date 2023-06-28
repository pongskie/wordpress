<?php

    if (strlen($_POST['counter_user_id']) > 0) {
        echo '<p>Verification Error!</p>';
        exit();
    }

    if ( isset( $_POST['talkform_nonce_field'] ) || wp_verify_nonce( $_POST['talkform_nonce_field'], 'talkform_action' ) ) {
        
        // SET DATE/TIME TO LOCAL TIME
        date_default_timezone_set('Asia/Manila');
        
        if (!function_exists('wp_handle_upload')) { 
            require_once( ABSPATH . 'wp-admin/includes/image.php' );
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
            require_once( ABSPATH . 'wp-admin/includes/media.php' );      
        }

        $uploaded_file = $_FILES['uploaded_file_1'];
        $upload_overrides = array('test_form' => false);

        $allowed_extensions = array('doc', 'docx');
        $allowed_size = "1999999"; // 2 MB

        $uploaded_file_size = $_FILES['uploaded_file_1']['size'];
        $uploaded_file_extension = end(explode('.', $uploaded_file['name']));
   

        
        if ($uploaded_file_size != 0) {

            if ($uploaded_file_size < $allowed_size) {

                if (in_array($uploaded_file_extension, $allowed_extensions)) { // check file format

                    $movefile = wp_handle_upload($uploaded_file, $upload_overrides); 

                    if ($movefile && !isset($movefile['error'])) {  

                        $doc_name = $uploaded_file["name"];
                        $doc_size = $uploaded_file["size"];
                        $doc_format = $uploaded_file_extension;
                        $doc_url = print_r($movefile[url], true);

                        $sql22 = $wpdb->query(
                            $wpdb->prepare("INSERT INTO wp_career_post (
                                    first_name
                                    ,last_name
                                    ,email_address
                                    ,contact_number
                                    ,doc_name
                                    ,doc_size
                                    ,doc_format
                                    ,doc_url
                                    ,school
                                    ,degree
                                    ,course
                                    ,current_employer
                                    ,know_about_opportunity
                                    ,cover_letter
                                    ,applying_for
                                    ,date_applied
                                    ,time_applied
                                ) VALUES (
                                    %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s
                                )", 
                                    ''
                                    ,''
                                    ,''
                                    ,''
                                    ,$doc_name
                                    ,$doc_size
                                    ,$doc_format
                                    ,$doc_url
                                    ,''
                                    ,''
                                    ,''
                                    ,''
                                    ,''
                                    ,''
                                    ,''
                                    ,date('Y-m-d')
                                    ,date('H:i:s')
                            )
                        );
                        $last_inserted_sql22= $wpdb->insert_id;
                        
                        
                        if ($sql22) {
            
                            $success_upload = 'YES';

                            $first_name = sanitize_text_field($_POST['first_name']);
                            $last_name = sanitize_text_field($_POST['last_name']);
                            $email_address = sanitize_text_field($_POST['email_address']);
                            $contact_number = sanitize_text_field($_POST['contact_number']);
                            $school = sanitize_text_field($_POST['school']);
                            $degree = sanitize_text_field($_POST['degree']);
                            $course = sanitize_text_field($_POST['course']);
                            $current_employer = sanitize_text_field($_POST['current_employer']);
                            $know_about_opportunity = sanitize_text_field($_POST['know_about_opportunity']);
                            $cover_letter = sanitize_text_field($_POST['cover_letter']);
                            $applying_for = sanitize_text_field($_POST['applying_for']);

                            $sql33 = $wpdb->query(
                                $wpdb->prepare( 
                                        "UPDATE wp_career_post
                                        SET 
                                            first_name = %s
                                            , last_name = %s
                                            , email_address = %s
                                            , contact_number = %s
                                            , school = %s
                                            , degree = %s
                                            , course = %s
                                            , current_employer = %s
                                            , know_about_opportunity = %s
                                            , cover_letter = %s
                                            , applying_for = %s
                                        WHERE careerid = %d"
                                            , $first_name
                                            , $last_name
                                            , $email_address
                                            , $contact_number
                                            , $school
                                            , $degree
                                            , $course
                                            , $current_employer
                                            , $know_about_opportunity
                                            , $cover_letter
                                            , $applying_for
                                            , $last_inserted_sql22 //careerid
                                ) 
                            );
            
// Get Doc URL
$sql44 = "SELECT careerid, doc_url FROM wp_career_post WHERE careerid = '".$last_inserted_sql22."' ";
$results44  = $wpdb->get_results( $sql44 );
foreach( $results44 as $res44 ): 
endforeach;
        
// Send Email to HR

$replace = str_replace("-", " ", $applying_for);
        
if ($_SERVER['SERVER_NAME'] == 'www.epldt.com') {
    if ($email_address == 'knnolasco@epldt.com') {
        $to = 'knnolasco@epldt.com';
    } else {
        $to = 'careers@epldt.com';
    }
} else if ($_SERVER['SERVER_NAME'] == 'staging.epldt.com') {
    $to = 'knnolasco@epldt.com';
} else {
    $to = 'ajabarayuga@epldt.com';
}
$subject = 'Applying for: '.strtoupper($replace);
$message = ' 
<p>Hello HR,</p>

<p>APPLYING FOR:</p>    
<p>'.strtoupper($replace).'</p>
<p><a href="'.$res44->doc_url.'"><strong>CLICK HERE TO DOWNLOAD RESUME</strong></a></p>
    
<p>PERSONAL:</p>
<table>
<tr><td>First Name</td><td>:</td><td>'.$first_name.'</td></tr>
<tr><td>Last Name</td><td>:</td><td>'.$last_name.'</td></tr>
<tr><td>Email Address</td><td>:</td><td>'.$email_address.'</td></tr>
<tr><td>Contact Number</td><td>:</td><td>'.$contact_number.'</td></tr>
</table>

<p>EDUCATION:</p>
<table>
<tr><td>School</td><td>:</td><td>'.$school.'</td></tr>
<tr><td>Degree</td><td>:</td><td>'.$degree.'</td></tr>
<tr><td>Course</td><td>:</td><td>'.$course.'</td></tr>
</table>

<p>EMPLOYMENT HISTORY:</p>
<table>
<tr><td>Current Employer</td><td>:</td><td>'.$current_employer.'</td></tr>
</table>

<p>SURVEY:</p>
<table>
<tr><td>How did you know about opportunity?</td><td>:</td><td>'.$know_about_opportunity.'</td></tr>
<tr><td>Cover Letter</td><td>:</td><td>'.$cover_letter.'</td></tr>
</table>

<p>Thank you very much.</p>
<br /><br />
<p>This is a system generated e-mail. Please do not reply.</p>';

//$headers[] = 'MIME-Version: 1.0' . '\r\n';
$headers[] = "Content-type:text/html; charset=UTF-8" . "\r\n";
$headers[] = "From: <careers@epldt.com>" . "\r\n";
//$headers[] = "Bcc: sbmagahis@pldt.com.ph";
//$headers[] = "Bcc: esgutierrez@pldt.com.ph";
wp_mail( $to, $subject, $message, $headers );
        
        wp_redirect(get_option('siteurl').'/tteg-result/?dp=ca');
        exit;
            
                        } else {
                            $success_upload = 'NO';
                        }

                    } else {
                        //Error generated by _wp_handle_upload()
                        //@see _wp_handle_upload() in wp-admin/includes/file.php
                        //echo '<p style="color: #ff0000 !important;">* '.$movefile['error'].'</p><br />';
                        //$movefile_error = true;
                        $success_upload = 'NO';
                        //echo 'ONE';
                    }

                } else { 
                    $success_upload = 'NO';  
                    //echo 'TWO'; 
                }    

            } else { 
                $success_upload = 'NO';
                //echo 'THREE';
            }

        } else {        
            $success_upload = 'NO';
            //echo 'FOUR';
        }
        

    } else { // eof: nonce
        echo '<p>Sorry, Nonce Verification error</p>';
        exit();
    }

//}