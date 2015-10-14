<div class="site-header">
    
     <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
        
            
            
            
            <a class="navbar-brand" href="<?php echo bloginfo('url');?>"><?php echo bloginfo('name');?></a>
          </div>
          <div >
  
             <?php 

if(has_nav_menu('primary')):

?>

       <?php

       wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'navbar',
                'menu_class'        => 'nav navbar-nav navbar-right', #HERe YOU WILL ENTER THE UL CLASS
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );

endif;


?>
           
           
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>



    </div> <!-- /container -->
    
    
    
</div>



<div class="secondary">
  
    <?php
if(has_nav_menu('secondary')):
?>

<div class="container">
     <nav class="navbar navbar-default">
     
         <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
        
            <div>
                             <?php 

if(has_nav_menu('primary')):

?>

       <?php

       wp_nav_menu( array(
                'menu'              => 'secondary',
                'theme_location'    => 'secondary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'navbar2',
                'menu_class'        => 'nav navbar-nav', #HERe YOU WILL ENTER THE UL CLASS
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );

endif;


?>
            </div>
            
            
             
         </div>
     
    </nav>
</div>

<?php
endif;
    ?>
                
     
</div>