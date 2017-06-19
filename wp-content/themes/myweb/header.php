<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
	global $idioma;
	global $url_idioma;
	$idioma = WPGlobus::Config()->language;
	if($idioma == 'en'){
		$url_idioma = explode('/en',home_url());
	}else{
		if($idioma == 'pt'){
			$url_idioma = explode('/pt',home_url());
		}else{
			$url_idioma = home_url();
		}
	}
?>
<?php 
	$titulo = '';
	$descricao = get_field('descricao', 'option');
	$imgPage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
	$page = get_page_by_path('sobre-mim');
	$imagem = get_field('imagem_perfil',$page->ID);
	$url = get_home_url();

	if(is_category()){ 
		$category= get_queried_object(); //print_r($category);
		$infoCategoria = get_the_category($category->term_id); //print_r($infoCategoria);
		$titulo = $infoCategoria[0]->name.' - ';
		$descricao = $infoCategoria[0]->description;
		//$imagem = '';
		$url = $url.'/'.$infoCategoria[0]->slug;
	}

	if(is_page()){
		if(!is_home()){
			$titulo = get_the_title().' - ';
			if(get_field('descrição') != ''){
				$descricao = get_field('descrição');
			}
			if($imgPage[0] != ''){
				$imagem = $imgPage[0];	
			}			
			$url = get_the_permalink();
		}
	}

	if(is_single()){
		$titulo = get_the_title().' - ';
		if(get_field('descrição') != ''){
			$descricao = get_field('descrição');
		}
		if($imgPage[0] != ''){
			$imagem = $imgPage[0];	
		}			
		$url = get_the_permalink();
	}

	$titulo = $titulo.get_bloginfo('name'); 
	$autor = get_bloginfo('name');
?>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<link rel="icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="<?php echo $descricao; ?>" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="<?php echo $autor; ?>" />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo $titulo; ?>" />

<!-- SOCIAL META -->
<meta itemprop="name" content="<?php echo $titulo; ?>" />
<meta itemprop="description" content="<?php echo $descricao; ?>" />
<meta itemprop="image" content="<?php echo $imagem; ?>" />

<html itemscope itemtype="<?php echo $url; ?>" />
<link rel="image_src" href="<?php echo $imagem; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $titulo; ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo $descricao; ?>" />
<meta property="og:image" content="<?php echo $imagem; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
<meta property="fb:admins" content="<?php echo $autor; ?>" />
<meta property="fb:app_id" content="1205127349523474" /> 

<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo $url; ?>" />
<meta name="twitter:title" content="<?php echo $titulo; ?>" />
<meta name="twitter:description" content="<?php echo $descricao; ?>" />
<meta name="twitter:image" content="<?php echo $imagem; ?>" />
<!-- SOCIAL META -->

<title><?php echo $titulo; ?></title>


<?php if(is_front_page()){ ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
<?php }else{ ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-page.css" media="screen" />
<?php } ?>

<?php if(is_singular('produto')){ ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" type="text/css" media="screen" />
<?php } ?>

<?php //if(is_singular('passagem-aerea')){ ?>
	
<?php //} ?>

<!-- JQUERY -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>


<script type="text/javascript">
	jQuery.noConflict();
	jQuery(document).ready(function(){
		jQuery('.place-textarea textarea').keypress(function(event) {
			jQuery(this).siblings('.placeholder').hide();
		});

		jQuery('.place-textarea textarea').blur(function(event) {
			if(jQuery(this).val() == ''){
				jQuery(this).siblings('.placeholder').show();
			}
		});

		if(jQuery('.place-textarea textarea').val() != ''){
			jQuery('.place-textarea textarea').siblings('.placeholder').hide();
		}

		jQuery('.menu-mobile').click(function(){
			if(jQuery(this).hasClass('active')){
				jQuery(this).removeClass('active');
				jQuery('.nav ul.menu-nav').css('left','100vw');
			}else{
				jQuery(this).addClass('active');
				jQuery('.nav ul.menu-nav').css('left','0vw');
			}
		});
	});	

	jQuery(window).resize(function(){
		jQuery('.menu-mobile').removeClass('active');
		jQuery('.nav ul.menu-nav').css('left','100vw');
	});
</script>

</head>

<?php 
	/*if(is_tax('categoria_pacote')){
		$body_class = 'pacotes';
	}else{*/
		$body_class = $wp_query->queried_object->post_name;
	//}
?>

