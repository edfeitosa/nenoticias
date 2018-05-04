<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- charset padrão do wordpress -->
	<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" />
    <!-- título -->
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<!-- Início do body -->
<body <?php body_class(); ?>>