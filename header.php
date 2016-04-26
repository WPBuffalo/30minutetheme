<!-- header.php
This file gets loaded by the command get_header(); and we see that on every page file, so front-page.php, page.php, archive.php are all loading this file. Whatever we put here will become part of those files. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(); ?></title>

	<link href="http://fonts.googleapis.com/css?family=Raleway:400,200,500,600,700,800,300" rel="stylesheet" /><!-- adds a webfont via google fonts -->

	<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" /><!-- links to the style.css file -->

	<?php wp_head(); // This command loads additional resources needed ?>
</head>

<body <?php body_class(); ?>><!-- The "body" of the site; this element contains everything you can see. -->

<div id="wrapper">

	<div id="menu-wrapper">
		<?php
			wp_nav_menu(array(
				'theme_location'	=> 'primary',
				'container'				=> 'nav',
				'container_id'		=> 'menu',
				'container_class' => 'container nav-container'
			));
			// This block above displays the primary menu. We can manage these links in the WP-Admin>Appearance>Menus.
		?>
	</div>

	<header id="header-wrapper">
		<div id="header" class="container">
			<h1>
				<?php bloginfo('name');	//Displays the site title you chose when you created your site. Can be changed in Settings>General
				?>
			</h1>
		</div>
	</header>

	<div id="banner"></div>
	<div id="page" class="container">
