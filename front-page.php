<?php get_header(); ?>

  <!-- Begin Flex Slider -->
    <div class="flexslider">
        <ul class="slides">
        <li><img src="<?php bloginfo('template_directory') ?>/images/img-slide-01.jpg" width="940" height="400" alt="Image One"></li>
        <li><img src="<?php bloginfo('template_directory') ?>/images/img-slide-02.jpg" width="940" height="400" alt="Image Two"></li>
        <li><img src="<?php bloginfo('template_directory') ?>/images/img-slide-03.jpg" width="940" height="400" alt="Image Three"></li>
        </ul>
    </div>
    <!-- End Flex Slider -->
    
    <!-- Begin Widgets -->
    <div id="widgets">
        <section class="widget-item">
        <h2>About Me:</h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="article-<?php the_ID(); ?>" class="article">
        <?php the_content(); ?>
        </article>
        <?php endwhile; endif; ?>
        <small>front-page.php</small>
        </section>
        <section class="widget-item">
            <h2>Latest News:</h2>
            <ul>
            <?php rewind_posts(); // stop previous loop ?>
            <?php query_posts(array('posts_per_page' => '4', 'category_name' => 'news')); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><small><?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small></li>
            <?php endwhile; endif; ?>
            </ul>
            <h2>Latest Articles:</h2>
            <ul>
            <?php rewind_posts(); // stop previous loop ?>
            <?php query_posts(array('posts_per_page' => '4', 'category_name' => 'articles')); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><small><?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small></li>
            <?php endwhile; endif; ?>
            </ul>
        </section>
        <section class="widget-item">
            <h2>Contact Me:</h2>
            <p><strong>Phone: </strong>206.543.2567<br><strong>Email: </strong><a href="mailto:sinkum@uw.edu">sinkum@uw.edu</a></p>
            <p>428 Sieg Hall<br>University of Washington<br>Seattle, WA 98195</p> 
        </section>
    </div>
    <!-- End Widgets -->
 
 <?php get_footer(); ?>