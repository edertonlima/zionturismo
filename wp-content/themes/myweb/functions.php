<?php
/**
 * @package WordPress
 * @subpackage My Web
 * @since My web Site 1.0
 **
 */

	/* HABILITAR / DESABILITAR */

	// Enable featured images
	add_theme_support( 'post-thumbnails' );

	// Unable the admin bar
	add_filter('show_admin_bar', '__return_false');

	/* MENUS */
	add_action( 'after_setup_theme', 'register_menu' );
	function register_menu() {
	  register_nav_menu( 'primary', __( 'Primary Menu', 'header' ) );
	}

	/* ADICIONA CLASSE */
	add_filter( 'body_class', function( $classes ) {
	    return array_merge( $classes, array( 'page' ) );
	} );

	// muda nome post
	/*function change_post_label() {
	    global $menu;
	    global $submenu;
	    $menu[5][0] = 'Releases';
	    $submenu['edit.php'][5][0] = 'Todos os Releases';
	    $submenu['edit.php'][10][0] = 'Adicionar Release';
	    $submenu['edit.php'][16][0] = 'Tags';
	    echo '';
	}*/
	function change_post_object() {
	    global $wp_post_types;
	    $labels = &$wp_post_types['post']->labels;
	    $labels->name = 'Blog';
	    $labels->singular_name = 'Release';
	    $labels->add_new = 'Adicionar Post';
	    $labels->add_new_item = 'Adicionar Post';
	    $labels->edit_item = 'Editar Post';
	    $labels->new_item = 'Blog';
	    $labels->view_item = 'Ver Post';
	    $labels->search_items = 'Buscar Post';
	    $labels->not_found = 'Nenhum Post encontrado';
	    $labels->not_found_in_trash = 'Nenhum Post encontrado no Lixo';
	    $labels->all_items = 'Todos Post';
	    $labels->menu_name = 'Blog';
	    $labels->name_admin_bar = 'Blog';
	}
	 
	//add_action( 'admin_menu', 'change_post_label' );
	add_action( 'init', 'change_post_object' );
	// muda nome post

	// remove itens padrões
	add_action( 'init', 'my_custom_init' );
	function my_custom_init() {
		remove_post_type_support( 'post', 'editor' ); // REMOVE EDITOR POST
		remove_post_type_support('page', 'editor'); // REMOVE EDITOR PAGE
		//remove_post_type_support( 'page', 'thumbnail' );
	}
	// remove page
	
	// REMOVE PARENT PAGE
	function remove_post_custom_fields() {
		remove_meta_box( 'pageparentdiv' , 'page' , 'side' ); 
	}
	add_action( 'admin_menu' , 'remove_post_custom_fields' );
	

	// Remove tags
	function myprefix_unregister_tags() {
	    unregister_taxonomy_for_object_type('post_tag', 'post');
	}
	add_action('init', 'myprefix_unregister_tags');
	// end Remove tags

	// serviços
	add_action('init', 'type_post_servicos');
	function type_post_servicos() {
		$labels = array(
			'name' => _x('Serviços', 'post type general name'),
			'singular_name' => _x('Serviços', 'post type singular name'),
			'add_new' => _x('Adicionar Novo', 'Novo item'),
			'add_new_item' => __('Novo Item'),
			'edit_item' => __('Editar Item'),
			'new_item' => __('Novo Item'),
			'view_item' => __('Ver Item'),
			'all_items' => __('Todas os Serviços'),
			'search_items' => __('Procurar Itens'),
			'not_found' => __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Serviços'
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_icon' => 'dashicons-admin-tools',
			'supports' => array('title')
		);

		register_post_type( 'servicos' , $args );
		flush_rewrite_rules();
	}


	// pacotes
	add_action( 'init', 'create_post_type_pacotes' );
	function create_post_type_pacotes() {

		$labels = array(
		    'name' => _x('Pacotes', 'post type general name'),
		    'singular_name' => _x('Pacote', 'post type singular name'),
		    'add_new' => _x('Adicionar Nova', 'Pacote'),
		    'add_new_item' => __('Add New Pacote'),
		    'edit_item' => __('Edit Pacote'),
		    'new_item' => __('New Pacote'),
		    'all_items' => __('Todos os Pacotes'),
		    'view_item' => __('View Pacote'),
		    'search_items' => __('Search Pacote'),
		    'not_found' =>  __('No Pacote found'),
		    'not_found_in_trash' => __('No Pacote found in Trash'),
		    'parent_item_colon' => '',
		    'menu_name' => 'Pacotes'
		);
		$args = array(
		    'labels' => $labels,
		    'public' => true,
		    'publicly_queryable' => true,
		    'show_ui' => true,
		    'show_in_menu' => true,
		    'rewrite' => true,
		    'capability_type' => 'post',
		    'has_archive' => true,
		    'hierarchical' => false,
		    'menu_position' => null,
		    'menu_icon' => 'dashicons-tag',
		    'supports' => array('title','thumbnail')
		  );

	    register_post_type( 'pacotes', $args );
	}

	add_action( 'init', 'create_taxonomy_categoria_pacotes' );
	function create_taxonomy_categoria_pacotes() {

		$labels = array(
		    'name' => _x( 'Categorias de Pacotes', 'taxonomy general name' ),
		    'singular_name' => _x( 'Categorias', 'taxonomy singular name' ),
		    'search_items' =>  __( 'Search Categorias' ),
		    'all_items' => __( 'All Categories' ),
		    'parent_item' => __( 'Parent Categorias' ),
		    'parent_item_colon' => __( 'Parent Categorias:' ),
		    'edit_item' => __( 'Edit Categorias' ),
		    'update_item' => __( 'Update Categorias' ),
		    'add_new_item' => __( 'Add New Categorias' ),
		    'new_item_name' => __( 'New Categorias Name' ),
		    'menu_name' => __( 'Categorias' ),
		);

	    register_taxonomy( 'categoria_pacotes', array( 'pacotes' ), array(
	        'hierarchical' => true,
	        'labels' => $labels,
	        'show_ui' => true,
	        'show_in_tag_cloud' => true,
	        'query_var' => true,
			'has_archive' => 'pacotes',
			'rewrite' => array(
			    'slug' => 'pacotes',
			    'with_front' => false,
				),
	        )
	    );
	}

