<article class="item-blog det-blog">
		
	<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );  ?>
	<?php if($imagem[0]){ ?>
		<img src="<?php echo $imagem[0]; ?>" alt="">
	<?php } ?>

	<div class="info-item">
		<span class="dias"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?></span>
		<p><?php the_field('conteudo_blog'); ?></p>
		<div class="redes">
			<span>Compartilhe: </span>
			<a href="javascript:" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			<a href="javascript:" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</div>
	</div>

</article>