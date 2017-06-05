<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php

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

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-page.css" media="screen" />

<?php if(is_singular('produto')){ ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" type="text/css" media="screen" />
<?php } ?>

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
	});	

	jQuery(window).resize(function(){

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

	<header class="header">
		<section class="top-menu">
			<div class="container">
				
				<div class="regiao">
					<a href="#" class="" title="EN"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/en.png" alt=""></a>
					<a href="#" class="ativo" title="PT"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pt.png" alt=""></a>
					<a href="#" class="" title="ES" style="display: none;">ES</a>
				</div>

				<div class="telefones">
					<span class="tel">(11) 4118-6261</span>
					<span class="tel">(35) 538-4455</span>
					<span class="tel">(40) 967-7788</span>
				</div>

				<div class="email">
					<a href="mailto: atendimento@zionturismo.com.br" title="atendimento@zionturismo.com.br">atendimento@zionturismo.com.br</a>
				</div>

				<div class="redes-sociais">
					<a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#" title=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<a href="#" title=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>

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
					<ul>
						<li class="">
							<a href="<?php echo get_home_url(); ?>" title="HOME" class="">HOME</a>
						</li>
						<li class="">
							<a href="<?php echo get_permalink(get_page_by_path('quem-somos')); ?>" title="<?php echo get_the_title(get_page_by_path('quem-somos')); ?>" class=""><?php echo get_the_title(get_page_by_path('quem-somos')); ?></a>
						</li>
						<li class="">
							<a href="javascript:" title="" class="">INGRESSOS</a>
						</li>
						<li class="">
							<a href="<?php echo get_home_url(); ?>?post_type=pacotes" title="" class="">PACOTES</a>
						</li>
						<li class="">
							<a href="<?php echo get_home_url(); ?>?post_type=servicos" title="" class="">SERVIÇOS</a>
						</li>
						<li class="">
							<a href="<?php echo get_home_url(); ?>?cat=1" title="" class="">BLOG</a>
						</li>
						<li class="">
							<a href="<?php echo get_permalink(get_page_by_path('contato')); ?>" title="<?php echo get_the_title(get_page_by_path('contato')); ?>" class=""><?php echo get_the_title(get_page_by_path('contato')); ?></a>
						</li>
					</ul>
				</nav>

			</div>	
		</section>

		<section class="img-capa" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-capa.jpg');"></section>
	</header>