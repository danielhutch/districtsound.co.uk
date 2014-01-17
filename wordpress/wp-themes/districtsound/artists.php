<?php 
/*

	Template Name: Artists

*/


get_header(); ?>

<p>This is the artists.php file</p>

<?php

	$args = array(
		'post_type' => 'artists'
	);

	$the_query = new WP_Query( $args );

?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<h3><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h3>
	<a href="<?php the_permalink() ;?>"><img src="<?php the_field( 'artist_shot_small' ); ?>"></a>
	<?php the_field( 'artist_name' ); ?>
	<a href="<?php the_permalink() ;?>">More info</a>
	<hr>

<?php endwhile; else: ?>

	<p>There are no posts or pages here</p>

<?php endif; ?>


<?php get_footer(); ?>