/*
	// matriz e filiais
	add_action('init', 'type_post_matriz_filiais');
	function type_post_matriz_filiais() {
		$labels = array(
			'name' => _x('Matriz e Filiais', 'post type general name'),
			'singular_name' => _x('Matriz e Filiais', 'post type singular name'),
			'add_new' => _x('Adicionar Novo', 'Novo item'),
			'add_new_item' => __('Novo Item'),
			'edit_item' => __('Editar Item'),
			'new_item' => __('Novo Item'),
			'view_item' => __('Ver Item'),
			'search_items' => __('Procurar Itens'),
			'not_found' => __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Matriz e Filiais'
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_icon' => 'dashicons-admin-multisite',
			'supports' => array('title', 'thumbnail')
		);

		register_post_type( 'matriz_filiais' , $args );
		flush_rewrite_rules();
	}


	// lojas
	add_action('init', 'type_post_lojas');
	function type_post_lojas() {
		$labels = array(
			'name' => _x('Lojas', 'post type general name'),
			'singular_name' => _x('Lojas', 'post type singular name'),
			'add_new' => _x('Adicionar Novo', 'Novo item'),
			'add_new_item' => __('Novo Item'),
			'edit_item' => __('Editar Item'),
			'new_item' => __('Novo Item'),
			'view_item' => __('Ver Item'),
			'search_items' => __('Procurar Itens'),
			'not_found' => __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Lojas'
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_icon' => 'dashicons-store',
			'supports' => array('title')
		);

		register_post_type( 'lojas' , $args );
		flush_rewrite_rules();
	}
*/


