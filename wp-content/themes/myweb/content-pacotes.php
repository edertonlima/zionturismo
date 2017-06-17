<?php
	$args = array( 'post_type' => 'pacotes', 'posts_per_page' => 10 );
	$pacotes = new WP_Query( $args );
	$count_pacote = 0;
	foreach ($pacotes as $pacote) {
		if(get_field('destaque',$pacote->ID)){
			$count_pacote = $count_pacote+1;
		}
	}
?>

<section class="section det-pacote pacotes">
	<div class="container">

		<div class="row">
		
			<?php if($count_pacote > 0){ 
				echo '<div class="col-9 content-page-sidebar">';
			}else{ 
				echo '<div class="col-1">&nbsp</div><div class="col-10">';
			} ?>			

				<?php $images = get_field('galeria_pacotes');
				if( $images ): ?>
					<div class="slide-produto owl-carousel owl-theme">
						<?php $qtdImages = count($images);
							foreach( $images as $image ): 
							$slide = $slide+1; ?>

							<div class="item">
								<img src="<?php echo $image['url']; ?>" alt="">
							</div>

						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<div class="det-item">
					<?php if(get_field('duracao')){ ?>
						<span class="info-pacote">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<div class="tit-info">
								<?php the_field('duracao'); ?> <span class="complemento">Duração</span>
							</div>
						</span>
					<?php } ?>

					<?php if(get_field('localizacao')){ ?>
						<span class="info-pacote">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<div class="tit-info">
								<?php the_field('localizacao'); ?> <span class="complemento">Localização</span>
							</div>
						</span>
					<?php } ?>

					<?php if(get_field('parcelamento')){ ?>
						<span class="info-pacote">
							<i class="fa fa-credit-card" aria-hidden="true"></i>
							<div class="tit-info">
								<?php the_field('parcelamento'); ?> <span class="complemento">Parcelamento</span>
							</div>
						</span>
					<?php } ?> 

					<?php if(get_field('data')){ ?>
						<span class="info-pacote">
							<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
							<div class="tit-info">
								<?php $date = explode("/", get_field('data')); 
								echo $date[0].' de '.$date[1].', '.$date[2]; ?>
								 <span class="complemento">Data</span>
							</div>
						</span>
					<?php } ?>
				</div>

				<p><?php the_field('conteudo_pacotes'); ?></p>

				<ul class="info-tecnico">
					
					<!-- aereo -->
					<?php if( have_rows('aereo') ): ?>
						<li class="item">	
							<span class="tit-info">AÉREO</span>
							<ul>								
								<?php while ( have_rows('aereo') ) : the_row(); ?>
									<li><?php the_sub_field('conteudo'); ?></li>
								<?php endwhile; ?>
							</ul>
						</li>
					<?php endif; ?>
					<!-- aereo -->

					<!-- incluso -->
					<?php if( have_rows('incluso') ): ?>
						<li class="item">	
							<span class="tit-info">INCLUSO</span>
							<ul class="ico">								
								<?php while ( have_rows('incluso') ) : the_row(); ?>
									<li><i class="fa fa-check" aria-hidden="true"></i> <?php the_sub_field('conteudo'); ?></li>
								<?php endwhile; ?>
							</ul>
						</li>
					<?php endif; ?>
					<!-- incluso -->

					<!-- nao_incluso -->
					<?php if( have_rows('nao_incluso') ): ?>
						<li class="item">	
							<span class="tit-info">NÃO INCLUSO</span>
							<ul class="ico">								
								<?php while ( have_rows('nao_incluso') ) : the_row(); ?>
									<li><i class="fa fa-close" aria-hidden="true"></i> <?php the_sub_field('conteudo'); ?></li>
								<?php endwhile; ?>
							</ul>
						</li>
					<?php endif; ?>
					<!-- nao_incluso -->

					<!-- roteiro -->
					<?php if( have_rows('roteiro') ): ?>
						<li class="item">	
							<span class="tit-info">ROTEIRO</span>
							<ul class="roteiro">								
								<?php while ( have_rows('roteiro') ) : the_row(); ?>
									<li>
										<strong><?php the_sub_field('titulo'); ?></strong>
										<?php the_sub_field('conteudo'); ?>
									</li>
								<?php endwhile; ?>
							</ul>
						</li>
					<?php endif; ?>
					<!-- roteiro -->

				</ul>
			</div>
			
			<?php if($count_pacote > 0){ ?>
				<div class="col-3 sidebar-produtos">	

					<div class="list-produtos">
						<h3>PRODUTOS</h3>
						<div class="box-list-produtos">
							<?php while ( $pacotes->have_posts() ) : $pacotes->the_post(); ?>
								<div class="item-prod">
									<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );  ?>
									<?php if($imagem[0]){ ?>
										<img src="<?php echo $imagem[0]; ?>" alt="">
									<?php } ?>
									<div class="info-prod">
										<h4><?php the_title(); ?></h4>
										<a href="<?php echo get_permalink(); ?>" title="Visualizar">Visualizar</a>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			<?php }else{ ?>
				<div class="col-1"></div>
			<?php } ?>

		</div>

	</div>
</section>

<section class="section">
	<div class="container">

		<div class="row">
			<div class="col-12">

				<div class="form-solicitacao">
					<h3>EU QUERO ESTE PACOTE <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
					<form action="#" class="form-servico">
						<fieldset>
							<label for="nome">Nome (obrigatório)</label>
							<input type="text" name="nome" id="nome" placeholder="Nome e Sobrenome" class="">
						</fieldset>

						<fieldset>
							<label for="email">E-mail (obrigatório)</label>
							<input type="text" name="email" id="email" placeholder="E-mail" class="">
						</fieldset>

						<fieldset>
							<label for="telefone">Telefone ou Celular com DDD</label>
							<input type="text" name="telefone" id="telefone" placeholder="DDD + número" class="">
						</fieldset>

						<fieldset>
							<label for="preferencia">Como prefere ser contactado por nossa equipe?</label>
							<label for="" class="radio">
								<input type="radio" name="preferencia"> E-mail
							</label>
							<label for="" class="radio" name="preferencia">
								<input type="radio"> Telefone
							</label>
							<label for="" class="radio" name="preferencia">
								<input type="radio"> WhatsApp
							</label>
						</fieldset>

						<fieldset>
							<label for="qtd_passageiros">Quantidade de passageiros</label>
							<input type="text" name="qtd_passageiros" id="qtd_passageiros" placeholder="Digite a quantidade de pessoas" class="">
						</fieldset>

						<fieldset>
							<label for="mensagem">Sua mensagem</label>
							<textarea name="mensagem" id="mensagem" class=""></textarea>
						</fieldset>

						<fieldset>
							<button class="enviar">Enviar</button>
						</fieldset>
					</form>
				</div>

			</div>
		</div>

	</div>
</section>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">
	jQuery.noConflict();
	var owl = jQuery('.slide-produto');
	owl.owlCarousel({
		margin: 0,
		loop: false,
		nav: true,
		navigation: true,
		navText: [
			'<i class="fa fa-angle-left" aria-hidden="true"></i>',
			'<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		lazyLoad: true,
		responsive: {
			0: {
				items: 1
			}
		}
	})
</script>
