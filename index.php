<?php
/*
Template Name: Index Page
*/
?>
<?php get_header(); ?>

<div id="content" class="content-group content-index">
	<div class="pad">
		<div class="post-group">
			<?php get_template_part('loop','index'); ?>
		</div>
	</div>
</div>
		
<?php get_footer(); ?>