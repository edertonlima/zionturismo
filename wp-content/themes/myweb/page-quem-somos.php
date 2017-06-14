<?php get_header(); ?>

<div class="container">
	<ul class="nav-page">
		<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		<li><span><?php the_title(); ?></span></li>
	</ul>

	<h2><?php the_field('titulo_page'); ?></h2>
</div>

<section class="section">
	<div class="container">

		<div class="row">
			<div class="col-7">
				<?php the_field('conteudo_page'); ?>
				
				<?php 
					$item = 0;
					if(get_field('missao')){ 
						$item = $item+1; ?>
						<h2 class="<?php if($item == 1){ echo 'first-item'; } ?>">MISSÃO</h2>
						<?php the_field('missao'); ?>
				<?php } ?>
				
				<?php if(get_field('visao')){
					$item = $item+1; ?>
					<h2 class="<?php if($item == 1){ echo 'first-item'; } ?>">VISÃO</h2>
					<?php the_field('visao'); ?>
				<?php } ?>
				
				<?php if(get_field('valores')){
					$item = $item+1; ?>
					<h2 class="<?php if($item == 1){ echo 'first-item'; } ?>">VALORES</h2>
					<?php the_field('valores'); ?>
				<?php } ?>
			</div>

			<div class="col-5">				

				<?php $images = get_field('galeria');
				if( $images ): ?>
					<div class="slide owl-carousel owl-theme">
						<?php $qtdImages = count($images);
							foreach( $images as $image ): 
							$slide = $slide+1; ?>

							<div class="item">
								<span class="num-slide"><?php echo $slide; ?> / <?php echo $qtdImages; ?></span>
								<img src="<?php echo $image['url']; ?>" alt="">
								<span class="title-slide"><?php echo $image['title']; ?></span>
							</div>

						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				
				<?php if((get_field('email','option')) or (get_field('tel1','option'))){ ?>
					<div class="consulte">
						<span class="tit-consulte">NÃO ACHOU O QUE PROCURAVA?</span>
						<h2>CONSULTE-NOS</h2>
						<span class="tel"><?php the_field('tel1','option'); ?></span>
						<span class="email"><?php the_field('email','option'); ?></span>
					</div>
				<?php } ?>
			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">
	var owl = jQuery('.slide');
	owl.owlCarousel({
		margin: 15,
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