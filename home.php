<?php get_header(); ?>



<div id="main">
<div class="entry">
<!--7287pwkr-->

<div class="clear"></div>
What is a 4-in-4? According to <a href="http://itp.nyu.edu/">NYU's Interactive Telecommunications Program</a>:
<blockquote>
Do a creative project every day for five straight days.<br><br>

Projects must be completed in a day, so they 
need to be as compact as they are creative<br><br>

Each project needs a name and documentation posted by the end of the day. Each should be a stand-alone accomplishment
</blockquote><hr>


<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

	<?php $custom_fields = get_post_custom(); //custom fields ?>


	<?php { ?>

<div class="entry">

<h2><a href="<?php the_permalink() ?>" title="Permalink"><?php the_title(); ?></a></h2>
<p class="post-info">By <span style="color:#000"><?php the_author(); ?></span> on <?php the_category(', ') ?></p>

		<?php ($post->post_excerpt != "")? the_excerpt() : the_content(); ?>

		<p class="info"><?php if ($post->post_excerpt != "") { ?><a href="<?php the_permalink() ?>" class="more">Continue Reading</a><?php } ?>
   		<?php comments_popup_link('Add comment', '1 comment', '% comments', 'commentlink', ''); ?> | 
   		<em class="date"><?php the_time('F jS, Y') ?><!-- at <?php the_time('h:ia')  ?>--></em>
   		<!--<em class="author"><?php the_author(); ?></em>-->
   		<?php edit_post_link('Edit','<span class="editlink">','</span>'); ?>
   		</p>

<div class="hidetxt">7287pwkr</div>

	</div>
<!--
<?php trackback_rdf(); ?>
-->

	<?php } ?>


<?php endwhile; ?>


<p>
	<span class="next"><?php previous_posts_link('Next Posts') ?></span>
	<span class="previous"><?php next_posts_link('Previous Posts') ?></span>
	</p>


<?php else : ?>

	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>




</div>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>


