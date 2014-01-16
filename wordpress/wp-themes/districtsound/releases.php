<?php 
/*

	Template Name: Releases

*/


get_header(); ?>

<p>This is the releases.php file</p>

<?php

	$args = array(
		'post_type' => 'releases'
	);

	$the_query = new WP_Query( $args );

?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<h3><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h3>
	<a href="<?php the_permalink() ;?>"><img src="<?php the_field( 'cover_small' ); ?>"></a>
	<?php the_field( 'release_number' ); ?>
	<?php the_field( 'artist' ); ?>
	<?php the_field( 'title' ); ?>
	<a href="<?php the_permalink() ;?>">More info</a>
	<hr>

<?php endwhile; else: ?>

	<p>There are no posts or pages here</p>

<?php endif; ?>


<?php get_footer(); ?>