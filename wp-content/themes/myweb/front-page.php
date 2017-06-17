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
                    $tax = 'categoria_pacotes';
                    $terms = get_terms( $tax, [
                      'hide_empty' => true,
                      'orderby' => 'name'
                    ]);
                    $num_slide = 0;
                    foreach( $terms as $term ) { ?>

                        <li class="item local-select" data-slide-number="<?php echo $num_slide; ?>" rel="<?php echo $term->term_id; ?>"><span><?php echo $term->name; ?></span></li>

                    <?php 
                        $num_slide = $num_slide+1; 
                    }
                ?>

            </ul>

            <div class="container">

<?php
    $args = array( 'post_type' => 'pacotes','hide_empty' => true, 'posts_per_page' => '-1');
    $pacotes = new WP_Query( $args );
    foreach( $terms as $term ) { ?>
        <div class="slide-det-pacote list-pacotes-local owl-carousel owl-theme" id="slide_<?php echo $term->term_id; ?>">

<?php while ( $pacotes->have_posts() ) : $pacotes->the_post(); 
    $tax_posts = get_the_terms( $post->ID, $tax );
    $item_on = false;
    foreach( $tax_posts as $tax_post ) {
        if(!$item_on){
            if($tax_post->term_id == $term->term_id){ ?>
                
        <div class="item item-det-pacotes">                        
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

                <?php $item_on = true;
            }
        }
    }
?>

<?php endwhile; ?>

        </div>
    <?php }
?>






                <div class="slide-det-pacote list-pacotes-local owl-carousel owl-theme" style="display: none;">

                    <?php 
                    $args = array( 'post_type' => 'pacotes','hide_empty' => true, 'posts_per_page' => '-1');
                    $pacotes = new WP_Query( $args );

                    while ( $pacotes->have_posts() ) : $pacotes->the_post();
                        $tax_posts = get_the_terms( $post->ID, $tax );
                        $class_item = '';
                        foreach( $tax_posts as $tax_post ) {
                            $class_item = $class_item.' pac_'.$tax_post->term_id;
                        }
                    ?>
                    
                        <div class="item item-det-pacotes <?php echo $class_item; ?>">                        
                            <div id="" class="pacotes default">
                                <div class="pacotes-destaques">
                                    <div class="content-blog">
                                        <div class="row">

                                            <?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );  ?>
                                            <?php if($imagem[0]){ ?>
                                                <img src="<?php echo $imagem[0]; ?>" alt="<?php //the_title(); ?>" class="img-responsive">
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

   
    <script src="https://use.fontawesome.com/a145708429.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

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
            center: false,
            nav:true,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })

        jQuery(document).ready(function(){
            var local_inicial = jQuery('.slide-pacotes .owl-item.active.center .local-select').attr('rel');
            local_inicial = '#slide_'+local_inicial;
            jQuery('.slide-det-pacote').hide();
            jQuery(local_inicial).show();

            jQuery('.local-select').click(function(){
                var pacotes = jQuery(this).attr('rel');
                var slide = jQuery(this).attr('data-slide-number');
                pacotes = '#slide_'+pacotes;

                setTimeout(function(){
                    jQuery('.slide-pacotes').trigger('to.owl.carousel', slide);
                    jQuery('.slide-det-pacote').hide();
                    jQuery(pacotes).show();
                }, 100);

                //jQuery('.slide-det-pacote').trigger('refresh.owl.carousel');
                /*
                var owl = jQuery('.slide-det-pacote').owlCarousel({
                    margin: 0,
                    loop: true,
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
                owl.trigger('refresh.owl.carousel');*/
            });
        });

        //jQuery('.slide-det-pacote').trigger('to.owl.carousel', 1); // funca o det pacote
        //jQuery('.slide-pacotes').trigger('to.owl.carousel', 1); // funca o det pacote
    </script>
