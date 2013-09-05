<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/stepcarousel.js">
<script type="text/javascript">

stepcarousel.setup({
galleryid: 'quotegallery', //id of carousel DIV
beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
panelclass: 'customerquote', //class of panel DIVs each holding content
panelbehavior: {speed:300, wraparound:true, persist:false},
defaultbuttons: {enable: true, moveby: 1, leftnav: ['<?php bloginfo('template_directory');?>/images/larrow.png', -35, 50], rightnav: ['<?php bloginfo('template_directory');?>/images/rarrow.png', 5 , 50]},
statusvars: ['statusA', 'statusB', 'statusC'], // Register 3 "status" variables
contenttype: ['inline'], // content type <--No comma following the very last parameter, always!
autostep: {enable:true, moveby:1, pause:4000},
})

</script>

<div id="page">
	<div id="left" class="page">
		<?php get_template_part('part-menu'); ?>
	
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
		  <div class="padding">

					<?php the_content('Read more&#8230;'); ?>

			 	  <h6><?php edit_post_link(__(" (Edit) "), ''); ?></h6>
					<?php wp_link_pages('before=<p class="link-pages">Pages: &after=</p>'); ?>
					<?php comments_template(); ?>
								
			</div><!-- end .padding -->
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
	
<div class="clearing"></div>
</div><!-- end #page -->

<?php get_footer(); ?>