$producao = false;
if($producao){
	add_action('admin_head', 'my_custom_fonts');

	function my_custom_fonts() {
	  echo '<style>
		#menu-media, #menu-comments, #menu-appearance, #menu-plugins, #menu-tools, #menu-settings, #toplevel_page_edit-post_type-acf, #toplevel_page_edit-post_type-acf-field-group, 
		#toplevel_page_zilla-likes, 
		#screen-options-link-wrap, 
		.acf-postbox h2 a, 
		#the-list #post-94, 
		#the-list #post-65, 
		.taxonomy-category .form-field.term-parent-wrap, 
		.wp-menu-separator, 
		#toplevel_page_pmxi-admin-home li:nth-child(1), #toplevel_page_pmxi-admin-home li:nth-child(3), #toplevel_page_pmxi-admin-home li:nth-child(4), #toplevel_page_pmxi-admin-home li:nth-child(5)  
		{
			display: none!important;
		}
	  </style>';

	  echo '
		<script type="text/javascript">
			jQuery.noConflict();

			jQuery("document").ready(function(){
				jQuery("#menu-media").html("");
				jQuery("#menu-comments").html("");
				jQuery("#menu-appearance").html("");
				jQuery("#menu-plugins").html("");
				jQuery("#menu-tools").html("");
				jQuery("#menu-settings").html("");
				jQuery("#toplevel_page_edit-post_type-acf").html("");
				jQuery("#toplevel_page_edit-post_type-acf-field-group").html("");
				jQuery("#toplevel_page_zilla-likes").html("");
				jQuery(".taxonomy-category .form-field.term-parent-wrap").html("");
				jQuery(".wp-menu-separator").html("");
				jQuery("#toplevel_page_pmxi-admin-home li:nth-child(1)").html("");
				jQuery("#toplevel_page_pmxi-admin-home li:nth-child(3)").html("");
				jQuery("#toplevel_page_pmxi-admin-home li:nth-child(4)").html("");
				jQuery("#toplevel_page_pmxi-admin-home li:nth-child(5)").html("");
			});
		</script>
	  ';
	}
}



