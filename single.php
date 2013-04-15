<?php get_header(); ?>       
<div id="content-single"><!-- Begin Content (Single) -->
	<?php if (have_posts()) : ?>	
	<?php while (have_posts()) : the_post(); ?>
		<div class="entry">
			<div class="post-meta">
			<span class="post-cat"><?php the_category(', ') ?></span>
			<h2 class="post-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<span class="date sans"><?php the_time('l, F jS Y') ?> 
			<!--<?php if (get_theme_mod('solofolio_blog_showauthor')) {?>by <?php the_author() ?><?php } ?>-->
			</span>
			<!--<span class="meta-cat sans"><?php comments_popup_link('', '1 Comment &#187;', '% Comments &#187;'); ?><?php the_tags('| Tags: ', ', ', '<br />'); ?></span>-->
		</div>
			<?php the_content('Read the rest of this entry &raquo;'); ?>
			<div class="clear"></div>
		</div>
		<div id="comments">
			<?php comments_template(); ?>
		</div>
	<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft">
				<?php next_posts_link('&laquo; Older Entries') ?>
			</div>
			<div class="alignright">
				<?php previous_posts_link('Newer Entries &raquo;') ?>
			</div>
		</div>
	<?php else : ?>
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>	
	<?php endif; ?> 
	 
	 <div class="clear"></div>

</div><!-- End Content -->

<div class="clear"></div>

<?php get_footer(); ?>	