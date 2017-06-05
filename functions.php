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

// Excerpt for Pages
add_post_type_support('page', 'excerpt');
//

// Mike's (Not Chris') Bad Ass Title Tag
function get_mikes_title_tag() {
	
	global $post; // DO NOT FORGET THIS BECAUSE OF VARIABLE SCOPE!!!! 
	
	if (is_front_page() || is_home()) { // front or blog page
	
		bloginfo('description'); // tagline
		
	} elseif (is_page() || is_single()) { // page or posting 
	
		echo get_the_title($post->ID); // page or posting title
		
	} else { // 404, search, etc.
		
		bloginfo('description'); // tagline
	}
	
	if ($post->post_parent) {
		
		echo ' | ';
		echo get_the_title($post->post_parent);
	
	}
	
	echo ' | ';
	bloginfo('name');
	echo ' | ';
	echo 'Seattle, WA.';
	
}
//

// Get Attchment Images and Display as FlexSlider Gallery
function get_flexslider_gallery() {
	
	global $post; // You saw what happened last time I forgot this. I felt really stoopid.
	
	$attachments = get_children(array('post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order'));
	
	if ($attachments) {
		
		echo '<div class="flexslider">'; // open flexslider markup
		echo '<ul class="slides">';
	
		foreach ($attachments as $attachment) {
			
			echo '<li>';
			echo wp_get_attachment_image($attachment->ID, 'large'); // generate image tag
			echo '<p>'.get_post_field('post_excerpt', $attachment->ID).'</p>';
			echo '</li>';
			
		}
		
		echo '<ul>';
		echo '</div>'; // close flexslider markup
		
	}
	
}
//
?>