function gera_url_encurtada($url){
    $url = urlencode($url);
    $xml =  simplexml_load_file("http://migre.me/api.xml?url=$url");
 
    if($xml->error != 0){
        return $xml->errormessage;
    }
    else{
        return $xml->migre;
    }
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Slide Home',
		'menu_title'	=> 'Slide Home',
		'menu_slug' 	=> 'slide-home',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' 		=> 'dashicons-admin-collapse'
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Anúncios',
		'menu_title'	=> 'Anúncios',
		'parent_slug'	=> 'downloads',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Catálogos',
		'menu_title'	=> 'Catálogos',
		'parent_slug'	=> 'downloads',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Formulários',
		'menu_title'	=> 'Formulários',
		'menu_slug' 	=> 'formularios',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' 		=> 'dashicons-admin-comments'
	));
	
	acf_add_options_page(array(
		'page_title' 	=> 'Configurações',
		'menu_title'	=> 'Configurações',
		'menu_slug' 	=> 'configuracoes-geral',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configurações Gerais',
		'menu_title'	=> 'Geral',
		'parent_slug'	=> 'configuracoes-geral',
	));
}


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function paginacao() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_next' => false,
            'type'  => 'array',
            'prev_next'   => TRUE,
			'prev_text'    => __('<i class="fa fa-1x fa-angle-left"></i>'),
			'next_text'    => __('<i class="fa fa-1x fa-angle-right"></i>'),
        ) );
        if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<ul class="paginacao">';
            foreach ( $pages as $page ) {
                    echo "<li>$page</li>";
            }
           echo '</ul>';
        }
}


	// CLIENTES
	/*
	add_action('init', 'type_post_clientes');
	function type_post_clientes() {
		$labels = array(
			'name' => _x('Clientes', 'post type general name'),
			'singular_name' => _x('Clientes', 'post type singular name'),
			'add_new' => _x('Adicionar Novo', 'Novo item'),
			'add_new_item' => __('Novo Item'),
			'edit_item' => __('Editar Item'),
			'new_item' => __('Novo Item'),
			'view_item' => __('Ver Item'),
			'search_items' => __('Procurar Itens'),
			'not_found' => __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Clientes'
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_icon' => 'dashicons-groups',
			'supports' => array('title', 'thumbnail')
		);

		register_post_type( 'clientes' , $args );
		flush_rewrite_rules();
	}
	*/


	// exportação
	/*
	add_action( 'init', 'create_post_type_exportacao' );
	function create_post_type_exportacao() {

		$labels = array(
		    'name' => _x('Exportação', 'post type general name'),
		    'singular_name' => _x('Exportação', 'post type singular name'),
		    'add_new' => _x('Adicionar Nova', 'Exportação'),
		    'add_new_item' => __('Add New Exportação'),
		    'edit_item' => __('Edit Exportação'),
		    'new_item' => __('New Exportação'),
		    'all_items' => __('Todas as Exportação'),
		    'view_item' => __('View Exportação'),
		    'search_items' => __('Search Exportação'),
		    'not_found' =>  __('No Exportação found'),
		    'not_found_in_trash' => __('No Exportação found in Trash'),
		    'parent_item_colon' => '',
		    'menu_name' => 'Exportação'
		);
		$args = array(
		    'labels' => $labels,
		    'public' => true,
		    'publicly_queryable' => true,
		    'show_ui' => true,
		    'show_in_menu' => true,
		    'rewrite' => true,
		    'capability_type' => 'post',
		    'has_archive' => true,
		    'hierarchical' => false,
		    'menu_position' => null,
		    'menu_icon' => 'dashicons-tag',
		    'supports' => array('title','editor','thumbnail')
		  );

	    register_post_type( 'exportacao', $args );
	}
	*/



	/* Insere campo do link do VIDEO *
	add_action( 'admin_menu', 'create_videoURL' );
	add_action( 'save_post', 'save_videoURL', 10, 2 );

	function create_videoURL() {
		add_meta_box( 'url-video', 'URL do Vídeo', 'videoURL', 'videos', 'normal', 'high' );
	}

	function videoURL( $object, $box ) { ?>
	    <p>
			<label for="url-video" style="margin-right: 10px;">URL do Vídeo: </label>
			<input name="url-video" id="url-video" style="width: 100%; max-width: 900px;" value="<?php echo wp_specialchars( get_post_meta( $object->ID, 'URL do Vídeo', true ), 1 ); ?>" />
		</p>
	<?php }

	function save_videoURL( $post_id, $post ) {
		$meta_value = get_post_meta( $post_id, 'URL do Vídeo', true );
		$new_meta_value = stripslashes( $_POST['url-video'] );

		if ( $new_meta_value && '' == $meta_value )
			add_post_meta( $post_id, 'URL do Vídeo', $new_meta_value, true );

		elseif ( $new_meta_value != $meta_value )
			update_post_meta( $post_id, 'URL do Vídeo', $new_meta_value );

		elseif ( '' == $new_meta_value && $meta_value )
			delete_post_meta( $post_id, 'URL do Vídeo', $meta_value );
	}

	*/




	/* ALBUNS DE FOTOS *
	add_action( 'init', 'create_post_type_fotos' );
	function create_post_type_fotos() {

		$labels = array(
		    'name' => _x('Álbum de Fotos', 'post type general name'),
		    'singular_name' => _x('Álbum de Fotos', 'post type singular name'),
		    'add_new' => _x('Adicionar Novo', 'Álbum de Fotos'),
		    'add_new_item' => __('Add New Álbum de Fotos'),
		    'edit_item' => __('Edit Álbum de Fotos'),
		    'new_item' => __('New Álbum de Fotos'),
		    'all_items' => __('Todos os Álbum'),
		    'view_item' => __('View Álbum de Fotos'),
		    'search_items' => __('Search Álbum de Fotos'),
		    'not_found' =>  __('No Álbum de Fotos found'),
		    'not_found_in_trash' => __('No Álbum de Fotos found in Trash'),
		    'parent_item_colon' => '',
		    'menu_name' => 'Álbum de Fotos'
		);
		$args = array(
		    'labels' => $labels,
		    'public' => true,
		    'publicly_queryable' => true,
		    'show_ui' => true,
		    'show_in_menu' => true,
		    'rewrite' => true,
		    'capability_type' => 'post',
		    'has_archive' => true,
		    'hierarchical' => false,
		    'menu_position' => null,
		    'menu_icon' => 'dashicons-format-gallery',
		    'supports' => array('title','editor','thumbnail','excerpt')
		  );

	    register_post_type( 'fotografias', $args );
	}

	add_action( 'init', 'create_taxonomy_categoria_fotos' );
	function create_taxonomy_categoria_fotos() {

		$labels = array(
		    'name' => _x( 'Categorias de Album', 'taxonomy general name' ),
		    'singular_name' => _x( 'Categorias', 'taxonomy singular name' ),
		    'search_items' =>  __( 'Search Categorias' ),
		    'all_items' => __( 'All Categories' ),
		    'parent_item' => __( 'Parent Categorias' ),
		    'parent_item_colon' => __( 'Parent Categorias:' ),
		    'edit_item' => __( 'Edit Categorias' ),
		    'update_item' => __( 'Update Categorias' ),
		    'add_new_item' => __( 'Add New Categorias' ),
		    'new_item_name' => __( 'New Categorias Name' ),
		    'menu_name' => __( 'Categorias' ),
		);

	    register_taxonomy( 'categoria_fotos', array( 'fotografias' ), array(
	        'hierarchical' => true,
	        'labels' => $labels,
	        'show_ui' => true,
	        'show_in_tag_cloud' => true,
	        'query_var' => true,
			'has_archive' => 'fotografias',
			'rewrite' => array(
			    'slug' => 'fotografias',
			    'with_front' => false,
				),
	        )
	    );
	}
*/




