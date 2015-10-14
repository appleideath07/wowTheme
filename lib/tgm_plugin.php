<?php

require_once dirname( __FILE__ ) . '/TGM/class-tgm-plugin-activation.php';

 add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );


 function my_theme_register_required_plugins() {
	
    
    
    
      $plugins = array(
        array(
            'name'      => 'Page Builder by SiteOrigin',
            'slug'      => 'siteorigin-panels',
            'required'  => false
            ,'force_activation'=> 'true'
        ),

        array(
            'name'      => 'SiteOrigin Widgets Bundle',
            'slug'      => 'so-widgets-bundle',
            'required'  => false
            ,'force_activation'=> 'true'
        ),

		
		array(
            'name'               => 'Simple Social Icons', // The plugin name.
           	'slug'      => 'simple-social-icons', //slug
            'required'           => false
            ,'force_activation'=> 'true'
        ),
		
		array(
        'name' => 'Bootstrap Widget Styling',
        'slug' => 'bootstrap-widget-styling',
         'required'           => false
            ,'force_activation'=> 'true'
        ),
          
     

		

		
		
		
    );
    
    


 	$config = array(
 		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
	'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
 		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
 		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
 		/*
68 		'strings'      => array(
69 			'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
70 			'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
71 			// <snip>...</snip>
72 			'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
73 		)
74 		*/
 	);

	tgmpa( $plugins, $config );

 }



?>