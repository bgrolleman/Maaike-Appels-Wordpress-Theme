<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="google-site-verification" content="d2P0tswyhn0fzHs5CSiWhv2HK169VArqJrBTOKHBqOw" />
	<title><?php bloginfo('name'); ?> - Fotograaf Barneveld <?php if ( is_single() ) { ?> &raquo; Archive <?php } ?> <?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<!--[if lte IE 7]><link href="<?php bloginfo('template_directory'); ?>/css/style-ie.css" rel="stylesheet" type="text/css" /><![endif]-->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
	<script language="javascript" type="text/javascript">
		function showHide(shID) {
		   if (document.getElementById(shID)) {
		      if (document.getElementById(shID+'-show').style.display != 'none') {
			 document.getElementById(shID+'-show').style.display = 'none';
			 document.getElementById(shID).style.display = 'block';
		      }
		      else {
			 document.getElementById(shID+'-show').style.display = 'inline';
			 document.getElementById(shID).style.display = 'none';
		      }
		   }
		}
	</script>
</head>
<body>
<a href="<?php bloginfo('url'); ?>" title="Happy face :)" class="happy-face"></a>
<div id="container">
<div id="header">
	<div id="logo">
		<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
		<p><?php bloginfo('description'); ?></p>
	</div><!-- end #logo -->
	<div id="menu">
		<ul>
		    <li><!-- <a href="/">blog</a></li> -->
			<?php wp_list_pages('title_li='); ?>
			<div class="clearing"></div>
		</ul>
	</div><!-- end #menu -->
<div class="clearing"></div>
</div><!-- end #header -->
