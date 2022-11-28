<!DOCTYPE html>
<head <?php language_attributes(); ?>>
<meta charset="<?php bloginfo('charset'); ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Radio+Canada&display=swap" rel="stylesheet">

    <title><?php the_title(); ?> </title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<?php
//Template name: Header
wp_nav_menu(array(
    'theme_location' => 'menu'
));
?>
</header>