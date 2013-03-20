<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><? bloginfo('name'); ?></title>
	<style href="css/main.css"></style>
</head>
<body>

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

		<div class="main">
			<div class="content">
			</div>

			<div class="sidebar">
			</div>
		</div>

		<footer>
			<p>Copyright &copy; ANWP 2013-</p>
		</footer>
	</div>


	<script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-xxxxxxx-xx']);
		_gaq.push(['_trackPageview']);
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</body>
</html>
