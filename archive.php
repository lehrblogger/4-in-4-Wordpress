<?php get_header(); ?>

	<div id="main">

		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2><?php echo single_cat_title(); ?></h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2>A<?php the_time('F jS, Y'); ?></h2>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2><?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2><?php the_time('Y'); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2>Posts</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2>Archives</h2>

		<?php } ?>


		<div class="comments">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
		<div class="entry">
				<h3 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>
				<small>Posted by <?php the_author(); ?> on <?php the_time('l, F jS, Y') ?></small> - <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Link</a>


				<div class="entry" style="padding-bottom:0px">
					<?php the_excerpt() ?>
				</div>
<p><a href="<?php the_permalink() ?>#more-<?php the_ID(); ?>" title="Read the rest of this entry">Read more &#187;</a></p>

<div class="clear"></div>
				<p class="info">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

			</div>

		<?php endwhile; ?>

		<div class="info">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		Perhaps try a search with specific keywords.

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
