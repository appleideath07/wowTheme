

<?php wp_footer(); ?>




<?php if ( is_active_sidebar( 'footer-1' ) ) :?>
<div class="before-footer">
    <div class="container">
            <div class="row footer-widgets">
           
<?php if ( is_active_sidebar( 'footer-1' ) ) : #id on register sidebar functions must be here ?>
	 <div class="col-md-4 footer-widget-1">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	<!-- #primary-sidebar -->
	 </div>
<?php endif; ?>
          
<?php if ( is_active_sidebar( 'footer-2' ) ) : #id on register sidebar functions must be here ?>
	 <div class="col-md-4 footer-widget-2">
		<?php dynamic_sidebar( 'footer-2' ); ?>
	<!-- #primary-sidebar -->
	 </div>
<?php endif; ?>
    
<?php if ( is_active_sidebar( 'footer-3' ) ) : #id on register sidebar functions must be here ?>
	 <div class="col-md-4 footer-widget-3">
		<?php dynamic_sidebar( 'footer-3' ); ?>
	<!-- #primary-sidebar -->
	 </div>
<?php endif; ?>
           
       </div>
    </div>
</div>
<?php endif; ?>


<footer>
    <div class="container">
       
   
       
        <div class="row">
            <div class="col-md-8">
             
                <p>&copy; copyright <?php echo date('y');?>  •  <?php echo bloginfo('name');?></p>
            </div>
            <div class="col-md-4">
                
            </div>
           
        </div>
    </div>
</footer>

<div class="scrollToTop">
   <a href="#" class="btn" style="color:#ccc"> back to top</a>
</div>



</body>
</html>