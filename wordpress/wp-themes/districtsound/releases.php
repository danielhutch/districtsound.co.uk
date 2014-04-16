<?php
/*

	Template Name: Releases

*/


get_header(); ?>

<!-- <p>This is the releases.php file</p> -->


<div class="tile_a">

	<div class="tabs">
		<ul>
			<li class="tab-trigger active"><a href="#tab-releases">Releases</a></li>
			<li class="tab-trigger"><a href="#tab-samplers">Samplers</a></li>
		</ul>
	</div>

	<?php

		$args = array(
			'post_type' => 'releases'
		);

		$the_query = new WP_Query( $args );

	?>

	<div id="tab-releases" class="tab tile_b cf">

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="tile_c">
				<div class="tile_d">
					<a href="<?php the_permalink() ;?>"><img src="<?php the_field( 'cover_small' ); ?>"></a>
					<!-- <h3><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h3> -->
					<div class="releases_info">
						<h4><?php the_field( 'release_number' ); ?></h4>
						<h3 class="releases_artist"><?php the_field( 'artist' ); ?></h3>
						<h3 class="releases_title"><?php the_field( 'title' ); ?></h3>
						<h4><a href="<?php the_permalink() ;?>">More info</a></h4>
					</div>
				</div>
			</div>

			<?php endwhile; else: ?>

			<p>There are no posts or pages here</p>

			<?php endif; ?>

	</div>


	<?php

		$args = array(
			'post_type' => 'samplers'
		);

		$the_query = new WP_Query( $args );

	?>

	<div id="tab-samplers" class="tab tile_b cf">

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="tile_c">
				<div class="tile_d">
					<a href="<?php the_permalink() ;?>"><img src="<?php the_field( 'cover_small' ); ?>"></a>
					<!-- <h3><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h3> -->
					<div class="releases_info">
						<h4><?php the_field( 'release_number' ); ?></h4>
						<h3 class="releases_artist"><?php the_field( 'artist' ); ?></h3>
						<h3 class="releases_title"><?php the_field( 'title' ); ?></h3>
						<h4><a href="<?php the_permalink() ;?>">More info</a></h4>
					</div>
				</div>
			</div>

			<?php endwhile; else: ?>

			<p>There are no posts or pages here</p>

			<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>