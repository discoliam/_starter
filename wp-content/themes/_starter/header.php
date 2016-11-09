<?php // @package _starter ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php $faviconURL = get_stylesheet_directory_uri() . "/images/favicons"; ?>

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $faviconURL; ?>/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $faviconURL; ?>/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $faviconURL; ?>/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $faviconURL; ?>/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $faviconURL; ?>/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $faviconURL; ?>/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $faviconURL; ?>/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $faviconURL; ?>/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $faviconURL; ?>/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $faviconURL; ?>/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $faviconURL; ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $faviconURL; ?>/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $faviconURL; ?>/favicon-16x16.png">

	<?php wp_head(); ?>

	<?php the_field('code_for_header', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	<a class="hidden skip-link screen-reader-text" href="#main-content">Skip to Content</a>

	<header id="masthead" class="site-header" role="banner">

		<?php
			if ( is_front_page() && is_home() ) {
				echo '<h1 class="site-title">';
			} else {
				echo '<p class="site-title">';
			}
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

		<?php
			if ( is_front_page() && is_home() ) {
				echo '</h1>';
			} else {
				echo '</p>';
			}
		?>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
				$menuParameters = array(
					'theme_location' => 'header-menu',
				  'container'       => false,
				  'echo'            => false,
				  'items_wrap'      => '%3$s',
				  'depth'           => 0,
				);
				echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
		  ?>
		</nav>

		<a href="#" class="menu-toggle" aria-controls="primary-menu">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</a>

	</header>

	<div id="content" class="site-content">
