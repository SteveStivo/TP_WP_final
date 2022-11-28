<?php
//Template name: Single
get_header();
?>

<main id="single">
<!-- boucle wordpress -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<article>
<?php the_field( 'nom_de_la_region' ); ?>
<!-- affiche le contenu -->
<?php the_content(); ?>
<!-- fin affiche le contenu -->



<span><?php the_author();?></span>
<span><?php the_field( 'nom_de_la_province_regions_de_latlantique' ); ?></span>
<span><?php the_time('j F, Y'); ?></span>
</article>
<?php endwhile; ?>
<?php endif; ?>
<!-- fin boucle wordpress -->
</main>
<!-- <?php get_template_part( 'footer-page', get_post_format() );  ?> -->
<?php get_footer() ?>


<?php
switch ($nomDeLaRegion) {
	case 'La région de l’Atlantique': ?>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_regions_de_latlantique' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_atlantique_capitale_de_Terre-Neuve-et-Labrador' ); ?></span><br>
			<img src="<?php echo esc_url( get_field( 'photo_de_la_région_regions_de_Atlantique' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_regions_de_Atlantique' )['alt'] ); ?>" /><br>
		<br>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_regions_de_latlantique_copier' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_atlantique_capitale_de_ile_du_prince_edouard' ); ?></span><br>
			<img src="<?php echo esc_url( get_field( 'photo_de_la_région_photo_de_la_région_regions_de_Atlantique_copier' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_photo_de_la_région_regions_de_Atlantique_copier' )['alt'] ); ?>" /><br>
		<br>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_regions_de_latlantique_copier2' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_atlantique_capitale_de_Nouvelle-Écosse' ); ?></span><br>
			<img src="<?php echo esc_url( get_field( 'photo_de_la_région_photo_de_la_région_regions_de_Atlantique_copier2' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_photo_de_la_région_regions_de_Atlantique_copier2' )['alt'] ); ?>" /><br>
		<br>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_regions_de_latlantique_copier3' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_atlantique_capitale_de_Nouveau-Brunswick' ); ?></span><br>
			<img src="<?php echo esc_url( get_field( 'photo_de_la_région_photo_de_la_région_regions_de_Atlantique_copier3' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_photo_de_la_région_regions_de_Atlantique_copier3' )['alt'] ); ?>" /><br>
		<br>
		<?php
		break;
	case 'La côte Ouest': ?>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_cote_ouest' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_cote_ouest_capitale_de_Colombie-Britannique' ); ?></span><br>
			<img src="<?php echo esc_url( get_field( 'photo_de_la_région_cote_ouest' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_cote_ouest' )['alt'] ); ?>" /><br>
		<br>;
		<?php
		break;	
	case 'Les territoires du Nord': ?>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_nord' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_nord_capitale_de_Nunavut' ); ?></span><br>
			<img src="<?php echo esc_url( get_field( 'photo_de_la_région_nord' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_nord' )['alt'] ); ?>" /><br>
		<br>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_nord_copier' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_nord_capitale_de_Territoires_du_Nord-Ouest' ); ?></span><br>
			<img src="<?php echo esc_url( get_field( 'photo_de_la_région_nord_copier' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_nord_copier' )['alt'] ); ?>" /><br>
		<br>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_nord_copier2' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_nord_capitale_de_yukon' ); ?></span><br>
			<img src="<?php echo esc_url( get_field( 'photo_de_la_région_nord_copier2' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_nord_copier2' )['alt'] ); ?>" /><br>
		<br>
		<?php
		break;
	case 'Le centre du Canada': ?>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_centre_du_canada' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_centre_du_canada _capitale_de_quebec' ); ?></span><br>
			<img src="<?php echo esc_url(get_field( 'photo_de_la_région_centre-du-canada' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_centre-du-canada' )['alt'] ); ?>" /><br>
		<br>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_centre_du_canada_copier' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_centre_du_canada _capitale_de_ontario' ); ?></span><br>
			<img src="<?php echo esc_url( get_field( 'photo_de_la_région_centre-du-canada_copier' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_centre-du-canada_copier' )['alt'] ); ?>" /><br>
		<br>
		<?php
		break;
	case 'Les provinces des Prairies': ?>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_provinces_des_prairies' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_provinces_des_prairies_capitale_de_manitoba' ); ?></span><br>
			<img src="<?php echo esc_url( get_field( 'photo_de_la_région_provinces_des_prairies' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_provinces_des_prairies' )['alt'] ); ?>" /><br>
		<br>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_provinces_des_prairies_copier' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_provinces_des_prairies_capitale_de_saskatchewan' ); ?></span><br>
			<img src="<?php echo esc_url( get_field( 'photo_de_la_région_provinces_des_prairies_copier' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_provinces_des_prairies_copier' )['alt'] ); ?>" /><br>
		<br>
		<span>Le nom de la province est : <?php the_field( 'nom_de_la_province_provinces_des_prairies_copier2' ); ?></span><br>
		<span>Le nom de la capitale est : <?php the_field( 'regions_de_provinces_des_prairies_capitale_de_alberta' ); ?></span><br>
			<img src="<?php echo esc_url( get_field( 'photo_de_la_région_provinces_des_prairies_copier2' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'photo_de_la_région_provinces_des_prairies_copier2' )['alt'] ); ?>" /><br>
		<br>
		<?php
		break;
	default:
		echo "La région sélectionnée n'est pas accessible";
		break;
}
?>