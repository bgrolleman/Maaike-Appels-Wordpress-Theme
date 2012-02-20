<?php get_header(); ?>

<div id="page">
	<div id="left">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
					<?php the_content('Read more&#8230;'); ?>
			</div><!-- end .post -->
		<?php endwhile; ?>
		<?php else : ?>

			<div class="post">
				<div class="padding">
					<h2>I'm sorry, I couldn't find the page!</h2><br />
					<p>Don't worry, you can always search the <strong>archives</strong> or browse the <strong>categories</strong>.</p>
				</div><!-- end .padding -->
			</div><!-- end .post -->

	<?php endif; ?>
	
	</div><!-- end #left -->
	
	<div id="right">
		<?php get_sidebar(); ?>
	</div><!-- end #right -->
	
<div class="clearing"></div>
</div><!-- end #page -->

<?php get_footer(); ?>
