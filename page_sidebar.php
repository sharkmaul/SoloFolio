<?php
/*
Template Name: Page w/ Sidebar
*/
?>
<?php get_header(); ?>        
<div id="content-page-sidebar"><!-- Begin Content -->
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	<?php endwhile; ?>
	<?php else : ?>
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>
</div><!-- /#content-page-sidebar -->

<?php get_sidebar(); ?>
<div class="clear"></div>

<?php get_footer(); ?>	