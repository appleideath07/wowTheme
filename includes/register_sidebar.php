<?php

//REGISTER WIDGET FUNCTIONS HERE
add_action( 'widgets_init', 'register_widgets' );
function register_widgets(){
	//function reference from wordpress register sidebar needed here
	//for more examples http://codex.wordpress.org/Widgetizing_Themes
	
	//DEFAULT SIDEBAR
    	register_sidebar( array(
		'name'          => 'SIDEBAR WIDGETS',
		'id'            => 'sidebar', #this is important in calling the widget 
		'description' 	=> 'widgets here'
	) );
    
    
	//SAMPLE FEATURED TEXT
	register_sidebar( array(
		'name'          => 'FEATURED-TEXT 1',
		'id'            => 'text1', #this is important in calling the widget 
		'description' 	=> 'TEXT WIDGET HERE'
	) );
	register_sidebar( array(
		'name'          => 'Footer 1',
		'id'            => 'footer-1', #this is important in calling the widget 
		'description' 	=> 'widgets here'
	) );
	register_sidebar( array(
		'name'          => 'Footer 2',
		'id'            => 'footer-2', #this is important in calling the widget 
		'description' 	=> 'widgets here'
	) );
	register_sidebar( array(
		'name'          => 'Footer 3',
		'id'            => 'footer-3', #this is important in calling the widget 
		'description' 	=> 'widgets here'
	) );
	
}

?>