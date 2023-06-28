<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/formfieldlimiter.js"></script>

<style>
    input[type="submit"]:disabled {
      background: #aaa;
      color: #212121;
      opacity: 0.3;
    }
    input[type="submit"]:disabled:hover {
      background: #aaa;
      color: #212121;
      opacity: 0.3;
    }
</style>

<header class="text-center">
    <h3 class="mb-2">Become a Pacesetter!</h3>
    <p class="mb-4">We will always have an interest in people who want to pursue a challenging and exciting career.</p>
</header>

<div class="row">
    <div class="col-md">
        <?php echo form_error_message($message); echo '<br />'; ?>                                    
    </div>
</div>

<form name="cover_letter_form" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" enctype="multipart/form-data">
    
    <?php wp_nonce_field( 'talkform_action', 'talkform_nonce_field' ); ?>

    <div class="grid-x grid-padding-x align-center">
        <div class="cell medium-12 large-8">
            
            <?php
            if ($success_upload == 'NO') {
                echo '<p style="color: red">An error occured while uploading the file. Please check the document you are trying to upload.</p>';
            }
            
            $job = $_GET['job'];
            $replace = str_replace("-", " ", $job);
            echo strtoupper('<h4><strong>'.$replace.'</strong></h4>');
            ?>
       
            <br />
            
            <h4>Personal</h4>
            <div class="row">                
                <div class="col-md-6">
                    <label for="first_name">First Name <sup>*</sup></label>
                    <input type="text" name="first_name" required="" class="first_name" maxlength="30" value="<?php if (isset($_POST['first_name'])) { echo $_POST['first_name']; } ?>" />
                </div>
                <div class="col-md-6">
                    <label for="last_name">Last Name <sup>*</sup></label>
                    <input type="text" name="last_name" required="" class="last_name" maxlength="30" value="<?php if (isset($_POST['last_name'])) { echo $_POST['last_name']; } ?>" />
                </div>
            </div>
            
            <div class="row">                
                <div class="col-md-6">
                    <label for="email_address">Email Address <sup>*</sup></label>
                    <input type="email" name="email_address" required="" class="email_address" maxlength="60" value="<?php if (isset($_POST['email_address'])) { echo $_POST['email_address']; } ?>" />
                </div>
                <div class="col-md-6">
                    <label for="contact_number">Contact Number <sup>*</sup></label>
                    <input type="text" name="contact_number" required="" class="contact_number" maxlength="30" value="<?php if (isset($_POST['contact_number'])) { echo $_POST['contact_number']; } ?>" />
                </div>
            </div>
            
            
            <br />
            <h4>Upload Resume</h4>            
            <div class="row" style="background-color: #f4f4f4;">
                <div class="col-md">
                    <br />
                    <input type="file" id="uploaded_file_1" name="uploaded_file_1" required="" />
                </div>
            </div>
            <p style="font-size: 12px;">REQUIRED FORMAT: <strong>.doc</strong> or <strong>.docx</strong></p>
            
            
            <br />
            <h4>Education</h4>            
            <div class="row">                
                <div class="col-md-6">
                    <label for="school">School <sup>*</sup></label>
                    <input type="text" name="school" required="" class="school" maxlength="60" value="<?php if (isset($_POST['school'])) { echo $_POST['school']; } ?>" />
                </div>
                <div class="col-md-6">
                    <label for="degree">Degree <sup>*</sup></label>
                    <select name="degree" required="">
                        <option value="<?php if (isset($_POST['degree'])) { echo $_POST['degree']; } ?>"><?php if (isset($_POST['degree'])) { echo $_POST['degree']; } ?></option>
                        <option value="Bachelor">Bachelor</option>
                        <option value="Doctorate">Doctorate</option>
                        <option value="Masteral">Masteral</option>
                        <option value="Vocational">Vocational</option>
                    </select>
                </div>
            </div>  
            <div class="grid-x grid-padding-x">
                <div class="cell medium-12 large-12">
                    <label for="course">Course <sup>*</sup></label>
                    <input type="text" name="course" required="" class="course" maxlength="60" value="<?php if (isset($_POST['course'])) { echo $_POST['course']; } ?>" />
                </div>
            </div>
            
            
            <br />
            <h4>Employment History</h4>            
            <div class="row">
                <div class="col-md">
                    <label for="current_employer">Current Employer <sup>*</sup></label>
                    <input type="text" name="current_employer" required="" class="current_employer" maxlength="60" value="<?php if (isset($_POST['current_employer'])) { echo $_POST['current_employer']; } ?>" />
                </div>
            </div>
            
            
            <br />
            <h4>Survey</h4>
            <div class="row">
                <div class="col-md">
                    <label for="know_about_opportunity">How did you know about opportunity? <sup>*</sup></label>
                    <select name="know_about_opportunity" required="">
                        <option value="<?php if (isset($_POST['know_about_opportunity'])) { echo $_POST['know_about_opportunity']; } ?>"><?php if (isset($_POST['know_about_opportunity'])) { echo $_POST['know_about_opportunity']; } ?></option>
                        <option value="Facebook">Facebook</option>
                        <option value="Twitter">Twitter</option>
                        <option value="Jobstreet">Jobstreet</option>
                        <option value="Monster">Monster</option>
                        <option value="LinkedIn">LinkedIn</option>
                        <option value="Website">Website</option>
                        <option value="Referral">Referral</option>
                        <option value="Others">Others</option>
                    </select>                
                </div>
            </div>            
            <div class="row">
                <div class="col-md">
                    <label for="cover_letter">Cover Letter <sup>*</sup></label>
                    <textarea name="cover_letter" required="" maxlength="300" rows="6" cols="30" value="<?php if (isset($_POST['cover_letter'])) { echo $_POST['cover_letter']; } ?>"><?php if (isset($_POST['cover_letter'])) { echo $_POST['cover_letter']; } ?></textarea>
                </div>
            </div>          
              
            <div id="cover_letter_text_counter"></div>
            
            <br />
            
            <div class="row">
                <fieldset class="col-md">
                    <label for="checkbox1"><input required="" type="checkbox" name="accept_privacy_policy" <?php if (isset($_POST['accept_privacy_policy'])) { echo 'checked=""'; } ?> /> I have read and agree to the <a href="<?php echo site_url(); ?>/privacy-policy/" target="_blank"><strong>Privacy Policy</strong></a>.</label>
                </fieldset>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <?php
                        $fr = sanitize_text_field($_GET['fr']);
                        $applying_for = sanitize_text_field($_GET['job']);
                    ?>
                    <input type="hidden" name="fr" value="<?php echo $fr; ?>" />
                    <input type="hidden" name="applying_for" value="<?php echo $applying_for; ?>" />
                    <input type="hidden" name="counter_user_id" value="" />
                    <input id="applynow"  type="submit" name="submit-careers" class="btn btn-danger" value="Apply Now" />
                </div>
            </div>            

        </div>
    </div>

</form>

<script type="text/javascript">
    $('#applynow').prop("disabled", true);
    $('input:checkbox').click(function() {
         if ($(this).is(':checked')) {
            $('#applynow').prop("disabled", false);
         } else {
             if ($('.checks').filter(':checked').length < 1){
             $('#applynow').attr('disabled',true);}
         }
    });
</script>

<script type="text/javascript">
    fieldlimiter.setup({
        thefield: document.cover_letter_form.cover_letter,
        maxlength: 300,
        statusids: ["cover_letter_text_counter"],
        onkeypress:function(maxlength, curlength){
            //define custom event actions here if desired
        }
    })
</script>