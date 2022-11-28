<?php
//Template name: Single
get_header();
?>

<main id="single">
<!-- boucle wordpress -->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article>
			<!-- affiche le contenu des articles du model Single dans un ARTICLE -->
			<?php the_content(); ?>
			<!-- affiche l'auteur et date d'un ARTICLE -->
			<span><?php the_author();?></span>
			<span><?php the_time('j F, Y'); ?></span>
		</article>
	<?php endwhile; ?>
<?php endif; ?>
<!-- fin boucle wordpress -->
</main>

<?php get_footer() ?>
