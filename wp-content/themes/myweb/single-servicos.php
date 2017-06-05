<?php get_header(); ?>

<div class="container">
	<ul class="nav-page">
		<li><a href="index.html">Home</a></li>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		<li><a href="<?php echo get_home_url(); ?>?post_type=servicos">Serviços</a></li>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		<li><span><?php the_title(); ?></span></li>
	</ul>

	<h2><?php the_title(); ?></h2>
</div>

<section class="section blog">
	<div class="container">

		<div class="row">
			<div class="col-12">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content-servicos', get_post_format() ); ?>
				<?php endwhile; ?>
			
			</div>
		</div>

		<?php paginacao(); ?>

	</div>
</section>

<?php get_footer(); ?>