<?php 

/*
Theme Name: WordPress Spring 2017 Section 01 Demo
Author: Mike Sinkula
Author URI: http://mikesinkula.com/
Description: This is the demo theme for the WEB170 section 01 class for the Spring 2017 Quarter.
Version: 42.0
*/

// Register Sidebars
register_sidebars(5, array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));
//

register_sidebar(array('name' =>  __('Fred', 'fred'), 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>' ));

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