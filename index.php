<?php
/* 
SoloFolio
Theme - Blog Index
*/
?>
<?php get_header(); ?>        
<div id="content-index"><!-- Begin Content - Index -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="entry">
		<div class="post-meta">
			<?php if (get_theme_mod('solofolio_blog_showcat')) {?><span class="post-cat"><?php the_category(', ') ?></span><?php } ?>
			<h2 class="post-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<span class="date sans"><?php the_time('l, F jS Y') ?> 
			<?php if (get_theme_mod('solofolio_blog_showauthor')) {?>by <?php the_author() ?><?php } ?>
			<span class="meta-cat sans"><?php comments_popup_link('', '1 Comment &#187;', '% Comments &#187;'); ?>  <?php the_tags('| Tags: ', ', ', ''); ?></span>
			</span>
		</div>
		<?php the_content('Continue reading &raquo;'); ?>
		<div class="clear"></div>
		<div class="clear"></div>
	</div>
	<?php endwhile; ?>
	<div class="navigation">
		<div class="alignleft"><p><?php next_posts_link('&laquo; Older Entries') ?></p></div>
		<div class="alignright"><p><?php previous_posts_link('Newer Entries &raquo;') ?></p></div>
	</div>
<?php else : ?>
	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>


</div>

<div class="clear"></div>

<?php get_footer(); ?>	