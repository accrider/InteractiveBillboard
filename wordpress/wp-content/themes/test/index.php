<html>
<head>
<?php get_header(); ?>
</head>
<body>
	<div class="full-masthead">
		<div class="fixed-mast">
			<div class="container">
				<nav role="navigation" class="fixed-mast-nav nav-collapse">
					<div class="menu-masthead-container">
						<ul id="menu-masthead" class="menu"><li id="menu-item-355" class="ualr-small menu-item menu-item-type-custom menu-item-object-custom menu-item-355"><a href="http://ualr.edu"><img src="http://ualr.edu/digital/wp-content/plugins/persistent-navigation/img/ualr-logo.png" alt="ualr logo" /></a></li>
							<li id="menu-item-169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-169"><a href="http://eastweb.ualr.edu/east-scholarship/prospective-scholars/">Prospective Scholars</a></li>
							<li id="menu-item-172" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-172"><a href="http://eastweb.ualr.edu/east-scholarship/current-scholars/">Current Scholars</a></li>
							<li id="menu-item-178" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-178"><a href="http://eastweb.ualr.edu/eastclub/">EAST Club</a></li>
							<li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175"><a href="http://eastweb.ualr.edu/faculty-staff/">Faculty &#038; Staff</a></li>
						</ul>
					</div>
				</nav>
				<div class="tools">
					<div class="search">
						<form method="get" action="http://ualr.edu/www/search/">
							<input type="text" name="q" class="searchbox"><input type="submit" name="submit" value="Go" class="searchbutton">
							<input type="hidden" name="cx" value="018119305830358778520:j31xmnprot4">
							<input type="hidden" name="cof" value="FORID:11">
						</form>
					</div>
				</div><!--.tools-->
			</div><!--.container-->
		</div><!--.fixed-mast-->
		<div class="maroon-full-width headroom headroom--top" id="maroon-header">
			<div class="container">
				<header class="logo">
					<a href="http://ualr.edu" title="University of Arkansas at Little Rock" class="wordmark">University of Arkansas at Little Rock</a>
					<h1 class="univ-header"><a href="http://ualr.edu" title="University of Arkansas at Little Rock">University of Arkansas at Little Rock</a></h1>
					<p class="dept-header"><a href="<?php bloginfo('url'); ?>" title="EAST"><?php bloginfo('name'); ?></a></p>
				</header><!--.logo-->
			</div><!--.container-->
		</div><!--.maroon-full-width-->
		<div class="site-nav">
			<div class="container">
				<nav class="" role="navigation"><!-- site-nav-collapse -->
					<div class="menu-header-container">
						<ul id="menu-header" class="menu">
							<li id="menu-item-353" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-353"><a href="http://eastweb.ualr.edu/blog/category/news/">News Room</a></li>
							<li id="menu-item-204" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-204"><a href="http://eastweb.ualr.edu/projects/">EAST Projects</a></li>
							<li id="menu-item-201" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-201"><a href="http://eastweb.ualr.edu/resources/">Resources</a></li>
							<li id="menu-item-203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-203"><a href="http://eastweb.ualr.edu/about-ualr-east/">About UALR EAST</a></li>
							<li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="http://eastweb.ualr.edu/contact-us/">Contact Us</a></li>
						</ul>
					</div>				
				</nav>
				<div class="clearfix">
				</div>
			</div><!--.container-->
		</div><!--.site-nav-->
	</div>
	<div id="main">
		<div id="content">
			<div class="container content">
				
				<div class="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1 class="main-titles"><?php the_title(); ?></h1>
					<p><?php the_content(__('(more...)')); ?></p>
					<hr> <?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
				</div>
				<div class="sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
			<div id="delimiter">
			</div>
			<?php get_footer(); ?>
		</div>
	</div>
</body>