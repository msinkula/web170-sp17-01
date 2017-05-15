<?php 

/*
Theme Name: WordPress Spring 2017 Section 01 Demo
Author: Mike Sinkula
Author URI: http://mikesinkula.com/
Description: This is the demo theme for the WEB170 section 01 class for the Spring 2017 Quarter.
Version: 42.0
*/


// Register Navigation Menus
register_nav_menus(array('main-menu' => __('Main Menu')));
//

// Add Supprt for Post Thumbnails & Featured Images 
add_theme_support('post-thumbnails');
//

// Create Custom Image Sizes
add_image_size('icon', 140, 140, true); // 140 pixels wide by 140 pixels tall, hard crop mode
//

?>