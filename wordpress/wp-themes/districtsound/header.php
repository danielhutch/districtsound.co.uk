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
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/menu.js"></script>
</head>
<body>

<!-- <p>This is the header</p> -->


  <header id="topnav">
    <div id="nav">
      <ul>
      	<?php wp_nav_menu( array( 'items_wrap' => '%3$s' ) ); ?>
      	<!--  http://codex.wordpress.org/Function_Reference/wp_nav_menu -->     
      </ul>
    </div>
    <a href="#" id="navbtn">Nav Menu</a>        
     <div id="logo">
    	<a href="<?php echo home_url(); ?>"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/ds_logo.svg"> </a>
		</div>	

  </header><!-- @end #topnav -->
  <div id="bar">
  	<img src="<?php bloginfo('template_directory'); ?>/images/bar.png">
  </div>


</div>



</div>