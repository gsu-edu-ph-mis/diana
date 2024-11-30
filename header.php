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
   ______      _                                    _____ __        __          __  __      _                      _ __                    ___  ____ ___  __ __
  / ____/_  __(_)___ ___  ____ __________ ______   / ___// /_____ _/ /____     / / / /___  (_)   _____  __________(_) /___  __            |__ \/ __ \__ \/ // /
 / / __/ / / / / __ `__ \/ __ `/ ___/ __ `/ ___/   \__ \/ __/ __ `/ __/ _ \   / / / / __ \/ / | / / _ \/ ___/ ___/ / __/ / / /  ______    __/ / / / /_/ / // /_
/ /_/ / /_/ / / / / / / / /_/ / /  / /_/ (__  )   ___/ / /_/ /_/ / /_/  __/  / /_/ / / / / /| |/ /  __/ /  (__  ) / /_/ /_/ /  /_____/   / __/ /_/ / __/__  __/
\____/\__,_/_/_/ /_/ /_/\__,_/_/   \__,_/____/   /____/\__/\__,_/\__/\___/   \____/_/ /_/_/ |___/\___/_/  /____/_/\__/\__, /            /____|____/____/ /_/   
                                                                                                                     /____/                                                                      
--><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header" role="banner">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'diana' ); ?></a>
    <button type="button" id="toggler" class="btn-menu toggler" v-on:click.prevent="toggle" data-toggle="tooltip" data-original-title="" title="">
        <div class="bar bar-1"></div>
        <div class="bar bar-2"></div>
        <div class="bar bar-3"></div>
    </button>
    <div id="top-nav-bar" class="top-nav-bar">
        <?php if ( has_nav_menu( 'top' ) ) : ?>
            <nav id="top-nav-bar-left" class="nav top-nav-bar-left" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'top', 'container' => false, 'items_wrap'=> '<ul>%3$s</ul>', 'walker' => new diana_Nav_Walker() ) ); ?>
            </nav>
        <?php endif; ?>
        <nav id="top-nav-bar-right" class="nav top-nav-bar-right" role="navigation">
            <ul>
                <li>
                    <a href="#" class="d-flex align-items-center">
                        <svg style="width:16px;height:16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Apps</title><path fill="currentColor" d="M3,11H11V3H3M3,21H11V13H3M13,21H21V13H13M13,3V11H21V3" /></svg>
                        <span class="pl-1">Apps</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center">
                        <svg style="width:16px;height:16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Search</title><path fill="currentColor" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" /></svg>
                        <span class="pl-1">Search</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="#" class="date">
                        <svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M9,10H7V12H9V10M13,10H11V12H13V10M17,10H15V12H17V10M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V8H19V19Z" /></svg>
                        <span class="date-ticker"></span>
                    </a>
                </li> -->
                <li>
                    <a href="#" class="clock">
                        <svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z" /></svg>
                        <span class="clock-ticker"></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div id="logo" class="logo">
        <div class="logo-body">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="d-inline-block">
                <?php if (is_home() || is_front_page()): ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm.png" width="120" height="120" alt="GSU">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm.png" width="120" height="120" alt="GSU">
                <?php endif; ?>
            </a>
            <div class="name">
                <div>Guimaras</div>
                <div class="small">State University</div>
            </div>
        </div>
    </div>
    <div id="main-bar" class="main-bar">
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <nav id="nav-main" class="nav nav-primary nav-expandables" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'items_wrap'=> '<ul>%3$s</ul>', 'walker' => new diana_Nav_Walker() ) ); ?>
            </nav>
        <?php endif; ?>
        
        <?php if ( has_nav_menu( 'secondary' ) ) : ?>
            <nav id="nav-secondary" class="nav nav-secondary nav-expandables" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => false, 'items_wrap'=> '<ul>%3$s</ul>', 'walker' => new diana_Nav_Walker() ) ); ?>
            </nav>
        <?php endif; ?>
    </div>
    <div id="mobile-menu" class="mobile-menu">
        <div class="partition">
            
           
        </div>

        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <nav id="nav-main2" class="nav nav-primary nav-white nav-expandables" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'items_wrap'=> '<ul>%3$s</ul>', 'walker' => new diana_Nav_Walker() ) ); ?>
            </nav>
        <?php endif; ?>
        
        <?php if ( has_nav_menu( 'secondary' ) ) : ?>
            <nav id="nav-main2" class="nav nav-secondary nav-white nav-expandables" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => false, 'items_wrap'=> '<ul>%3$s</ul>', 'walker' => new diana_Nav_Walker() ) ); ?>
            </nav>
        <?php endif; ?>

        <?php if ( has_nav_menu( 'top' ) ) : ?>
            <nav id="top-nav-bar-left2" class="nav top-nav-bar-left nav-white nav-expandables" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'top', 'container' => false, 'items_wrap'=> '<ul>%3$s</ul>', 'walker' => new diana_Nav_Walker() ) ); ?>
            </nav>
        <?php endif; ?>
        <nav id="top-nav-bar-right2" class="nav top-nav-bar-right" role="navigation">
            <ul>
                <li>
                    <a href="#">
                        <svg style="width:16px;height:16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Apps</title><path fill="currentColor" d="M3,11H11V3H3M3,21H11V13H3M13,21H21V13H13M13,3V11H21V3" /></svg>
                        <span>Apps</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="#" class="date">
                        <svg style="width:16px;height:16px" viewBox="0 0 24 24">    <path fill="currentColor" d="M9,10H7V12H9V10M13,10H11V12H13V10M17,10H15V12H17V10M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V8H19V19Z" /></svg>
                        <span class="date-ticker"></span>
                    </a>
                </li> -->
                <li>
                    <a href="#" class="clock">
                        <svg style="width:16px;height:16px" viewBox="0 0 24 24"><path fill="currentColor" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z" /></svg>
                        <span class="clock-ticker"></span>
                    </a>
                </li>
            </ul>
        </nav>
        <div>
            <div class="wall-clock">
                <div class="arm-second"></div>
                <div class="arm-minute"></div>
                <div class="arm-hour"></div>
                <div class="hour hour-12">12</div>
                <div class="hour hour-1">1</div>
                <div class="hour hour-2">2</div>
                <div class="hour hour-3">3</div>
                <div class="hour hour-4">4</div>
                <div class="hour hour-5">5</div>
                <div class="hour hour-6">6</div>
                <div class="hour hour-7">7</div>
                <div class="hour hour-8">8</div>
                <div class="hour hour-9">9</div>
                <div class="hour hour-10">10</div>
                <div class="hour hour-11">11</div>
            </div>
        </div>
    </div>
</header>

