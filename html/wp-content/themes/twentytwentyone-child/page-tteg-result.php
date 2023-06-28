<?php get_header( 'pagenew' ); ?>
<?php $dp = sanitize_text_field($_GET['dp']); ?>

                </header><!-- EOF: Site Header -->

    <main>

        <div class="l_section small">
            <div class="grid-container grid-x grid-padding-x align-center">
                <div class="cell small-11 medium-11 large-11">
                    
                    <br /><br />
                    
                    <div class="grid-x grid-padding-x align-center">
                        <div class="cell medium-8 large-6">
                            <div class="card no-border">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/email-sent-success.jpg" alt="">
                                
                                <?php if ($dp == 'cf'): // contact form ?>                                
                                    <div class="card-section">
                                        <h3>Let's get started!</h3>
                                        <p>We're ready to impress you and get results for your business. Please do not be shocked if we contact you quickly. We are eager to work with you.</p>
                                        <p>Start thinking about your project goals, timelines and budget in the interim. If this is an immediate need, please give us a call at <a href="tel:+632 8 288-8999">+632 8 288 8999</a> or email us at <a href="mailto:wecare@epldt.com">wecare@epldt.com</a>.</p>
                                        <br />
                                        <p class="lead"><a href="<?php echo site_url(); ?>">Take me back to ePLDT</a></p>
                                    </div>                                
                                <?php endif; ?>
                                
                                <?php if ($dp == 'af'): // ask-e & tech support form ?>
                                    <div class="card-section">
                                        <h3>Thank you for getting in touch!</h3>
                                        <p>We have received your message and would like to thank you for writing to us. If your inquiry is urgent please use the telephone number listed below to talk to one of our staff members or click <a href="http://www.epldt.com/chat/" data-popup="width=400,height=650,scrollbars=yes" class="pulse-button js-newWindow"><strong>here</strong></a> to chat with us now. Otherwise, we will reply by email as soon as possible.</p>
                                        <p>Talk to you soon,<br />ePLDT Support</p>
                                        <br />
                                        <p class="lead"><a href="<?php echo site_url(); ?>">Take me back to ePLDT</a></p>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($dp == 'ca'): // ask-e & tech support form ?>
                                    <div class="card-section">
                                        <br />
                                        <h3>Your application has been successfully submitted!</h3>
                                        <br />
                                        <p class="lead"><a href="<?php echo site_url(); ?>">Take me back to ePLDT</a></p>
                                    </div>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>        

    </main>
    
<?php get_footer('talktoexpert'); ?>