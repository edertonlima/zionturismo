<?php get_header(); ?>

<div class="container">
	<ul class="nav-page">
		<li><a href="index.html">Home</a></li>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		<li><span>BLOG</span></li>
	</ul>

	<h2>BLOG</h2>
</div>

<section class="section blog">
	<div class="container">

		<div class="row">
			<div class="col-12">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content-list', get_post_format() ); ?>
				<?php endwhile; ?>
			
			</div>
		</div>

		<?php paginacao(); ?>

	</div>
</section>

<?php get_footer(); ?>