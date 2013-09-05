<?php get_header(); ?>

<div id="page">
	<div id="left" class="blog">
		<?php get_template_part('part-menu'); ?>

		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="padding">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="border-gray"></div>
				<div class="padding">
				
					<?php the_content('Read more&#8230;'); ?>
					
				<div class="postmetadata">
					<div class="floatleft">
						<p><span class="category"><?php the_category(', ') ?></span></p>
						<p><?php the_tags('<span class="tags">', ', ', '</span>'); ?></p>
					</div><!-- end .floatleft -->
					<div class="floatright">
						<p><span class="date"><?php the_time('F jS, Y') ?></span></p>
						<p><span class="comments"><?php comments_popup_link('No response', '1 response', '% responses'); ?></span></p>
					</div><!-- end .floatright -->
					<div class="clearing"></div>
				</div><!-- end .postmetadata -->
			</div><!-- end .padding -->
			</div><!-- end .post -->

			<?php endwhile; ?>
			
			<div class="navigation">
			<div class="old-posts floatleft"><?php next_posts_link('<- Oudere artikelen') ?></div>
				<div class="new-posts floatright"><?php previous_posts_link('Nieuwere artikelen ->') ?></div>
				<div class="clearing"></div>
			</div><!-- end .navigation -->
			
			<?php else : ?>

			<div class="post">
				<div class="padding">
					<h2>I couldn't find what you're looking for!</h2><br />
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