/*

	// Criar um novo tipo de post, ALBUM DE FOTOS
	add_action('init', 'type_post_albumFoto');
	function type_post_albumFoto() {
		$labels = array(
			'name' => _x('Album de Fotos', 'post type general name'),
			'singular_name' => _x('Album de Fotos', 'post type singular name'),
			'add_new' => _x('Adicionar Novo', 'Novo item'),
			'add_new_item' => __('Novo Item'),
			'edit_item' => __('Editar Item'),
			'new_item' => __('Novo Item'),
			'view_item' => __('Ver Item'),
			'search_items' => __('Procurar Itens'),
			'not_found' => __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Album de Fotos'
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_icon' => 'dashicons-format-gallery',
			'taxonomies' => array('category_albumFoto'),
			'supports' => array('title', 'excerpt', 'thumbnail'),
			'show_ui' => true,
			'show_in_menu' => true
		);

		register_post_type( 'albumFoto' , $args );
		flush_rewrite_rules();
	}
	
*/
	







	/*// Insere campo do link do VIDEO
	add_action( 'admin_menu', 'create_videoURL' );
	add_action( 'save_post', 'save_videoURL', 10, 2 );

	function create_videoURL() {
		add_meta_box( 'url-video', 'URL do Vídeo', 'videoURL', 'video', 'normal', 'high' );
	}

	function videoURL( $object, $box ) { ?>
	    <p>
			<label for="url-video" style="margin-right: 10px;">URL do Vídeo: </label>
			<input name="url-video" id="url-video" style="width: 100%; max-width: 900px;" value="<?php echo wp_specialchars( get_post_meta( $object->ID, 'URL do Vídeo', true ), 1 ); ?>" />
		</p>
	<?php }

	function save_videoURL( $post_id, $post ) {
		$meta_value = get_post_meta( $post_id, 'URL do Vídeo', true );
		$new_meta_value = stripslashes( $_POST['url-video'] );

		if ( $new_meta_value && '' == $meta_value )
			add_post_meta( $post_id, 'URL do Vídeo', $new_meta_value, true );

		elseif ( $new_meta_value != $meta_value )
			update_post_meta( $post_id, 'URL do Vídeo', $new_meta_value );

		elseif ( '' == $new_meta_value && $meta_value )
			delete_post_meta( $post_id, 'URL do Vídeo', $meta_value );
	}
*/



