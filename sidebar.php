
<div id="sidebar">
	<div class="pad">

		<h2>Sidebar</h2>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>

<div class="box box-ads">
	<div class="title">
		<h3>Sponsor</h3>
	</div>
	<div class="interior">
		<?php 
			padd_theme_widget_sponsors(); 
		?>
	</div>
</div>

<div class="box box-tweet">
	<div class="title">
		<h3>Recent Tweets</h3>
	</div>
	<div class="interior">
		<?php 
			$padd_sb_twitter = unserialize(get_option(PADD_NAME_SPACE . '_sn_username_twitter'));
			echo Padd_Twitter::get_messages($padd_sb_twitter->get_username(),5,true); 
		?>
	</div>
</div>

<div class="box box-flickr-rss" id="flickrrss">
	<div class="title">
		<h3>Featured Photos</h3>
	</div>
	<div class="interior">
		<?php 
			if (function_exists('get_flickrRSS')) {
				echo '<div class="inner">';
				echo get_flickrRSS();
				echo '</div>';
			} else {
				echo '<p class="notice">You have to install <a href="http://wordpress.org/extend/plugins/flickr-rss/">flickrRSS</a> plugin.</p>';
			}
		?>
	</div>
</div>

<div class="box box-featured-video">
	<div class="title">
		<h3>Featured Video</h3>
	</div>
	<div class="interior">
		<?php padd_theme_widget_featured_video(); ?>
	</div>
</div>

	<?php endif; ?>

	</div>
</div>


