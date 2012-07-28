<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="google-site-verification" content="_gMfFOh4Mx8CCYOHl7xXUn3cnNh1B7pK865QcnnREG0" />
	<title><?php bloginfo('name'); ?> - Fotograaf Barneveld <?php if ( is_single() ) { ?> &raquo; Archive <?php } ?> <?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<!--[if lte IE 7]><link href="<?php bloginfo('template_directory'); ?>/css/style-ie.css" rel="stylesheet" type="text/css" /><![endif]-->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/stepcarousel.js">
	<script language="javascript" type="text/javascript">
		function showHide(shID) {
		   if (document.getElementById(shID)) {
		      if (document.getElementById(shID).style.display != 'block') {
			 document.getElementById(shID).style.display = 'block';
		      }
		      else {
			 document.getElementById(shID).style.display = 'none';
		      }
		   }
		}
	</script>
</head>
<body>
<div id="container">
<div id="header">
	<div id="toplogo"></div>
	<?php wp_nav_menu( array( 'theme_location' => 'topmenu', 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
<div class="clearing"></div>
</div><!-- end #header -->
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
