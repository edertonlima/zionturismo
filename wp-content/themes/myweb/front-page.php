<?php //get_header(); ?>
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
     
        <section class="slider_full_width">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/zionbanner1.jpg" alt="Slider Promoção Disney">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/zionbanner2.jpg" alt="..." >
                        
                    </div>
                </div>

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
                        <div class="row">
                            <h3>A Zion turismo oferece os melhores pacotes com preços acessíveis</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="row margin-services">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="icon-service fadeInBlock">
                                    <i class="fa fa-globe" aria-hidden="true"></i> <span>Destinos famosos</span>
                                </div>
                                <div class="description-service">
                                    <span>
                                        Dinsey, Orlando, Europa, Las Vegas, New York
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="icon-service fadeInBlock">
                                    <i class="fa fa-money" aria-hidden="true"></i> <span>O mais em conta</span>
                                </div>
                                <div class="description-service">
                                    <span>
                                        Diversas formas de pagamento e descontos incomparáveis
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="icon-service fadeInBlock">
                                    <i class="fa fa-user" aria-hidden="true"></i> <span>Atendimento</span>
                                </div>
                                <div class="description-service">
                                    <span>
                                        Na Zion você encontra diversos meios de comunicação - Skype, Chat, Email, Telefone, Whatsapp
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="icon-service fadeInBlock">
                                    <i class="fa fa-heart" aria-hidden="true"></i> <span>Compromisso</span>
                                </div>
                                <div class="description-service">
                                    <span>
                                        Somos apaixonados pelos nossos serviços, fazemo-os com todo amor
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="icon-service fadeInBlock">
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i> <span>O mais utilizado</span>
                                </div>
                                <div class="description-service">
                                    <span>
                                        Somos uma das agências mais utilizadas pelos turistas do Sudeste
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="icon-service fadeInBlock">
                                    <i class="fa fa-desktop" aria-hidden="true"></i> <span>Plataforma</span>
                                </div>
                                <div class="description-service">
                                    <span>
                                        Plataforma instrutiva e de fácil usuabilidade na hora da compra
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="box-precos fadeInBlock">
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
                    </div>
                </div>
            </div>
        </section>
        <section class="call_to_action" data-speed="20">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="block-text">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">    
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 text-center">
                            <div class="row">
                                <h2 class="fadeInBlock">Que tal viajar e ganhar descontos em suas compras?</h2>
                            </div>
                            <div class="row">
                                <h3 class="fadeInBlock">Na Zion turismo, você compra, ganha descontos, concorre a prêmios e a cada pacote adquirido, o próximo fica por 10% de desconto</h3>
                            </div>
                            <div class="row">
                                <button> Saiba mais</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="featured_pacotes">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">    
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 text-center">
                            <div class="row">
                                <h2>Pacotes em destaque</h2>
                            </div>
                            <div class="row">
                                <h3>Confira os pacotes mais comprados</h3>
                            </div>
                        </div>
                </div>
                <div class="row">
                     <div class="navegacao-carrousel">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <a id="menu-sp"><span>São Paulo</span></a>
                            </div>
                            <div class="item">
                            <a id="menu-orlando"><span>Orlando</span></a>
                            </div>
                            <div class="item">
                                <a id="#menu-santrope"><span>Santrope</span></a>
                            </div class="item">
                            <div class="item">
                                <a id="#menu-newyork"><span>Nova York</span></a>
                            </div>
                            <div class="item">
                                <a id="#menu-franca"><span>França</span></a>
                            </div>
                            <div class="item">
                                <a id="#menu-dubai"><span>Dubai</span></a>
                            </div>
                            <div class="item">
                                <a id="#menu-alemanha"><span>Alemanha</span></a>
                            </div>
                            <div class="item">
                                <a id="#menu-pais"><span>País 1212</span></a>
                            </div>
                             <div class="item">
                                <a id="#menu-pais2"><span>País 222</span></a>
                            </div>
                             <div class="item">
                                <a id="#menu-pais3"><span>País 666</span></a>
                            </div>
                             <div class="item">
                               <a id="#menu-pais4"><span>País 6999</span></a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="icon-drag"> 
                        <i class="animated infinite fadeInLeft fa fa-hand-o-up" aria-hidden="true"></i>
                    </div>
                    <!-- fim carousel -->
                    <div id="ibiza" class="pacotes default">
                        <div class="pacotes-destaques">
                            <div class="content-blog">
                                <div class="row">
                                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb_imagens.png" alt="Pacote Universal - Orlando">
                                </div>
                                <div class="row">
                                    <span class="title-pacotes">Ibiza</span>
                                </div>
                                <div class="row">
                                    <button>Veja mais</button>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div id="santrope" class="pacotes default">
                        <div class="pacotes-destaques">
                            <div class="content-blog">
                                <div class="row">
                                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb_imagens.png" alt="Pacote Universal - Orlando">
                                </div>
                                <div class="row">
                                    <span class="title-pacotes">Santrope</span>
                                </div>
                                <div class="row">
                                    <button>Veja mais</button>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div id="riodejaneiro" class="pacotes default">
                        <div class="pacotes-destaques">
                            <div class="content-blog">
                                <div class="row">
                                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb_imagens.png" alt="Pacote Universal - Orlando">
                                </div>
                                <div class="row">
                                    <span class="title-pacotes">Rio de Janeiro</span>
                                </div>
                                <div class="row">
                                    <button>Veja mais</button>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div id="saopaulo" class="pacotes">
                        <div class="pacotes-destaques">
                            <div class="content-blog">
                                <div class="row">
                                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb_imagens.png" alt="Pacote Universal - Orlando">
                                </div>
                                <div class="row">
                                    <span class="title-pacotes">São Paulo</span>
                                </div>
                                <div class="row">
                                    <button>Veja mais</button>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div id="orlando" class="pacotes">
                        <div class="pacotes-destaques">
                            <div class="content-blog">
                                <div class="row">
                                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb_imagens.png" alt="Pacote Universal - Orlando">
                                </div>
                                <div class="row">
                                    <span class="title-pacotes">Orlando</span>
                                </div>
                                <div class="row">
                                    <button>Veja mais</button>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div id="newyork" class="pacotes">
                        <div class="pacotes-destaques">
                            <div class="content-blog">
                                <div class="row">
                                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb_imagens.png" alt="Pacote Universal - Orlando">
                                </div>
                                <div class="row">
                                    <span class="title-pacotes">New York</span>
                                </div>
                                <div class="row">
                                    <button>Veja mais</button>
                                </div>
                            </div>  
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <section id="blog_new_posts">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">    
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 text-center">
                        <div class="row">
                            <h2>Blog</h2>
                        </div>
                        <div class="row">
                            <h3>Últimas notícias</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 posts-destaques fadeInBlock">
                        <div class="content-post">
                            <div class="row">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb_imagens.png" alt="Pacote Universal - Orlando">
                            </div>
                             <div class="row">
                                    <div class="info">
                                        <span class="dias"><i class="fa fa-calendar" aria-hidden="true"></i> 12 de Maio, 2017</span>
                                    </div>
                                </div>
                            <div class="row">
                                <span class="title-post">Primeiro Post do blog Zion</span>
                            </div>
                             <div class="row">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have words which don't look even slightly believable.</p>
                            </div>
                            <div class="row">
                                <div class="leia-mais">
                                     <span class="leia-mais">Leia mais</span>
                                </div>
                                <div class="ico-social">
                                    <a href="javascript:" title="Facebook" class="social"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                    <a href="javascript:" title="Instagram" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 posts-destaques fadeInBlock">
                        <div class="content-post">
                            <div class="row">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb_imagens.png" alt="Pacote Universal - Orlando">
                            </div>
                             <div class="row">
                                    <div class="info">
                                        <span class="dias"><i class="fa fa-calendar" aria-hidden="true"></i> 12 de Maio, 2017</span>
                                    </div>
                                </div>
                            <div class="row">
                                <span class="title-post">Segundo Post do blog Zion</span>
                            </div>
                             <div class="row">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have words which don't look even slightly believable.</p>
                            </div>
                            <div class="row">
                                <div class="leia-mais">
                                     <span class="leia-mais">Leia mais</span>
                                </div>
                                <div class="ico-social">
                                    <a href="javascript:" title="Facebook" class="social"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                    <a href="javascript:" title="Instagram" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 posts-destaques fadeInBlock">
                        <div class="content-post">
                            <div class="row">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb_imagens.png" alt="Pacote Universal - Orlando">
                            </div>
                             <div class="row">
                                    <div class="info">
                                        <span class="dias"><i class="fa fa-calendar" aria-hidden="true"></i> 12 de Maio, 2017</span>
                                    </div>
                                </div>
                            <div class="row">
                                <span class="title-post">Terceiro Post do blog Zion</span>
                            </div>
                             <div class="row">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have words which don't look even slightly believable.</p>
                            </div>
                            <div class="row">
                                <div class="leia-mais">
                                     <span class="leia-mais">Leia mais</span>
                                </div>
                                <div class="ico-social">
                                    <a href="javascript:" title="Facebook" class="social"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                    <a href="javascript:" title="Instagram" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="newsletter">
                <div class="col-xs-2 col-sm-2 col-md-4 col-lg-4">
                </div>
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="row">
                        <span class="text-newsletter">
                            Newsletter
                        </span>
                    </div>
                    <div class="row text-center">
                        <span class="minitext-newsletter">
                            cadastre seu email novidades
                        </span>
                    </div>
                    <div class="row">
                        <input type="text" placeholder="Digite seu email"><button class="btn btn-primary fz18 ttu" type="button" id="submitNewsletter">Enviar</button>
                    </div>
                </div>
            </div>
           <div class="rodape">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="row">
                            <span class="title-section-footer">
                               Sobre:
                            </span>
                        </div>
                        <div class="row">
                            <p>
                                Somos uma agência especializada em desenvolver sonhos.
                                Entendemos que nossos clientes procuram o melhor  e mais
                                barato, então resolvemos investir no que há de melhor
                                com custo benefício excelente.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="row">
                            <span class="title-section-footer">
                                Siga-nos:
                            </span>
                        </div>
                        <div class="row">
                            <div class="fb-page" data-href="https://www.facebook.com/zionturismo/?ref=br_rs" data-tabs="p&#xe1;gina" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/zionturismo/?ref=br_rs" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/zionturismo/?ref=br_rs">Zion Turismo</a></blockquote></div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="row">
                            <span class="title-section-footer">
                                Contatos
                            </span>
                        </div>
                        <div class="row">
                        <ul>
                            <li><i class="fa fa-envelope widget-contact-info__item__icon__email"></i>contato@zionTurismo.com.br</li>
                            <li><i class="fa fa-skype"></i>zionturismo.skype</li>
                            <li><i class="fa fa-phone"></i>(11)3445-999</li>
                            <li><i class="fa fa-mobile widget-contact-info__item__icon__mobile" style="font-size:25px;"></i>(11) 9999-999</li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div id="copyright">
                    <div class="container">
                        <span>Todos os direitos reservados</span>
                    </div>
                </div>
            </div>
        </section>
    </body>
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
</html>

<?php //get_footer(); ?>
