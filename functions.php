<?php
if ( isset($_GET['side']) ) {
	setcookie('side',$_GET['side'],time()+1209600,'/');
	$_COOKIE['side'] = $_GET['side'];
}
if ( function_exists('register_sidebar') ) {
	register_sidebar();
}
add_theme_support('menus');
register_nav_menus(array(
	'topmenu' => __('Algemeen Menu'),
	'particulier' => __('Particulier Menu'),
	'zakelijk' => __('Zakelijk Menu'),
	'geenkeuze' => __('Nog Geen Keuze gemaakt')
));
?>
