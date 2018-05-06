<?php
// Remove a barra de administração do wordpress na página inicial quando logado
function my_function_admin_bar() {
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// Habilita a utilização de imagem destaca nos posts
add_theme_support( 'post-thumbnails' );

// adiciona scrits e styles
function scripts_styles() {
    wp_enqueue_style('small', get_stylesheet_directory_uri().'/styles/small.css', array(), '1.1', 'all');
    wp_enqueue_style('medium', get_stylesheet_directory_uri().'/styles/medium.css', array(), '1.1', 'all');
    wp_enqueue_style('large', get_stylesheet_directory_uri().'/styles/large.css', array(), '1.1', 'all');
	wp_enqueue_script('moment', get_stylesheet_directory_uri().'/scripts/moment.js', array('jquery'), '1.1', true);
	wp_enqueue_script('script', get_stylesheet_directory_uri().'/scripts/scripts.js', array('jquery'), '1.1', true);
}
// Adicionando a ação a chama da função
add_action('wp_enqueue_scripts', 'scripts_styles');

// Registra os menus que serão usados no site
function menus() {
	// Os itens irão aparecer na administração do wordpress
	register_nav_menus( array(
		'pagina-inicial' => 'Página Inicial'
	));
}
add_action('init', 'menus');

// Mostra widget adicionados na sidebar
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
} ?>