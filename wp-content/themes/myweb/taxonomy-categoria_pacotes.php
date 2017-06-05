<?php get_header(); ?>

<div class="container">
	<ul class="nav-page">
		<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		<li><a href="<?php echo get_home_url(); ?>?post_type=pacotes">Pacotes</a></li>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		<li><span><?php single_term_title(); ?></span></li>
	</ul>

	<h2><?php single_term_title(); ?></h2>
</div>

<section class="section pacotes">
	<div class="container">

		<div class="row">
			<div class="col-9">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content-pacotes_list', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php /*for($i=1; $i<=3; $i++){ ?>
				<div class="item-pacote">

						<img src="assets/images/img-list-pacote.jpg" alt="">
						<div class="info-item">
							<h3>Grupo Disney - Setembro 2017</h3>
							<p>Viajar em grupo é sinônimo de segurança e muita diversão. Conte com a experiência de 20 anos.</p>
							<div class="det-item">
								<span class="info-pacote"><i class="fa fa-clock-o" aria-hidden="true"></i> 11 noites</span>
								<span class="info-pacote"><i class="fa fa-globe" aria-hidden="true"></i> Orlando, FL</span>
							</div>
						</div>
						<div class="preco">
							<span class="val-preco">R$ 6.328</span>
							<span class="det-preco">por pessoa</span>
							<a href="det-pacote.php" class="button ver-pacote" title="">VER PACOTE</a>
						</div>
					
				</div>
				<?php }*/ ?>
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

		<?php paginacao(); ?>

	</div>
</section>





<?php /*

<section class="produtos">
	<div class="container">
		<h2></h2>
		<h4><?php echo term_description(); ?></h4>
	</div>

	<?php if( have_rows('imagem_categoria_produto','option') ):
		while ( have_rows('imagem_categoria_produto','option') ) : the_row(); 

			$term = get_term( get_sub_field('categoria_do_produto','option'), 'categoria_produto' ); 
			if($term->term_id == get_queried_object()->term_id){ ?>
				<div style="background-image: url('<?php the_sub_field('imagem_categoria_produto','option'); ?>');" class="img-linha"></div>
			<?php } ?>

		<?php endwhile;
	endif; ?>

	

	<div class="container">
		<ul class="list-produto">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content-produto_list', get_post_format() ); ?>

			<?php endwhile; ?>

		</ul>
	</div>

	<?php paginacao(); ?>
	
</section>	

*/ ?>

<?php get_footer(); ?>