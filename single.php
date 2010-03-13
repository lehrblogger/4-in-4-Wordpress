<?php get_header(); ?>



<div id="main">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

	<?php /* This is the navigation for previous/next post. It's disabled by default. ?>
	<p id="entrynavigation">
		<?php previous_post('<span class="previous">%</span>','','yes') ?>
		<?php next_post('<span class="next">%</span>','','yes') ?>
	</p>
	<?php */ ?>

	<div class="entry">

		<h2><?php the_title(); ?></h2>

<p class="post-info">By <span style="color:#000"><?php the_author(); ?></span> on <?php the_category(', ') ?></p>

		
		<?php the_content();?>

<p class="info">
		<?php if ($post->comment_status == "open") ?>
   		<em class="date"><?php the_time('F jS, Y') ?><!-- at <?php the_time('h:ia')  ?>--></em>
   		<!--<em class="author"><?php the_author(); ?></em>-->
   		<?php edit_post_link('Edit','<span class="editlink">','</span>'); ?>
   		</p>


   </div>

<?php endwhile; ?>

<?php else : ?>

	<h2>Not Found</h2>
	<p>"Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

<?php comments_template(); ?>





</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>


