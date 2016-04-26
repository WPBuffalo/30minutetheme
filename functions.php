<?php // start

register_nav_menus(array('primary' => 'Primary Nav','footer' => 'Footer Nav')); //enable menus and create locations for them
register_sidebar(array('id' => 'widgets','name' => 'Sidebar widgets')); // enable widgets in our theme that can be added to a sidebar


// Enqueue items we want to add to the head here (js files, stylesheets, etc...)
// A bit advanced, but a much more powerful way to add files to the head vs adding it to the header.php template directly

// function mytheme_enqueue() { //create a function that we can call as a hook
// 	wp_register_style( 'screen', get_stylesheet_uri(), '', '', 'screen' );
// 	wp_enqueue_style( 'screen' );
// }
// add_action( 'wp_enqueue_scripts', 'mytheme_enqueue' );
