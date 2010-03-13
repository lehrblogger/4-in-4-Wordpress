<?php get_header(); ?>



<div id="main">
<div class="entry">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<?php edit_post_link('<input type=button value="Edit Page" >'); ?>

		<h2><?php the_title(); ?></h2>

		<?php the_content(); ?>
  <?php wp_link_pages(); ?>
  <?php $sub_pages = wp_list_pages( 'sort_column=menu_order&depth=1&title_li=&echo=0&child_of=' . $id );?>


<?php endwhile; ?>

<?php endif; ?>

<div style="clear:both"></div>
 
<?php comments_template(); ?>

</div>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>


