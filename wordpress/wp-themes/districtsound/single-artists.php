<?php get_header(); ?>

<!-- <p>This is the single-artists.php file</p> -->


<div id="article">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<!-- <h3><?php the_title(); ?></h3> -->
		<img src="<?php the_field( 'artist_shot_large' ); ?>"></a>
		<h2><?php the_field( 'artist_name' ); ?></h2>
		<p><?php the_field( 'artist_info' ); ?><p>

	<?php endwhile; else: ?>

		<p>There are no posts or pages here</p>

	<?php endif; ?>
</div>

<?php get_footer(); ?>