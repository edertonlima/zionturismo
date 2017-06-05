<?php get_header(); ?>

<div class="container">
	<ul class="nav-page">
		<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		<li><span>SERVIÇOS</span></li>
	</ul>

	<h2>SERVIÇOS</h2>
</div>

<section class="section">
	<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content-list-servico', get_post_format() ); ?>

		<?php endwhile; ?>

	</div>
</section>

<?php get_footer(); ?>