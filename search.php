<?php get_header();?>
<?php include('includes/nav.php');?>

<div class="container">
<h1>CUSTOM STATIC TEXT BUT FOR ME I WIDGETIZE IT ALL FOR DYNAMIC</h1>
<hr>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="row">
	<div class="col-md-8">
	<h1><?php the_title(); ?></h1>
	<h4>Posted on <?php the_time('F jS, Y') ?></h4>
	<p><?php the_excerpt(__('(more...)')); ?></p>
	</div>
	
	<div class="col-md-4">
	<!-- 
	https://codex.wordpress.org/Function_Reference/has_post_thumbnail
	for thumbnail images
	-->
	<?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail('full', array( 'class'  => 'img-responsive' ));// show featured image
	//in this case we used bootstrap image responsive class
}
	?>
	
	</div>



</div>
<hr>
<?php endwhile; else: ?>


<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>


</div>

<?php get_footer();?>