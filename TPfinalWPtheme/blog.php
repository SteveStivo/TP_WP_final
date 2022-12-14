<?php 
//Template name: Blog
get_header();
?>

<main id="blog">
    <div class="container">
        <h2><?php the_title()?></h2>
        <div id="content_img_accueil">
            <img class="img_accueil" alt="">
        </div>
        <section id="allarticles">
            <!-- affiche extraits d'article -->
            <?php
            $recentPosts = new WP_Query();
            $recentPosts->query('showposts=8');
            ?>
            <!-- fin affiche extraits d'article -->
            <!-- boucle wordpress pour afficher les extraits d'article -->
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                <!-- permet d'afficher un extrait d'article -->
                <?php the_excerpt(); ?>
                <!-- fin permet d'afficher un extrait d'article -->
            <?php endwhile; ?>
            <!-- fin boucle wordpress pour afficher les extraits d'article -->
        </section>
    </div>
</main>
<?php get_footer(); ?>