<!DOCTYPE html>
<html <? language_attributes(); ?>>
<head>
	<meta charset="<? bloginfo('charset'); ?>">

	<title><? bloginfo('name'); ?></title>
	
	<style href="css/main.css"></style>

	<!--[if lt IE 9]>
		<script src="dist/html5shiv.js"></script>
	<![endif]-->

	<? wp_head(); ?>

</head>
<body <? body_class(); ?>>

	<div class="wrapper">
		<header>
			<h1><? bloginfo('name') ?></h1>
			<h2><? bloginfo('description'); ?></h2
			
			<nav>
				<? wp_nav_menu(array(
					'container' => false
				)); ?>
			</nav>
		</header>
