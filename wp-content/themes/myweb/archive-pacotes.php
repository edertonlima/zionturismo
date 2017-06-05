<?php get_header(); ?>

<div class="container">
	<ul class="nav-page">
		<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		<li><span>PACOTES</span></li>
	</ul>

	<h2>PACOTES</h2>
</div>

<section class="section pacotes">
	<div class="container">

		<div class="row">
			<div class="col-9">

				<?php
					$tax = 'categoria_pacotes';

					$terms = get_terms( $tax, [
					  'hide_empty' => false, // do not hide empty terms
					]);

					foreach( $terms as $term ) {
						while ( have_posts($term) ) : the_post($term); ?>

							<article class="item-pacotes">
									
								<h2><?php echo $term->name; ?></h2>
								<p><?php echo $term->description; ?></p>
								<a href="<?php echo get_term_link($term->term_id); ?>" class="button ver-blog" title="VER MAIS">VER MAIS</a>

							</article>

						<?php endwhile;
					}

				?>
			
			</div>

			<div class="col-3">					
				<div class="list-produtos">
					<h3>PRODUTOS</h3>
					<div class="box-list-produtos">
						<?php for($i=1; $i<=4; $i++){ ?>
						<div class="item-prod">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-list-pacote.jpg" alt="">
							<div class="info-prod">
								<h4>Ingressos Sea World</h4>
								<a href="#">Visualizar</a>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>