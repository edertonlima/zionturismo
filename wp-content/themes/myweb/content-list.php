<article class="item-blog">
		
	<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );  ?>
	<?php if($imagem[0]){ ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-blog1.jpg" alt="">
	<?php } ?>

	<div class="info-item <?php if(!$imagem[0]){ echo 'no-image'; } ?>">
		<span class="dias"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?></span>
		<h3><?php the_title(); ?></h3>
		<p><?php the_field('descricao_blog'); ?></p>
		<a href="<?php the_permalink(); ?>" class="button ver-blog" title="VER MAIS">VER MAIS</a>
		<div class="redes">
			<span>Compartilhe: </span>
			<a href="javascript:" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			<a href="javascript:" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</div>
	</div>

</article>