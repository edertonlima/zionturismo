<?php get_header(); ?>

<section class="box-container box-release">
	<div class="container">
		<h2><?php the_category(); ?></h2>
	</div>

	<div class="container">

		<div class="row sub-conteudo">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-6 item">
					<?php get_template_part( 'content-list', get_post_format() ); ?>
				</div>
			<?php endwhile; ?>

		</div>

		<?php paginacao(); ?>

	</div>
</section>

<?php get_footer(); ?>