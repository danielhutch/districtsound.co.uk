

<?php get_header(); ?>

<!-- <p>This is the front-page.php file</p>-->
<div id="feature">
		<ul class="slides">
			<?php

			$args = array(
				'post_type' => 'releases'
			);

			$the_query = new WP_Query( $args );

		?>

		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


		<li>
			<a href="<?php the_permalink() ;?>"><img src="<?php the_field( 'cover_small' ); ?>"></a>
		</li>
		<?php endwhile; else: ?>

			<p>There are no posts or pages here</p>

		<?php endif; ?>
		</ul>
</div>

	<div id='twitter-1' class='clearfix'>
		<div id="twitter-2" class='clearfix'>
			<div id="twitter-3">
				<div id="twitter-4">
					<a class="twitter-timeline" href="https://twitter.com/districtsounduk" data-widget-id="426000989720551424">Tweets by @districtsounduk</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
				</div>
					<div id="twitter-3">
						<div id="twitter-4">
							<a class="twitter-timeline" href="https://twitter.com/districtsounduk/favorites" data-widget-id="426001717117743104">Favorite Tweets by @districtsounduk</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
				</div>
			</div>
		</div>
	</div>



<?php get_footer(); ?>
