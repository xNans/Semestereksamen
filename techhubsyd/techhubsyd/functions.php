<?php
function load_styles() {
    wp_enqueue_style("theme", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"); 
    wp_enqueue_style("Fonts","'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap'");
    wp_enqueue_style("Fonts","'https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap'");
    /*Bootstrap skal linkes til, i stedet for indlæses fra server/PC,hastighedsoptimering*/ 

    /*Denne kommando gør, at de forskellige sider kun indlæser tilhørende stylesheets*/ 
    if(is_front_page(  )) {
        wp_enqueue_style("index.php", get_stylesheet_directory_uri() . "/style.css");
    }
}

function innocloud_register_menu_locations(){
    register_nav_menu("header-menu-location", "Header Menu Location");
}
add_action("after_setup_theme", "innocloud_register_menu_locations");