<?php get_header(); ?>

<div id="article">

	<!-- <p>This is the page.php file</p> -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
		

	<?php endwhile; else: ?>

		<p>There are no posts or pages here</p>

	<?php endif; ?>

</div>

<?php get_footer(); ?>