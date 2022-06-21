<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */
?><!--
   ___       _                                 __ _        _                     _                    _ _           ____   ___ ____  ____  
  / _ \_   _(_)_ __ ___   __ _ _ __ __ _ ___  / _\ |_ __ _| |_ ___   /\ /\ _ __ (_)_   _____ _ __ ___(_) |_ _   _  |___ \ / _ \___ \|___ \ 
 / /_\/ | | | | '_ ` _ \ / _` | '__/ _` / __| \ \| __/ _` | __/ _ \ / / \ \ '_ \| \ \ / / _ \ '__/ __| | __| | | |   __) | | | |__) | __) |
/ /_\\| |_| | | | | | | | (_| | | | (_| \__ \ _\ \ || (_| | ||  __/ \ \_/ / | | | |\ V /  __/ |  \__ \ | |_| |_| |  / __/| |_| / __/ / __/ 
\____/ \__,_|_|_| |_| |_|\__,_|_|  \__,_|___/ \__/\__\__,_|\__\___|  \___/|_| |_|_| \_/ \___|_|  |___/_|\__|\__, | |_____|\___/_____|_____|
                                                                                                            |___/                                                                                                
--><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header" role="banner">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'diana' ); ?></a>
    <nav id="top-bar" class="top-bar navbar fixed-top navbar-dark justify-content-between">
        
        
        <div class="d-flex flex-grow-1 justify-content-between">
            <div class="mr-4 d-none d-md-block">
				<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z" /></svg>
				
				<a href="<?= home_url(); ?>"><?= get_bloginfo( 'name' ); ?></a>
			</div>
            <div class="mr-4">
                <svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg>    
                <span>(033) 580 8244</span>
            </div>
            <div class="mr-4 d-none d-md-block">
				<svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M9,10H7V12H9V10M13,10H11V12H13V10M17,10H15V12H17V10M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V8H19V19Z" /></svg>
                <span id="date"></span>
            </div>
			<div class="mr-4">
                <svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z" /></svg>
               
                <span id="clock"></span>
            </div>
            <button id="to-top" class="btn m-0 p-0" title="Back to Top" style="visibility: hidden">
                <svg class="text-light" style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="currentColor" d="M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M7.4,15.4L12,10.8L16.6,15.4L18,14L12,8L6,14L7.4,15.4Z" /></svg>
            </button>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-2 pt-4 pb-4 d-flex justify-content-between align-items-center">
                <div class="logo text-center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="d-inline-block">
						<?php if (is_home() || is_front_page()): ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-gsu.png" width="150" height="150" alt="GSC">
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-gsu.png" width="150" height="150" alt="GSC">
						<?php endif; ?>
					</a>
                </div>
                <div style="position: absolute; right: 10px;">
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <button id="nav-toggle" class="nav-toggle" tabindex="0" type="button">
                            <span class="icon-bar"></span>
                            <span class="screen-reader-text">Toggle Main Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-10 d-md-flex justify-content-end align-items-center">
                
                <?php if(function_exists('WC')): ?>
                <nav id="nav-cart" class="nav-cart">
                    <a href="<?php echo WC()->cart->get_cart_url(); ?>">
                        <svg viewBox="0 0 24 24"><path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z" /></svg>
                        <span><?php echo WC()->cart->cart_contents_count; ?></span>
                    </a>
                </nav>
                <?php endif; ?>
                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <nav id="nav-main" class="nav nav-main" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'items_wrap'=> '<ul>%3$s</ul>', 'walker' => new diana_Nav_Walker() ) ); ?>
                    </nav>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

