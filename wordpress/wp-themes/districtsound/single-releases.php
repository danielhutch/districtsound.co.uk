<?php get_header(); ?>

<div id="article">

	<!-- <p>This is the single-releases.php file</p> -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div id="releasecover">
			<div id="releasecoversub">
				<img src="<?php the_field( 'cover_large' ); ?>">
			</div>
		</div>
		<div id="releaseinfo">
			<div id="releaseinfosub">
				<h4><?php the_field( 'release_number' ); ?></h4>
				<h3 class="releases_artist"><?php the_field( 'artist' ); ?></h3>
				<h3 class="releases_title"><?php the_field( 'title' ); ?></h3>
				<p><?php the_field( 'tracks' ); ?></p>
				<p><a href="<?php the_field( 'buy_digital' ); ?>">Buy</a></p>
			</div>
		</div>
		<?php the_field( 'soundcloud_api' ); ?>

	<?php endwhile; else: ?>

		<p>There are no posts or pages here</p>

	<?php endif; ?>

</div>


<?php get_footer(); ?>