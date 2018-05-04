<?php $header_menu_args = array(
	'theme_location'  => 'pagina-inicial',
	'menu'            => '',
	'container'       => 'nav',
	'container_class' => 'menu',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
); ?>

<div class="container">
    <!-- logo -->
    <div class="logo">
        <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-ne.jpg" alt="ne_noticias" title="NE Notícias" />
        </a>
    </div>
    <!-- menu -->
    <?php wp_nav_menu( $header_menu_args ); ?>
</div>