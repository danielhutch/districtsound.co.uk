<?php get_header(); ?>

<p>This is the single-releases.php file</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<img src="<?php the_field( 'artist_shot_large' ); ?>"></a>
	<?php the_field( 'artist_name' ); ?>
	<?php the_field( 'artist_info' ); ?>
	<hr>

<?php endwhile; else: ?>

	<p>There are no posts or pages here</p>

<?php endif; ?>


<?php get_footer(); ?>