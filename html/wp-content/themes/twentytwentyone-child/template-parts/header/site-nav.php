<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<?php if ( has_nav_menu( 'main-menu' ) ) : ?>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuClickableInside" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
      Solutions
    </a>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
      <li>
        <a class="dropdown-item" href="<?php echo site_url(); ?>/data-center/">Data Center</a>
      </li>
      <li class="dropdown-submenu">
        <a
          class="dropdown-item dropdown-toggle"
          href="#"
          id="dropdownMenuClickableInside"
          role="button"
          data-bs-toggle="dropdown"
          data-bs-auto-close="outside"
          aria-expanded="false"
          >Cloud</a
        >
        <ul
          class="dropdown-menu"
          aria-labelledby="dropdownMenuClickableInside"
        >
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/cloud-overview/"
              >Cloud Overview</a
            >
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/epldt-calling-for-microsoft-teams/"
              >ePLDT Calling for Microsoft Teams</a
            >
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/virtual-desktop/"
              >Virtual Desktop</a
            >
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/azure-stack/"
              >Azure Stack</a
            >
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/google-workspace/">
              Google Workspace
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/salesforce/"
              >Salesforce
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/infrastructure-as-a-service/"
              >Infrastructure as a Service
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/contact-center-as-a-service/"
              >Contact Center as a Service
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/disaster-recovery-as-a-service/"
              >Disaster Recovery as a Service
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/microsoft-office-365/"
              >Microsoft Office 365
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/simply-erp/"
              >Simply ERP
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="dropdown-item" href="<?php echo site_url(); ?>/cyber-security/"
          >Cyber Security</a
        >
      </li>
      <li class="dropdown-submenu">
        <a
          class="dropdown-item dropdown-toggle"
          href="#"
          id="dropdownMenuClickableInside"
          role="button"
          data-bs-toggle="dropdown"
          data-bs-auto-close="outside"
          aria-expanded="false"
          >Managed IT</a
        >
        <ul
          class="dropdown-menu"
          aria-labelledby="dropdownMenuClickableInside"
        >
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/managed-it-overview/">
              Managed IT Overview
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/it-outsourcing/">
              IT Outsourcing
            </a>
          </li>
        </ul>
      </li>
    </ul> 
  </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>/support/">Support</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>/careers/">Careers</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuClickableInside" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">About Us</a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/about-us/company-overview/">Company Overview</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/about-us/subsidiaries/">Subsidiaries</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/about-us/management-team/">Management Team</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo site_url(); ?>/about-us/life-at-epldt//">Life at ePLDT</a>
          </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>/newsroom/">Newsroom</a>
    </li>
    <li class="nav-item d-sm-block d-lg-none"><a class="nav-link" href="tel:63282888999">Call Us</a></li>
    <li class="nav-item d-sm-block d-lg-none"><a class="nav-link" href="mailto:wecare@epldt.com">Email Us</a></li>
</ul> 

<?php echo get_search_form(); ?>

<?php if( is_page('data-center') ) { ?>
<div class="ms-2">
<?php echo do_shortcode('[language-switcher]'); ?>
</div>
<?php } else { ?>
<?php } ?>
 
<?php endif; ?>
