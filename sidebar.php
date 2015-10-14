
<!-- sidebar optional -->


<!--default sidebar-->


<aside class="sidebar">
    
<?php if ( is_active_sidebar( 'footer-1' ) ) : #id on register sidebar functions must be here ?>
	
		<?php dynamic_sidebar( 'sidebar' ); ?>
	<!-- #primary-sidebar -->
	
<?php endif; ?>
    
    
</aside>