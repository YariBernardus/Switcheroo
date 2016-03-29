<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ultra
 * @since ultra 0.9
 * @license GPL 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script>if ( top !== self ) top.location.replace( self.location.href );// Hey, don't iframe my iframe!</script>
<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>

<!-- Header -->
<header class="switcher-bar clearfix">

	<!-- Logo -->
	<div class="logo textual pull-left">
		<a href="http://www.weblicity.nl" title="Switcher">
			<?php ultra_display_logo(); ?>
		</a>
	</div>

	<!-- Product Switcher -->
	<div class="product-switcher pull-left">
		<a href="#" title="Select a Product">
			Selecteer een demo <span>+</span>
		</a>
	</div>

	<!-- Bar Remove Button -->
	<div class="remove-btn header-btn pull-right">
		<a href="#" title="Close this bar" class="icon-remove"></a>
	</div>

	<!-- Purchase Button -->
	<div class="purchase-btn header-btn pull-right">
		<a href="http://www.weblicity.nl/contact/" class="icon-comment"></a>
	</div>

	<!-- Mobile Button -->
	<div class="mobile-btn header-btn pull-right hidden-xs">
		<a href="#" title="Smartphone View" class="icon-mobile-phone"></a>
	</div>

	<!-- Tablet Button -->
	<div class="tablet-btn header-btn pull-right hidden-xs">
		<a href="#" title="Tablet View" class="icon-tablet"></a>
	</div>

	<!-- Desktop Button -->
	<div class="desktop-btn header-btn pull-right hidden-xs">
		<a href="#" title="Desktop View" class="icon-desktop"></a>
	</div>

</header>