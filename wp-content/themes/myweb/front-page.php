<?php /*
<!DOCTYPE html>

<html lang="pt-BR" prefix="og: http://ogp.me/ns#">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Zion Turismo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">

    </head>
    <body>
        <header>
            <!-- Top Bar Infos -->
            <div class="top_bar">
                <div class="container">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">   
                    </div>     
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 align-right">
                        <span><i class="fa fa-phone" aria-hidden="true"></i> (11) 3333-3333</span>
                        <span><i class="fa fa-phone" aria-hidden="true"></i> (11) 9999-9999</span>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="header_nav">
                <div class="container">
                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                    </div>
                     <div class="col-xs-6 col-sm-6 col-md-10 col-lg-10">
                        <nav>
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
                    <div class="nav-mobile">
                        <i id="open-menu" class="fa fa-bars" aria-hidden="true"></i>
                         <ul id="menus-itens">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Quem somos</a></li>
                            <li><a href="#">Ingressos</a></li>
                            <li><a href="#">Pacotes</a></li>
                            <li><a href="#">Vídeos</a></li>
                            <li><a href="#">Serviços</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>
                </div>    
            </div>
        </header>
    
*/ ?>

<?php get_header(); ?>

        <section class="slider_full_width">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php if( have_rows('slide_home','option') ):
                        $slide = 0;
                        while ( have_rows('slide_home','option') ) : the_row();
                            $slide = $slide+1; ?>

                            <div class="item <?php if($slide == 1){ echo 'active'; } ?>">
                                 <img src="<?php the_sub_field('imagem','option'); ?>">
                            </div>

                        <?php endwhile;
                    endif; ?>
                </div>

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php for($i=0; $i<$slide; $i++){ ?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>"></li>
                    <?php } ?>
                </ol>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section id="porque-a-zion">
            <div class="container">
                <div class="row" style="margin-bottom:60px">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">    
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 text-center">
                        <div class="row">
                            <h2>Porquê a Zion Turismo?</h2>
                        </div>

                        <?php if(get_field('descricao_pq','option')){ ?>
                            <div class="row">
                                <h3><?php the_field('descricao_pq','option'); ?></h3>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="row margin-services">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="icon-service fadeInBlock">
                                    <?php the_field('icone_1_pq','option'); ?> <span><?php the_field('tit_1_pq','option'); ?></span>
                                </div>
                                <div class="description-service">
                                    <span>
                                        <?php the_field('desc_1_pq','option'); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="icon-service fadeInBlock">
                                    <?php the_field('icone_2_pq','option'); ?> <span><?php the_field('tit_2_pq','option'); ?></span>
                                </div>
                                <div class="description-service">
                                    <span>
                                        <?php the_field('desc_2_pq','option'); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="icon-service fadeInBlock">
                                    <?php the_field('icone_3_pq','option'); ?> <span><?php the_field('tit_3_pq','option'); ?></span>
                                </div>
                                <div class="description-service">
                                    <span>
                                        <?php the_field('desc_3_pq','option'); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="icon-service fadeInBlock">
                                    <?php the_field('icone_4_pq','option'); ?> <span><?php the_field('tit_4_pq','option'); ?></span>
                                </div>
                                <div class="description-service">
                                    <span>
                                        <?php the_field('desc_4_pq','option'); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="icon-service fadeInBlock">
                                    <?php the_field('icone_5_pq','option'); ?> <span><?php the_field('tit_5_pq','option'); ?></span>
                                </div>
                                <div class="description-service">
                                    <span>
                                        <?php the_field('desc_5_pq','option'); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="icon-service fadeInBlock">
                                    <?php the_field('icone_6_pq','option'); ?> <span><?php the_field('tit_6_pq','option'); ?></span>
                                </div>
                                <div class="description-service">
                                    <span>
                                        <?php the_field('desc_6_pq','option'); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 video-home">
                        <?php the_field('video_pq','option'); ?>
                    </div>

                    <?php /*<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="box-precos fadeInBlock" style="display: none;">
                            <div class="panel-form">
                                <div class="row">
                                    <span class="title-form">
                                        Procurar pacotes
                                    </span>
                                </div>
                                <div class="row">
                                    <span>Encontre o pacote perfeito</span>
                                </div>
                            
                                <form action="#">
                                    <div class="row">
                                        <div class="input-with-icon">
                                            <input type="text" name="pacoteName" placeholder="Procurar pacotes">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div id="btn-drop" class="dropdown-destinos">
                                            <span>Destino</span>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <div id="selects" class="select-options">
                                            <div class="options">
                                                <span>Orlando</span>
                                            </div>
                                            <div class="options">
                                                <span>EUA</span>
                                            </div>
                                            <div class="options">
                                                <span>Las Vegas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="half-input col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <input type="text" name="dataIda" placeholder="Data de ida">
                                        </div>
                                        <div class="half-input col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <input type="text" name="dataVolta" placeholder="Data de ida">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <input type="text" name="preco" placeholder="Apartir de R$0">
                                    </div>
                                    <div class="row">
                                        <button>
                                            <span>Procurar Pacotes</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>*/?>
                </div>
            </div>
        </section>
        <section class="call_to_action" data-speed="20" style="background-image: url('<?php the_field('background_cta','option'); ?>');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="block-text">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">    
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 text-center">
                            <div class="row">
                                <h2 class="fadeInBlock"><?php the_field('titulo_cta','option'); ?></h2>
                            </div>
                            <div class="row">
                                <h3 class="fadeInBlock"><?php the_field('descricao_cta','option'); ?></h3>
                            </div>
                            <div class="row">
                                <a href="<?php the_field('link_cta','option'); ?>" title="Saiba mais"></a><button> Saiba mais</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="box-section list-post pacotes">

            <h2>Pacotes em Destaques</h2>

            <ul class="slide-pacotes owl-carousel owl-theme">

                <?php
                    $args = array( 'post_type' => 'pacotes', 'posts_per_page' => '-1');
                    $pacotes = new WP_Query( $args );
                    $local_pacote = 0;
                    while ( $pacotes->have_posts() ) : $pacotes->the_post(); ?>

                        <li class="item local-select" local="<?php echo $local_pacote; ?>" data-slide-number="<?php echo $local_pacote; ?>" rel="<?php the_field('localizacao'); ?>"><span><?php the_field('localizacao'); ?></span></li>
                        
                        <?php 
                        $local_pacote = $local_pacote+1;
                    endwhile;
                ?>
            </ul>

            <div class="container">
                <div class="slide-det-pacote list-pacotes-local owl-carousel owl-theme">

                    <?php while ( $pacotes->have_posts() ) : $pacotes->the_post(); ?>
                    
                        <div class="item item-det-pacotes" rel="<?php the_field('localizacao'); ?>">                        
                            <div id="" class="pacotes default">
                                <div class="pacotes-destaques">
                                    <div class="content-blog">
                                        <div class="row">

                                            <?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );  ?>
                                            <?php if($imagem[0]){ ?>
                                                <img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive">
                                            <?php } ?>

                                        </div>
                                        <div class="row">
                                            <span class="title-pacotes"><?php the_title(); ?></span>
                                        </div>
                                        <div class="row">
                                            <a href="<?php echo get_permalink(); ?>" class="button ver-blog" title="VER PACOTE">VER PACOTE</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                <?php endwhile; ?>
                   
                </div>
            </div>
        </section>

        <section class="box-section" id="blog_new_posts">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">    
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 text-center">

                            <h2>Blog</h2>
                            <h3>Últimas notícias</h3>

                    </div>
                </div>
                <div class="row">

                    <?php
                        $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
                        $blog = new WP_Query( $args );
                        while ( $blog->have_posts() ) : $blog->the_post();
                            $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
                            if($imagem[0]){ ?>

                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 posts-destaques fadeInBlock">
                                    <div class="content-post">
                                        <div class="row">
                                            <img class="img-responsive" src="<?php echo $imagem[0]; ?>" alt="Pacote Universal - Orlando">
                                        </div>
                                         <div class="row">
                                                <div class="info">
                                                    <span class="dias"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?></span>
                                                </div>
                                            </div>
                                        <div class="row">
                                            <span class="title-post"><?php the_title(); ?></span>
                                        </div>
                                         <div class="row">
                                            <p class="desc-post"><?php the_field('descricao_blog'); ?></p>
                                        </div>
                                        <div class="row">
                                            <a href="<?php the_permalink(); ?>" class="button ver-blog" title="VER MAIS">VER MAIS</a>
                                            <div class="ico-social">
                                                <a href="javascript:" title="Facebook" class="social"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                                <a href="javascript:" title="Instagram" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                            <?php }
                        endwhile;
                    ?>

                </div>
            </div>
        </section>

    <?php get_footer(); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/a145708429.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.lazyload.js"></script>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=225132384553127";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>    
    <script type="text/javascript">
        jQuery.noConflict();

        var owl_pac = jQuery('.slide-pacotes');
        owl_pac.owlCarousel({
            margin: 0,
            autoWidth:true,
            loop: true,
            center: true,
            nav:false
        })

        var owl = jQuery('.slide-det-pacote');
        owl.owlCarousel({
            margin: 0,
            loop: false,
            center: true,
            nav:false,
            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })

        jQuery(document).ready(function(){
            var local_inicial = jQuery('.slide-pacotes .owl-item.active.center .local-select').attr('rel');
            local_inicial = '.item-det-pacotes[rel="'+local_inicial+'"]';
            jQuery('.item-det-pacotes').parent().hide();
            jQuery(local_inicial).parent().show();

            jQuery('.local-select').click(function(){
                var id = jQuery(this).attr('local');
                var local = jQuery(this).attr('rel');
                local = '.item-det-pacotes[rel="'+local+'"]';
                jQuery('.slide-pacotes').trigger('to.owl.carousel', id);
                jQuery('.item-det-pacotes').parent().hide();
                jQuery(local).parent().show();

                //jQuery('.slide-det-pacote').trigger('refresh.owl.carousel');

                var owl = jQuery('.slide-det-pacote').owlCarousel({
                    margin: 0,
                    loop: false,
                    center: true,
                    nav:false,
                    responsive: {
                        0: {
                            items: 3
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
                owl.trigger('refresh.owl.carousel');
            });
        });

        //jQuery('.slide-det-pacote').trigger('to.owl.carousel', 1); // funca o det pacote
        //jQuery('.slide-pacotes').trigger('to.owl.carousel', 1); // funca o det pacote
    </script>
