<div class="post" id="post-<?php the_ID(); ?>">
		<div class="padding">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		</div><!-- end .padding -->
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
