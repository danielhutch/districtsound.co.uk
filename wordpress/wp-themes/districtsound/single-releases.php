<?php get_header(); ?>

<p>This is the single-releases.php file</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<a href="<?php the_permalink() ;?>"><img src="<?php the_field( 'cover_large' ); ?>"></a>
	<?php the_field( 'release_number' ); ?>
	<?php the_field( 'artist' ); ?>
	<?php the_field( 'title' ); ?>
	<?php the_field( 'tracks' ); ?>
	<?php the_field( 'buy_digital' ); ?>
	<?php the_field( 'buy_vinyl' ); ?>
	<hr>

<?php endwhile; else: ?>

	<p>There are no posts or pages here</p>

<?php endif; ?>


<?php get_footer(); ?>