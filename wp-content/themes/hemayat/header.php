<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>


		<meta property="og:type" content="game">
		<!-- <meta property="og:title" content="Medrick Official Website">
		<meta property="og:description" content="Medrick is a video game publisher and development company founded with the intention of developing and publishing AAA mobile and PC games in the MENA region. Medrick currently is one of the biggest publishers and developers of the region.">
		<meta property="og:url" content="<?php the_permalink(); ?>">
		<meta property="og:site_name" content="Medrick Game Studio">
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/library/images/logo.png">
		
		<meta name="description" content="Medrick is a video game publisher and development company founded with the intention of developing and publishing AAA mobile and PC games in the MENA region. Medrick currently is one of the biggest publishers and developers of the region.">
		<meta name="author" content="Medrick Game Studio">
		
		<meta name="twitter:card" content="Medrick Studio">
		<meta name="twitter:site" content="<?php the_permalink(); ?>">
		<meta name="twitter:title" content="Medrick Official Website">
		<meta name="twitter:description" content="Medrick is a video game publisher and development company founded with the intention of developing and publishing AAA mobile and PC games in the MENA region.">
		<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/library/images/logo.png">
		<meta name="twitter:creator" content="Medrick Studio"> -->

		<link rel="canonical" href="<?php the_permalink(); ?>" />

		<meta name="description" content="">
  		<meta name="keywords" content="">



		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header">
				<div id="inner-header" class="container">
					<div class="bonyad">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/bonyad_logo.png" alt="بنیاد">
					</div>
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="همگرا">
						</a>						
					</div>
					<div class="navigation">
						<?php wp_nav_menu(array(
					         'container' => false,                            // remove nav container
					         'container_class' => 'menu cf',                  // class of container (should you choose to use it)
					         'menu' => __( 'The Main Menu', 'bonestheme' ),   // nav name
					         'menu_class' => 'nav-menu',                      // adding custom nav class
					         'theme_location' => 'main-nav',                  // where it's located in the theme
					         'before' => '',                                  // before the menu
    			               'after' => '',                                 // after the menu
    			               'link_before' => '<span>',  // before each link
    			               'link_after' => '</span>',                     // after each link
    			               'depth' => 0,                                  // limit the depth of the nav
					         'fallback_cb' => ''                              // fallback function (if there is one)
						)); ?>
					</div>


					<div class="mobile-meun">
						<div class="navbar-header navbar-default">
						    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      						<?php wp_nav_menu(array(
						         'container' => false,                            // remove nav container
						         'container_class' => 'menu',          // class of container (should you choose to use it)
						         'menu' => __( 'The Main Menu', 'bonestheme' ),   // nav name
						         'menu_class' => 'nav navbar-nav',                      // adding custom nav class
						         'theme_location' => 'main-nav',                  // where it's located in the theme
						         'before' => '',                                  // before the menu
	    			               'after' => '',                                 // after the menu
	    			               'link_before' => '<span>',  // before each link
	    			               'link_after' => '</span>',                     // after each link
	    			               'depth' => 0,                                  // limit the depth of the nav
						         'fallback_cb' => ''                              // fallback function (if there is one)
							)); ?>
      					</div>

<!-- data-toggle="collapse" data-target=".navbar-collapse.show" -->

	                    
					</div>


				</div>
			</header>
