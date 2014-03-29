<?php 
/*

	Template Name: Artists

*/


get_header(); ?>

<!-- <p>This is the artists.php file</p>-->

<?php

	$args = array(
		'post_type' => 'artists'
	);

	$the_query = new WP_Query( $args );

?>
<div class="tile_a">
	<div class="tile_b">
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="tile_c">
			<div class="tile_d">
				<a href="<?php the_permalink() ;?>"><img src="<?php the_field( 'artist_shot_small' ); ?>"></a>
				<div class="releases_info">			
					<h3><?php the_field( 'artist_name' ); ?></h3>	
					<a href="<?php the_permalink() ;?>">More info</a>
				</div>
			</div>
		</div>

		<?php endwhile; else: ?>

			<p>There are no posts or pages here</p>

		<?php endif; ?>


	</div>
</div>

<?php get_footer(); ?>