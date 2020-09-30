<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stevenson-consulting
 */

?>
<!doctype html>
<html lang="en-US">

<head>
	<?php wp_head(); ?>
	<title>Test</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body>
	<!--variables-->
	<?php 
	$meta_values     = get_fields();
	
	$background_image = ( isset( $meta_values['background_image'] ) ) ? $meta_values['background_image'] : null;
	$logo_image 	  = ( isset( $meta_values['logo']['logo_image'] ) ) ? $meta_values['logo']['logo_image'] : null;
	$logo_title 	  = ( isset( $meta_values['logo']['logo_title'] ) ) ? $meta_values['logo']['logo_title'] : null;
	$request_btn_link = ( isset( $meta_values['request_button']['button_link'] ) ) ? $meta_values['request_button']['button_link'] : null;
	$request_btn_text = ( isset( $meta_values['request_button']['button_text'] ) ) ? $meta_values['request_button']['button_text'] : null;
	?>
	<!--variables end-->

	<!--background-->
	<div class="banner" style="background-image: url(<?php echo $background_image; ?>);"></div>
	<div class="cover"></div>
	<!--background end-->

	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-inner">
				<a href="<?php echo home_url() ?>">
					<div class="header-logo">
						<img src="<?php echo $logo_image?>" alt="logo" class="logo-img">
						<img src="<?php echo $logo_title?>" alt="logo title" class="logo-img-title">
					</div>
				</a>
				<div class="header-right">
					<div class="request-btn"><a href="<?php echo $request_btn_link ?>" class="btn"><?php echo $request_btn_text ?></a>
					</div>
					<div class="search-btn">
						<a href="#" class="search-link"><i class="fas fa-search"></i></a>
					</div>
					<!--navigation-->
					<nav class="nav">
						<div class="container">
							<?php wp_nav_menu(array(
									'theme_location'  => 'menu-1',
									'container'       => 'false', 
									'menu_class'      => 'nav-list', 
								)); ?>
							<a href="#" class="nav-logo-link">
								<div class="nav-logo">
									<img src="<?php echo $logo_image?>" alt="logo" class="logo-img">
									<img src="<?php echo $logo_title?>" alt="logo title" class="logo-img-title">
								</div>
							</a>
						</div>
					</nav>
					<button class="nav-toggle-btn" type="button
">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
			</div>
		</div>
		<!--search-->
		<div class="search-field-wrapper" id="header-search-block" style="display: none;">
			<div class="search-field-box">
				<form role="search" method="get" class="search-form" action="#">
					<div class="container">
						<div class="search-form-inner">
							<input type="search" class="search-field" placeholder="Search Here" value="">
							<button type="submit" class="search-submit"><span class="screen-reader-text"><i class="fas fa-search"></i></span></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--header end-->