    <!-- Begin Sidebar -->
    <div id="sidebar">
    
    	<!-- Begin Sub Navigation -->
        <div id="sub-navigation" class="widget">
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
        <!-- End Sub Navigation -->
        
        <!-- Begin Pull Quote -->
        <div id="pull-quote" class="widget">
        <?php if(get_post_meta($post->ID, 'quote', true)) : ?>
        <blockquote><?php echo get_post_meta($post->ID, 'quote', true); ?></blockquote>
        <?php endif; ?>
        </div>
        <!-- End Pull Quote -->
        
        <!-- Begin Widgets -->
        <?php dynamic_sidebar(1); ?>
        <?php dynamic_sidebar(2); ?>
        <?php dynamic_sidebar('fred'); ?>
        <!-- End Widgets -->
    
    </div>
    <!-- End Sidebar -->