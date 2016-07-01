<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @link https://wptheme.idns-technologies.com/idnspro/
 *
 * @package idnspro
 * @subpackage Wptheme_idnspro
 * @since Wptheme idnspro 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Wrapper -->
<div id="wrapper">
	<!-- Header -->
	<header id="header">
		<div class="inner">

			<!-- Logo -->
			<?php idnspro_the_custom_logo(); ?>

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<!-- Nav -->
			<nav>
				<ul>
					<li><a href="#menu">Menu</a></li>
				</ul>
			</nav>
			<?php endif; ?>

		</div>
	</header>
	<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<!-- Menu -->
	<nav id="menu">
		<h2>Menu</h2>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'menu',
				'menu_id'        => 'accordion',
				'before'         => '<span class="arrow-btn"></span>',
				'fallback_cb'    => '',
			 ) );
		?>
	</nav>
	<?php endif; ?>
