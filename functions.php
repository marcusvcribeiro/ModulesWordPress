<?php
/* ===================================== /
/  =Thumbnails /
/ ===================================== */
add_theme_support( 'post-thumbnails' );

add_image_size( 'project-large', 1100, 618, true );
add_image_size( 'project-medium', 650, 366, true );
add_image_size( 'project-small', 350, 175, true );
add_image_size( 'gallery', 265, 168, true );

/* ===================================== /
/  =Register Menus /
/ ===================================== */

/* This theme uses wp_nav_menu() in four locations. */
function register_my_menus() {
  register_nav_menus(
    array(
      'menu-principal' => __( 'Menu Principal' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/* ===================================== /
/  =Options Page /
/ ===================================== */

function my_acf_options_page_settings( $settings )
{
    $settings['title'] = 'Opções';
    $settings['pages'] = array('Geral');
 
    return $settings;
}
 
add_filter('acf/options_page/settings', 'my_acf_options_page_settings');


/* ===================================== /
/  =Change Login Logo /
/ ===================================== */

function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
            background-size: 105px 107px;
            padding-bottom: 0;
            width: 105px;
            height: 107px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/* ===================================== /
/  =Excerpt /
/ ===================================== */

function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = $excerpt.'...';
  return $excerpt;
}

/* ===================================== /
/  =Projetos /
/ ===================================== */

add_action( 'init', 'register_cpt_projetos' );

function register_cpt_projetos() {

  $labels = array(
    'name' => __( 'Projetos', 'projetos' ),
    'singular_name' => __( 'Projetos', 'projetos' ),
    'add_new' => __( 'Adicionar Novo', 'projetos' ),
    'add_new_item' => __( 'Adicionar Novo Projeto', 'projetos' ),
    'edit_item' => __( 'Editar Projeto', 'projetos' ),
    'new_item' => __( 'Nova Projeto', 'projetos' ),
    'view_item' => __( 'Ver Projeto', 'projetos' ),
    'search_items' => __( 'Procurar Projetos', 'projetos' ),
    'not_found' => __( 'Nenhum projeto encontrado', 'projetos' ),
    'not_found_in_trash' => __( 'Nenhum projeto encontrado na lixeira', 'projetos' ),
    'parent_item_colon' => __( 'Projeto:', 'projetos' ),
    'menu_name' => __( 'Projetos', 'projetos' ),
  );

  $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-portfolio',
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
  );

  register_post_type( 'projetos', $args );
}

/* ===================================== /
/  =Depoimentos /
/ ===================================== */

add_action( 'init', 'register_cpt_depoimentos' );

function register_cpt_depoimentos() {

  $labels = array(
    'name' => __( 'Depoimentos', 'depoimentos' ),
    'singular_name' => __( 'Depoimento', 'depoimentos' ),
    'add_new' => __( 'Adicionar Novo', 'depoimentos' ),
    'add_new_item' => __( 'Adicionar Novo Depoimento', 'depoimentos' ),
    'edit_item' => __( 'Editar Depoimento', 'depoimentos' ),
    'new_item' => __( 'Nova Depoimento', 'depoimentos' ),
    'view_item' => __( 'Ver Depoimento', 'depoimentos' ),
    'search_items' => __( 'Procurar Depoimentos', 'depoimentos' ),
    'not_found' => __( 'Nenhum depoimento encontrado', 'depoimentos' ),
    'not_found_in_trash' => __( 'Nenhum depoimento encontrado na lixeira', 'depoimentos' ),
    'parent_item_colon' => __( 'Depoimento:', 'depoimentos' ),
    'menu_name' => __( 'Depoimentos', 'depoimentos' ),
  );

  $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-format-quote',
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => true,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
  );

  register_post_type( 'depoimentos', $args );
}

?>