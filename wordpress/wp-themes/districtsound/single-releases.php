<?php get_header(); ?>

<div id="release">

	<!-- <p>This is the single-releases.php file</p> -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<img src="<?php the_field( 'cover_large' ); ?>">
		<h3><?php the_title(); ?></h3>
		<?php the_field( 'release_number' ); ?>
		<?php the_field( 'artist' ); ?>
		<?php the_field( 'title' ); ?>
		<?php the_field( 'tracks' ); ?>
		<?php the_field( 'buy_digital' ); ?>
		<?php the_field( 'buy_vinyl' ); ?>
		<?php the_field( 'soundcloud_api' ); ?>
		

	<?php endwhile; else: ?>

		<p>There are no posts or pages here</p>

	<?php endif; ?>

</div>


<?php get_footer(); ?>