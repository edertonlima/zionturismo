<?php get_header(); ?>

<div class="container">
	<ul class="nav-page">
		<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		<li><span><?php the_title(); ?></span></li>
	</ul>

	<h2><?php the_title(); ?></h2>
</div>

<session class="section">
	<div class="container">

		<div class="row">
			<div class="col-12">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				// End the loop.
				endwhile;
				?>

			</div>
		</div>

	</div>
</session>

<?php get_footer(); ?>
