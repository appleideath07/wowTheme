<?php 
/*

http://codex.wordpress.org/Function_Reference LIST OF ALL FUNCTIONS


WIDGETIZING SIDEBAR HERE
http://codex.wordpress.org/Widgetizing_Themes



WORDPRESS CODEX/ LIBRARY FOR THEME DEVELOPMENT
https://codex.wordpress.org/Theme_Development



bootstrap nav_walker script needed to integrate nav of wordpress menu settings
for more info go to this site
https://github.com/twittem/wp-bootstrap-navwalker


*/




// Register Custom Navigation Walker
require_once('includes/wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
     'secondary' => __( 'secondary menu' , 'THEME NAME' )
) );



/*

how to create menus
WP-admin > THEMES > MENUS

sample menu call function


       wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );


*/






//exerpt readmore
//excerpt limit post for read more purposes
//https://codex.wordpress.org/Function_Reference/the_excerpt
function new_excerpt_more( $more ) {
	return ' <a class="read-more btn " href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );



//theme support thumbnails
add_theme_support( 'post-thumbnails' );


//hide admin bar wordpress
add_filter('show_admin_bar', '__return_false');






//DOGE LIBRARY PATH
add_action( 'after_setup_theme', 'doge_setup');
function doge_setup(){

    define('DOGE_PATH' , get_stylesheet_directory_uri());
    define('DOGE_LIB', DOGE_PATH."/lib");
    
    #for plugin activation required wow such usefull
    include(dirname( __FILE__ )."/lib/tgm_plugin.php");
    
    include(dirname(__FILE__)."/includes/register_sidebar.php");
    
  
    
    
}

?>