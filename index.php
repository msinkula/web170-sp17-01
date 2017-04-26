<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>

<!-- Begin Meta -->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- End Meta -->

<!-- Begin Styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
<!-- End Styles -->

<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
<!-- End Scripts -->

<!-- Begin Flex Slider -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $('.flexslider').flexslider(); // call flexslider function
  });
</script>
<!-- End Flex Slider -->

<!-- Begin Toggle Menu -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
	$("#toggle").click(function() { // when toggle is clicked...
		$("#navigation").toggle(); // ... open or close the navigation
	});
  });
</script>
<!-- End Toggle Menu -->

<!-- Start WP Head Function -->
<?php wp_head(); ?>
<!-- End WP Head Function -->

</head>
<body <?php body_class(); ?>>

<!-- Begin Header -->
<div id="header">
<h1 id="logo"><a href="home.html">Mike Sinkula</a></h1>
<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/img-toggle.png" width="25" height="25" alt="Toggle Menu">
</div>
<!-- End Header -->

<!-- Begin Navigation -->
<div id="navigation">
    <ul id="navigation-items">
    <li><a href="main.html">About</a></li>
    <li><a href="main.html">Portfolio</a></li>
    <li><a href="main.html">Blog</a></li>
    <li><a href="main.html">Contact</a></li>
    </ul>
</div>
<!-- End Navigation -->

<!-- Begin Content -->
<div id="middle">

    <!-- Begin Text -->
    <div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="article-<?php the_ID(); ?>" class="article">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>				
	<?php the_content(); ?>
	</article>
	<?php endwhile; endif; ?>
    <small>index.php</small>
    </div>
    <!-- End Text -->
    
    <!-- Begin Sidebar -->
    <div id="sidebar">
    <h2>Header Level Two</h2>
    <ul>
    <li><a href="#">Lorem ipsum dolor</a></li>
    <li><a href="#">Aliquam tincidunt</a></li>
    <li><a href="#">Vestibulum auctor</a></li>
    </ul>    
    </div>
    <!-- End Sidebar -->
    
</div>
<!-- End Content -->

<!-- Begin Footer -->
<div id="footer">
<p>&copy;2014 <a href="http://www.mikesinkula.com/">Mike Sinkula</a>. All rights reserved.</p>
</div>
<!-- End Footer -->

<!-- Begin WP Footer Function -->
<?php wp_footer(); ?>
<!-- End WP Footer Function -->

</body>
</html>