/*

  // Add Excerpt to pages
  add_post_type_support( 'page', 'excerpt' );
  // Remove GENERATED BY WORDPRESS
  remove_action('wp_head', 'wp_generator');
  // Windows Livr Writer
  remove_action('wp_head', 'wlwmanifest_link');
  // Remove the Shortcut link of header.
  remove_action( 'wp_head', 'wp_shortlink_wp_head' );
  remove_filter('term_description','wpautop');
  // Upgrade without FTP
  define('FS_METHOD','direct');
  // get the "contributor" role object
  // $obj_existing_role = get_role( 'contributor' );
  // add the "organize_gallery" capability
  // $obj_existing_role->add_cap( 'edit_published_posts' );
  // Insert featured image in Feeds.
  add_filter('the_content_feed', 'rss_post_thumbnail');
  function rss_post_thumbnail($content) {
    global $post;
    if( has_post_thumbnail($post->ID) )
      $content = '<p>' . get_the_post_thumbnail($post->ID, 'thumbnail') . '</p>' . $content;
    return $content;
  }
  /////
  // SCRIPT ENQUEUE
  /////
  function tableless_scripts() {
    wp_deregister_script('jquery');
    wp_deregister_style('noticons');
    wp_dequeue_script('devicepx');
    wp_dequeue_script('e-201408');
    wp_register_script('disqus', get_template_directory_uri().'/assets/js/vendor/disqus.js', array(), '1.0', true );
    wp_register_script('prettify', get_template_directory_uri().'/assets/js/vendor/prettify/src/prettify.js', array(), '1.0', true );
    wp_register_script('scripts', get_template_directory_uri().'/assets/js/scripts.min.js', array(), '1.0', true );
    if (is_single()) {
      wp_enqueue_script('prettify');
      wp_enqueue_script('disqus');
    }
    wp_enqueue_script('scripts');
  }
  add_action( 'wp_enqueue_scripts', 'tableless_scripts' );
  //////
  // CSS ENQUEUE
  //////
  function tableless_styles() {
    wp_dequeue_style('subscriptions');
    wp_deregister_style('subscriptions');
    // wp_register_style( 'home', get_template_directory_uri() . '/assets/css/home.css', '1.0' );
    wp_register_style( 'single', get_template_directory_uri() . '/assets/css/single.css', '1.0' );
    // wp_register_style( 'prettify', get_template_directory_uri() . '/assets/css/prettify.css', '1.0' );
    // wp_register_style( 'category', get_template_directory_uri() . '/assets/css/category.css', '1.0' );
    if (is_home()) {
      wp_enqueue_style( 'home' );
    }
    if (is_single() || is_page()) {
      // wp_enqueue_style( 'prettify' );
      wp_enqueue_style( 'single' );
    }
    if (is_category() || is_search() || is_author() || is_page(42486, 'ultimos-posts')) {
      wp_enqueue_style( 'category' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'tableless_styles' );
/////
// Widgets
/////
function tableless_widgets_init() {
  // Area 1, located at the top of the sidebar.
  register_sidebar( array(
    'name' => __( 'Sidebar do site', 'tableless' ),
    'id' => 'sidebar',
    'description' => __( 'Sidebar principal das páginas de posts e artigos', 'tableless' ),
    'before_widget' => '<div id="%1$s" class="tb-widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="tb-widget-title">',
    'after_title' => '</h3>',
  ) );
}
// Register sidebars by running tableless_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'tableless_widgets_init' );
///
/// Deregister JetPack garbage
///
// First, make sure Jetpack doesn't concatenate all its CSS
add_filter( 'jetpack_implode_frontend_css', '__return_false' );
// Then, remove each CSS file, one at a time
function jeherve_remove_all_jp_css() {
  wp_deregister_style( 'AtD_style' ); // After the Deadline
  wp_deregister_style( 'jetpack_likes' ); // Likes
  wp_deregister_style( 'jetpack_related-posts' ); //Related Posts
  wp_deregister_style( 'jetpack-carousel' ); // Carousel
  wp_deregister_style( 'grunion.css' ); // Grunion contact form
  wp_deregister_style( 'the-neverending-homepage' ); // Infinite Scroll
  wp_deregister_style( 'infinity-twentyten' ); // Infinite Scroll - Twentyten Theme
  wp_deregister_style( 'infinity-twentyeleven' ); // Infinite Scroll - Twentyeleven Theme
  wp_deregister_style( 'infinity-twentytwelve' ); // Infinite Scroll - Twentytwelve Theme
  wp_deregister_style( 'noticons' ); // Notes
  wp_deregister_style( 'post-by-email' ); // Post by Email
  wp_deregister_style( 'publicize' ); // Publicize
  wp_deregister_style( 'sharedaddy' ); // Sharedaddy
  wp_deregister_style( 'sharing' ); // Sharedaddy Sharing
  wp_deregister_style( 'stats_reports_css' ); // Stats
  wp_deregister_style( 'jetpack-widgets' ); // Widgets
  wp_deregister_style( 'jetpack-slideshow' ); // Slideshows
  wp_deregister_style( 'presentations' ); // Presentation shortcode
  wp_deregister_style( 'jetpack-subscriptions' ); // Subscriptions
  wp_deregister_style( 'tiled-gallery' ); // Tiled Galleries
  wp_deregister_style( 'widget-conditions' ); // Widget Visibility
  wp_deregister_style( 'jetpack_display_posts_widget' ); // Display Posts Widget
  wp_deregister_style( 'gravatar-profile-widget' ); // Gravatar Widget
  wp_deregister_style( 'widget-grid-and-list' ); // Top Posts widget
  wp_deregister_style( 'jetpack-top-posts-widget' ); // Top Posts widget
  wp_deregister_style( 'jetpack-widgets' ); // Widgets
}
add_action('wp_print_styles', 'jeherve_remove_all_jp_css' );

*/



?>