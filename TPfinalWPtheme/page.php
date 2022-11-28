<?php 
//Template name: Page
get_header();
?>
<body <?php body_class(); ?>>
<main id="page">
<div class="container">
<h2><?php the_title()?></h2>

<div class="hero">
    <img class="img_global_canada" alt="">
</div>

<?php the_content() ?>

<ul>
    <li class="li-img"><a href="http://localhost/WP/atlantique/">La région de l'Atlantique</a></li>
    <li class="li-img"><a href="http://localhost/WP/region-centre-du-canada/">La région centre du Canada</a></li>
    <li class="li-img"><a href="http://localhost/WP/region-nord/">La région Nord</a></li>
    <li class="li-img"><a href="http://localhost/WP/region-des-provinces-des-prairies/">Les provinces des prairies</a></li>
    <li class="li-img"><a href="http://localhost/WP/region-cote-ouest">La région côte Ouest</a></li>
</ul>

</div>
</main>

<?php get_footer(); ?>