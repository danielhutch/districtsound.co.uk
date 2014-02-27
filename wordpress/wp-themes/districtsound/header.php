<!DOCTYPE html>
<html>
<head>	
	<title>
			<?php
				wp_title( '-', true, 'right');

				bloginfo( 'name' );
			?>

	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		<?php wp_head(); ?>
</head>
<body>

<!-- <p>This is the header</p> -->

<div id="header">

<img id="logo" src="<?php bloginfo('template_directory'); ?>/images/ds_logo.svg">

<div id="nav">

<?php

	$args = array (
			'menu' => 'main-menu'
	);

	wp_nav_menu( $args );

?>



</div>

<hr>

</div>