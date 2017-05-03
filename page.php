<?php get_header(); ?>

    <!-- Begin Text -->
    <div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="article-<?php the_ID(); ?>" class="article">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>				
	<?php the_content(); ?>
	</article>
	<?php endwhile; endif; ?>
    <small>page.php</small>
    </div>
    <!-- End Text -->
 
 <?php get_sidebar(); ?> 
 <?php get_footer(); ?>