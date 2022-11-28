<?php
get_header();
//Template name: Contact
?>

<!-- page de contact -->
<h2><?php the_title()?></h2>

<!-- affiche une image hero -->
<div id="content_img_accueil">
    <img class="img_accueil" alt="">
</div>

<!-- affiche le contenu de la page contact d'apres le modèle contact à savoir le formulaire -->
<?php the_content(); ?>

<?php get_footer(); ?>