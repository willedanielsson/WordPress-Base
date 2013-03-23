<?php get_header(); ?>
		

		<div class="main">
			<div class="content">
				<? if(have_posts()): while(have_posts()): the_post();  ?>
					<h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>

					<? the_content(); ?>
				<? endwhile; endif; ?>
			</div> <!-- .content -->

			<div class="sidebar">
			</div> <!-- .sidebar -->
		</div> <!-- .main -->

		<footer>
			<p>Copyright &copy; ANWP 2013-</p>
		</footer>


<?php get_footer(); ?>
