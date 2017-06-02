<?php get_header(); ?>

<section class="box-container box-empresa">

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'content', 'page_empresa' );

	// End the loop.
	endwhile;
	?>

</section>

<section class="box-container box-empresa premios" id="premios">
	<div class="container">
		<h2>PRÊMIOS</h2>
		<img src="<?php the_field('imagem_premios','option'); ?>" class="img-page">

		<div class="conteudo">
			<p><?php the_field('texto_empresa_premios','option'); ?></p>
		</div>

		<div class="row sub-conteudo">
			<?php if( have_rows('prêmios','option') ):
				while ( have_rows('prêmios','option') ) : the_row(); ?>

					<div class="item-premio">
						<span class="ico-item-premio">
							<img typeof="foaf:Image" src="<?php the_sub_field('imagem_premio','option'); ?>" width="200" height="100" alt="">
						</span>
						<p class="subtitulo"><?php the_sub_field('texto_premios','option'); ?></p>
					</div>

				<?php endwhile;
			endif; ?>
		</div>


	</div>
	<a href="javascript:" class="seta" rel="#ideologia-corporativa"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
</section>

<section class="box-container laranja box-empresa ideologia-corporativa" id="ideologia-corporativa">
	<div class="container">
		<h2>IDEOLOGIA CORPORATIVA</h2>

		<div class="conteudo">
			<p class=""><?php the_field('texto_ideologia_principal'); ?></p>
		</div>

		<div class="row sub-conteudo">

			<?php if( have_rows('blocos_ideologia') ):
				$ideologia = 1;
				while ( have_rows('blocos_ideologia') ) : the_row(); ?>

					<div class="col-6 item <?php if($ideologia == 1){ echo 'full'; }?>">
						<img src="<?php the_sub_field('icone_ideologia'); ?>" class="icon-item">
						<h3><?php the_sub_field('titulo_ideologia'); ?></h3>
						<?php if(get_sub_field('texto_ideologia')){ ?>
							<p><?php the_sub_field('texto_ideologia'); ?></p>
						<?php } ?>
					</div>

					<?php if($ideologia == 1){ ?>
						</div>
						<div class="row sub-conteudo no-margin">
						<?php $ideologia = 0;
					}

				endwhile;
			endif; ?>

		</div>

	</div>
</section>

<?php get_footer(); ?>
