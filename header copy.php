<?php

/**

 * The Header template for our theme

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Thirteen

 * @since Twenty Thirteen 1.0

 */

?><!DOCTYPE html>
<!-- tso test -->

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) & !(IE 8)]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>

	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>

	<![endif]-->

	<?php wp_head(); ?>

<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,300,200,100,900,800,600,700' rel='stylesheet' type='text/css'>-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">

</head>



<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">

        	<div class="home-link">

            	<div class="logo">

                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

				<h1 class="site-title"><?php echo do_shortcode('[site_logo]'); ?></h1>

				

			</a>

                </div>

                <div class="top-right">

                	<div class="top-links">

                    	<ul>

                        	<li class="email"><a href="mailto:sarah@chemicaltranslator.com">sarah@chemicaltranslator.com</a></li>

                            <li class="phone"><a href="tel:+44 (0)1622 746235">+44 (0)1622 746235</a></li>

                            <li><a href="https://www.linkedin.com/in/sarahsilvatranslator" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/s1.png" alt=""/></a></li>

                            <li><a href="https://plus.google.com/u/0/+SarahSilvaChemicalTranslator/posts/p/pub"  target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/s2.png" alt=""/></a></li>

                            <li><a href="https://twitter.com/ChemicalTrans"  target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/s3.png" alt=""/></a></li>

                            <li><a href="https://www.xing.com/profile/Sarah_Silva?sc_o=mxb_p"  target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/s4.png" alt=""/></a></li>

                        </ul>

                    </div>

                	<div id="navbar" class="navbar">

				<nav id="site-navigation" class="navigation main-navigation" role="navigation">

					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>

					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

					

				</nav><!-- #site-navigation -->

			</div><!-- #navbar -->

                </div>

            <div class="banner"><?php //echo do_shortcode("[metaslider id=4]"); ?>
<?php dynamic_sidebar( 'sidebar-3' ); ?>

        </div>

            </div>

        

        

			



			

		</header><!-- #masthead -->



		<div id="main" class="site-main">