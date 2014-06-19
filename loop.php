


<?php if (!have_posts()) : ?>

<div id="post-0" class="post error404 not-found">
	<h1 class="title">Not Found</h1>
	<div class="content">
		<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
	</div>
</div>

<?php else : ?>

	<?php if (!is_search()) : ?>
	
		<?php while (have_posts()) : ?>
			<?php the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="thumbnail">
					<a class="thumbnail" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php padd_theme_post_thumbnail(); ?>
					</a>
					<h2>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php 
							$title = get_the_title(); 
							if (strlen($title)>53) {
								echo trim(substr($title,0,53)) . '...';
							} else {
								echo $title;
							}
						?>
						</a>
					</h2>
				</div>
			</div>
		<?php endwhile; ?>	
		
		<div class="clear"></div>
		
	<?php else : ?>

		<?php add_filter('excerpt_length', 'padd_theme_hook_excerpt_index_length'); ?>
		<?php while (have_posts()) : ?>
			<?php the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="thumbnail">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php
							$padd_image_def = get_template_directory_uri() . '/images/thumbnail-search-result.jpg';
							if (has_post_thumbnail()) {
								the_post_thumbnail('search-result');
							} else {
								echo '<img class="thumbnail" alt="Default thumbnail." src="' . $padd_image_def . '" />';
							}
						?>
					</a>
				</div>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt();?>
			</div>
		<?php endwhile; ?>
		<?php remove_filter('excerpt_length', 'padd_theme_hook_excerpt_index_length'); ?>
		
	<?php endif; ?>

	<?php Padd_PageNavigation::render(); ?>

<?php endif; ?>









	
	
