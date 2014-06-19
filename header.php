<?php require 'functions/required/template-top.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<!--[if IE]>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="screen" />
<![endif]-->
<?php
$icon = get_option(PADD_NAME_SPACE . '_favicon_url','');
if (!empty($icon)) {
	echo '<link rel="shortcut icon" href="' . $icon . '" />' . "\n";
}
?>
<script type="text/javascript" src="<?php echo get_option('home'); ?>/wp-includes/js/jquery/jquery.js?ver=1.3.2"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.supersubs.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.superfish.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.loading.js"></script>
<?php
$tracker = get_option(PADD_NAME_SPACE . '_tracker_head','');
if (!empty($tracker)) {
	echo stripslashes($tracker);
}
?>
</head>

<body <?php body_class(); ?>>
<?php
$tracker = get_option(PADD_NAME_SPACE . '_tracker_top','');
if (!empty($tracker)) {
	echo stripslashes($tracker);
}
?>
<div id="container">

	<p class="no-display"><a href="#skip-to-content">Skip to content</a></p>	
	
	<div id="header">
		<div class="pad append-clear">		
			<div class="box box-masthead">
				<?php $tag = (is_home()) ? 'h1' : 'p'; ?>
				<<?php echo $tag; ?> class="title"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></<?php echo $tag; ?>>
				<p class="description"><?php bloginfo('description'); ?></p>
			</div>
				
			<div class="box box-search">
				<h3>Search</h3>
				<div class="interior">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>
	
	<div id="menubar">
		<div class="pad">
			<div class="box box-mainmenu">
				<h3>Main Menu</h3>
				<div class="interior">
					<?php 
						wp_nav_menu(array(
							'theme_location' => 'main',
							'link_before' => '',
							'link_after' => '',
						));
					?>
				</div>
			</div>
		</div>
	</div>

	<a name="skip-to-content"></a>
	
	<?php if (is_home()) : ?>
	<div id="featured">
		<div class="pad">	
			<div class="box box-featured">
				<h2>Featured Posts</h2>		
				<div class="interior">
					<?php padd_theme_post_featured_posts(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>	
	
	<div id="body">
		<div class="pad append-clear">
