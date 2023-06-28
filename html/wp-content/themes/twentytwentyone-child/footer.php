<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

</main>

<footer class="e-footer text-white pt-5 pb-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col col-lg-1">
                <div class="e-footerlogo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-e-white.png" class="img-fluid" alt="ePLDT" />
                </div>
            </div>
            <div class="col-md-auto">
                <div class="e-footer-links">
                    <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>

                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'footer-menu',
                                'menu_class'      => 'list-unstyled list-inline mb-0',
                                'container_class' => '',
                                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                                'fallback_cb'     => false,
                            )
                        );
                    ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col">
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-sm mb-4">
                <ul class="list-unstyled mb-2">
                    <li>Call 177 using your PLDT landline</li>
                    <li>Call *177 through mobile (Smart, TNT, and Sun)</li>
                    <li>Call +63 2 8-688-2700 up to 02 through other network</li>
                </ul>
                <small>(**For non-PLDT/Smart users, regular charges may apply)</small>
            </div>
            <div class="col-sm mb-4">
                <p>5/F L.V. Locsin Building, Ayala corner Makati Avenue, Makati City, Philippines 1200</p>
                <p>Email: <a href="mailto:wecare@epldt.com">wecare@epldt.com</a></p>
            </div>
            <div class="col-sm mb-4">
                <div class="copyright">
                    <ul class="list-unstyled list-inline mb-0">
                        <li class="list-inline-item">
                        <a href="https://www.facebook.com/ePLDTofficial/" class="icon-circle icon--medium" target="_blank">
                                <i class="uil uil-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/epldt" class="icon-circle icon--medium" target="_blank">
                                <i class="uil uil-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/company/epldt-inc-" class="icon-circle icon--medium" target="_blank">
                                <i class="uil uil-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/channel/UCc76jpI8NygaLbW3fIgoBlQ" class="icon-circle icon--medium" target="_blank">
                                <i class="uil uil-youtube"></i>
                            </a>
                        </li>
                    </ul>
                    <p>&copy; 2021 ePLDT. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
    
<!-- OneTrust Cookies Settings button start
<div class="ot-btn--container fixed-bottom" id="ot-btn--container fixed-bottom" style="position: fixed; left: 1rem;right: 100%; bottom: 1.5rem; z-index: 9999999999;">
    <a href="#" class="optanon-show-settings d-inline-block h-100">
        <img src="<?/*php echo get_stylesheet_directory_uri(); */?>/assets/img/Cookie-Icon_FINAL.png" class="img-fluid" alt="Onetrust Cookie Settings" title="Onetrust Cookie Settings" style="max-width: 4rem;" height="64">
    </a>
</div>
OneTrust Cookies Settings button end -->

<?php wp_footer(); ?>

</body>
</html>
