<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Affichée une fois par date différente
the_date();

// Affichée pour chaque article avec le format défini dans WordPress
the_time( get_option( 'date_format' ) );
	
// Affichée pour chaque article, avec un format de date et heure personnalisé (ici : 02 Avril 2019 à 17:23)
the_time( 'j F Y à H:i' );


function capitaine_register_assets() {
    
    // Déclarer jQuery
    wp_enqueue_script('jquery' );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'capitaine', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'capitaine',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'capitaine', 
        get_template_directory_uri() . './style.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'capitaine_register_assets' );
?>