<body <?php body_class($body_class); ?>>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-62676851-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<header class="header">
		<section class="top-menu">
			<div class="container">

			<?php if($idioma == 'en'){ ?>
				
				<div class="regiao">					
					<a href="<?php echo $url_idioma[0].'/pt/'.add_query_arg(array(),$wp->request); ?>" class="ativo" title="PT"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pt.png" alt="PT"></a>					
				</div>

				<div class="telefones">
					<?php if(get_field('tel1_en','option')){ ?>
						<span class="tel"><?php the_field('tel1_en','option'); ?></span>
					<?php } ?>

					<?php if(get_field('tel2_en','option')){ ?>
						<span class="tel"><?php the_field('tel2_en','option'); ?></span>
					<?php } ?>

					<?php if(get_field('celular_en','option')){ ?>
						<span class="tel"><?php the_field('celular_en','option'); ?></span>
					<?php } ?>
				</div>

				<div class="email">
					<?php if(get_field('email_en','option')){ ?>
						<a href="mailto: <?php the_field('email_en','option'); ?>" title="<?php the_field('email_en','option'); ?>"><?php the_field('email_en','option'); ?></a>
					<?php } ?>
				</div>

				<div class="redes-sociais">
					<?php if(get_field('twitter_en','option')){ ?>
						<a href="<?php the_field('twitter_en','option'); ?>" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<?php } ?>

					<?php if(get_field('facebook_en','option')){ ?>
						<a href="<?php the_field('facebook_en','option'); ?>" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<?php } ?>

					<?php if(get_field('instagram_en','option')){ ?>
						<a href="<?php the_field('instagram_en','option'); ?>" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<?php } ?>

					<?php if(get_field('youtube_en','option')){ ?>
						<a href="<?php the_field('youtube_en','option'); ?>" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					<?php } ?>
				</div>

			<?php }else{ ?>

				<div class="regiao">						
					<a href="<?php echo $url_idioma[0].'/en/'.add_query_arg(array(),$wp->request); ?>" class="" title="EN"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/en.png" alt="EN"></a>					
				</div>

				<div class="telefones">
					<?php if(get_field('tel1','option')){ ?>
						<span class="tel"><?php the_field('tel1','option'); ?></span>
					<?php } ?>

					<?php if(get_field('tel2','option')){ ?>
						<span class="tel"><?php the_field('tel2','option'); ?></span>
					<?php } ?>

					<?php if(get_field('celular','option')){ ?>
						<span class="tel"><?php the_field('celular','option'); ?></span>
					<?php } ?>
				</div>

				<div class="email">
					<?php if(get_field('email','option')){ ?>
						<a href="mailto: <?php the_field('email','option'); ?>" title="<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a>
					<?php } ?>
				</div>

				<div class="redes-sociais">
					<?php if(get_field('twitter','option')){ ?>
						<a href="<?php the_field('twitter','option'); ?>" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<?php } ?>

					<?php if(get_field('facebook','option')){ ?>
						<a href="<?php the_field('facebook','option'); ?>" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<?php } ?>

					<?php if(get_field('instagram','option')){ ?>
						<a href="<?php the_field('instagram','option'); ?>" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<?php } ?>

					<?php if(get_field('youtube','option')){ ?>
						<a href="<?php the_field('youtube','option'); ?>" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					<?php } ?>
				</div>

			<?php } ?>	

			</div>
		</section>

		<section class="menu">
			<div class="container">

				<h1>
					<a href="<?php echo get_home_url(); ?>" title="<?php echo $titulo; ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
					</a>
				</h1>

				<nav class="nav">
					<a href="javascript:" class="menu-mobile"><span><em>X</em></span></a>
					<ul class="menu-nav">
						<li class="">
							<a href="<?php echo get_permalink(get_page_by_path('quem-somos')); ?>" title="<?php echo get_the_title(get_page_by_path('quem-somos')); ?>" class=""><?php echo get_the_title(get_page_by_path('quem-somos')); ?></a>
						</li>
						<?php /*
						<li class="">
							<a href="javascript:" title="" class="">INGRESSOS</a>
						</li>
						*/ ?>
						<li class="">
							<a href="<?php echo get_permalink(get_page_by_path('pacotes')); ?>" title="<?php if($idioma == 'en'){ echo 'PACKAGES'; }else{ echo 'PACOTES'; } ?>" class=""><?php if($idioma == 'en'){ echo 'PACKAGES'; }else{ echo 'PACOTES'; } ?></a>

							<?php
								$tax = 'categoria_pacotes';

								$terms = get_terms( $tax, [
								  'hide_empty' => true,
								  'orderby' => 'name'
								]);

								if(count($terms) > 0){ ?>
									<ul>
									 <?php foreach( $terms as $term ) { ?>

										<li><a href="<?php echo get_term_link($term->term_id); ?>" title="<?php echo $term->name; ?>" class=""><?php echo $term->name; ?></a></li>

										<?php } ?>
									</ul>
								<?php }
							?>

						</li>
						<li class="">
							<a href="<?php echo get_permalink(get_page_by_path('passagem-aerea')); ?>" title="<?php echo get_the_title(get_page_by_path('passagem-aerea')); ?>" class=""><?php echo get_the_title(get_page_by_path('passagem-aerea')); ?></a>
						</li>
						<li class="">
							<a href="<?php echo get_home_url(); ?>/servicos" title="<?php if($idioma == 'en'){ echo 'SERVICES'; }else{ echo 'SERVIÇOS'; } ?>" class=""><?php if($idioma == 'en'){ echo 'SERVICES'; }else{ echo 'SERVIÇOS'; } ?></a>
						</li>
						<li class="">
							<a href="<?php echo get_home_url(); ?>/blog" title="" class="">BLOG</a>
						</li>
						<li class="">
							<a href="<?php echo get_permalink(get_page_by_path('contato')); ?>" title="<?php echo get_the_title(get_page_by_path('contato')); ?>" class=""><?php echo get_the_title(get_page_by_path('contato')); ?></a>
						</li>
					</ul>
				</nav>

			</div>	
		</section>

		<?php
			if(!is_front_page()){
				$url_capa = '';
				if(is_page()){
					$capa_page = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					$url_capa = $capa_page[0];
				}

				if($post->post_type == 'pacotes'){
					$url_capa = get_field('capa_pacotes','option');
				}

				if($post->post_type == 'servicos'){
					$url_capa = get_field('capa_servicos','option');
				}

				if((is_category()) or (is_single())){
					$url_capa = get_field('capa_blog','option');
				}

				if($url_capa == ''){
					$url_capa = get_template_directory_uri().'/assets/images/img-capa.jpg';
				} ?>
				<section class="img-capa" style="background-image: url('<?php echo $url_capa; ?>');"></section>

			<?php } ?>
	</header>