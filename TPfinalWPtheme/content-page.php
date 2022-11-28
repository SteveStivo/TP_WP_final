<?php 
//Template name: Content-Page
get_header();
?>
<!-- affiche le titre du model Content-page dans une PAGE  -->
<h2><?php the_field( 'nom_de_la_region' ); ?></h2>
<!-- affiche une image HERO -->
<div class="hero">
    <img class="img_global_canada" alt="">
</div>
<br>

<?php 
// récupère le nom de la région à partir du modèle ACF
$nomDeLaRegion = get_field( 'nom_de_la_region' );

// fonction qui récupère le nom de la province, sa capitale et une photo à partir du modèle ACF et les affectes à des variables
function loop_canada($nomDeLaProvince, $capitale, $photoDeLaProvince) {
	for ($i=0; $i < count($nomDeLaProvince); $i++) { 
		?>
			<span>Le nom de la province est : <?php the_field( $nomDeLaProvince[$i] ); ?></span><br>
			<span>Le nom de la capitale est : <?php the_field( $capitale[$i] ); ?></span><br>
				<img src="<?php echo esc_url( get_field( $photoDeLaProvince[$i] )['url'] ); ?>" alt="<?php echo esc_attr( get_field( $photoDeLaProvince[$i] )['alt'] ); ?>" /><br>
			<br>
		<?php 
	}
}

// affecte les variables en fonction du nom de la région
switch ($nomDeLaRegion) {
	case 'La région de l’Atlantique': 
		$nomDeLaProvince = [
			'nom_de_la_province_regions_de_latlantique',
			'nom_de_la_province_regions_de_latlantique_copier',
			'nom_de_la_province_regions_de_latlantique_copier2',
			'nom_de_la_province_regions_de_latlantique_copier3'
		];
		$capitale = [
			'regions_de_atlantique_capitale_de_Terre-Neuve-et-Labrador',
			'regions_de_atlantique_capitale_de_ile_du_prince_edouard',
			'regions_de_atlantique_capitale_de_Nouvelle-Écosse',
			'regions_de_atlantique_capitale_de_Nouveau-Brunswick'
		];
		$photoDeLaProvince = [
			'photo_de_la_région_regions_de_Atlantique',
			'photo_de_la_région_photo_de_la_région_regions_de_Atlantique_copier',
			'photo_de_la_région_photo_de_la_région_regions_de_Atlantique_copier2',
			'photo_de_la_région_photo_de_la_région_regions_de_Atlantique_copier3'
		];
		break;
	case 'La côte Ouest': 
		$nomDeLaProvince = [
			'nom_de_la_province_cote_ouest',
		];
		$capitale = [
			'regions_de_cote_ouest_capitale_de_Colombie-Britannique',
		];
		$photoDeLaProvince = [
			'photo_de_la_région_cote_ouest',
		];
		break;
	case 'Les territoires du Nord': 
		$nomDeLaProvince = [
			'nom_de_la_province_nord',
			'nom_de_la_province_nord_copier',
			'nom_de_la_province_nord_copier2'
		];
		$capitale = [
			'regions_de_nord_capitale_de_Nunavut',
			'regions_de_nord_capitale_de_Territoires_du_Nord-Ouest',
			'regions_de_nord_capitale_de_yukon',
		];
		$photoDeLaProvince = [
			'photo_de_la_région_nord',
			'photo_de_la_région_nord_copier',
			'photo_de_la_région_nord_copier2'
		];
		break;
	case 'Le centre du Canada': 
		$nomDeLaProvince = [
			'nom_de_la_province_centre_du_canada',
			'nom_de_la_province_centre_du_canada_copier'
		];
		$capitale = [
			'regions_de_centre_du_canada _capitale_de_quebec',
			'regions_de_centre_du_canada _capitale_de_ontario'
		];
		$photoDeLaProvince = [
			'photo_de_la_région_centre-du-canada',
			'photo_de_la_région_centre-du-canada_copier'
		];
		break;
	case 'Les provinces des Prairies': 
		$nomDeLaProvince = [
			'nom_de_la_province_provinces_des_prairies',
			'nom_de_la_province_provinces_des_prairies_copier',
			'nom_de_la_province_provinces_des_prairies_copier2'
		];
		$capitale = [
			'regions_de_provinces_des_prairies_capitale_de_manitoba',
			'regions_de_provinces_des_prairies_capitale_de_saskatchewan',
			'regions_de_provinces_des_prairies_capitale_de_alberta',
		];
		$photoDeLaProvince = [
			'photo_de_la_région_provinces_des_prairies',
			'photo_de_la_région_provinces_des_prairies_copier',
			'photo_de_la_région_provinces_des_prairies_copier2'
		];
		break;	
	default:
		echo "La région sélectionnée n'est pas accessible";
		break;
}
loop_canada($nomDeLaProvince, $capitale, $photoDeLaProvince);
?>

<?php get_footer(); ?>
