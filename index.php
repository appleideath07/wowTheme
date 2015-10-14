 <?php get_header();?>
 <?php include('includes/nav.php');?>
 
 
 <div class="site-content">
     <div class="container">
 
 

<?php if ( is_active_sidebar( 'text1' ) ) : #id on register sidebar functions must be here ?>
	 <div class="jumbotron jumbo-widget">
		<?php dynamic_sidebar( 'text1' ); ?>
	<!-- #primary-sidebar -->
	 </div>
<?php endif; ?>

 
 
 </div>
 
 
 <!-- 
 
 CALLING SCRIPTS FOR CONTENT
 -->
<div class="container">

<div class="row">
<div class="col-md-12">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	
	
		
		<!-- 
	https://codex.wordpress.org/Function_Reference/has_post_thumbnail
	for thumbnail images
	-->

	
<article class="post">
    	<?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail('full', array( 'class'  => 'img-responsive' ));// show featured image
	//in this case we used bootstrap image responsive class
}
	?>
	
	
	<h1><?php the_title(); ?></h1>
	<h4>Posted on <?php the_time('F jS, Y') ?></h4>
	<p><?php the_excerpt(__('(more...)')); ?></p>
	
</article>




<hr>
<?php 




endwhile; else: ?>


<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
<?php posts_nav_link( ' &#183; ', 'previous page', 'next page' ); ?>

</div>
</div>





<!--end container-->
</div>

<!-- end site content -->
</div>
 
 <?php get_footer();?>