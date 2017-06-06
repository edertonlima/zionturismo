<article class="item-pacote">

	<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );  ?>
	<?php if($imagem[0]){ ?>
		<img src="<?php echo $imagem[0]; ?>" alt="">
	<?php } ?>

	<div class="info-item">
		<h3><?php the_title(); ?></h3>
		<p><?php the_field('descricao_pacotes'); ?></p>
		<div class="det-item">
			<?php if(get_field('duracao')){ ?>
				<span class="info-pacote"><i class="fa fa-clock-o" aria-hidden="true"></i><?php the_field('duracao'); ?> </span>
			<?php } ?>

			<?php if(get_field('localizacao')){ ?>
				<span class="info-pacote"><i class="fa fa-globe" aria-hidden="true"></i> <?php the_field('localizacao'); ?></span>
			<?php } ?>
		</div>
	</div>
	<div class="preco">
		<span class="val-preco">R$ <?php the_field('preco_pacotes'); ?></span>
		<span class="det-preco">por pessoa</span>
		<a href="<?php echo get_permalink(); ?>" class="button ver-pacote" title="">VER PACOTE</a>
	</div>

</article>