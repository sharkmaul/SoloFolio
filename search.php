<?php get_header(); ?>
<div id="content-search">
	<h2>Search Results</h2>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="entry">
		<div class="post-meta">
			<h3 class="post-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
			</h3>
			<span class="date sans"><?php the_time('l, F jS Y') ?> by <?php the_author() ?></span>
		
		</div>
		<?php the_content('Continue reading &raquo;'); ?>
	</div>
<?php endwhile; ?>
	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>
<?php else : ?>	
	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>   
</div>
<?php get_sidebar(); ?>		
<?php get_footer(); ?>