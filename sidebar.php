    <!-- Begin Sidebar -->
    <div id="sidebar">
    <h2><?php 
	
	if(is_page()) { // if we are on a page...
	
		echo get_the_title($post->post_parent); // list the parent page title
		
	} else { // if not...
		
		echo 'Blog'; // list the title as "blog"
			
	}
	
	?></h2>
    <ul class="sub-navigation-items">
    <?php 
	
	if(is_page()) { // if we are on a page
	
		if($post->post_parent) { // if you are on a page that has a parent...
		
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => '',)); // list the parent's children
			 
		} else { // if we are on a parent page... 
		
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => '',)); // list the parent's children
			
		}
		
	} else { // if we are NOT on a page
		
		wp_list_categories(array('title_li' => '',));
		
	}
		
	?>
    </ul>
    </div>
    <!-- End Sidebar -->