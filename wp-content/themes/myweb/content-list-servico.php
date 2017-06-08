<article class="item-servico">
	<?php 
		$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
		if($imagem[0]){ ?>
			<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>" class="img-servico">
		<?php } 
	?>
	<div class="cont-servico-list <?php if(!$imagem[0]){ echo 'no-image-list'; } ?>">
		<h2><?php the_title(); ?></h2>
		<p><?php the_field('descricao_servicos'); ?></p>
		<a href="<?php the_permalink(); ?>" class="button ver-blog" title="VER MAIS">VER MAIS</a>
	</div>
</article>