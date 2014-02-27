<?php get_header(); ?>

<div id="article">

<!-- <p>This is the home.php file</p> -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<hr>

<?php endwhile; else: ?>

	<p>There are no posts or pages here</p>

<?php endif; ?>


</div>

<?php get_footer(); ?>