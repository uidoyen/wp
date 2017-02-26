<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _a
 */
global $redux_demo;  // This is your opt_name.
print_r ($redux_demo);
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo $redux_demo['opt-media-favicon']['url'];?>"/>


<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php wp_head(); ?>
<style>
	body{
		font-family: <?php echo $redux_demo['opt-typography-body']['font-family'];?>;
	}
</style>
</head>

<body <?php body_class(); ?>>
<header>
	<div class="container">
		<div class="col-md-4">
			<div class="c-brands">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					
					<!-- Display Site title when logo image is not available -->
					<?php if($redux_demo['opt-media-logo']['url'] == ''){ ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
					<?php }else { ?>
						<img srcset="<?php echo $redux_demo['opt-media-logo']['url'];?> 1x, <?php echo $redux_demo['opt-media-retina-logo']['url'];?> 2x" alt="">
					<?php }?>


					</a>

					<?php if($redux_demo['opt-desc-checkbox'] != 0){ ?>
						<h3><?php echo get_bloginfo( 'description', 'display' );?></h3>
					<?php }?>

				</a>
			</div>
		</div>
		<div class="col-md-8">
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
		</div>
	</div>
</header>
<div id="content" class="site-content">
