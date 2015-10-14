<?php
/*
Template Name: CONTENT SIDEBAR
*/

/*
for more info on page template
https://developer.wordpress.org/themes/basics/page-templates/
*/
 ?>

<?php get_header();?>
<?php 
include(dirname(__FILE__)."/../includes/nav.php");
?>

<div class="container">

<div class="container">

<div class="row">
<div class="col-md-8">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	
	
		
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
	
	
	<h1><?php the_title(); ?></h1>
	<h4>Posted on <?php the_time('F jS, Y') ?></h4>
	<p><?php the_content(__('(more...)')); ?></p>
	
	





<hr>
<?php endwhile; else: ?>


<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
</div>

<div class="col-md-4">
    <?php include(dirname(__FILE__)."/../sidebar.php");?>
</div>

</div>


</div>

<?php get_footer();?>




