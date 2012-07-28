<?php
  if (isset($_COOKIE['side'])) {
		if ( $_COOKIE['side'] == 'particulier' ) {
			wp_nav_menu( array( 'theme_location' => 'particulier', 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); 
		} else {
			wp_nav_menu( array( 'theme_location' => 'zakelijk', 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); 
		}
	} else {
			wp_nav_menu( array( 'theme_location' => 'geenkeuze', 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); 
	}
?>
