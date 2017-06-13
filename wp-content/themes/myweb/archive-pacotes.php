<?php
	$args = array( 'post_type' => 'pacotes', 'posts_per_page' => 10 );
	$pacotes = new WP_Query( $args );
	$count_pacote = 0;
	while ( $pacotes->have_posts() ) : $pacotes->the_post();
		if(get_field('destaque')){
			$count_pacote = $count_pacote+1;
		}
	endwhile;
?>

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

			<?php if($count_pacote > 0){ 
				echo '<div class="col-9">';
			}else{ 
				echo '<div class="col-1">&nbsp</div><div class="col-10">';
			} ?>

				<?php
					$tax = 'categoria_pacotes';

					$terms = get_terms( $tax, [
					  'hide_empty' => true,
					  'orderby' => 'name'
					]);

					foreach( $terms as $term ) { ?>

							<article class="item-servico">

								<?php 
									if(get_field('imagem_categoria','categoria_pacotes_'.$term->term_id)){ ?>
										<img src="<?php the_field('imagem_categoria','categoria_pacotes_'.$term->term_id); ?>" alt="<?php echo $term->name; ?>" class="img-servico">
									<?php } 
								?>
								<div class="cont-servico-list <?php if(!get_field('imagem_categoria','categoria_pacotes_2')){ echo 'no-image-list'; } ?>">
									<h2><?php echo $term->name; ?></h2>
									<p><?php echo $term->description; ?></p>
									<a href="<?php echo get_term_link($term->term_id); ?>" class="button ver-blog" title="VER MAIS">VER MAIS</a>
								</div>								

							</article>

					<?php }

				?>
			
			</div>

			<?php if($count_pacote > 0){ ?>
				<div class="col-3">	

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

<?php get_footer(); ?>