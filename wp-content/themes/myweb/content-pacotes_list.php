<article class="item-pacote">

	<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );  ?>
	<?php if($imagem[0]){ ?>
		<img src="<?php echo $imagem[0]; ?>" alt="">
	<?php } ?>

	<div class="info-item">
		<h3><?php the_title(); ?></h3>
		<p><?php the_field('descricao_pacotes'); ?></p>
		<div class="det-item">
			<span class="info-pacote"><i class="fa fa-clock-o" aria-hidden="true"></i> 11 noites</span>
			<span class="info-pacote"><i class="fa fa-globe" aria-hidden="true"></i> Orlando, FL</span>
		</div>
	</div>
	<div class="preco">
		<span class="val-preco">R$ <?php the_field('preco_pacotes'); ?></span>
		<span class="det-preco">por pessoa</span>
		<a href="<?php echo get_permalink(); ?>" class="button ver-pacote" title="">VER PACOTE</a>
	</div>

</article>



<?php /*
<li>
	<a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
		<?php $imgPage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
		<?php if($imgPage){ ?>
			<img src="<?php if($imgPage[0]){ echo $imgPage[0]; } ?>" alt="<?php the_title(); ?>">
		<?php } ?>

		<div class="cont-list-prod">
			<h3><?php the_title(); ?></h3>
			<p><?php the_field('descrição_curta_produto'); ?></p>
		</div>
	</a>
</li>

*/ ?>